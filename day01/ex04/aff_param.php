#!/usr/bin/php
<?PHP
	$i = 0;
	foreach ($argv as $elem)
	{
		if ($i++ > 0)
			echo "$elem"."\n";
	}
?>
