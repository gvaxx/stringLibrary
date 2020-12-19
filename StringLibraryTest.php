<?php
require 'StringLibrary.php';
use PHPUnit\Framework\TestCase;

class StringLibraryTest extends TestCase
{
	private $stringLibrary;

	protected function setUp() :void
	{
		$this->stringLibrary = new StringLibrary();
	}
 
	protected function tearDown() :void
	{
		$this->stringLibrary = NULL;
	}
 
	public function testrevertCharacters()
	{
		$result = $this->stringLibrary->revertCharacters('Привет! Давно не виделись.');
		$this->assertEquals('Тевирп! Онвад ен ьсиледив.', $result);
		
		$result = $this->stringLibrary->revertCharacters('Привет!Давно не виделись.');
		$this->assertEquals('Тевирп!Онвад ен ьсиледив.', $result);
		
		$result = $this->stringLibrary->revertCharacters('Привет, давно не виделись.');
		$this->assertEquals('Тевирп, онвад ен ьсиледив.', $result);
		
		$result = $this->stringLibrary->revertCharacters('Привет, давно		 не виделись.');
		$this->assertEquals('Тевирп, онвад		 ен ьсиледив.', $result);
		
		$result = $this->stringLibrary->revertCharacters('На золотом крыльце сидели: Царь,
			царевич, Король, королевич, сапожник-портной а ты кто такой?');
		$this->assertEquals('Ан мотолоз ецьлырк иледис: Ьрац,
			чиверац, Ьлорок, чивелорок, кинжопас-йонтроп а ыт отк йокат?', $result);
		
		$result = $this->stringLibrary->revertCharacters('Better sexy and racy, than sexist and racist.');
		$this->assertEquals('Retteb yxes dna ycar, naht tsixes dna tsicar.', $result);
	}
 
}