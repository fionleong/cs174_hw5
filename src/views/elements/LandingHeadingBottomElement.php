<?php
namespace teampeanut\hw5\views\elements;

use teampeanut\hw3\views as V;

class LandingHeadingBottomElement extends Element {
  public function render($data) {
    ?>
      
      <script src="https://code.jquery.com/jquery-3.1.1.js"></script>
      <script type="text/javascript" src="./src/resources/script.js"></script>
      <script type="text/javascript" src="https://js.stripe.com/v2/"></script>

      <script type="text/javascript">
        Stripe.setPublishableKey('pk_test_sHn9DkdEhse8jQh1ld743zhu');
      </script>

      <script type="text/javascript" src="./src/resources/stripe-extra.js"></script>
      <?php
      ?>
    </body>
    </html>
    <?php
  }
}

?>
