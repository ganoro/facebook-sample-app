<?php 
$ini_array = parse_ini_file('../config/app.ini');
$app_id = $ini_array['appid'];
$channel_url = $_SERVER['SCRIPT_URI'] . 'channel.php';
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
  <title>winefriends</title>
  <meta property="og:title" content="Story Bar"/>
  <meta property="og:type" content="bar"/>
  <meta property="og:image" content="http://profile.ak.fbcdn.net/hprofile-ak-snc4/hs355.snc4/41800_157551267602956_958536_n.jpg"/>
  <meta property="og:url" content="<?= $_SERVER['SCRIPT_URI'] ?>"/> 
  <meta property="og:site_name" content="winefriends"/>
  <meta property="fb:app_id" content="<?= $app_id ?>"> 
  <meta property="og:description" content="Share a story and enjoy a glass of wine."/>
<link type="text/css" rel="stylesheet" href="style.css">
</head>
<body>
  <div id="fb-root"></div>
  <script>
    window.fbAsyncInit = function() {
      //Replace appId with your own
      FB.init({appId: '<?= $app_id ?>', channelUrl: '<?= $channel_url ?>', status: true, cookie: true,
               xfbml: true});
      FB.Canvas.setAutoGrow();
    };
    (function() {
      var e = document.createElement('script'); e.async = true;
      e.src = document.location.protocol +
        '//connect.facebook.net/en_US/all.js';
      document.getElementById('fb-root').appendChild(e);
    }());
  </script>

  <div id="header">
    <div id="container">
      <div id="logo">winefriends</div>
    </div>
  </div>
  <div id="content">
    <div id="container">
      <div id="left-sidebar">
        <div id="logo">
          <img src="http://sphotos.ak.fbcdn.net/hphotos-ak-ash2/hs388.ash2/66693_10100104127284988_10719934_52998790_8155254_n.jpg" width="270" height="200">
        </div>
        <h2>Activity feed</h2>
        <div class="facebook-plugin">
          <fb:activity site="winowoman.com" header="false" width="260" height="325" font="arial" border_color="#fff"></fb:activity>
        </div>

        <h2>Recommendations</h2>
        <div class="facebook-plugin">
          <fb:recommendations site="corkd.com" header="false" width="260" height="350" font="arial" border_color="#fff"></fb:recommendations>
        </div>
      </div>
      <div id="right-sidebar">
        <h1>Story Bar</h1>
        <div class="facebook-plugin">
          <fb:like></fb:like>
        </div>
        <h2>Map</h2>
        <div id="address">
          <a href="http://maps.google.com/maps?f=q&hl=en&q=34.14442,-114.285441" target="_blank">1601 S. California Ave. Palo Alto, CA</a>
        </div>
        <div id="map">
          <a href="http://maps.google.com/maps?f=q&hl=en&q=34.14442,-114.285441" target="_blank">
            <img src="http://maps.google.com/maps/api/staticmap?center=34.14442,-114.285441&zoom=14&size=410x150&maptype=roadmap&markers=color:red|color:red|label:C|34.14442,-114.2854416&sensor=false">
          </a>
        </div>
        <h2>Comments</h2>
			<fb:comments href="http://www.hsiet.com/winery/storybar.html" width="400px" height="700px" simple="1" css="http://www.hsiet.com/winery/style.css"></fb:comments>
      </div>
    </div>
  </div> 
<div id="footer">
  <div id="container">
    A hackathon production.
  </div>
</div> 
</body>
</html>
