<?php
class StringLibrary
{
	public function revertCharacters(string $str)
	{
		$splitedString = preg_split(
			'/([\s.,?!-:;`])/u',
			$str,
			0,
			PREG_SPLIT_DELIM_CAPTURE | PREG_SPLIT_NO_EMPTY
		);

		foreach($splitedString as $index => $word) {
			if (preg_match("/[a-zа-яё]/iu", $word)) {

				$revWord = $this->utf8StrRev($word);
				if ((preg_match("/[A-ZА-ЯЁ]/u", $revWord))) {
					$revWord = mb_convert_case($revWord, MB_CASE_TITLE);;
				}

				$splitedString[$index] = $revWord;
			}
		}
		return implode("", $splitedString);
	}
	
	private function utf8StrRev($str)
	{
		preg_match_all('/./u', $str, $ar);
		return implode(array_reverse($ar[0]));
	}
}