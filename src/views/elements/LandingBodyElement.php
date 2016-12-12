<?php
namespace teampeanut\hw5\views\elements;

use teampeanut\hw3\views as V;

require_once "locale.php";

class LandingBodyElement extends Element {
  public function render($data) {
    ?>
    <form id="purchase-stuff-form" method="POST">
      <span class="payment-errors"></span>

      <label><?php echo _("Name: ") ?></label>
      <input type="text" name="name" placeholder="Your name" /><br/>

      <label><?php echo _("Your custom digital coin-in-fountain-wish: ") ?></label>
      <input type="text" name="coin" placeholder="Your custom digital coin-in-fountain wish."/> <br />

      <label><?php echo _("Share with your friends: ") ?></label>
      <input type="text" name="friends" placeholder="Friends"/><br/>

      <label><?php echo _("Choose a fountain to drop your coin in!") ?></label>
      <select id="fountains" name="fountainSelect">
        <option value="fountain1" selected="selected"><?php echo _("Fountain 1") ?></option>
        <option value="fountain2"><?php echo _("Fountain 2") ?></option>
        <option value="fountain3"><?php echo _("Fountain 3") ?></option>
      </select>
      <br/>
      <img src="#" id="fountain-image"/> <br/>

      <div class="payment">
        <input type="hidden" id="credit-token" name="credit_token" value="" />

        <label><?php echo _("Payment Info: ") ?></labe><br/>
        <div class="form-row">
          <label>
            <span><?php echo _("Amount: ") ?></span>
            <input type="text" id="amount" size="2" name="amount">
          </label>
        </div>

        <div class="form-row">
          <label>
            <span><?php echo _("Card Number: ") ?></span>
            <input type="text" size="20" data-stripe="number">
          </label>
        </div>

        <div class="form-row">
          <label>
            <span><?php echo _("Expiration (MM/YY): ") ?></span>
            <input type="text" size="2" data-stripe="exp_month">
          </label>
          <span> / </span>
          <input type="text" size="2" data-stripe="exp_year">
        </div>

        <div class="form-row">
          <label>
            <span><?php echo _("CVC: ") ?></span>
            <input type="text" size="4" data-stripe="cvc">
          </label>
        </div>

        <div class="form-row">
          <label>
            <span><?php echo _("Billing ZIP Code: ") ?></span>
            <input type="text" size="6" data-stripe="address_zip">
          </label>
        </div>
      </div>
      <br />
      <button type="submit"><?php echo _("Throw-A-Coin") ?></button>
    </form>
    <div class="language">
      <h2><?php echo _("Language Preference: ") ?></h2>
      <select onchange="location = this.value;">
        <option value="?locale=en_US"><?php echo _("English") ?></option>
        <option value="?locale=fr_FR"><?php echo _("French") ?></option>
      </select>
    </div>
    <?php
    // test if gettext extension is installed with php
    if (!function_exists("gettext"))
    {
        echo "gettext is not installed\n";
    }
    else
    {
        echo "gettext is supported\n";
    }
  }
}

?>
