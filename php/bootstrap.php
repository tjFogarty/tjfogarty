<?php
/** 
 * bootstrap.php
 * @author T.J. Fogarty <fogarty.tj@gmail.com>
 */

namespace tj;

include 'libs/environment.class.php';

use \tj\Environment as Environment;
use \tj\Site as Site;

if( !isset($title) ) {
  $title = "T.J. Fogarty | Web Development";
}

if( !isset($description) ) {
  $description = "Web Development - HTML5, CSS3, JavaScript & PHP";
}

if( !isset($page) ) {
  $page = "undefined";
}