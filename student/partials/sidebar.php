       <!-- A vertical navbar -->
<nav class="navbar bg-light sidebar" >
<ul class="accordion-container navbar-nav sidebar-list">
<li class="nav-item">
      <a class="nav-link content-link" href="dashboard.php"><i class='fas fa-home'></i> Dashboard</a>
 </li>


<li class="nav-item accordion-content hide">
<h3 class="title"><i class='fas fa-file-alt'></i> Exam Details</h3>
<ul class="description navbar-nav">
  <li class="nav-item">
    <a class="nav-link content-link" href="dashboard.php?cat=student-details&subcat=student-leaderboard">Student LeaderBoard</a>
      <a class="nav-link content-link" href="dashboard.php?cat=student-details&subcat=tests&view=<?php echo $_SESSION['email']; ?>">Tests</a>
    </li>
    
</ul>
</li>
<li class="nav-item accordion-content hide">
<h3 class="title"><i class='fas fa-user-cog'></i>My Profile</h3>
<ul class="description navbar-nav">
  <li class="nav-item">
      <a class="nav-link content-link" href="dashboard.php?cat=website-admin&subcat=admin-profile&view=<?php echo $_SESSION['email']; ?>">Profile</a>
    </li>
    <li class="nav-item">
      <a class="nav-link content-link" href="dashboard.php?cat=website-admin&subcat=change-password">Change Password</a>
    </li>
</ul>
</li>

</ul>


</nav>

