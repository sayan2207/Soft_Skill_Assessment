<?php
echo "<script>console.log('Debug Objects: " . $_SESSION['email'] . "' );</script>";
?>
<?php
if (!empty($_GET['id'])) {
    $testid= $_GET['id'];
}
 ?>
<script type="text/javascript">
    //<![CDATA[
    si_ST = new Date();
    //]]>
  </script>
  <meta http-equiv="content-type" content="text/html;charset=utf-8" />
  <head>
    <!--pc-->
    <title>Picture Puzzle</title>
    <meta content="text/html; charset=utf-8" http-equiv="content-type" />
    <meta
      name="viewport"
      content="width=device-width, minimum-scale=1.0, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"
    />
    <meta name="referrer" content="origin-when-cross-origin" />
    <link
      href="https://www.bing.com/sa/simg/favicon-trans-bg-blue-mg.ico"
      data-orighref=""
      rel="icon"
    />
    <script type="text/javascript">
      //<![CDATA[
      _G = {
        Region: "IN",
        Lang: "en-US",
        ST: typeof si_ST !== "undefined" ? si_ST : new Date(),
        Mkt: "en-US",
        RevIpCC: "in",
        RTL: false,
        Ver: "17",
        IG: "88F824FC6A0D4CAD8F4DDCD44C3D0C22",
        EventID: "643de021b1c94cbcad09721dfbb174a5",
        V: "web",
        P: "SERP",
        DA: "PUSE01",
        CID: "3354799516F86BC12B236B6217556AD7",
        SUIH: "eOf9HEzpW4owHelmkK_0_g",
        adc: "b_ad",
        EF: {
          bmasynctrigger: 1,
          newtabsloppyclick: 1,
          chevroncheckmousemove: 1,
        },
        gpUrl: "\/fd\/ls\/GLinkPing.aspx?",
      };
      _G.lsUrl = "/fd/ls/l?IG=" + _G.IG + "&CID=" + _G.CID;
      curUrl = "imagepuzzle.html\/\/www.bing.com\/spotlight\/imagepuzzle";
      function si_T(a) {
        if (document.images) {
          _G.GPImg = new Image();
          _G.GPImg.src = _G.gpUrl + "IG=" + _G.IG + "&CID=" + _G.CID + "&" + a;
        }
        return true;
      }
      _G.NTT = "600000";
      _G.CTT = "3000";
      var _w = window,
        _d = document,
        sb_ie = window.ActiveXObject !== undefined,
        sb_i6 = sb_ie && !_w.XMLHttpRequest,
        _ge = function (n) {
          return _d.getElementById(n);
        },
        _qs = function (n, t) {
          return (
            (t = typeof t == "undefined" ? _d : t),
            t.querySelector ? t.querySelector(n) : null
          );
        },
        sb_st = function (n, t) {
          return setTimeout(n, t);
        },
        sb_rst = sb_st,
        sb_ct = function (n) {
          clearTimeout(n);
        },
        sb_gt = function () {
          return new Date().getTime();
        },
        sj_gx = function () {
          return sb_i6
            ? new ActiveXObject("MSXML2.XMLHTTP")
            : new XMLHttpRequest();
        };
      _w.sj_ce = function (n, t, i) {
        var r = _d.createElement(n);
        return t && (r.id = t), i && (r.className = i), r;
      };
      _w.sj_cook = _w.sj_cook || {
        get: function (n, t) {
          var i = _d.cookie.match(new RegExp("\\b" + n + "=[^;]+")),
            r;
          return t && i
            ? ((r = i[0].match(new RegExp("\\b" + t + "=([^&]*)"))),
              r ? r[1] : null)
            : i
            ? i[0]
            : null;
        },
      };
      _w.sk_merge ||
        (_w.sk_merge = function (n) {
          _d.cookie = n;
        });
      var amd, define, require;
      (function (n) {
        function e(n, i, u) {
          t[n] || ((t[n] = { dependencies: i, callback: u }), r(n));
        }
        function r(n) {
          if (n) {
            if (n) return u(n);
          } else {
            if (!f) {
              for (var r in t) u(r);
              f = !0;
            }
            return i;
          }
        }
        function u(n) {
          var s, e;
          if (i[n]) return i[n];
          if (t.hasOwnProperty(n)) {
            var h = t[n],
              f = h.dependencies,
              l = h.callback,
              a = r,
              o = {},
              c = [a, o];
            if (f.length < 2) throw "invalid usage";
            else if (f.length > 2)
              for (s = f.slice(2, f.length), e = 0; e < s.length; e++)
                c.push(u(s[e]));
            return l.apply(this, c), (i[n] = o), o;
          }
        }
        var t = {},
          i = {},
          f = !1;
        n.define = e;
        n.require = r;
      })(amd || (amd = {}));
      define = amd.define;
      require = amd.require;
      function lb() {
        _w.si_sendCReq && sb_st(_w.si_sendCReq, 800);
        _w.lbc && _w.lbc();
      }
      define("shared", ["require", "exports"], function (n, t) {
        function s(n, t) {
          for (var r = n.length, i = 0; i < r; i++) t(n[i]);
        }
        function r(n) {
          for (var i = [], t = 1; t < arguments.length; t++)
            i[t - 1] = arguments[t];
          return function () {
            n.apply(null, i);
          };
        }
        function u(n) {
          i && event && (event.returnValue = !1);
          n && typeof n.preventDefault == "function" && n.preventDefault();
        }
        function f(n) {
          i && event && (event.cancelBubble = !0);
          n && typeof n.stopPropagation == "function" && n.stopPropagation();
        }
        function e(n, t, i) {
          for (var r = 0; n && n.offsetParent && n != (i || document.body); )
            (r += n["offset" + t]), (n = n.offsetParent);
          return r;
        }
        function o() {
          return new Date().getTime();
        }
        function h(n) {
          return i ? event : n;
        }
        function c(n) {
          return i ? (event ? event.srcElement : null) : n.target;
        }
        function l(n) {
          return i ? (event ? event.fromElement : null) : n.relatedTarget;
        }
        function a(n) {
          return i ? (event ? event.toElement : null) : n.relatedTarget;
        }
        function v(n, t, i) {
          while (n && n != (i || document.body)) {
            if (n == t) return !0;
            n = n.parentNode;
          }
          return !1;
        }
        function y(n) {
          window.location.href = n;
        }
        function p(n, t) {
          n &&
            ((n.style.filter = t >= 100 ? "" : "alpha(opacity=" + t + ")"),
            (n.style.opacity = t / 100));
        }
        t.__esModule = !0;
        t.getTime =
          t.getOffset =
          t.stopPropagation =
          t.preventDefault =
          t.wrap =
          t.forEach =
            void 0;
        var i = sb_ie;
        t.forEach = s;
        t.wrap = r;
        t.preventDefault = u;
        t.stopPropagation = f;
        t.getOffset = e;
        t.getTime = o;
        window.sj_b = document.body;
        window.sb_de = document.documentElement;
        window.sj_wf = r;
        window.sj_pd = u;
        window.sj_sp = f;
        window.sj_go = e;
        window.sj_ev = h;
        window.sj_et = c;
        window.sj_mi = l;
        window.sj_mo = a;
        window.sj_we = v;
        window.sb_gt = o;
        window.sj_so = p;
        window.sj_lc = y;
      });
      define("env", ["require", "exports", "shared"], function (n, t, i) {
        function v(n, t) {
          return t.length && typeof n == "function"
            ? function () {
                return n.apply(null, t);
              }
            : n;
        }
        function y(n, t) {
          var e = [].slice.apply(arguments).slice(2),
            u = v(n, e),
            i;
          return (
            (i =
              window.setImmediate &&
              !window.setImmediate.Override &&
              (!t || t <= 16)
                ? "i" + setImmediate(u)
                : o(u, t)),
            (f[r] = i),
            (r = (r + 1) % a),
            i
          );
        }
        function p(n, t) {
          var r = [].slice.apply(arguments).slice(2),
            i = l(v(n, r), t);
          return (e[u] = i), (u = (u + 1) % a), i;
        }
        function w() {
          h.forEach(f, s);
          h.forEach(e, window.clearInterval);
          r = u = e.length = f.length = 0;
        }
        function s(n) {
          n != null &&
            (typeof n == "string" && n.indexOf("i") === 0
              ? window.clearImmediate(parseInt(n.substr(1), 10))
              : c(n));
        }
        var h = i,
          f = [],
          e = [],
          o,
          c,
          l,
          a = 1024,
          r = 0,
          u = 0;
        o = window.setTimeout;
        t.setTimeout = y;
        l = window.setInterval;
        t.setInterval = p;
        t.clear = w;
        c = window.clearTimeout;
        t.clearTimeout = s;
        window.sb_rst = o;
        window.setTimeout = window.sb_st = y;
        window.setInterval = window.sb_si = p;
        window.clearTimeout = window.sb_ct = s;
      });
      define("event.custom", ["require", "exports", "shared", "env"], function (
        n,
        t,
        i,
        r
      ) {
        function f(n) {
          return u[n] || (u[n] = []);
        }
        function e(n, t) {
          n.d ? l.setTimeout(c.wrap(n, t), n.d) : n(t);
        }
        function v(n, t, i) {
          var r, f;
          for (r in u)
            (f = i
              ? t && r.indexOf(t) === 0
              : !(r.indexOf(a) === 0) &&
                !(t && r.indexOf(t) === 0) &&
                !(n != null && n[r] != null)),
              f && delete u[r];
        }
        function o(n) {
          for (var t = f(n), u = (t.e = arguments), i, r = 0; r < t.length; r++)
            if (t[r].alive)
              try {
                e(t[r].func, u);
              } catch (o) {
                i || (i = o);
              }
          if (i) throw i;
        }
        function s(n, t, i, r) {
          var u = f(n);
          t &&
            ((t.d = r), u.push({ func: t, alive: !0 }), i && u.e && e(t, u.e));
        }
        function h(n, t) {
          for (var i = 0, r = u[n]; r && i < r.length; i++)
            if (r[i].func == t && r[i].alive) {
              r[i].alive = !1;
              break;
            }
        }
        var c = i,
          l = r,
          u = {},
          a = "ajax.";
        t.reset = v;
        t.fire = o;
        t.bind = s;
        t.unbind = h;
        _w.sj_evt = { bind: s, unbind: h, fire: o };
      });
      define("event.native", ["require", "exports"], function (n, t) {
        function r(n, t, r, u) {
          var f = n === window || n === document || n === document.body;
          n &&
            (f && t == "load"
              ? i.bind("onP1", r, !0)
              : f && t == "unload"
              ? i.bind("unload", r, !0)
              : n.addEventListener
              ? n.addEventListener(t, r, u)
              : n.attachEvent
              ? n.attachEvent("on" + t, r)
              : (n["on" + t] = r));
        }
        function u(n, t, r, u) {
          var f = n === window || n === document || n === document.body;
          n &&
            (f && t == "load"
              ? i.unbind("onP1", r)
              : f && t == "unload"
              ? i.unbind("unload", r)
              : n.removeEventListener
              ? n.removeEventListener(t, r, u)
              : n.detachEvent
              ? n.detachEvent("on" + t, r)
              : (n["on" + t] = null));
        }
        t.__esModule = !0;
        t.unbind = t.bind = void 0;
        var i = n("event.custom");
        t.bind = r;
        t.unbind = u;
        window.sj_be = r;
        window.sj_ue = u;
      });
      define("dom", ["require", "exports"], function (n, t) {
        function f(n, t) {
          function s(n, t, r, f) {
            r && u.unbind(r, f, s);
            c.bind(
              "onP1",
              function () {
                if (!n.l) {
                  n.l = 1;
                  var r = i("script");
                  r.setAttribute("data-rms", "1");
                  r.src =
                    (t ? "/fd/sa/" + _G.Ver : "/sa/" + _G.AppVer) +
                    "/" +
                    n.n +
                    ".js";
                  _d.body.appendChild(r);
                }
              },
              !0,
              5
            );
          }
          for (
            var f = arguments, e, o, r = 2, l = { n: n };
            r < f.length;
            r += 2
          )
            (e = f[r]), (o = f[r + 1]), u.bind(e, o, h.wrap(s, l, t, e, o));
          r < 3 && s(l, t);
        }
        function e() {
          var n = _d.getElementById("ajaxStyles");
          return (
            n ||
              ((n = _d.createElement("div")),
              (n.id = "ajaxStyles"),
              _d.body.insertBefore(n, _d.body.firstChild)),
            n
          );
        }
        function l(n) {
          var t = i("script");
          t.type = "text/javascript";
          t.text = n;
          t.setAttribute("data-bing-script", "1");
          document.body.appendChild(t);
          r.setTimeout(function () {
            document.body.removeChild(t);
          }, 0);
        }
        function a(n) {
          var t = i("script");
          t.type = "text/javascript";
          t.src = n;
          t.setAttribute("crossorigin", "anonymous");
          t.onload = r.setTimeout(function () {
            document.body.removeChild(t);
          }, 0);
          document.body.appendChild(t);
        }
        function o(n) {
          var t = s("ajaxStyle");
          t ||
            ((t = i("style")),
            t.setAttribute("data-rms", "1"),
            (t.id = "ajaxStyle"),
            e().appendChild(t));
          t.textContent !== undefined
            ? (t.textContent += n)
            : (t.styleSheet.cssText += n);
        }
        function v(n, t) {
          for (
            var i = Element.prototype, r = i.matches || i.msMatchesSelector;
            n != null;

          ) {
            if (r.call(n, t)) return n;
            n = n.parentElement;
          }
          return null;
        }
        function s(n) {
          return _d.getElementById(n);
        }
        function i(n, t, i) {
          var r = _d.createElement(n);
          return t && (r.id = t), i && (r.className = i), r;
        }
        t.__esModule = !0;
        t.includeCss =
          t.includeScriptReference =
          t.includeScript =
          t.getCssHolder =
          t.loadJS =
            void 0;
        var r = n("env"),
          h = n("shared"),
          u = n("event.native"),
          c = n("event.custom");
        t.loadJS = f;
        t.getCssHolder = e;
        t.includeScript = l;
        t.includeScriptReference = a;
        t.includeCss = o;
        _w._ge = s;
        _w.sj_ce = i;
        _w.sj_jb = f;
        _w.sj_ic = o;
        _w.sj_fa = v;
      });
      define("cookies", ["require", "exports"], function (n, t) {
        function a() {
          var n = location.protocol === "imagepuzzle.html";
          return n ? ";secure" : "";
        }
        function v() {
          return (
            typeof _G != "undefined" &&
            _G.EF !== undefined &&
            _G.EF.cookss !== undefined &&
            _G.EF.cookss === 1
          );
        }
        function f() {
          var n = location.hostname.match(/([^.]+\.[^.]*)$/);
          return n ? ";domain=" + n[0] : "";
        }
        function e(n, t, i, r, u) {
          var s = f(),
            h = r && r > 0 ? r * 6e4 : 63072e6,
            c = new Date(new Date().getTime() + Math.min(h, 63072e6)),
            e = "",
            o;
          v() &&
            ((o = a()), (e = o + (u ? ";SameSite=" + u : ";SameSite=None")));
          document.cookie =
            n +
            s +
            (t ? ";expires=" + c.toGMTString() : "") +
            (i ? ";path=" + i : "") +
            e;
        }
        function o(n, t, r, u, f) {
          if (!i) {
            var o = n + "=" + t;
            e(o, r, u, f);
          }
        }
        function s() {
          return !i;
        }
        function r(n, t) {
          var r, u;
          return i
            ? null
            : ((r = document.cookie.match(new RegExp("\\b" + n + "=[^;]+"))),
              t && r)
            ? ((u = r[0].match(new RegExp("\\b" + t + "=([^&]*)"))),
              u ? u[1] : null)
            : r
            ? r[0]
            : null;
        }
        function h(n, t, u, f, o, s) {
          var l, h, c, a;
          i ||
            ((h = t + "=" + u),
            (c = r(n)),
            c
              ? ((a = r(n, t)),
                (l = a ? c.replace(t + "=" + a, h) : c + "&" + h))
              : (l = n + "=" + h),
            e(l, f, o, s));
        }
        function c(n, t) {
          if (!i) {
            var r = n + "=",
              e = f();
            document.cookie = r + e + ";expires=" + u + (t ? ";path=" + t : "");
          }
        }
        var i, u, l;
        t.__esModule = !0;
        t.clear =
          t.set =
          t.get =
          t.areCookiesAccessible =
          t.setNoCrumbs =
            void 0;
        i = !1;
        u = new Date(0).toGMTString();
        try {
          l = document.cookie;
        } catch (y) {
          i = !0;
        }
        t.setNoCrumbs = o;
        t.areCookiesAccessible = s;
        t.get = r;
        t.set = h;
        t.clear = c;
        window.sj_cook = {
          get: r,
          set: h,
          setNoCrumbs: o,
          clear: c,
          areCookiesAccessible: s,
        };
      });
      var sj_anim = function (n) {
        var s = 25,
          t = this,
          c,
          u,
          h,
          f,
          e,
          o,
          l,
          i,
          r;
        t.init = function (n, s, a, v, y) {
          if (((c = n), (e = s), (o = a), (l = v), (r = y), v == 0)) {
            f = h;
            r && r();
            return;
          }
          i || (i = e);
          u || t.start();
        };
        t.start = function () {
          h = sb_gt();
          f = (Math.abs(o - i) / l) * s;
          u = setInterval(t.next, s);
        };
        t.stop = function () {
          clearInterval(u);
          u = 0;
        };
        t.next = function () {
          var u = sb_gt() - h,
            s = u >= f;
          i = e + ((o - e) * u) / f;
          s && (t.stop(), (i = o));
          n(c, i);
          s && r && r();
        };
        t.getInterval = function () {
          return s;
        };
      };
      var sj_fader = function () {
        return new sj_anim(function (n, t) {
          sj_so(n, t);
        });
      };
      sj_fade = new (function () {
        function n(n, t, i, r, u, f, e) {
          var o = n.fader;
          if (o) {
            if (e == n.fIn) return;
          } else (o = sj_fader()), (n.fader = o);
          u && u();
          o.init(n, t, i, r, f);
          n.fIn = e;
        }
        this.up = function (t, i, r) {
          function u() {
            t.style.visibility = "visible";
          }
          n(t, 0, 100, i, u, r, 1);
        };
        this.down = function (t, i, r) {
          function u() {
            t.style.visibility = "hidden";
            r && r();
          }
          n(t, 100, 0, i, 0, u, 0);
        };
      })();
      //]]>
    </script>
    <style type="text/css">
      
      .puzzle {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        margin-left: 32px;
      }
      #seconds {
        font-size: 5em;
        color: rgb(0, 0, 0);
      }

      #minutes {
        font-size: 5em;
        color: rgb(0, 0, 0);
      }
      #colon {
        font-size: 5em;
        color: rgb(0, 0, 0);
      }
      #board {
        display: flex;
        flex-wrap: wrap;
        text-align: center;
        left: 460px;
        position: absolute;
      }
      #board div img.tile {
        border: 1px solid #666;
      }
      #tiles {
        display: flex;
        flex-wrap: wrap;
        gap: 12px;
        color: #fff;
        margin-bottom: 5px;
      }
      .controlPanel {
        background: rgba(40, 60, 255, 1);
        width: 374px;
        color: #f9f9f9;
        backdrop-filter: blur(25px);
        padding: 16px 16px;
        height: fit-content;
        position: absolute;
        left: 32px;
        bottom: 36px;
      }
      .panelHead {
        display: flex;
        cursor: pointer;
        height: 32px;
      }
      .panelTitle {
        color: #f9f9f9;
        font-weight: 600;
        width: 95%;
        font-style: normal;
        font-weight: 400;
        font-size: 24px;
        line-height: 28px;
        display: flex;
      }
      .panelTitleText {
        padding: 4px 4px;
        font-size: 24px;
      }
      .panelBody {
        margin-top: 16px;
      }
      .closePanel {
        opacity: 0.67;
      }
      .b_hide {
        display: none;
      }
      .successpopup {
        position: absolute;
        margin: 25%;
        color: #fff;
        backdrop-filter: blur(25px);
        height: 280px;
        width: 400px;
        border-radius: 10px;
        margin: 250px;
        background-color: #222;
        background-image: b-spotlightpuzzlesuccesslg;
      }
      .imgHover {
        cursor: pointer;
      }
      .congrats_head {
        display: flex;
        margin-top: 21px;
        margin-left: 23px;
      }
      .congrats_title {
        font-weight: 600;
        font-size: 16px;
      }
      .congrats_title_text {
        padding: 4px 2px;
        margin-left: 6px;
      }
      .congrats_close {
        margin-left: 229px;
        opacity: 0.5;
        cursor: pointer;
      }
      .congrats_text {
        font-weight: 400;
        font-size: 25px;
        text-align: center;
        margin-top: 12px;
        margin-bottom: 5px;
      }
      .congrats_subtitle {
        text-align: center;
        font-size: 14px;
        margin-bottom: 12px;
      }
      #moves_text {
        font-weight: 700;
        margin-right: 4px;
      }
      .previewimage {
        width: 374px;
        height: 374px;
      }
      .insTitle {
        font-size: 18px;
        font-weight: 600;
      }
      .insText {
        color: rgba(255, 255, 255, 0.7);
        margin-top: 12px;
        font-size: 16px;
      }
      .insText2 {
        color: rgba(255, 255, 255, 0.7);
        margin-top: 12px;
        padding-bottom: 12px;
        border-bottom: 1px solid #f5f5f5;
        margin-bottom: 12px;
        display: flex;
        flex-wrap: wrap;
        font-size: 13px;
      }
      .visualhint {
        font-size: 18px;
        font-weight: 600;
      }
      .insText2text {
        padding: 2px 2px;
      }
      .hintImg {
        margin-top: 16px;
      }
      .msLogo {
        display: flex;
        flex-wrap: wrap;
        gap: 4px;
        top: 42px;
        position: absolute;
        left: 32px;
        margin-top: -10px;
      }
      .skipPuzzle {
        display: flex;
        flex-wrap: wrap;
        gap: 4px;
        top: 32px;
        position: absolute;
        right: 28px;
        color: #0407c4;
        cursor: pointer;
        font-size: 24px;
      }
      .skipPuzzle a {
        color: #0407c4;
        text-decoration: none;
        display: flex;
        line-height: 24px;
        gap: 6px;
      }
      .learnMore {
        display: flex;
        flex-wrap: wrap;
        gap: 4px;
        color: #f9f9f9;
        cursor: pointer;
        box-sizing: border-box;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding: 5px 12px 7px;
        width: 120px;
        height: 32px;
        background: #005fb8;
        border-radius: 4px;
        flex: none;
        order: 2;
        flex-grow: 0;
        margin: 4px auto auto auto;
      }
      .learnMore a {
        color: #f9f9f9;
        text-decoration: none;
      }
      #keyboardIcon,
      #panelIcon {
        margin-right: 8px;
      }
      .imagedetails {
        margin-top: 150px;
        color: #f9f9f9;
        align-items: center;
        padding: 16px 24px;
        background: rgba(17, 17, 17, 0.7);
        backdrop-filter: blur(2px);
        border-radius: 6px;
      }
      .tileNumber {
        color: #f9f9f9;
        top: 8px;
        right: 8px;
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 12px 12px;
        gap: 8px;
        position: absolute;
        background: rgba(0, 0, 0, 0.7);
        border-radius: 50%;
        font-style: normal;
        font-size: 24px;
        line-height: 22px;
        min-width: 20px;
      }
      .parentTile {
        position: relative;
        user-select: none;
      }
      .panelHeadChevron {
        margin-top: 8px;
      }
      .clickhereicon {
        margin: auto;
        position: absolute;
        top: 30%;
        left: 20%;
      }
      #planearnicon {
        margin-right: 8px;
      }
      .attributionText {
        opacity: 0.6;
      }
    </style>
    <script type="text/javascript">
      //<![CDATA[
      (function () {
        function n(n) {
          n = sb_ie ? _w.event : n;
          (!n.altKey || n.ctrlKey || n.shiftKey) &&
            ((n.key && n.key === "Enter") || (n.keyCode && n.keyCode === 13)) &&
            _w.si_ct(sb_ie ? n.srcElement : n.target, !1, n, "enter");
        }
        sj_be(document, "keydown", n, !1);
      })();
      (function () {
        function n(n) {
          _w.si_ct(sb_ie ? _w.event.srcElement : n.target, !1, _w.event || n);
        }
        sj_be(document, "mousedown", n, !1);
      })();
      ClTrCo = {};
      var ctcc = 0,
        clc = _w.ClTrCo || {};
      _w.si_ct = function (n, t, i, r) {
        var u, o, e, s, f, a, h, c, l;
        if (clc.SharedClickSuppressed) return !0;
        u = "getAttribute";
        try {
          for (; n !== document.body; n = n.parentNode) {
            if (!n || n === document || n[u]("data-noct")) break;
            if (
              ((o =
                ((n.tagName === "A" || n[u]("data-clicks")) &&
                  (n[u]("h") || n[u]("data-h"))) ||
                n[u]("_ct")),
              o)
            ) {
              e = n[u]("_ctf");
              s = -1;
              i &&
                (i.type === "keydown"
                  ? (s = -2)
                  : i.button != null && (s = i.button));
              (e && _w[e]) || (e = "si_T");
              e === "si_T" &&
                ((f = n[u]("href")),
                _G !== undefined &&
                _G.EF !== undefined &&
                _G.EF.newtabredironclicktracking === 1 &&
                f.indexOf("/newtabredir") == 0
                  ? ((a = new RegExp("[?&]?url=([^&]*)(&|$)")),
                    (h = f.match(a)),
                    h &&
                      (f =
                        f.indexOf("&be=1") >= 0
                          ? encodeURIComponent(atob(decodeURIComponent(h[1])))
                          : h[1]))
                  : (f = encodeURIComponent(n[u]("href"))),
                clc.furl && !n[u]("data-private")
                  ? (o += "&url=" + f)
                  : clc.mfurl && (o += "&abc=" + f));
              r && (o += "&source=" + r);
              c = "";
              clc.mc && (c = "&c=" + ctcc++);
              l = "&" + o + c;
              _w.si_sbwu(l) || (_w[e] && _w[e](l, n, i, s));
              break;
            }
            if (t) break;
          }
        } catch (v) {
          _w.SharedLogHelper
            ? SharedLogHelper.LogWarning("clickEX", null, v)
            : (new Image().src =
                _G.lsUrl +
                '&Type=Event.ClientInst&DATA=[{"T":"CI.Warning","FID":"CI","Name":"JSWarning","Text":' +
                v.message +
                "}]");
        }
        return !0;
      };
      _w.si_sbwu ||
        (_w.si_sbwu = function () {
          return !1;
        }),
        (function () {
          _w._G && (_G.si_ct_e = "click");
        })();
      var perf;
      (function (n) {
        function f(n) {
          return i.hasOwnProperty(n) ? i[n] : n;
        }
        function e(n) {
          var t = "S";
          return n == 0 ? (t = "P") : n == 2 && (t = "M"), t;
        }
        function o(n) {
          for (var c, i = [], t = {}, r, l = 0; l < n.length; l++) {
            var a = n[l],
              o = a.v,
              s = a.t,
              h = a.k;
            s === 0 && ((h = f(h)), (o = o.toString(36)));
            s === 3
              ? i.push("".concat(h, ":").concat(o))
              : ((r = t[s] = t[s] || []), r.push("".concat(h, ":").concat(o)));
          }
          for (c in t)
            t.hasOwnProperty(c) &&
              ((r = t[c]),
              i.push("".concat(e(+c), ':"').concat(r.join(","), '"')));
          return i.push(u), i;
        }
        for (
          var r = [
              "redirectStart",
              "redirectEnd",
              "fetchStart",
              "domainLookupStart",
              "domainLookupEnd",
              "connectStart",
              "secureConnectionStart",
              "connectEnd",
              "requestStart",
              "responseStart",
              "responseEnd",
              "domLoading",
              "domInteractive",
              "domContentLoadedEventStart",
              "domContentLoadedEventEnd",
              "domComplete",
              "loadEventStart",
              "loadEventEnd",
              "unloadEventStart",
              "unloadEventEnd",
              "firstChunkEnd",
              "secondChunkStart",
              "htmlEnd",
              "pageEnd",
              "msFirstPaint",
            ],
            u = "v:1.1",
            i = {},
            t = 0;
          t < r.length;
          t++
        )
          i[r[t]] = t;
        n.compress = o;
      })(perf || (perf = {}));
      (window.perf = window.perf || {}),
        (function (n) {
          n.log = function (t, i) {
            var f = n.compress(t),
              r;
            f.push('T:"CI.Perf",FID:"CI",Name:"PerfV2"');
            var e = "/fd/ls/lsp.aspx?",
              o = "sendBeacon",
              h = "<E><T>Event.ClientInst<\/T><IG>"
                .concat(_G.IG, "<\/IG><TS>")
                .concat(i, "<\/TS><D><![CDATA[{")
                .concat(f.join(","), "}]\]><\/D><\/E>"),
              s = "<ClientInstRequest><Events>"
                .concat(h, "<\/Events><STS>")
                .concat(i, "<\/STS><\/ClientInstRequest>"),
              u = !_w.navigator || !navigator[o];
            if (!u)
              try {
                navigator[o](e, s);
              } catch (c) {
                u = !0;
              }
            u &&
              ((r = sj_gx()),
              r.open("POST.html", e, !0),
              r.setRequestHeader("Content-Type", "text/xml"),
              r.send(s));
          };
        })(window.perf);
      var perf;
      (function (n) {
        function a() {
          return c(Math.random() * 1e4);
        }
        function o() {
          return y ? c(f.now()) + l : +new Date();
        }
        function v(n, r, f) {
          t.length === 0 && i && sb_st(u, 1e3);
          t.push({ k: n, v: r, t: f });
        }
        function p(n) {
          return i || (r = n), !i;
        }
        function w(n, t) {
          t || (t = o());
          v(n, t, 0);
        }
        function b(n, t) {
          v(n, t, 1);
        }
        function u() {
          var u, f;
          if (t.length) {
            for (u = 0; u < t.length; u++) (f = t[u]), f.t === 0 && (f.v -= r);
            t.push({ k: "id", v: e, t: 3 });
            n.log(t, o());
            t = [];
            i = !0;
          }
        }
        function k() {
          r = o();
          e = a();
          i = !1;
          sj_evt.bind("onP1", u);
        }
        var s = "performance",
          h = !!_w[s],
          f = _w[s],
          y = h && !!f.now,
          c = Math.round,
          t = [],
          i = !1,
          l,
          r,
          e;
        h
          ? (l = r = f.timing.navigationStart)
          : (r = _w.si_ST ? _w.si_ST : +new Date());
        e = a();
        n.setStartTime = p;
        n.mark = w;
        n.record = b;
        n.flush = u;
        n.reset = k;
        sj_be(window, "load", u, !1);
        sj_be(window, "beforeunload", u, !1);
      })(perf || (perf = {}));
      _w.si_PP = function (n, t, i) {
        var r, o, l, h, e, c;
        if (!_G.PPS) {
          for (o = ["FC", "BC", "SE", "TC", "H", "BP", null]; (r = o.shift()); )
            o.push('"' + r + '":' + (_G[r + "T"] ? _G[r + "T"] - _G.ST : -1));
          var u = _w.perf,
            s = "navigation",
            r,
            f = i || (_w.performance && _w.performance.timing);
          if (f && u) {
            if (((l = f.navigationStart), u.setStartTime(l), l >= 0)) {
              for (r in f)
                (h = f[r]),
                  typeof h == "number" &&
                    h > 0 &&
                    r !== "navigationStart" &&
                    r !== s &&
                    u.mark(r, h);
              _G.FCT && u.mark("FN", _G.FCT);
              _G.BCT && u.mark("BN", _G.BCT);
            }
            u.record("nav", s in f ? f[s] : performance[s].type);
          }
          e = "connection";
          c = "";
          _w.navigator &&
            navigator[e] &&
            ((c = ',"net":"'.concat(navigator[e].type, '"')),
            navigator[e].downlinkMax &&
              (c += ',"dlMax":"'.concat(navigator[e].downlinkMax, '"')));
          _G.PPImg = new Image();
          _G.PPImg.src =
            _G.lsUrl +
            '&Type=Event.CPT&DATA={"pp":{"S":"' +
            (t || "L") +
            '",' +
            o.join(",") +
            ',"CT":' +
            (n - _G.ST) +
            ',"IL":' +
            _d.images.length +
            "}" +
            (_G.C1 ? "," + _G.C1 : "") +
            c +
            "}" +
            (_G.P ? "&P=" + _G.P : "") +
            (_G.DA ? "&DA=" + _G.DA : "") +
            (_G.MN ? "&MN=" + _G.MN : "");
          _G.PPS = 1;
          sb_st(function () {
            u && u.flush();
            sj_evt.fire("onPP");
            sj_evt.fire(_w.p1);
          }, 1);
        }
      };
      _w.onbeforeunload = function () {
        si_PP(new Date(), "A");
      };
      sj_evt.bind("ajax.requestSent", function () {
        window.perf && perf.reset();
      });
      //]]>
    </script>
  <div class="b_respl" onload="if(_w.lb)lb();">
    <script type="text/javascript">
      //<![CDATA[
      var logMetaError = function (n) {
          new Image().src =
            _G.lsUrl +
            '&Type=Event.ClientInst&DATA=[{"T":"CI.MetaError","FID":"CI","Name":"MetaJSError","Text":"' +
            escape(n) +
            '"}]';
        },
        getHref = function () {
          return location.href;
        },
        regexEscape;
      try {
        regexEscape = function (n) {
          return n.replace(/([.?*+^$&[\]\\(){}|<>-])/g, "\\$1");
        };
        function jsErrorHandler(n) {
          var s, r, y, p, u, f, w, e, h, c, o;
          try {
            if (
              ((s = "ERC"),
              (r = window[s]),
              (r = r ? r + 1 : 1),
              r === 16 && (n = new Error("max errors reached")),
              r > 16)
            )
              return;
            window[s] = r;
            var l = n.error || n,
              b = '"noMessage"',
              k = n.filename,
              d = n.lineno,
              g = n.colno,
              nt = n.extra,
              a = l.severity || "Error",
              tt = l.message || b,
              i = l.stack,
              t = '"' + escape(tt.replace(/"/g, "")) + '"',
              it = new RegExp(regexEscape(getHref()), "g");
            if (i) {
              for (
                y = /\(([^\)]+):[0-9]+:[0-9]+\)/g, u = {};
                (p = y.exec(i)) !== null;

              )
                (f = p[1]), u[f] ? u[f]++ : (u[f] = 1);
              e = 0;
              for (h in u)
                u[h] > 1 &&
                  ((c = regexEscape(h)),
                  (w = new RegExp(c, "g")),
                  (i = i.replace(w, e)),
                  (i += "#" + e + "=" + c),
                  e++);
              i = i.replace(it, "self").replace(/"/g, "");
              t += ',"Stack":"' + (escape(i) + '"');
            }
            if (
              (k && (t += ',"Meta":"' + escape(k.replace(it, "self")) + '"'),
              d && (t += ',"Line":"' + d + '"'),
              g && (t += ',"Char":"' + g + '"'),
              nt && (t += ',"ExtraInfo":"' + nt + '"'),
              tt === b)
            )
              if (
                ((a = "Warning"),
                (t += ',"ObjectToString":"' + n.toString() + '"'),
                JSON && JSON.stringify)
              )
                t += ',"JSON":"' + escape(JSON.stringify(n)) + '"';
              else
                for (o in n)
                  n.hasOwnProperty(o) && (t += ',"' + o + '":"' + n[o] + '"');
            var rt = new Date().getTime(),
              ut =
                '"T":"CI.' +
                a +
                '","FID":"CI","Name":"JS' +
                a +
                '","Text":' +
                t +
                "",
              ft =
                "<E><T>Event.ClientInst<\/T><IG>" +
                _G.IG +
                "<\/IG><TS>" +
                rt +
                "<\/TS><D><![CDATA[[{" +
                ut +
                "}]]\]><\/D><\/E>",
              et =
                "<ClientInstRequest><Events>" +
                ft +
                "<\/Events><STS>" +
                rt +
                "<\/STS><\/ClientInstRequest>",
              v = new XMLHttpRequest();
            v.open("POST.html", "/fd/ls/lsp.aspx?", !0);
            v.setRequestHeader("Content-Type", "text/xml");
            v.send(et);
            typeof sj_evt != "undefined" &&
              sj_evt.fire("ErrorInstrumentation", t);
          } catch (ot) {
            logMetaError("Failed to execute error handler. " + ot.message);
          }
        }
        window.addEventListener &&
          window.addEventListener("error", jsErrorHandler, !1);
        window.addEventListener ||
          window.onerror ||
          (window.onerror = function (n, t, i, r, u) {
            var f = "",
              e;
            typeof n == "object" && n.srcElement && n.srcElement.src
              ? (f =
                  "\"ScriptSrc = '" +
                  escape(n.srcElement.src.replace(/'/g, "")) +
                  "'\"")
              : ((n = "" + n),
                (f =
                  '"' +
                  escape(n.replace(/"/g, "")) +
                  '","Meta":"' +
                  escape(t) +
                  '","Line":' +
                  i +
                  ',"Char": ' +
                  r),
                u &&
                  u.stack &&
                  ((e = new RegExp(regexEscape(getHref()), "g")),
                  (f +=
                    ',"Stack":"' +
                    escape(
                      u.stack.replace(e, "self").replace(/"/g, "") + '"'
                    ))));
            new Image().src =
              _G.lsUrl +
              '&Type=Event.ClientInst&DATA=[{"T":"CI.GetError","FID":"CI","Name":"JSGetError","Text":' +
              f +
              "}]";
            typeof sj_evt != "undefined" &&
              sj_evt.fire("ErrorInstrumentation", f);
          });
      } catch (e) {
        logMetaError("Failed to bind error handler " + e.message);
      }
      var sj_b = _d.body;
      (function (n) {
        var i, r, t;
        if (document.querySelector) {
          i = [];
          r = "ad";
          function u() {
            var b = sb_gt(),
              a = document.documentElement,
              o = document.body,
              r = 0,
              n = -1,
              k = a.clientHeight,
              v = ["#b_results ." + _G.adc, ".sb_adsWv2", ".ads"],
              f,
              w,
              l,
              e,
              u;
            if (o) {
              var t = 0,
                s = document.querySelector("#b_pole .pa_carousel_mlo"),
                h = document.querySelector("#b_pole .pa_waterfall");
              s
                ? ((t = s.offsetHeight), (n = s.offsetTop))
                : h && ((t = h.offsetHeight), (n = h.offsetTop));
              var y = document.querySelector("#b_results #productAdCarousel"),
                c = document.querySelector("#b_results .pa_b_supertop"),
                p = document.querySelector("#b_results .bn_wide");
              for (
                c
                  ? ((n = c.offsetTop), (t = c.offsetHeight))
                  : p
                  ? (t += p.offsetHeight)
                  : y && (t += y.offsetHeight),
                  r = t,
                  f = 0;
                f < v.length;
                f++
              )
                for (
                  w = v[f], l = document.querySelectorAll(w), e = 0;
                  e < l.length;
                  e++
                )
                  (u = l[e]),
                    u &&
                      u.className.indexOf("b_adTop") !== -1 &&
                      ((r += u.offsetHeight), n === -1 && (n = u.offsetTop));
              r === 0 && (r = -1);
              i = [
                n,
                r,
                a.clientWidth,
                k,
                o.offsetWidth,
                o.offsetHeight,
                sb_gt() - b,
              ];
            }
          }
          n
            ? ((t = n.onbeforefire),
              (n.onbeforefire = function () {
                t && t();
                u();
                n.mark(r, i);
              }))
            : ((t = si_PP),
              (si_PP = function () {
                u();
                var n = '"' + r + '":[' + i.join() + "]";
                _G.C1 = _G.C1 ? _G.C1 + "," + n : n;
                t.apply(null, [].slice.apply(arguments));
              }));
        }
      })(_w.pp);
      _G.AppVer = "35707944";
      //]]>
    </script>
    <div class="puzzle">
      <div class="controlPanel">
        <div id="panelHead" class="panelHead" tabindex="0">
          <div class="panelTitle">
            <div>
              <img
                id="panelIcon"
                role="presentation"
                width="32"
                height="32"
                class="rms_img"
                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAABqElEQVR4Ae1W7U3DMBB10vRLiURGyAaUDWCCsgFiAroBZQJgg7JBmQCYgDIB2YAgJcp3wruKIJRevtq0f5onWefk2b5n+3y2EMcA13UN3/cvyYpDw7btCZx/oaQonwcVkXOeciKksgHSNNUdxzF6vZ5O36PRaEXW87wJ1554SZIsqpMTWZbfUdWZpuZgMDijtkqRcziZBUFw2+/3/waIougcRcLAL1wf4mHeqA7RNzSBguGNMAynsE8yx2KZ5lB3X6C+FuI4fi6hLfBroXJBgyuxI8bj8WuSJNcMZWH2F+BNVgCWnfbXEC0AThY5EWvnmqatsh8bMYCl0bHHoi2QCGwpBeYUzh//O2cF7APD4XAJs+S4jWNIkYtoPuUaK4ryQbaMz45hXbArQEetwEElTxOokycKBVDnsnNelQfq5okM7UXblugEdAJazwNVfOUx/B1g6zxQhy8V0OUBvGQa5fImwK34LaoE4AlmwuxDhJm/ilkBFKU4CXeifSy4n2wM4NZ6gJmjmGJ30IRmeBOwk5KqetPbHp1PqN40D9Ceq6pqNn0jdDgu/AAd9hQ51YbmRwAAAABJRU5ErkJggg=="
              />
            </div>
            <div class="panelTitleText">Puzzle it</div>
          </div>
          <div class="panelHeadChevron">
            <img
              id="down"
              role="presentation"
              tabindex="0"
              class="closePanel imgHover b_hide rms_img"
              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAJCAYAAAA7KqwyAAAAjUlEQVR4AZWQwQ2AIAxFreFMZBIdQUdwAt3MOIFu4Ai6CSZwJMFfoxeDKE1KSdP3ICVjzOS9H6WUc5YQ1toepcxxFEQ0odGlwHh0QNaZ1rrAL1ak/yNhmGeZYfZs/pUE4Tu+JFH4SxKDKSQRQiy4VlhuzzO8MNTNOdcopfao4Cm5WkH4VfCQ7IDbEMxxAAVZpUjnUfbOAAAAAElFTkSuQmCC"
            /><img
              id="up"
              role="presentation"
              tabindex="0"
              class="closePanel imgHover rms_img"
              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAJCAYAAAA7KqwyAAAAdUlEQVR4AZWO2wnAIAxFtTiAozhKN6idqKN0hIzgKIKP7zRCC36YagLhksA5iVJMIaLNOQN1iDFaJakGl1ICwfg2K9lGcK0VKJ3W2lOetHbGGJh+0l+mPL59SsnPPmHhJckM/pWswqxEAg8k0IZLAneSnQT3A4WGw7XInOymAAAAAElFTkSuQmCC"
            />
          </div>
        </div>
        <div class="panelBody" id="panel">
          <div class="insTitle">Instructions</div>
          <div class="insText">
            Click on the tiles around the empty tile to move them and complete
            the puzzle.
          </div>
          <div class="visualhint"><span>Visual hint</span></div>
          <div class="hintImg">
            <img
              class="previewimage"
              src="https://www.bing.com/th?id=ABT7AEFD9C8F373BA5FEC048883E5920F9C8BAE5734ED3B52DCC1D440106D7A1D43&amp;rs=2&amp;c=1&amp;h=900&amp;w=900"
            />
          </div>
        </div>
      </div>
      <div id="board">
        <div id="tiles">Loading image puzzle...</div>
        <div id="congrats" class="successpopup b_hide">
          <div class="congrats_head">
            <div class="congrats_title">
              <svg
                width="22"
                height="22"
                viewBox="0 0 22 22"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M17.3732 1.41898C17.8029 0.989409 18.4993 0.989409 18.9288 1.41898L20.582 3.07217C21.0117 3.50174 21.0117 4.19823 20.582 4.6278L18.9288 6.28098C18.4993 6.71056 17.8029 6.71056 17.3732 6.28098L15.72 4.6278C15.2905 4.19823 15.2905 3.50174 15.72 3.07217L17.3732 1.41898ZM6.05005 18.7H7.70005V14.3H3.30005V15.95C3.30005 17.4687 4.53127 18.7 6.05005 18.7ZM7.70005 8.79996V13.2H3.30005V8.79996H7.70005ZM13.2 13.2H8.80005V8.79996H13.2V13.2ZM8.80005 14.3H13.2V18.7H8.80005V14.3ZM14.3 8.79996V13.2H18.7V8.79996H14.3ZM14.3 14.3H18.7V15.95C18.7 17.4687 17.4688 18.7 15.95 18.7H14.3V14.3ZM3.30005 7.69996H7.70005V3.29996H6.05005C4.53127 3.29996 3.30005 4.53118 3.30005 6.04996V7.69996ZM8.80005 7.69996V3.29996H13.2V7.69996H8.80005Z"
                  fill="#F9F9F9"
                />
                <path
                  d="M31.5156 11.5391H28.4766V10.3125H31.5156C32.1042 10.3125 32.5807 10.2188 32.9453 10.0312C33.3099 9.84375 33.5755 9.58333 33.7422 9.25C33.9141 8.91667 34 8.53646 34 8.10938C34 7.71875 33.9141 7.35156 33.7422 7.00781C33.5755 6.66406 33.3099 6.38802 32.9453 6.17969C32.5807 5.96615 32.1042 5.85938 31.5156 5.85938H28.8281V16H27.3203V4.625H31.5156C32.375 4.625 33.1016 4.77344 33.6953 5.07031C34.2891 5.36719 34.7396 5.77865 35.0469 6.30469C35.3542 6.82552 35.5078 7.42188 35.5078 8.09375C35.5078 8.82292 35.3542 9.44531 35.0469 9.96094C34.7396 10.4766 34.2891 10.8698 33.6953 11.1406C33.1016 11.4062 32.375 11.5391 31.5156 11.5391ZM42.3672 14.0469V7.54688H43.8203V16H42.4375L42.3672 14.0469ZM42.6406 12.2656L43.2422 12.25C43.2422 12.8125 43.1823 13.3333 43.0625 13.8125C42.9479 14.2865 42.7604 14.6979 42.5 15.0469C42.2396 15.3958 41.8984 15.6693 41.4766 15.8672C41.0547 16.0599 40.5417 16.1562 39.9375 16.1562C39.526 16.1562 39.1484 16.0964 38.8047 15.9766C38.4661 15.8568 38.1745 15.6719 37.9297 15.4219C37.6849 15.1719 37.4948 14.8464 37.3594 14.4453C37.2292 14.0443 37.1641 13.5625 37.1641 13V7.54688H38.6094V13.0156C38.6094 13.3958 38.651 13.7109 38.7344 13.9609C38.8229 14.2057 38.9401 14.401 39.0859 14.5469C39.237 14.6875 39.4036 14.7865 39.5859 14.8438C39.7734 14.901 39.9661 14.9297 40.1641 14.9297C40.7786 14.9297 41.2656 14.8125 41.625 14.5781C41.9844 14.3385 42.2422 14.0182 42.3984 13.6172C42.5599 13.2109 42.6406 12.7604 42.6406 12.2656ZM52.3203 14.8125V16H46.1719V14.8125H52.3203ZM52.0938 8.57031L46.5 16H45.6172V14.9375L51.1719 7.54688H52.0938V8.57031ZM51.4531 7.54688V8.74219H45.6797V7.54688H51.4531ZM60.2578 14.8125V16H54.1094V14.8125H60.2578ZM60.0312 8.57031L54.4375 16H53.5547V14.9375L59.1094 7.54688H60.0312V8.57031ZM59.3906 7.54688V8.74219H53.6172V7.54688H59.3906ZM63.4688 4V16H62.0156V4H63.4688ZM69.2969 16.1562C68.7083 16.1562 68.1745 16.0573 67.6953 15.8594C67.2214 15.6562 66.8125 15.3724 66.4688 15.0078C66.1302 14.6432 65.8698 14.2109 65.6875 13.7109C65.5052 13.2109 65.4141 12.6641 65.4141 12.0703V11.7422C65.4141 11.0547 65.5156 10.4427 65.7188 9.90625C65.9219 9.36458 66.1979 8.90625 66.5469 8.53125C66.8958 8.15625 67.2917 7.8724 67.7344 7.67969C68.1771 7.48698 68.6354 7.39062 69.1094 7.39062C69.7135 7.39062 70.2344 7.49479 70.6719 7.70312C71.1146 7.91146 71.4766 8.20312 71.7578 8.57812C72.0391 8.94792 72.2474 9.38542 72.3828 9.89062C72.5182 10.3906 72.5859 10.9375 72.5859 11.5312V12.1797H66.2734V11H71.1406V10.8906C71.1198 10.5156 71.0417 10.151 70.9062 9.79688C70.776 9.44271 70.5677 9.15104 70.2812 8.92188C69.9948 8.69271 69.6042 8.57812 69.1094 8.57812C68.7812 8.57812 68.4792 8.64844 68.2031 8.78906C67.9271 8.92448 67.6901 9.1276 67.4922 9.39844C67.2943 9.66927 67.1406 10 67.0312 10.3906C66.9219 10.7812 66.8672 11.2318 66.8672 11.7422V12.0703C66.8672 12.4714 66.9219 12.849 67.0312 13.2031C67.1458 13.5521 67.3099 13.8594 67.5234 14.125C67.7422 14.3906 68.0052 14.599 68.3125 14.75C68.625 14.901 68.9792 14.9766 69.375 14.9766C69.8854 14.9766 70.3177 14.8724 70.6719 14.6641C71.026 14.4557 71.3359 14.1771 71.6016 13.8281L72.4766 14.5234C72.2943 14.7995 72.0625 15.0625 71.7812 15.3125C71.5 15.5625 71.1536 15.7656 70.7422 15.9219C70.3359 16.0781 69.8542 16.1562 69.2969 16.1562ZM79.8125 7.54688V16H78.3594V7.54688H79.8125ZM78.25 5.30469C78.25 5.07031 78.3203 4.8724 78.4609 4.71094C78.6068 4.54948 78.8203 4.46875 79.1016 4.46875C79.3776 4.46875 79.5885 4.54948 79.7344 4.71094C79.8854 4.8724 79.9609 5.07031 79.9609 5.30469C79.9609 5.52865 79.8854 5.72135 79.7344 5.88281C79.5885 6.03906 79.3776 6.11719 79.1016 6.11719C78.8203 6.11719 78.6068 6.03906 78.4609 5.88281C78.3203 5.72135 78.25 5.52865 78.25 5.30469ZM85.6719 7.54688V8.65625H81.1016V7.54688H85.6719ZM82.6484 5.49219H84.0938V13.9062C84.0938 14.1927 84.138 14.4089 84.2266 14.5547C84.3151 14.7005 84.4297 14.7969 84.5703 14.8438C84.7109 14.8906 84.862 14.9141 85.0234 14.9141C85.1432 14.9141 85.2682 14.9036 85.3984 14.8828C85.5339 14.8568 85.6354 14.8359 85.7031 14.8203L85.7109 16C85.5964 16.0365 85.4453 16.0703 85.2578 16.1016C85.0755 16.138 84.8542 16.1562 84.5938 16.1562C84.2396 16.1562 83.9141 16.0859 83.6172 15.9453C83.3203 15.8047 83.0833 15.5703 82.9062 15.2422C82.7344 14.9089 82.6484 14.4609 82.6484 13.8984V5.49219Z"
                  fill="#F9F9F9"
                />
              </svg>
            </div>
            <div class="congrats_title_text">Puzzle it</div>
          </div>
          <div>
            <img
              role="presentation"
              width="100"
              height="100"
              class="congrats_icon rms_img"
              src="data:image/png;base64,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"
            />
            <div class="congrats_text">Congratulations !</div>
            <div class="congrats_subtitle">
              you did it in <span id="moves_text"></span>steps
            </div>
            <div class="learnMore" id="learnMore">
              <a id="myAnchor" href="" h="ID=SERP,5053.1"><div>Next Step</div></a>
            </div>
          </div>
          <div id="imagedetails" class="imagedetails b_hide">
            <div class="attributionText">Thank you for taking this test</div>
            <div></div>
          </div>
        </div>
      </div>
    </div>
    <div class="msLogo">
      <div>
        <img role="presentation" class="rms_img" src="" /><label id="minutes"
          >00</label
        >
        <label id="colon">:</label>
        <label id="seconds">00</label>
        <script type="text/javascript">
          var minutesLabel = document.getElementById("minutes");
          var secondsLabel = document.getElementById("seconds");
          var totalSeconds = 0;
          setInterval(setTime, 1000);
          function setTime() {
            ++totalSeconds;
            secondsLabel.innerHTML = pad(totalSeconds % 60);
            minutesLabel.innerHTML = pad(parseInt(totalSeconds / 60));
          }

          function pad(val) {
            var valString = val + "";
            if (valString.length < 2) {
              return "0" + valString;
            } else {
              return valString;
            }
          }
        </script>
      </div>
    </div>
    <div class="skipPuzzle" id="skipPuzzle">
      <a id="myanchor2" href="dashboard.php?cat=student-details&subcat=tests&id=<?php echo $testid; ?>&view=<?php echo $_SESSION['email']; ?>" h="ID=SERP,5053.2"
        ><div>End Test</div>
        <div>
          <svg
            width="24"
            height="24"
            viewBox="0 0 24 24"
            fill="blue"
            xmlns="http://www.w3.org/2000/svg"
          >
            <g clip-path="url(#clip0_2874_157)">
              <path
                d="M16.062 4.9397L22.062 10.9397C22.3432 11.221 22.5012 11.6025 22.5012 12.0002C22.5012 12.3979 22.3432 12.7794 22.062 13.0607L16.062 19.0607C15.9252 19.2024 15.7618 19.3158 15.5812 19.3944C15.4006 19.473 15.2062 19.5152 15.0093 19.5187C14.8123 19.5222 14.6166 19.4869 14.4333 19.4147C14.25 19.3426 14.0827 19.235 13.941 19.0982C13.7993 18.9614 13.6859 18.798 13.6073 18.6174C13.5287 18.4368 13.4865 18.2424 13.483 18.0455C13.4795 17.8485 13.5148 17.6528 13.587 17.4695C13.6591 17.2862 13.7667 17.1189 13.9035 16.9772L13.941 16.9397L17.3805 13.5002H3C2.60218 13.5002 2.22064 13.3422 1.93934 13.0609C1.65804 12.7796 1.5 12.398 1.5 12.0002C1.5 11.6024 1.65804 11.2208 1.93934 10.9395C2.22064 10.6582 2.60218 10.5002 3 10.5002H17.379L13.941 7.0607C13.6548 6.78441 13.49 6.40573 13.483 6.00797C13.4759 5.6102 13.6272 5.22594 13.9035 4.9397C14.1798 4.65347 14.5585 4.48871 14.9562 4.48168C15.354 4.47465 15.7383 4.62591 16.0245 4.9022L16.062 4.9397Z"
                fill="#F9F9F9"
              />
            </g>
            <defs>
              <clipPath id="clip0_2874_157">
                <rect width="24" height="24" fill="blue" />
              </clipPath>
            </defs>
          </svg></div
      ></a>
    </div>
    <div id="clickHereIcon" class="b_hide">
      <div class="clickhereicon">
        <img
          role="presentation"
          class="rms_img"
          src="data:image/png;base64,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"
        />
      </div>
    </div>
    <div class="b_hide">
      <span id="instpuzzlestarted" class="b_hide" _ct="ID=SERP,5054.1"></span
      ><span
        id="instpuzzlecompleted"
        class="b_hide"
        _ct="ID=SERP,5055.1"
      ></span>
    </div>
    <script type="text/javascript">
      //<![CDATA[
      _G.FCT = new Date();
      //]]>
    </script>
    <script type="text/javascript">
      //<![CDATA[
      _G.BCT = new Date();
      //]]>
    </script>
    <script type="text/javascript">
      //<![CDATA[
      var customEvents = require("event.custom");
      customEvents.fire("onHTML");
      define("RMSBootstrap", ["require", "exports"], function (n, t) {
        function f() {
          i.push(r.call(arguments));
        }
        function e() {
          for (var n = 0; n < i.length; ++n)
            _w.rms.js.apply(null, r.call(i[n], 0));
        }
        var u, i, r;
        t.__esModule = !0;
        t.replay = void 0;
        u = n("event.custom");
        i = [];
        _w.rms = {};
        r = [].slice;
        _w.rms.js = f;
        t.replay = e;
        u.bind(
          "onPP",
          function () {
            for (var u, t, f, n, r = 0; r < i.length; r++)
              for (u = i[r], t = 0; t < u.length; t++)
                if (
                  ((f = u[t]["A:rms:answers:Shared:BingCore.RMSBundle"]), f)
                ) {
                  n = _d.createElement("script");
                  n.setAttribute("data-rms", "1");
                  n.setAttribute("crossorigin", "anonymous");
                  n.src = f;
                  n.type = "text/javascript";
                  setTimeout(function () {
                    _d.body.appendChild(n);
                  }, 0);
                  u.splice(t, 1);
                  break;
                }
          },
          !0
        );
      });
      //]]>
    </script>
    <script
      type="text/javascript"
      crossorigin="anonymous"
      src="../rp/Lye1pwhnOu-5lnAJEHkcOjTVt4Q.gz.js"
    ></script>
    <script type="text/javascript">
      //<![CDATA[
      (function (n, t) {
        onload = function () {
          _G.BPT = new Date();
          n && n();
          !_w.sb_ppCPL &&
            t &&
            sb_st(function () {
              t(new Date());
            }, 0);
        };
      })(_w.onload, _w.si_PP);
      var SpotlightPuzzleSettings;
      (function (n) {
        n.puzzleSettings = {
          puzzleUrl: "",
          spotlightPageUrl: "",
          rows: 0,
          columns: 0,
          boardSize: 0,
        };
      })(SpotlightPuzzleSettings || (SpotlightPuzzleSettings = {}));
      SpotlightPuzzleSettings.puzzleSettings.puzzleUrl =
        "https://www.bing.com/th?id=ABT7AEFD9C8F373BA5FEC048883E5920F9C8BAE5734ED3B52DCC1D440106D7A1D43\u0026rs=2\u0026c=1\u0026h=900\u0026w=900";
      SpotlightPuzzleSettings.puzzleSettings.spotlightPageUrl = "dashboard.php?cat=student-details&subcat=tests&view=<?php echo $_SESSION['email']; ?>";
      SpotlightPuzzleSettings.puzzleSettings.rows = 3;
      SpotlightPuzzleSettings.puzzleSettings.columns = 3;
      SpotlightPuzzleSettings.puzzleSettings.boardSize = 10;
      var puzzle;
      (function (n) {
        function nt(n) {
          var i, f, o, e, t, u;
          for (r = [], i = new Array(n), t = 0; t < n; t++) i[t] = t;
          for (i[n - 1] = -1, t = i.length - 1; t > 0; t--)
            (f = Math.floor(Math.random() * (t + 1))),
              (o = i[t]),
              (i[t] = i[f]),
              (i[f] = o);
          for (
            i.forEach(function (n) {
              r.push(n);
            }),
              e = 0,
              t = 0;
            t < r.length;
            t++
          )
            for (u = t + 1; u < r.length; u++)
              r[u] !== -1 && r[t] > r[u] && r[u] !== -1 && e++;
          return e;
        }
        function y(n) {
          if (_w.si_ct && typeof _w.si_ct == "function") {
            var t = _ge(n);
            t && _w.si_ct(t);
          }
        }
        function p() {
          for (var p, l, b, k, y, s, h, e, n, a, f, c; ; )
            if (((p = nt(i * t)), p % 2 == 0)) break;
          for (
            _d.getElementById("tiles").innerText = "",
              l = window.innerHeight - i * 12 - 64,
              u = l / t,
              b = u + "px",
              k = u + "px",
              _d.getElementById("board").style.height = i * u + i * 12 + "px",
              _d.getElementById("board").style.width = t * u + t * 12 + "px",
              y = 0,
              s = 0;
            s < t;
            s++
          )
            for (h = 0; h < i; h++)
              (e = r.shift()),
                (n = null),
                y++,
                (n = document.createElement("img")),
                e !== -1
                  ? ((n.id = "img" + e.toString()), (n.src = o[e]))
                  : ((n.id = "img" + (i * t - 1).toString()),
                    (n.src = o[i * t - 1])),
                (n.style.width = l / t + "px"),
                (n.style.height = l / t + "px"),
                (n.tabIndex = 0),
                (n.alt = "tile"),
                (n.className = "tile"),
                (a = _d.createElement("div")),
                (a.className = "tileNumber"),
                (a.innerText = (e + 1).toString()),
                (f = _d.createElement("div")),
                (f.style.width = b),
                (f.style.height = k),
                f.setAttribute("x", s.toString()),
                f.setAttribute("y", h.toString()),
                f.setAttribute("z", y.toString()),
                (f.id = s.toString() + h.toString()),
                (f.className = "tile"),
                (c = _d.createElement("div")),
                (c.className = "parentTile"),
                e !== -1
                  ? (c.appendChild(a), c.appendChild(n), f.appendChild(c))
                  : (v = n),
                sj_be(f, "click", w),
                _d.getElementById("tiles").append(f);
          tt();
        }
        function tt() {
          for (
            var s,
              h,
              f = _d.getElementById("tiles").querySelectorAll("div.tile"),
              n = -1,
              o = -1,
              e = _d.getElementById("clickHereIcon").firstChild,
              r = 0;
            r < f.length;
            r++
          )
            if (((s = f[r].firstElementChild), !s)) {
              n = parseInt(f[r].getAttribute("z"));
              o = n + 3 < i * t ? n + t : n - t;
              h = _d.querySelector('[z="'.concat(o.toString(), '"]'));
              h.firstChild.appendChild(e);
              break;
            }
          e.style.top = (u - 85) / 2 + "px";
          e.style.left = (u - 178) / 2 + "px";
        }
        function w() {
          var o, h, l, a;
          typeof Log != "undefined" &&
            typeof Log.Log != "undefined" &&
            Log.Log("Spotlight", "puzzle", "tileclicked", !0);
          c || y("instpuzzlestarted");
          var f = this,
            r = parseInt(f.getAttribute("x")),
            u = parseInt(f.getAttribute("y")),
            n = f.firstChild;
          if (n) {
            if (
              (_d.getElementsByClassName("clickhereicon").length > 0 &&
                !c &&
                ((c = !0),
                _d.getElementsByClassName("clickhereicon")[0].remove()),
              u > 0 &&
                ((o = document.getElementById(
                  r.toString() + (u - 1).toString()
                )),
                o.childElementCount == 0))
            ) {
              n.remove();
              o.appendChild(n);
              e += 1;
              s();
              return;
            }
            if (
              u + 1 < t &&
              ((h = document.getElementById(r.toString() + (u + 1).toString())),
              h.childElementCount == 0)
            ) {
              n.remove();
              h.appendChild(n);
              e += 1;
              s();
              return;
            }
            if (
              r > 0 &&
              ((l = document.getElementById((r - 1).toString() + u.toString())),
              l.childElementCount == 0)
            ) {
              n.remove();
              l.appendChild(n);
              e += 1;
              s();
              return;
            }
            if (
              r + 1 < i &&
              ((a = document.getElementById((r + 1).toString() + u.toString())),
              a.childElementCount == 0)
            ) {
              n.remove();
              a.appendChild(n);
              e += 1;
              s();
              return;
            }
          }
        }
        function it() {
          for (
            var r, n, h, u = f.width / t, e = f.height / i, c = 1, s = 0;
            s < i;
            ++s
          )
            for (r = 0; r < t; ++r)
              (n = document.createElement("canvas")),
                (n.width = u),
                (n.height = e),
                (h = n.getContext("2d")),
                h.drawImage(f, r * u, s * e, u, e, 0, 0, n.width, n.height),
                o.push(n.toDataURL()),
                c++;
          p();
        }
        function s() {
          for (
            var n,
              s,
              f,
              o = _d.getElementById("tiles").querySelectorAll("div.tile"),
              u = "b_hide",
              r = 0;
            r < o.length - 1;
            r++
          )
            if (
              ((n = o[r].firstElementChild), !n) ||
              ((n = n.querySelector("img.tile")), !n) ||
              n.id.toString() != "img" + r.toString()
            )
              return !1;
          return (
            rt(),
            (s = _d.getElementById((i - 1).toString() + (t - 1).toString())),
            s.appendChild(v),
            _d.getElementById("imagedetails").classList.remove(u),
            (_d.getElementById("moves_text").innerText = e.toString()),
            _d.getElementById("congrats").classList.remove(u),
            (f = _d.getElementById("skipPuzzle")),
            f && f.remove(),
            (a = setTimeout(b, 1000e3)),
            sj_be(_d.getElementById("closepopup"), "click", function () {
              _d.getElementById("congrats").classList.add(u);
              clearTimeout(a);
            }),
            (document.getElementById("myAnchor").href = "dashboard.php?cat=student-details&subcat=tests&id=<?php echo $testid; ?>&view=<?php echo $_SESSION['email']; ?>"+"&stat=1&testm="+e.toString()+"&testt="+document.getElementById("minutes").innerHTML+"&tests="+document.getElementById("seconds").innerHTML),
            y("instpuzzlecompleted"),
            typeof Log != "undefined" &&
              typeof Log.Log != "undefined" &&
              Log.Log("Spotlight", "puzzle", "completed", !0),
            !0
          );
        }
        function rt() {
          var n = _d.getElementById("tiles").querySelectorAll("img");
          n.forEach(function (n) {
            sj_ue(n, "click", w);
          });
        }
        function b() {
          document.getElementById("myanchor2").href = "dashboard.php?cat=student-details&subcat=tests&id=<?php echo $testid; ?>&view=<?php echo $_SESSION['email']; ?>"+"&stat=1&testt="+document.getElementById("minutes").innerHTML+"&tests="+document.getElementById("seconds").innerHTML;
          typeof Log != "undefined" &&
            typeof Log.Log != "undefined" &&
            (Log.Log("Spotlight", "puzzle", "skiptospotlight", !0),
            g
              ? Log.Log("Spotlight", "puzzle", "completedSkipped", !0)
              : Log.Log("Spotlight", "puzzle", "abandonedSkipped", !0));
          window.location.href =
            SpotlightPuzzleSettings.puzzleSettings.spotlightPageUrl;
        }
        function ut(n) {
          n.keyCode == 13 && k();
        }
        function k() {
          typeof Log != "undefined" &&
            typeof Log.Log != "undefined" &&
            Log.Log("Spotlight", "puzzle", "hintactivated", !0);
          var t = _d.getElementById("panel"),
            n = "b_hide",
            i = _d.getElementById("up"),
            r = _d.getElementById("down");
          t && h
            ? (t.classList.remove(n), r.classList.add(n), i.classList.remove(n))
            : (t.classList.add(n), r.classList.remove(n), i.classList.add(n));
          h = !h;
        }
        var i = SpotlightPuzzleSettings.puzzleSettings.rows,
          t = SpotlightPuzzleSettings.puzzleSettings.columns,
          ft = SpotlightPuzzleSettings.puzzleSettings.boardSize,
          e = 0,
          h = !1,
          a,
          v,
          g = !1,
          c = !1,
          u = 200,
          f = new Image(),
          o,
          r,
          l,
          d;
        f.crossOrigin = "anonymous";
        f.onload = it;
        f.src = SpotlightPuzzleSettings.puzzleSettings.puzzleUrl;
        o = [];
        r = [];
        n.OnLoadImg = p;
        l = _d.getElementById("panelHead");
        sj_be(l, "click", k);
        sj_be(l, "keyup", ut);
        d = _d.getElementById("skipPuzzle");
        sj_be(d, "click", b);
      })(puzzle || (puzzle = {}));
      if (
        typeof performance !== "undefined" &&
        _G.BCT &&
        performance.timing &&
        performance.timing.navigationStart
      ) {
        var SCArrivalTimeRelativeToNavStart =
          _G.BCT - performance.timing.navigationStart;
        typeof Log !== "undefined" &&
          Log &&
          Log.Log &&
          Log.Log("SCArrST", "SCArrST", SCArrivalTimeRelativeToNavStart);
      }
      _w.rms.js(
        {
          "A:rms:answers:Shared:BingCore.RMSBundle":
            "\/rp\/uG27Zq9l4OeSWPXxdoeIOnT5NIA.gz.js",
        },
        { "A:0": 0 },
        {
          "A:rms:answers:Clarity:Clarity":
            "\/rp\/0GCffyAv6tOkSw_dl6ZsJPZ2S5c.gz.js",
        }
      );
      //]]>
    </script>
    <div id="aRmsDefer">
      <script type="text/rms">
        //<![CDATA[
        _G.cfs="U6YT,XEWs,aw92,xChX,k2FC,Ap4v,Xz+q,uP6k,1iu8,s5PL,aB9x,7i3O,S1BG,BA88,lAy2,Ly0N,dhSz,TqtN,b8lE,tD++,MMlI,OV/d,DiD2,32An,LOrj,+fqI,5JFK,n0Np,wTLL,dfIJ,t0Sl,eOE3,gjTW,WH5o,6nWT,/qV8,H8vV,CojF,z2aP,D/kE,z7y5,19lh,+mBf,53vI,W5Nh,sE4O,wQHC,tDIT,4sol,rg35,aN9r,C2W7,U8xj,em7l,svFf,j/tu,XOUB,wJ92,EX+Q,3+w3,t4iI,koCb,Vr1u,ZVed,JwYZ,ZAVp,tEfn,aLPi,U+lI,YPcF,IJbN,CUZL,Ty4V,bm7y,3w6y,mrpq,/0T5,ZbO2,c6Lp,D/m7,J0Lo,0uCy,b5/0,9jzB,lFKr,rdeP,08Mr,b0tB,wJzp,3yTQ,hJfw,FwN3,hL/T,BGP/,JR+A,e5R+,yW7X,Khlr,eDur,HCjb,fygu,Y25o,AZ7U,SkQx,idjJ,Bx1d,LEDY,KMzG,2uYw,1iU8,drHl,vYKm,owW8,SQj2,wS6U,OVP/,seaa,4giz,+8QI,d4o3,hLwx,68PR,Usxk,ZHjD,HvF3,LdGE,cNu9,ExDx,Isd+,qbza,ywJ/,W0qF,cgZ+,M+9q"; _G.aad=false; _G.baw=false;;
        //]]>
      </script>
    </div>
    <script type="text/javascript">
      //<![CDATA[
      _G.HT = new Date();
      //]]>
    </script>
  </div>