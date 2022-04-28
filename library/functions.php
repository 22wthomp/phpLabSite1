<?php
function theSession($product)
{
	if(isset($_SESSION[$product]))
	{
		echo htmlspecialchars($_SESSION[$product]);
	}
}
