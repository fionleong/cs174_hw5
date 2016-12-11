<?php

namespace teampeanut\hw5\controllers;

use teampeanut\hw5\views\LandingView;

class LandingCtrl extends Controller {
  public function mainCtrl() {
    $landingView = new LandingView();
    $landingView->render(null);
  }
}

?>
