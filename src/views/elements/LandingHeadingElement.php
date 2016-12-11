<?php
namespace teampeanut\hw5\views\elements;

use teampeanut\hw3\views as V;

class LandingHeadingElement extends Element {
  public function render($data) {
    define("SECRET_KEY", "sk_test_qYM0YTLplKYWI2UeuKr8XTRM ");
    define("PUBLISHABLE_KEY", "pk_test_sHn9DkdEhse8jQh1ld743zhu ");
    define("CHARGE_URL", "https://api.stripe.com/v1/charges");
    define("CHARGE_CURRENCY", "usd");
    define("CHARGE_DESCRIPTION", "Buyer sees this on their statement");
    define("CHARGE_USERAGENT", "CreditCardTester");
    define("TIMEOUT", 20);
    ?>
    <!DOCTYPE html>
    <html>
      <head>
        <title>Throw-A-Coin-In-The-Fountain</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="./src/styles/styles.css" />
      </head>
      <body>
        <h1>Throw-a-Coin-in-the-Fountain</h1>
    <?php
  }
}

?>
