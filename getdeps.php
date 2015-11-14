#!/usr/bin/env php
<?php
require_once 'common.php';

function failboat($ecode = -9999)
{
  error_log("FAIL: getdeps.php: $ecode.");
  mail_error("FAIL: getdeps.php: $ecode.\n\n");
  exit(0);
}

$con = connectDB();
if (!$con)
{
  failboat('Database connection error. (getdep.php)');/* . mysql_error());*/
}

$btc = connectBitcoin();
$acts = $btc->listaccounts();
$now = date("YmdHis");

foreach($acts as $user => $amount)
{
  if(strlen($user) > 0 && $amount > 0)
  { 
    $chk1 = 0;
    $chk2 = 0;
    $ok = 1;
   
    try {
      $btc->move($user, "", $amount);
    } catch (Exception $e) {
      $result = mysql_query("INSERT INTO deposits (username, recvdate, amount, chk1_moved, chk2_credited) VALUES ('$user', '$now', '$amount', '0', '0')");
      if(!$result) { $db = "FAIL ("  . mysql_error() . ")"; } else { $db = "OK"; }
      failboat("Could not move BTC from player account into server account. Logged to SQL DB = '$db' (getdep.php)");
    }

    $amt = $amount * 100000000;
    $result = mysql_query("UPDATE users SET balanceBank=balanceBank+$amt WHERE username = '$user'", $con);
    if(!$result)
    {
      $result = mysql_query("INSERT INTO deposits (username, recvdate, amount, chk1_moved, chk2_credited) VALUES ('$user', '$now', '$amount', '1', '0')");
      if(!$result) { $db = "FAIL ("  . mysql_error() . ")"; } else { $db = "OK"; }
      failboat("Moved $amount from player account to server account but could not update database to credit user. Logged to SQL DB = '$db' (getdep.php)");
    }
    
    $result = mysql_query("INSERT INTO deposits (username, recvdate, amount, chk1_moved, chk2_credited) VALUES ('$user', '$now', '$amount', '1', '1')");
    if(!$result)
    {
      failboat("Moved and credited user deposit ($user, $amount), but could not log the deposit in the deposits table. (getdep.php) " . mysql_error());
    }

  }
}

?>
