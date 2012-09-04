<?php

require "common.php";

?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge, chrome=1" />
<meta name="description" content="Online desktop environment." />
<title><?=NAME.SEP.DESC?></title>

<!--[if lt IE 7]>
<script>
window.top.location = 'upgrade.html';
</script>
<![endif]-->

<link rel="shortcut icon" href="assets/img/favicon.ico" />

<link href="<?=DIR_CSS?>/cm.css" rel="stylesheet" type="text/css" />
<link href="<?=DIR_CSS?>/reset.css" rel="stylesheet" type="text/css" />
<link href="<?=DIR_CSS?>/desktop.css" rel="stylesheet" type="text/css" />
<link href="<?=DIR_CSS?>/styles.css" rel="stylesheet" type="text/css" />

<!--[if lt IE 9]>
<link rel="stylesheet" href="<?=DIR_CSS?>/ie.css" />
<![endif]-->

<!--<script type="text/javascript" src="<?=DIR_JS?>/globals.js"></script>-->

<script type="text/javascript" src="<?=DIR_JS?>/jquery.js"></script>
<script type="text/javascript" src="http://code.jquery.com/ui/1.9.0-beta.1/jquery-ui.min.js"></script>

<!-- JSON Tricks for Streaming PHP Constantrs -->

<script type="text/javascript" src="<?=DIR_JS?>/json.js"></script>

<!-- Clock -->

<!--[if IE]><script type="text/javascript" src="<?=DIR_JS?>/clock/excanvas.js"></script><![endif]-->
<script type="text/javascript" src="<?=DIR_JS?>/clock/coolclock.js"></script>
<script type="text/javascript" src="<?=DIR_JS?>/clock/moreskins.js"></script>

<!-- Context menu -->

<script type="text/javascript" src="<?=DIR_JS?>/contextmenu/jquery.ui.position.js"></script>
<script type="text/javascript" src="<?=DIR_JS?>/contextmenu/jquery.contextMenu.js"></script>

<!-- Fullscreen -->

<script type="text/javascript" src="<?=DIR_JS?>/fullscreen.js"></script>

<!-- General scripts (should always come last). -->

<script type="text/javascript" src="<?=DIR_JS?>/scripts.js"></script>

</head>

<body>

<div class="abs" id="wrapper">
  
  <div class="abs" id="desktop">
    
    <!-- Icons -->
    
    <a class="abs icon" style="left:20px;top:20px;" href="#icon_dock_computer">
      <img src="<?=DIR_ICONS?>/icon_32_computer.png" />
      Computer
    </a>
    <a class="abs icon" style="left:20px;top:100px;" href="#icon_dock_drive">
      <img src="<?=DIR_ICONS?>/icon_32_drive.png" />
      Hard Drive
    </a>
    <a class="abs icon" style="left:20px;top:180px;" href="#icon_dock_disc">
      <img src="<?=DIR_ICONS?>/icon_32_disc.png" />
      CloudTracks
    </a>
    <a class="abs icon" style="left:20px;top:260px;" href="#icon_dock_network">
      <img src="<?=DIR_ICONS?>/icon_32_network.png" />
      Network
    </a>
    
    <!-- Widgets -->
    
    <div id="widgets_container">
    	
        <div id="analog_clock_container" class="grab">
            
            <canvas id="analog_clock" class="CoolClock:classic::::showDigital"></canvas>
            
        </div>
    	
    </div>
    
    <!-- Windows -->
    
    <div id="window_settings" class="abs window">
        
        <div class="abs window_inner">
        	
            <div class="window_top">
            
                <span class="float_left">
                    
                    <img src="<?=DIR_ICONS?>/icon_16_computer.png" />
                    
                    Settings
                    
                </span>
                
                <span class="float_right">
                    
                    <a href="#" class="window_min"></a>
                    <a href="#" class="window_resize"></a>
                    <a href="#icon_dock_computer" class="window_close"></a>
                    
                </span>                
                
        	</div>
            
            <div class="abs window_content">
                
                <div class="window_aside">
                	
                    Change your settings.
                    
                </div>
                
                <div class="window_main">
                	
                    
                    
                </div>
                
			</div>
            
            <div class="abs window_bottom">
            	
                Build: TK421
                
            </div>
            
		</div>
        
        <span class="abs ui-resizable-handle ui-resizable-se"></span>
        
    </div>
    
    <div id="window_computer" class="abs window">
      <div class="abs window_inner">
        <div class="window_top">
          <span class="float_left">
            <img src="<?=DIR_ICONS?>/icon_16_computer.png" />
            Computer
          </span>
          <span class="float_right">
            <a href="#" class="window_min"></a>
            <a href="#" class="window_resize"></a>
            <a href="#icon_dock_computer" class="window_close"></a>
          </span>
        </div>
        <div class="abs window_content">
          <div class="window_aside">
            Hello. You look nice today!
          </div>
          <div class="window_main">
            <table class="data">
              <thead>
                <tr>
                  <th class="shrink">&nbsp;
                    
                  </th>
                  <th>
                    Name
                  </th>
                  <th>
                    Date Modified
                  </th>
                  <th>
                    Date Created
                  </th>
                  <th>
                    Size
                  </th>
                  <th>
                    Kind
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <img src="<?=DIR_ICONS?>/icon_16_drive.png" />
                  </td>
                  <td>
                    Hard Drive
                  </td>
                  <td>
                    Today
                  </td>
                  <td>
                    &mdash;
                  </td>
                  <td>
                    200 GB
                  </td>
                  <td>
                    Volume
                  </td>
                </tr>
                <tr>
                  <td>
                    <img src="<?=DIR_ICONS?>/icon_16_disc.png" />
                  </td>
                  <td>
                    Audio CD
                  </td>
                  <td>
                    &mdash;
                  </td>
                  <td>
                    &mdash;
                  </td>
                  <td>
                    2.92 GB
                  </td>
                  <td>
                    Media
                  </td>
                </tr>
                <tr>
                  <td>
                    <img src="<?=DIR_ICONS?>/icon_16_network.png" />
                  </td>
                  <td>
                    Network
                  </td>
                  <td>
                    &mdash;
                  </td>
                  <td>
                    &mdash;
                  </td>
                  <td>
                    &mdash;
                  </td>
                  <td>
                    LAN
                  </td>
                </tr>
                <tr>
                  <td>
                    <img src="<?=DIR_ICONS?>/icon_16_folder_remote.png" />
                  </td>
                  <td>
                    Shared Project Files
                  </td>
                  <td>
                    Yesterday
                  </td>
                  <td>
                    12/29/08
                  </td>
                  <td>
                    524 MB
                  </td>
                  <td>
                    Folder
                  </td>
                </tr>
                <tr>
                  <td>
                    <img src="<?=DIR_ICONS?>/icon_16_documents.png" />
                  </td>
                  <td>
                    Documents
                  </td>
                  <td>
                    Yesterday
                  </td>
                  <td>
                    12/29/08
                  </td>
                  <td>
                    524 MB
                  </td>
                  <td>
                    Folder
                  </td>
                </tr>
                <tr>
                  <td>
                    <img src="<?=DIR_ICONS?>/icon_16_system.png" />
                  </td>
                  <td>
                    Preferences
                  </td>
                  <td>
                    &mdash;
                  </td>
                  <td>
                    &mdash;
                  </td>
                  <td>
                    &mdash;
                  </td>
                  <td>
                    System
                  </td>
                </tr>
                <tr>
                  <td>
                    <img src="<?=DIR_ICONS?>/icon_16_trash.png" />
                  </td>
                  <td>
                    Trash
                  </td>
                  <td>
                    Today
                  </td>
                  <td>
                    &mdash;
                  </td>
                  <td>
                    &mdash;
                  </td>
                  <td>
                    Bin
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="abs window_bottom">
          Build: TK421
        </div>
      </div>
      <span class="abs ui-resizable-handle ui-resizable-se"></span>
    </div>
    
    <div id="window_drive" class="abs window">
      <div class="abs window_inner">
        <div class="window_top">
          <span class="float_left">
            <img src="<?=DIR_ICONS?>/icon_16_drive.png" />
            Hard Drive
          </span>
          <span class="float_right">
            <a href="#" class="window_min"></a>
            <a href="#" class="window_resize"></a>
            <a href="#icon_dock_drive" class="window_close"></a>
          </span>
        </div>
        <div class="abs window_content">
          <div class="window_aside">
            Storage in use: 119.1 GB
          </div>
          <div class="window_main">
            <table class="data">
              <thead>
                <tr>
                  <th class="shrink">&nbsp;
                    
                  </th>
                  <th>
                    Name
                  </th>
                  <th>
                    Date Modified
                  </th>
                  <th>
                    Date CWreated
                  </th>
                  <th>
                    Size
                  </th>
                  <th>
                    Kind
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <img src="<?=DIR_ICONS?>/icon_16_page.png" />
                  </td>
                  <td>
                    .DS_Store
                  </td>
                  <td>
                    Yesterday
                  </td>
                  <td>
                    &mdash;
                  </td>
                  <td>
                    6 KB
                  </td>
                  <td>
                    Hidden
                  </td>
                </tr>
                <tr>
                  <td>
                    <img src="<?=DIR_ICONS?>/icon_16_folder_home.png" />
                  </td>
                  <td>
                    Default User
                  </td>
                  <td>
                    Today
                  </td>
                  <td>
                    &mdash;
                  </td>
                  <td>
                    &mdash;
                  </td>
                  <td>
                    Folder
                  </td>
                </tr>
                <tr>
                  <td>
                    <img src="<?=DIR_ICONS?>/icon_16_folder.png" />
                  </td>
                  <td>
                    Applications
                  </td>
                  <td>
                    Yesterday
                  </td>
                  <td>
                    &mdash;
                  </td>
                  <td>
                    &mdash;
                  </td>
                  <td>
                    Folder
                  </td>
                </tr>
                <tr>
                  <td>
                    <img src="<?=DIR_ICONS?>/icon_16_folder.png" />
                  </td>
                  <td>
                    Developer
                  </td>
                  <td>
                    12/29/08
                  </td>
                  <td>
                    &mdash;
                  </td>
                  <td>
                    &mdash;
                  </td>
                  <td>
                    Folder
                  </td>
                </tr>
                <tr>
                  <td>
                    <img src="<?=DIR_ICONS?>/icon_16_folder.png" />
                  </td>
                  <td>
                    Library
                  </td>
                  <td>
                    09/11/09
                  </td>
                  <td>
                    &mdash;
                  </td>
                  <td>
                    &mdash;
                  </td>
                  <td>
                    Folder
                  </td>
                </tr>
                <tr>
                  <td>
                    <img src="<?=DIR_ICONS?>/icon_16_folder.png" />
                  </td>
                  <td>
                    System
                  </td>
                  <td>
                    Yesterday
                  </td>
                  <td>
                    &mdash;
                  </td>
                  <td>
                    &mdash;
                  </td>
                  <td>
                    Folder
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="abs window_bottom">
          Free: 80.9 GB
        </div>
      </div>
      <span class="abs ui-resizable-handle ui-resizable-se"></span>
    </div>
    
    <div id="window_disc" class="abs window">
      <div class="abs window_inner">
        <div class="window_top">
          <span class="float_left">
            <img src="<?=DIR_ICONS?>/icon_16_disc.png" />
            Audio CD - Title of Album
          </span>
          <span class="float_right">
            <a href="#" class="window_min"></a>
            <a href="#" class="window_resize"></a>
            <a href="#icon_dock_disc" class="window_close"></a>
          </span>
        </div>
        <div class="abs window_content">
          <div class="window_aside align_center">
            <img src="assets/img/misc/album_cover.jpg" />
            <br />
            <em>Title of Album</em>
          </div>
          <div class="window_main">
            <table class="data">
              <thead>
                <tr>
                  <th class="shrink">&nbsp;
                    
                  </th>
                  <th class="shrink">
                    Track
                  </th>
                  <th>
                    Song Name
                  </th>
                  <th class="shrink">
                    Length
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <img src="<?=DIR_ICONS?>/icon_16_music.png" />
                  </td>
                  <td class="align_center">
                    01
                  </td>
                  <td>
                    Track One
                  </td>
                  <td class="align_right">
                    3:50
                  </td>
                </tr>
                <tr>
                  <td>
                    <img src="<?=DIR_ICONS?>/icon_16_music.png" />
                  </td>
                  <td class="align_center">
                    02
                  </td>
                  <td>
                    Track Two
                  </td>
                  <td class="align_right">
                    3:50
                  </td>
                </tr>
                <tr>
                  <td>
                    <img src="<?=DIR_ICONS?>/icon_16_music.png" />
                  </td>
                  <td class="align_center">
                    03
                  </td>
                  <td>
                    Track Three
                  </td>
                  <td class="align_right">
                    4:02
                  </td>
                </tr>
                <tr>
                  <td>
                    <img src="<?=DIR_ICONS?>/icon_16_music.png" />
                  </td>
                  <td class="align_center">
                    04
                  </td>
                  <td>
                    Track Four
                  </td>
                  <td class="align_right">
                    3:47
                  </td>
                </tr>
                <tr>
                  <td>
                    <img src="<?=DIR_ICONS?>/icon_16_music.png" />
                  </td>
                  <td class="align_center">
                    05
                  </td>
                  <td>
                    Track Five
                  </td>
                  <td class="align_right">
                    4:38
                  </td>
                </tr>
                <tr>
                  <td>
                    <img src="<?=DIR_ICONS?>/icon_16_music.png" />
                  </td>
                  <td class="align_center">
                    06
                  </td>
                  <td>
                    Track Six
                  </td>
                  <td class="align_right">
                    3:16
                  </td>
                </tr>
                <tr>
                  <td>
                    <img src="<?=DIR_ICONS?>/icon_16_music.png" />
                  </td>
                  <td class="align_center">
                    07
                  </td>
                  <td>
                    Track Seven
                  </td>
                  <td class="align_right">
                    3:53
                  </td>
                </tr>
                <tr>
                  <td>
                    <img src="<?=DIR_ICONS?>/icon_16_music.png" />
                  </td>
                  <td class="align_center">
                    08
                  </td>
                  <td>
                    Track Eight
                  </td>
                  <td class="align_right">
                    1:41
                  </td>
                </tr>
                <tr>
                  <td>
                    <img src="<?=DIR_ICONS?>/icon_16_music.png" />
                  </td>
                  <td class="align_center">
                    09
                  </td>
                  <td>
                    Track Nine
                  </td>
                  <td class="align_right">
                    3:40
                  </td>
                </tr>
                <tr>
                  <td>
                    <img src="<?=DIR_ICONS?>/icon_16_music.png" />
                  </td>
                  <td class="align_center">
                    10
                  </td>
                  <td>
                    Track Ten
                  </td>
                  <td class="align_right">
                    4:33
                  </td>
                </tr>
                <tr>
                  <td>
                    <img src="<?=DIR_ICONS?>/icon_16_music.png" />
                  </td>
                  <td class="align_center">
                    11
                  </td>
                  <td>
                    Track Eleven
                  </td>
                  <td class="align_right">
                    3:49
                  </td>
                </tr>
                <tr>
                  <td>
                    <img src="<?=DIR_ICONS?>/icon_16_music.png" />
                  </td>
                  <td class="align_center">
                    12
                  </td>
                  <td>
                    Track Twelve
                  </td>
                  <td class="align_right">
                    1:11
                  </td>
                </tr>
                <tr>
                  <td class="shrink">
                    <img src="<?=DIR_ICONS?>/icon_16_music.png" />
                  </td>
                  <td class="align_center">
                    13
                  </td>
                  <td>
                    Track Thirteen
                  </td>
                  <td class="align_right">
                    6:17
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="abs window_bottom">
          Genre: Rock/Rap
        </div>
      </div>
      <span class="abs ui-resizable-handle ui-resizable-se"></span>
    </div>
    
    <div id="window_network" class="abs window">
      <div class="abs window_inner">
        <div class="window_top">
          <span class="float_left">
            <img src="<?=DIR_ICONS?>/icon_16_network.png" />
            Network
          </span>
          <span class="float_right">
            <a href="#" class="window_min"></a>
            <a href="#" class="window_resize"></a>
            <a href="#icon_dock_network" class="window_close"></a>
          </span>
        </div>
        <div class="abs window_content">
          <div class="window_aside">
            Local Network Resources
          </div>
          <div class="window_main">
            <table class="data">
              <thead>
                <tr>
                  <th class="shrink">&nbsp;
                    
                  </th>
                  <th>
                    Name
                  </th>
                  <th class="shrink">
                    Operating System
                  </th>
                  <th class="shrink">
                    Version
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <img src="<?=DIR_ICONS?>/icon_16_server.png" />
                  </td>
                  <td>
                    Urban Terror - <em>Game Server</em>
                  </td>
                  <td>
                    Linux
                  </td>
                  <td>
                    Ubuntu
                  </td>
                </tr>
                <tr>
                  <td>
                    <img src="<?=DIR_ICONS?>/icon_16_folder_remote.png" />
                  </td>
                  <td>
                    Shared Project Files
                  </td>
                  <td>
                    Linux
                  </td>
                  <td>
                    Red Hat
                  </td>
                </tr>
                <tr>
                  <td>
                    <img src="<?=DIR_ICONS?>/icon_16_vpn.png" />
                  </td>
                  <td>
                    Remote Desktop VPN
                  </td>
                  <td>
                    Windows
                  </td>
                  <td>
                    XP
                  </td>
                </tr>
                <tr>
                  <td>
                    <img src="<?=DIR_ICONS?>/icon_16_computer.png" />
                  </td>
                  <td>
                    Michael Scott
                  </td>
                  <td>
                    Mac OS
                  </td>
                  <td>
                    10.5
                  </td>
                </tr>
                <tr>
                  <td>
                    <img src="<?=DIR_ICONS?>/icon_16_computer.png" />
                  </td>
                  <td>
                    Dwight Schrute
                  </td>
                  <td>
                    Mac OS
                  </td>
                  <td>
                    10.6
                  </td>
                </tr>
                <tr>
                  <td>
                    <img src="<?=DIR_ICONS?>/icon_16_computer.png" />
                  </td>
                  <td>
                    Jim Halpert
                  </td>
                  <td>
                    Mac OS
                  </td>
                  <td>
                    10.6
                  </td>
                </tr>
                <tr>
                  <td>
                    <img src="<?=DIR_ICONS?>/icon_16_computer.png" />
                  </td>
                  <td>
                    Pam Beesly
                  </td>
                  <td>
                    Mac OS
                  </td>
                  <td>
                    10.5
                  </td>
                </tr>
                <tr>
                  <td>
                    <img src="<?=DIR_ICONS?>/icon_16_computer.png" />
                  </td>
                  <td>
                    Ryan Howard
                  </td>
                  <td>
                    Mac OS
                  </td>
                  <td>
                    10.5
                  </td>
                </tr>
                <tr>
                  <td>
                    <img src="<?=DIR_ICONS?>/icon_16_computer.png" />
                  </td>
                  <td>
                    Jan Levinson
                  </td>
                  <td>
                    Mac OS
                  </td>
                  <td>
                    10.5
                  </td>
                </tr>
                <tr>
                  <td>
                    <img src="<?=DIR_ICONS?>/icon_16_computer.png" />
                  </td>
                  <td>
                    Roy Anderson
                  </td>
                  <td>
                    Windows
                  </td>
                  <td>
                    7
                  </td>
                </tr>
                <tr>
                  <td>
                    <img src="<?=DIR_ICONS?>/icon_16_computer.png" />
                  </td>
                  <td>
                    Stanley Hudson
                  </td>
                  <td>
                    Windows
                  </td>
                  <td>
                    Vista
                  </td>
                </tr>
                <tr>
                  <td>
                    <img src="<?=DIR_ICONS?>/icon_16_computer.png" />
                  </td>
                  <td>
                    Kevin Malone
                  </td>
                  <td>
                    Windows
                  </td>
                  <td>
                    Vista
                  </td>
                </tr>
                <tr>
                  <td>
                    <img src="<?=DIR_ICONS?>/icon_16_computer.png" />
                  </td>
                  <td>
                    Angela Martin
                  </td>
                  <td>
                    Windows
                  </td>
                  <td>
                    Vista
                  </td>
                </tr>
                <tr>
                  <td>
                    <img src="<?=DIR_ICONS?>/icon_16_computer.png" />
                  </td>
                  <td>
                    Oscar Martinez
                  </td>
                  <td>
                    Windows
                  </td>
                  <td>
                    Vista
                  </td>
                </tr>
                <tr>
                  <td>
                    <img src="<?=DIR_ICONS?>/icon_16_computer.png" />
                  </td>
                  <td>
                    Phyllis Lapin
                  </td>
                  <td>
                    Windows
                  </td>
                  <td>
                    Vista
                  </td>
                </tr>
                <tr>
                  <td>
                    <img src="<?=DIR_ICONS?>/icon_16_computer.png" />
                  </td>
                  <td>
                    Creed Bratton
                  </td>
                  <td>
                    Windows
                  </td>
                  <td>
                    7
                  </td>
                </tr>
                <tr>
                  <td>
                    <img src="<?=DIR_ICONS?>/icon_16_computer.png" />
                  </td>
                  <td>
                    Meredith Palmer
                  </td>
                  <td>
                    Windows
                  </td>
                  <td>
                    Vista
                  </td>
                </tr>
                <tr>
                  <td>
                    <img src="<?=DIR_ICONS?>/icon_16_computer.png" />
                  </td>
                  <td>
                    Toby Flenderson
                  </td>
                  <td>
                    Windows
                  </td>
                  <td>
                    Vista
                  </td>
                </tr>
                <tr>
                  <td>
                    <img src="<?=DIR_ICONS?>/icon_16_computer.png" />
                  </td>
                  <td>
                    Darryl Philbin
                  </td>
                  <td>
                    Windows
                  </td>
                  <td>
                    Vista
                  </td>
                </tr>
                <tr>
                  <td>
                    <img src="<?=DIR_ICONS?>/icon_16_computer.png" />
                  </td>
                  <td>
                    Kelly Kapoor
                  </td>
                  <td>
                    Windows
                  </td>
                  <td>
                    Vista
                  </td>
                </tr>
                <tr>
                  <td>
                    <img src="<?=DIR_ICONS?>/icon_16_computer.png" />
                  </td>
                  <td>
                    Andy Bernard
                  </td>
                  <td>
                    Windows
                  </td>
                  <td>
                    Vista
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="abs window_bottom">
          LAN: Corporate Intranet
        </div>
      </div>
      <span class="abs ui-resizable-handle ui-resizable-se"></span>
    </div>
    
  </div>
  
  <div class="abs" id="bar_top">
    <span class="float_right" id="clock"></span>
    <ul>
      <li>
        <a class="menu_trigger" href="#" tabindex="1"><?=NAME?></a>
        <ul class="menu">
          <li>
            <a href="#window_settings">Settings</a>
          </li>
          <li>
          	<hr style="background: #999; height: 2px;  border-radius: 20px;" />
          </li>
          <li>
            <a href="http://www.amazon.com/dp/0596159773?tag=sons-20">Restart</a>
          </li>
          <li>
            <a href="http://www.amazon.com/dp/0596159773?tag=sons-20">Shutdown</a>
          </li>
        </ul>
      </li>
<!--      <li>
        <a class="menu_trigger" href="#">HTML5 Resources</a>
        <ul class="menu">
          <li>
            <a href="http://diveintohtml5.info/">Dive Into HTML5</a>
          </li>
          <li>
            <a href="http://www.alistapart.com/articles/get-ready-for-html-5/">Get Ready for HTML5</a>
          </li>
          <li>
            <a href="http://html5boilerplate.com/">HTML5 Boilerplate</a>
          </li>
          <li>
            <a href="http://html5doctor.com/">HTML5 Doctor</a>
          </li>
          <li>
            <a href="http://html5.org/">HTML5 Intro</a>
          </li>
          <li>
            <a href="http://www.zeldman.com/superfriends/">HTML5 Super Friends</a>
          </li>
        </ul>
      </li>
--><!--      <li>
        <a class="menu_trigger" href="#">Code</a>
        <ul class="menu">
          <li>
            <a href="<?=DIR_CSS?>/desktop.css">Desktop - CSS</a>
          </li>
          <li>
            <a href="<?=DIR_JS?>/jquery.desktop.js">Desktop - JavaScript</a>
          </li>
          <li>
            <a href="http://github.com/nathansmith/jQuery-Desktop">GitHub Repository</a>
          </li>
        </ul>
      </li>
--><!--      <li>
        <a class="menu_trigger" href="#">Credits</a>
        <ul class="menu">
          <li>
            <a href="http://sonspring.com/journal/jquery-desktop">Demo built by Nathan Smith</a>
          </li>
          <li>
            <a href="http://adrian-rodriguez.net/">Wallpaper by Adrian Rodriguez</a>
          </li>
          <li>
            <a href="http://tango.freedesktop.org/Tango_Desktop_Project">Icons - Tango Desktop Project</a>
          </li>
        </ul>
      </li>
-->    </ul>
  </div>
  
  <div class="abs" id="bar_bottom">
    
    <ul id="dock">
      
      <!--
		Come up with a better way to store icons to this "dock" than having them
		be preexistent!  Also create a new way to produce windows dynamically.
      -->
           
      <li id="icon_dock_computer">
        <a href="#window_computer">
          <img src="<?=DIR_ICONS?>/icon_22_computer.png" />
          Computer
        </a>
      </li>
      <li id="icon_dock_drive">
        <a href="#window_drive">
          <img src="<?=DIR_ICONS?>/icon_22_drive.png" />
          Hard Drive
        </a>
      </li>
      <li id="icon_dock_disc">
        <a href="#window_disc">
          <img src="<?=DIR_ICONS?>/icon_22_disc.png" />
          CloudTracks
        </a>
      </li>
      <li id="icon_dock_network">
        <a href="#window_network">
          <img src="<?=DIR_ICONS?>/icon_22_network.png" />
          Network
        </a>
      </li>
      
      <li id="icon_dock_settings">
        <a href="#window_settings">
          <img src="<?=DIR_ICONS?>/icon_22_computer.png" />
          Settings
        </a>
      </li>
      
    </ul>
    
    <div id="right_buttons" class="fixed-right">
        
        <a id="full_screen" class="hidden" href="#" title="Toggle Fullscreen Mode">
            
            <img src="<?=DIR_ICONS?>/full_screen.png" />
            
        </a>
        
        <a href="#" id="show_desktop" title="Show Desktop">
          
          <img src="<?=DIR_ICONS?>/icon_22_desktop.png" />
          
        </a>
        
    </div>
    
  </div>
  
</div>

<script>
  !window.jQuery && document.write(unescape('%3Cscript src="<?=DIR_JS?>/jquery.js"%3E%3C/script%3E'));
  !window.jQuery.ui && document.write(unescape('%3Cscript src="<?=DIR_JS?>/jquery.ui.js"%3E%3C/script%3E'));
</script>

<script src="<?=DIR_JS?>/jquery.desktop.js"></script>

</body>
</html>