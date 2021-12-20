<?php

class ExampleTest extends \Stanejoun\PhpSelenium\HmiTest
{
	public function setUp(): void
	{
		$this->createDriver('chrome');
	}

	public function tearDown(): void
	{
		$this->getDriver()->close();
		$this->getDriver()->quit();
	}

	public function testExample()
	{
		$url = 'https://myshop-gift-fr-dev.buybox.net/';
		$this->navigate($url);
		$this->findElement('.card-type-picture')->click();
		$this->findElement('#gallery-visual-418')->click();
		$selectedVisual = $this->findElement('.ecard-overview-block .visual');
		$visualId = $selectedVisual->getAttribute('data-visual-id');
		$this->assertEquals('418', $visualId);
	}
}