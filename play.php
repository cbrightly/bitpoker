<?php
require_once 'common.php';
validate_session();
?>
<!DOCTYPE html> 
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head>
<?php
if(!isset($_SESSION['username']))
{
  echo <<<DONE
<title>Logging Out</title>
<meta http-equiv="REFRESH" content="0;url=index"></HEAD>
<BODY>
Your session has ended, logging out...
</BODY>
</HTML>
DONE;
exit();
}
?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<!--<meta http-equiv="refresh" content="3" /> uncoment this for auto refresh-->
<meta name="keywords" content="bitcoin blackjack, bitcoin casino, bitcoin games, bitcoin, blackjack, casino, games, bitcoin gambling, gambling" />
<meta name="description" content="BitJack21 - Bitcoin Blackjack - Play" /> 
<link rel="Shortcut Icon" href="images/favicon.ico">
<title>BitPoker - Bitcoin Poker - Play</title> 
<base target="_self" />
	
<!--Stylesheets--> 
<link href="css/style.css" rel="stylesheet" type="text/css" media="screen" /> 

<!--[if lte IE 7]>
  <link href="css/ie.css" rel="stylesheet" type="text/css" media="screen" />
<![endif]-->	

<!--[if IE 6]>
  <link href="css/ie6.css" rel="stylesheet" type="text/css" media="screen" />
<![endif]-->
	
	
<!--Javascript--> 

<!--[if IE]>
  <script src="js/html5.js"></script>
<![endif]-->

<script type="text/javascript" src="js/jquery-1.6.2.min.js"></script>
<script type="text/javascript" src="js/bitpoker.js"></script>

</head>
 
<body> 
	<div id="wrapper">
		<div id="table">
			<div id="gameid">T1-12345678</div>
			<div id="seat1" class="seat">
				<div class="seatcards"></div>
				<div class="seattext1"></div>
				<div class="seattext2"></div>
				<div class="seatbet">12345</div>
				<div class="seatbutton"><img src="../images/dealer_button.png"></div>
			</div>
                        <div id="seat2" class="seat">
				<div class="seatcards"></div>
				<div class="seattext1"></div>
				<div class="seattext2"></div>
				<div class="seatbet">12345</div>
				<div class="seatbutton"><img src="../images/dealer_button.png"></div>
			</div>
                        <div id="seat3" class="seat">
				<div class="seatcards"></div>
				<div class="seattext1"></div>
				<div class="seattext2"></div>
				<div class="seatbet">12345</div>
				<div class="seatbutton"><img src="../images/dealer_button.png"></div>
			</div>
                        <div id="seat4" class="seat">
				<div class="seatcards"></div>
				<div class="seattext1"></div>
				<div class="seattext2"></div>
				<div class="seatbet">12345</div>
				<div class="seatbutton"><img src="../images/dealer_button.png"></div>
			</div>
                        <div id="seat5" class="seat">
				<div class="seatcards"></div>
				<div class="seattext1"></div>
				<div class="seattext2"></div>
				<div class="seatbet">12345</div>
				<div class="seatbutton"><img src="../images/dealer_button.png"></div>
			</div>
                        <div id="seat6" class="seat">
				<div class="seatcards"></div>
				<div class="seattext1"></div>
				<div class="seattext2"></div>
				<div class="seatbet">12345</div>
				<div class="seatbutton"><img src="../images/dealer_button.png"></div>
			</div>
                        <div id="seat7" class="seat">
				<div class="seatcards"></div>
				<div class="seattext1"></div>
				<div class="seattext2"></div>
				<div class="seatbet">12345</div>
				<div class="seatbutton"><img src="../images/dealer_button.png"></div>
			</div>
                        <div id="seat8" class="seat">
				<div class="seatcards"></div>
				<div class="seattext1"></div>
				<div class="seattext2"></div>
				<div class="seatbet">12345</div>
				<div class="seatbutton"><img src="../images/dealer_button.png"></div>
			</div>
                        <div id="seat9" class="seat">
				<div class="seatcards"></div>
				<div class="seattext1"></div>
				<div class="seattext2"></div>
				<div class="seatbet">12345</div>
				<div class="seatbutton"><img src="../images/dealer_button.png"></div>
			</div>
			<div id="seat10" class="seat">
				<div class="seatcards"></div>
				<div class="seattext1">playername44</div>
				<div class="seattext2">8675309</div>
				<div class="seatbet">12345</div>
				<div class="seatbutton"><img src="../images/dealer_button.png"></div>
			</div>
			<div id="board"></div>

			<div id="shoe"></div>
			<div id="msg"></div>
			<div id="p1msg"></div>
			<div id="p2msg"></div>
			<div id="p3msg"></div>
			<div class="curValue player1"></div>
			<div class="curValue player2"></div>
			<div class="curValue player3"></div>
			<div class="curValue dealer"></div>

			<div id="rules"></div>
			<div id="players"></div>
			<div id="gameField"></div>
			<div id="chatbox">
				<textarea readonly="readonly" id="chat">test1
test2
test3
test4
test5
test6
test7
1234567891123456789212345678931234567894123456789512345678961234567897123456789812345678991234567890</textarea>
				<input id="chattype" type="text" maxlength="100"></input>
			</div>
			<div id="betbox">
				<div id="fold"></div>
				<div id="call"></div>
				<div id="raise"></div>
			</div>
			<!--<div id="control">-->
			<!--	<div id="double">DBL</div>
				<div id="hit">HIT</div>
				<div id="deal">DEAL</div>
				<div id="stay">STAY</div>
				<div id="split">SPLIT</div>
			</div>-->
		</div><!--end of table-->	

	</div><!--end of wrapper-->
</body>

</html>
