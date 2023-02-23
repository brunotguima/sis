<?php
require_once('php-rtsp-client/src/Client.php');
$rtsp = new \PhpRtspClient\Client('rtsp://192.168.0.60:554/cam/realmonitor?channel=1&subtype=0');
$rtsp->open();
$rtsp->setCredentials('admin', 'abc123456');
$rtsp->play();
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Reproduzir câmera Hikvision</title>
    <link href="https://vjs.zencdn.net/7.14.3/video-js.css" rel="stylesheet" />
    <script src="https://vjs.zencdn.net/7.14.3/video.js"></script>
  </head>
  <body>
  <video src="<?php echo $rtsp->getUrl(); ?>" autoplay></video>
    <script>
      var player = videojs('my-player');
    </script>
  </body>
</html>
