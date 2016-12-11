<?php
namespace teampeanut\hw5\views\elements;

use teampeanut\hw3\views as V;

class LandingBodyElement extends Element {
  public function render($data) {
    ?>
    <form id="purchase-stuff-form" method="POST">
      <span class="payment-errors"></span>

      <label>Name : </label>
      <input type="text" name="name" placeholder="Your name" /> <br />

      <label>Your custom digital coin-in-fountain-wish : </label>
      <input type="text" name="coin" placeholder="Your custom digital coin-in-fountain wish."/> <br />

      <label>Share with your friends</label>
      <input type="text" name="friends" placeholder="Friends"/> <br />

      <label>Choose a fountain to drop your coin in!</label>
      <select id="fountains" name="fountainSelect">
        <option value="fountain1" selected="selected">Fountain 1</option>
        <option value="fountain2">Fountain 2</option>
        <option value="fountain3">Fountain 3</option>
      </select>
      <br />
      <img src="#" id="fountain-image" /> <br />

      <div class="payment">
        <input type="hidden" id="credit-token" name="credit_token" value="" />

        <label>Payment Info: </labe> <br />
        <div class="form-row">
          <label>
            <span>Amount</span>
            <input type="text" id="amount" size="2" name="amount">
          </label>
        </div>

        <div class="form-row">
          <label>
            <span>Card Number</span>
            <input type="text" size="20" data-stripe="number">
          </label>
        </div>

        <div class="form-row">
          <label>
            <span>Expiration (MM/YY)</span>
            <input type="text" size="2" data-stripe="exp_month">
          </label>
          <span> / </span>
          <input type="text" size="2" data-stripe="exp_year">
        </div>

        <div class="form-row">
          <label>
            <span>CVC</span>
            <input type="text" size="4" data-stripe="cvc">
          </label>
        </div>

        <div class="form-row">
          <label>
            <span>Billing ZIP Code</span>
            <input type="text" size="6" data-stripe="address_zip">
          </label>
        </div>
      </div>
      <br />
      <button type="submit">Throw-A-Coin</button>
    </form>
    <div class="language">
      <h2>Language Preference: </h2>
      <select>
        <option value="english" selected="selected">English</option>
        <option value="french">French</option>
      </select>
    </div>
    <?php
  }
}

?>
