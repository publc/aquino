<?php

require_once 'head.php';

require_once 'header.php';

if(isset($contents) && is_array($contents)) {
  foreach($contents as $content) {
    require $content . '.php';
  }
}

require_once 'footer.php';
