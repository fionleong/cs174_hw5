<?php

namespace teampeanut\hw5;

use teampeanut\hw5\controllers as C;
// use teampeanut\hw5\configs\Config;

session_start();

require_once 'vendor/autoload.php';

require_once 'lib/streams.php';
require_once 'lib/gettext.php';

$ctrl = new C\LandingCtrl();
$ctrl->mainCtrl();
?>