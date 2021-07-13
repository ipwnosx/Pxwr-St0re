<div class="page" data-name="settings">
<div class="navbar">
            <div class="navbar-bg"></div>
            <div class="navbar-inner">
            <div class="left">
                <a href="https://twitter.com/TCrims0n" class="link icon-only external">
                  <i style="color:#00acee;" class="icon f7-icons if-not-md">checkmark_seal_fill</i>
                  <i class="icon material-icons if-md">checkmark_seal_fill</i>
                </a>
              </div>
              <div class="title">Downloads</div>
              <div class="right">
                <a href="" class="link icon-only external">
                  <i style="color:#C0392B;" class="icon f7-icons if-not-md">arrow_clockwise_circle_fill</i>
                  <i class="icon material-icons if-md">arrow_clockwise_circle_fill</i>
                </a>
              </div>
            </div>
            <div class="subnavbar">
          <!-- Searchbar with auto init -->
          <form class="searchbar searchbar-init" data-search-container=".apps-list" data-search-in=".item-title">
            <div class="searchbar-inner">
              <div class="searchbar-input-wrap">
                <input type="search" placeholder="Search">
                <i class="searchbar-icon"></i>
                <span class="input-clear-button"></span>
              </div>
              <span class="searchbar-disable-button if-not-aurora">Cancel</span>
            </div>
          </form>
        </div>
          </div>
  <div class="page-content">

  <div class="list media-list apps-list">
        <ul>
        <?php
						$string = file_get_contents("../apps.json");

						$json = json_decode($string, true);
						foreach ($json as $app => $appkey) {
					?>
            <li>
              <div onclick="location='itms-services:\/\/?action=download-manifest&url=https:\/\/eonhubapp.com/plists/<?php echo $appkey['plist']; ?>.plist'" class="item-content">
                <div class="item-media">
                  <img style="width:55px;height:55px;border-radius:30%;" src="<?php echo $appkey['img']; ?>" alt="Icon">
                </div>
                <div class="item-inner">
                  <div class="item-title-row">
                    <div class="item-title"><?php echo $appkey['name']; ?></div>
                  </div>
                  <div class="item-subtitle"><p style="margin-top:0px;margin-bottom:0px;margin-right:5px;display:inline-block;padding-top:2px;padding-bottom:2px;padding-left:6px;padding-right:6px;border-radius:20px;background:linear-gradient(to right, #8E2DE2, #4A00E0);color:#fff;">Dev: <?php echo $appkey['dev']; ?></p><p style="display:inline-block;padding-top:2px;padding-bottom:2px;padding-left:6px;padding-right:6px;border-radius:20px;background:linear-gradient(to right, #E44D26, #F16529);color:#fff;margin-top:0px;margin-bottom:0px;margin-right:5px;">Size: <?php echo $appkey['size']; ?></p></div>
                </div>
              </div>
            </li>
            <?php
						}
				 	?>
        </ul>
      </div>
    


  </div>
</div>
