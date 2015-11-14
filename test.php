#!/usr/bin/env php
<?php
require_once 'common.php';
require_once 'poker.php';

function failboat($ecode = -9999)
{
  //if($ecode != 0 && $ecode != 1 && $ecode != 2)
  //{
    //ror_log("FAIL: getdeps.php: $ecode.");
    mail_error("FAIL: getdeps.php: $ecode.\n\n");
  //}
  //ho json_encode(array("error" => "$ecode"));
  exit(0);
}


$h = 62<<47;
$r = eval_hand($h,1);
echo "$r - " . rank_to_text($r) . "\n";



//failboat("TESTTEST");
?>
