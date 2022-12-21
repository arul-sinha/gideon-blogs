<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../static/styles_main.css" />
    <script src="../static/script.js"></script>
    <link rel="stylesheet" href="../static/animations.css" />
    <link rel="stylesheet" href="../static/navbar/styles.css" />
    <link rel="stylesheet" href="../static/about/style.css">
    <link rel="stylesheet" href="../static/slideshow/style.css" />
    <link
      rel="shortcut icon"
      href="../static/images/logo.png"
      type="image/x-icon"
    />
    <link rel="stylesheet" href="../static/contextmenu/styles.css" />
    <script src="../static/contextmenu/script.js"></script>
    <script src="../static/navbar/script_nojq.js"></script>
    <script src="../static/jquery-3.6.1.min.js"></script>
    <script src="../static/about/script.js"></script>
    <script src="../static/navbar/script.js"></script>
    <title>Gideon Blogs</title>
  </head>
    <body>
    <body onload="start()">
    <section class="navigation">
      <div class="nav-container">
        <div class="brand">
          <a href="#!"
            ><img
              id="logo_main"
              onmouseout="logo_rerotate()"
              onmouseover="logo_rotate()"
              src="../static/images/logo.png"
              alt="GIDEON"
          /></a>
        </div>
        <nav>
          <div class="nav-mobile">
            <a id="nav-toggle" href="#!"><span></span></a>
          </div>
          <ul class="nav-list">
            <li>
              <a href="#!">Home</a>
            </li>
            <li>
              <a href="#!">About</a>
            </li>
            <li>
              <a href="#!">Services</a>
              <ul class="nav-dropdown">
                <li>
                  <a href="#!">Web Design</a>
                </li>
                <li>
                  <a href="#!">Web Development</a>
                </li>
                <li>
                  <a href="#!">Graphic Design</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="#!">Pricing</a>
            </li>
            <li>
              <a href="#!">Portfolio</a>
              <ul class="nav-dropdown">
                <li>
                  <a href="#!">Web Design</a>
                </li>
                <li>
                  <a href="#!">Web Development</a>
                </li>
                <li>
                  <a href="#!">Graphic Design</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="#!">Contact</a>
            </li>
          </ul>
        </nav>
      </div>
    </section>
    <div id="sidebar_container">
      <img
        id="arrow"
        src="../static/images/arrow.png"
        onclick="opensidebar()"
      />
      <img
        id="rearrow"
        src="../static/images/rearrow.png"
        onclick="closesidebar()"
      />

      <div id="sidebar">
        <a href="/login" id="sidebarlink">Login</a><br />
        <a href="/register" id="sidebarlink">Register</a><br />
        <a href="/about" id="sidebarlink">About</a><br />
      </div>
    </div>
    <h1 class="main_heading">
      <?php
      echo "About Us";
      ?>
    </h1>

    <div></div>

    <div id="contextMenu" class="context-menu" style="display: none">
      <ul>
        <li><a href="poems.html">Services</a></li>
        <li><a href="plays.html">View Profile</a></li>
        <li><a href="stories.html">Home</a></li>
        <li><a href="paintings.html">Help</a></li>
        <li><a href="song_parodies.html">Load More</a></li>
        <li><a href="All blogs.htm">Logout</a></li>
      </ul>
    </div><br><br><br><br><br><br>
    <div class="scene">
      <div class="cube">
        <div class="face top"><img src="../static/images/logo.png" /></div>
        <div class="face bottom"><img src="../static/images/logo.png" /></div>
        <div class="face left"><img src="../static/images/logo.png" /></div>
        <div class="face right"><img src="../static/images/logo.png" /></div>
        <div class="face front"><img src="../static/images/logo.png" /></div>
        <div class="face back"><img src="../static/images/logo.png" /></div>
      </div>
    </div>
    <div id="about_container">
      <h2 id="about_text">test</h2>
      <section>
        <div class="container reveal">
          <h2>Caption</h2>
          <div class="text-container">
            <div class="text-box">
              <h3>Section Text</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore
                eius molestiae perferendis eos provident vitae iste.
              </p>
            </div>
            <div class="text-box">
              <h3>Section Text</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore
                eius molestiae perferendis eos provident vitae iste.
              </p>
            </div>
            <div class="text-box">
              <h3>Section Text</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore
                eius molestiae perferendis eos provident vitae iste.
              </p>
            </div>
          </div>
        </div>
      </section>
      <section>
        <div class="container reveal">
          <h2>Caption</h2>
          <div class="text-container">
            <div class="text-box">
              <h3>Section Text</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore
                eius molestiae perferendis eos provident vitae iste.
              </p>
            </div>
            <div class="text-box">
              <h3>Section Text</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore
                eius molestiae perferendis eos provident vitae iste.
              </p>
            </div>
            <div class="text-box">
              <h3>Section Text</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore
                eius molestiae perferendis eos provident vitae iste.
              </p>
            </div>
          </div>
        </div>
      </section>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    </body>
</html>