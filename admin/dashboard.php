<?php
session_start();
$email_address= $_SESSION['email'];
include('config/database.php');
if(empty($email_address))
{
  header("location:index.php");
}
// 
     
        $cat= !empty($_GET['cat'])?$_GET['cat']:'';
        $subcat = !empty($_GET['subcat'])?$_GET['subcat']:'';
        if($cat=='website-setting' && $subcat=='add-website-menu'){
          
          include('scripts/multilevel-script.php');
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login Dashboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--custom style-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">


</head>
<body onload="refresh()">

<style>
.content {
  margin: 10px;
  text-align: center;
  border: 4px solid #0d47a1;
  border-radius: 20px;
  padding: 0.1%;
  height:250px;
  width:450px;
  display: inline-block;
}
h1 {
  margin: 0;
  text-transform: uppercase;
  font-size: 2.5rem;
  color: #0d47a1;
}
.value {
  font-size: 5rem;
  font-weight: bold;
  color: #455a64;
}

.btn {
  text-transform: uppercase;
  background: transparent;
  color: #0d47a1;
  padding: 0.4rem 0.8rem;
  display: inline-block;
  transition: all 0.5s linear;
  font-size: 0.9rem;
  font-weight: bold;
  border: 2px solid #0d47a1;
  border-radius: 5px;
  margin: 0.3rem;
  cursor: pointer;
}
.btn:hover {
  background: #0d47a1;
  color: #a2c8ec;
}
.decrease:hover {
  color: #f40;
}
.increase:hover {
  color: #390;
}

</style>


<?php
include('partials/header.php');
 ?>
 <div id="confirmBox">
  <p>Are You Sure to Delete ?</p>
  <button value="1" >Yes</button><button value="0">No</button>
 </div>
<div id="alertBox">mhvmbvbm</div>
<div class="container-fluid">
  <div class="row">
      <div class="col-sm-2">

    



 <?php include('partials/sidebar.php'); ?>
      </div>
      <div class="col-sm-10">


      <div class="content">
  <h1>No.Of Candidates</h1>
  <span id="myspan" class="value">0</span>
  <div class="btn-wrap">
    <button class="btn reset" onClick="window.location.reload(true)" >Refresh</button>
  </div>
  </div>

  <div class="content">
  <h1>No.Of Tests</h1>
  <span id="myspan2" class="value">0</span>
  <div class="btn-wrap">
    <button class="btn reset" onClick="window.location.reload(true)">Refresh</button>
  </div>
  </div>




        <div id="dynamic-page">
          <!--dynamic page content-->
          <?php
    
  
        
        if(!empty($cat) && !empty($subcat)){
          
            
            $sub=explode('-', $subcat);
if($sub[0]=='add')
{
           $val=[];
          foreach ($sub as $key => $value) {
            if($value==$sub[0])
            {
             continue;
            }
            $val[]=$value;
            
         }
        
      include($cat."/".implode('-',$val).".php");   
 }else{
  include($cat."/".$subcat.".php");
 }
 
        }else{
            echo "<h1 class='text-success text-center'>Welcome To Admin Panel</h1>";
        }

         ?> 
          <!-- dynamic page content-->

        </div>

        



</div>


      </div>
      
  </div>



        









  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
<script type="text/javascript" src="scripts/ajax-script.js">
</script>

<script type="text/javascript">
function refresh()
{
  <?PHP
      $db=$conn1;
      $query="SELECT * FROM admin_profile";
      $res=mysqli_query($db,$query);
      $c = mysqli_num_rows($res);
      $query="SELECT * FROM test";
      $res=mysqli_query($db,$query);
      $c1 = mysqli_num_rows($res);
  ?>
  document.getElementById("myspan").innerHTML="<?php echo $c; ?>";
  document.getElementById("myspan2").innerHTML="<?php echo $c1; ?>";
}
</script>



<script type="text/javascript">
  var acontent = document.querySelectorAll('.accordion-content');
var atitle = document.querySelectorAll('.accordion-content .title');
for (i = 0; i < atitle.length; i++) {
        
    atitle[i].onclick=function(){
        
        var contentClass = this.parentNode.className;
        
        for (i = 0; i < acontent.length; i++) {
            acontent[i].className = 'accordion-content hide';
         }
        
        if (contentClass == 'accordion-content hide') {
            this.parentNode.className = 'accordion-content show';
        }
   }
}
</script>

<script>
// Add the following code if you want the name of the file appear on select
$(document).on("change", ".custom-file-input", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>
<script
    type="text/javascript"
    src='https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js'
    referrerpolicy="origin">
  </script>
  <script type="text/javascript">

  tinymce.init({
    selector: 'textarea',
    height: 300,
    plugins: [
      'advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker',
      'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
      'table emoticons template paste help'
    ],
    toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | ' +
      'bullist numlist outdent indent | link image | print preview media fullpage | ' +
      'forecolor backcolor emoticons | help',
    menu: {
      favs: {title: 'My Favorites', items: 'code visualaid | searchreplace | spellchecker | emoticons'}
    },
    menubar: 'favs file edit view insert format tools table help',
    content_css: 'css/content.css'
  });


  $(document).ready(function(){
    $('body').find('.tox-notifications-container').hide();
  })
  </script>
</body>
</html>