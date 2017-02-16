<?php
$a  = array(
	"สุขใจ…เมื่อไกลเมีย….",
	
	);
$random_key = array_rand($a,1);
echo "<p>" . $a[$random_key] . "</p>";
