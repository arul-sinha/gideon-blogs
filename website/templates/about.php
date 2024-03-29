<!DOCTYPE html>
<html>
<head>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
      crossorigin="anonymous"
    ></script>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"
    />
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
    <div id="main_function_container">
      <h3 id="main_logo_cross_function"><i onclick="logo_click_exit()" class="bi bi-x-lg"></i></h3>
      <div id="main_function_btn_container1">
        <button id="main_function_btn" ><h2>Posts</h2></button>
        <button id="main_function_btn" ><h2>Videos</h2></button>
        <button id="main_function_btn" ><h2>Streams</h2></button>
        <button id="main_function_btn" ><h2>Photos</h2></button>
        <button id="main_function_btn" ><h2>Messages</h2></button>
        <button id="main_function_btn" ><h2>Shorts</h2></button>
      </div>
    </div>
    <section class="navigation">
        <div class="nav-container">
          <div class="brand">
            <a
            >
              <img id="logo_main" onmouseout="logo_rerotate()" onmouseover="logo_rotate()" src="../static/images/logo.png" alt="GIDEON" onclick="logo_click()" />
            </a>
          </div>
          <nav>
            <div class="nav-mobile">
              <a id="nav-toggle" href="#!">
                <span></span>
              </a>
            </div>
            <ul class="nav-list">
              <li>
                <a href="/">
                  <i class="bi bi-house-door"></i>&nbsp;Home</a>
              </li>
              <li>
                <a href="/about">
                  <i class="bi bi-file-earmark-text"></i>&nbsp;About</a
              >
              </li>
              <li>
                <a href="#!">
                  <i class="bi bi-menu-down"></i>&nbsp;Action</a>
                <ul class="nav-dropdown">
                  <li>
                    <a href="#!">New Post</a>
                  </li>
                  <li>
                    <a href="#!">New Stream</a>
                  </li>
                  <li>
                    <a href="#!">New Image</a>
                  </li>
                  <li>
                    <a href="#!">New Video</a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="/settings">
                  <i class="bi bi-gear"></i>&nbsp;Settings</a
              >
              </li>
              <li>
                <a href="/account">
                  <i class="bi bi-person"></i>&nbsp;You</a>
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