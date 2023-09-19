<?php
$DNS=dns_get_record("gogoanime.page");

print_r(sizeof($DNS));
echo ("<br>");

	for($a=0; $a<sizeof($DNS); $a++){
		print_r($DNS[$a]);echo ("<br>");
	}
echo ("<br>");echo ("<br>");
	
	echo("<table style=\"border:1px solid black;\">");
	echo("  <tr><th>Record</th><th>Details</th></tr>");
	for($a=0; $a<sizeof($DNS); $a++){
		$type=$DNS[$a]["type"];
		if($type==="SOA"){
			echo("  <tr><td>");
			print_r("SOA" );echo("</td><td>");
			print_r($DNS[$a]["mname"]);
			echo("</td></tr>");
		}
		if($type==="A"){
			echo("  <tr><td>");
			print_r("IP" );echo("</td><td>");
			print_r($DNS[$a]["ip"]);
			echo("</td></tr>");
		}
		if($type==="MX"){
			echo("  <tr><td>");
			print_r("MX" );echo("</td><td>");
			print_r($DNS[$a]["target"]);
			echo("</td></tr>");
		}
		if($type==="TXT"){
			echo("  <tr><td>");
			print_r("TXT" );echo("</td><td>");
			print_r($DNS[$a]["txt"]);
			echo("</td></tr>");
		}
		if($type==="NS"){
			echo("  <tr><td>");
			print_r("NS" );echo("</td><td>");
			print_r($DNS[$a]["target"]);
			echo("</td></tr>");
		}
	}
	echo("</table>");
?>
