<?php

function m_round($money)
{
	$minimal_coin = 0.5;
	$number_of_coins = (int)($money / $minimal_coin);
	$number_of_coins = ($money - ($number_of_coins * $minimal_coin)) > 0.25
		? $number_of_coins + 1 
		: $number_of_coins;
	return $number_of_coins * $minimal_coin;
}

var_dump(m_round(4.72));
var_dump(m_round(2.25));
var_dump(m_round(3.13));
