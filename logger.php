<?php

// If the user agent is small, should it be logged, for example bots?
$skipsmalluseragent = False;

// Getting the remote IP address.
$ipadress = $_SERVER['REMOTE_ADDR'];

// Getting the user agent.
$useragent = $_SERVER['HTTP_USER_AGENT'];

// Opening the file for only writing only `a`
$file = fopen(("logs.txt"),"a");

// If the `$skipsmalluseragent` is equal to `True` and the length of the `$useragent` is less than or equal to 25, THEN THE CODE INSIDE THE `IF` BLOCK WILL NOT BE EXECUTED.
if (!($skipsmalluseragent === True && strlen($useragent) <= 25)) {
    // Writing the values of IP address and user agent to the end of the file.
    fwrite($file,("ipadress: ".$ipadress."\n"."useragent: ".$useragent."\n"."\n"));
}

// Closing the file.
fclose($file);

?>
