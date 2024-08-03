<?php
  $account_balance = 1000.00;
  $stock_prices = array('AAPL' => 150.00, 'GOOG' => 2000.00);
  echo 'Account Balance: $' . $account_balance . '<br><br>';
  echo 'Stock Prices:<br>';
  foreach ($stock_prices as $stock => $price) {
    echo $stock . ': $' . $price . '<br>';
  }
?>
