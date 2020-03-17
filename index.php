<?php

do
{
	$a = rand(0, 10);
	$b = rand(0, 10);
	$c = rand(0, 10);

	echo $a."<br>".$b."<br>".$c."<br><br>";
}
while ($a + $b + $c < 14);