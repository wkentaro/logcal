<?php
// Redirect to new hostname
if (strtolower($_SERVER['HTTP_HOST']) == 'logcal.info') {
  header('HTTP/1.1 301 Moved Permanently');
  header('Location: http://www.logcal.info'.$_SERVER[REQUEST_URI]);
  exit();
}
