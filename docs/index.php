<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="Content-Security-Policy" content="default-src * 'self' 'unsafe-inline' 'unsafe-eval' data: gap: content:">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui, viewport-fit=cover">

  <meta name="theme-color" content="#ad00ff">
  <meta name="format-detection" content="telephone=no">
  <meta name="msapplication-tap-highlight" content="no">
  <title>CydiaSt0re</title>
  
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
  <link rel="apple-touch-icon" href="img/icon.png">
  <link rel="icon" href="img/icon.png">
  <link rel="manifest" href="/manifest.json">
  
  <link rel="stylesheet" href="framework7/css/framework7.bundle.min.css">
  <link rel="stylesheet" href="css/icons.css">
  <link rel="stylesheet" href="css/app.css">
</head>
<body>
  <div id="app"class="theme-dark">
    <!-- Left panel with cover effect-->
    <div class="panel panel-left panel-cover theme-dark panel-init">
      <div class="view">
        <div class="page">
          <div class="navbar">
            <div class="navbar-bg"></div>
            <div class="navbar-inner">
              <div class="title">Left Panel</div>
            </div>
          </div>
          <div class="page-content">
            <div class="block">Left panel content goes here</div>
          </div>
        </div>
      </div>
    </div>
    <!-- Right panel with reveal effect-->
    <div class="panel panel-right panel-reveal theme-dark">
      <div class="view">
        <div class="page">
          <div class="navbar">
            <div class="navbar-bg"></div>
            <div class="navbar-inner">
              <div class="title">Right Panel</div>
            </div>
          </div>
          <div class="page-content">
            <div class="block">Right panel content goes here</div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Views/Tabs container -->
    <div class="views tabs safe-areas">
      <!-- Tabbar for switching views-tabs -->
      <div class="toolbar toolbar-bottom tabbar-labels">
        <div class="toolbar-inner">
          <a href="#view-home" class="tab-link tab-link-active">
            <i class="icon f7-icons if-not-md">today</i>
            <i class="icon material-icons if-md">today</i>
            <span class="tabbar-label">Home</span>
          </a>
          <a href="#view-settings" class="tab-link">
            <i class="icon f7-icons if-not-md">gift_alt_fill</i>
            <i class="icon material-icons if-md">gift_alt_fill</i>
            <span class="tabbar-label">Apps</span>
          </a>
        </div>
      </div>

      <!-- Your main view/tab, should have "view-main" class. It also has "tab-active" class -->
      <div id="view-home" class="view view-main view-init tab tab-active">
        <div class="page" data-name="home">
          <!-- Top Navbar -->
          <div class="navbar navbar-large">
            <div class="navbar-bg"></div>
            <div class="navbar-inner">
              <div class="left">
                <a href="https://twitter.com/TCrims0n" class="link icon-only external">
                  <i style="color:#00acee;" class="icon f7-icons if-not-md">checkmark_seal_fill</i>
                  <i class="icon material-icons if-md">checkmark_seal_fill</i>
                </a>
              </div>
              <div class="title sliding">CydiaSt0re</div>
              <div class="right">
                <a href="" class="link icon-only external">
                  <i style="color:#C0392B;" class="icon f7-icons if-not-md">arrow_clockwise_circle_fill</i>
                  <i class="icon material-icons if-md">arrow_clockwise_circle_fill</i>
                </a>
              </div>
              <div class="title-large">
                <div class="title-large-text">CydiaSt0re</div>
              </div>
            </div>
          </div>

          <!-- Scrollable page content-->
          <div class="page-content">

          <div class="card card-expandable">
  <div class="card-content">
    <div style="height:300px;background:linear-gradient(to bottom right, #7F00FF, #E100FF);color:white;" style="height: 300px">
      <div class="card-header text-color-black display-block">
        <h1 style="color:white;font-size:30px;margin:0px;">CydiaSt0re</h1>
        <small style="color:white;margin:0px;" style="opacity: 0.7">New Signing Service</small>
      </div>
      <a href="#" class="link card-close card-opened-fade-in color-black" style="position: absolute; right: 15px; top: 15px">
        <i class="icon f7-icons color-white">xmark_circle_fill</i>
      </a>
    </div>
    <div class="card-content-padding">
      <p >CydiaSt0re is a new 3rd party iOS appstore that is in beta and will be one of the best.</p>
    </div>
  </div>
</div>

<div class="card card-expandable">
  <div class="card-content">
    <div style="height:300px;background:linear-gradient(to bottom right, #ee0979, #ff6a00);color:white;" style="height: 300px">
      <div class="card-header text-color-black display-block">
        <h1 style="color:white;font-size:30px;margin:0px;">Developers</h1>
        <small style="color:white;margin:0px;" style="opacity: 0.7">Follow Us</small>
      </div>
      <a href="#" class="link card-close card-opened-fade-in color-black" style="position: absolute; right: 15px; top: 15px">
        <i class="icon f7-icons color-white">xmark_circle_fill</i>
      </a>
    </div>
    <div class="card-content-padding">
    <div class="list media-list apps-list">
        <ul>
        <li>
              <div onclick="location='https:\/\/twitter.com/XBLOBLIVION'" class="item-content">
                <div class="item-media">
                  <img style="width:55px;height:55px;border-radius:30%;" src="img/grim.png" alt="Icon">
                </div>
                <div class="item-inner">
                  <div class="item-title-row">
                    <div class="item-title">GrimL0ck</div>
                  </div>
                  <div class="item-subtitle">Owner</div>
                </div>
              </div>
            </li>
            <li>
              <div onclick="location='https:\/\/twitter.com/DevCasp'" class="item-content">
                <div class="item-media">
                  <img style="width:55px;height:55px;border-radius:30%;" src="img/casp.png" alt="Icon">
                </div>
                <div class="item-inner">
                  <div class="item-title-row">
                    <div class="item-title">CaspD3V</div>
                  </div>
                  <div class="item-subtitle">Lead Developer</div>
                </div>
              </div>
            </li>
        </ul>
      </div>
    </div>
  </div>
</div>

        </div>
      </div>
</div>

      <!-- Catalog View -->
      <div id="view-catalog" class="view view-init tab" data-name="catalog" data-url="/catalog/">
        <!-- Catalog page will be loaded here dynamically from /catalog/ route -->
      </div>

      <!-- Settings View -->
      <div id="view-settings" class="view view-init tab" data-name="settings" data-url="/settings/">
        <!-- Settings page will be loaded here dynamically from /settings/ route -->
      </div>
    </div>


    <!-- Popup -->
    <div class="popup" id="my-popup">
      <div class="view">
        <div class="page">
          <div class="navbar">
            <div class="navbar-bg"></div>
            <div class="navbar-inner">
              <div class="title">Popup</div>
              <div class="right">
                <a href="#" class="link popup-close">Close</a>
              </div>
            </div>
          </div>
          <div class="page-content">
            <div class="block">
              <p>Popup content goes here.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Login Screen -->
    <div class="login-screen" id="my-login-screen">
      <div class="view">
        <div class="page">
          <div class="page-content login-screen-content">
            <div class="login-screen-title">Login</div>
            <div class="list">
              <ul>
                <li class="item-content item-input">
                  <div class="item-inner">
                    <div class="item-title item-label">Username</div>
                    <div class="item-input-wrap">
                      
                      <input type="text" name="username" placeholder="Your username">
                    </div>
                  </div>
                </li>
                <li class="item-content item-input">
                  <div class="item-inner">
                    <div class="item-title item-label">Password</div>
                    <div class="item-input-wrap">
                      
                      <input type="password" name="password" placeholder="Your password">
                    </div>
                  </div>
                </li>
              </ul>
            </div>
            <div class="list">
              <ul>
                <li>
                  
                  <a href="#" class="item-link list-button login-button">Sign In</a>
                </li>
              </ul>
              <div class="block-footer">Some text about login information.<br>Click "Sign In" to close Login Screen</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Framework7 library -->
  <script src="framework7/js/framework7.bundle.min.js"></script>
  
  <!-- App routes -->
  <script src="js/routes.js"></script>
  <!-- App scripts -->
  <script src="js/app.js"></script>
</body>
</html>