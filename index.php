<?php
function fibonacci ($n)
{
	if ($n == 1 || $n == 2)
	{
		return 1;
	}
	else
	{
		return fibonacci( $n - 1)+fibonacci( $n - 2 );
	}
}
echo "a ja placeholer gla mgr_test1";
if(isset($_GET["fib"]))
	echo "Wartosc fib dla ".$_GET["fib"]." wynosi ".fibonacci($_GET["fib"]);
else {
	echo "Nie podano fib";
}
?>
