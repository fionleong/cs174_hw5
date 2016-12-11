<?php

namespace teampeanut\hw5\views;

// use teampeanut\hw5\ as Q;

abstract class View {
  public function __construct() {}
  abstract public function render($data);
}

?>
