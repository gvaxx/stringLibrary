<?php

function m_round(float $money)
{
	$minimal_coin = 0.5;
	if ($money === 0) {
		return 0;
	}
	$number_of_coins = (int)($money / $minimal_coin);
	$number_of_coins = fmod($money, $minimal_coin) >= 0.25
		? $number_of_coins + 1
		: $number_of_coins;
	return $number_of_coins * $minimal_coin;
}

var_dump(m_round(0.1));
var_dump(m_round(2.23));
var_dump(m_round(3.13));
