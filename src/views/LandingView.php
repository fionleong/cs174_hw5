<?php

namespace teampeanut\hw5\views;

use teampeanut\hw5\views\elements as E;

/**
* LandingView, Initial page that will be loaded when user enters
*/
class LandingView extends View {
  /**
  * construct function that automatically calls when object is initialized
  */
  public function __construct() {
    $head = new E\LandingHeadingElement();
    $head->render(null);
  }


  public function render($data) {
    if (empty($_REQUEST["credit_token"])) {
      $body = new E\LandingBodyElement();
      $body->render(null);

      $head = new E\LandingHeadingBottomElement();
      $head->render(null);
    }
  }
}

?>
