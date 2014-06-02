<?php 

//Set ID length.
$random_id_length = 5;

//Generate a Random ID.
$rnd_id = crypt(uniqid(rand(),1));

//Remove the tags, slashes etc.
$rnd_id = strip_tags(stripslashes($rnd_id));

//Take out punctuation and forward slashes.
//Reverse the string.
$rnd_id = str_replace(".","",$rnd_id);
$rnd_id = strrev(str_replace("/","!
	pa",$rnd_id));

//Take the first 10 characters $rnd_id
$rnd_id = substr($rnd_id,0,$random_id_length);

//Get input from user
$line = readline("Enter Memorable Word: ");
        readline_add_history($line);

echo "Passgen: " . $line . $rnd_id . "\n" ;







