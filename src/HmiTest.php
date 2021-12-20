<?php

namespace Stanejoun\PhpSelenium;

use Facebook\WebDriver\Remote\DesiredCapabilities;
use Facebook\WebDriver\Remote\RemoteWebDriver;
use Facebook\WebDriver\WebDriverBy;
use Facebook\WebDriver\WebDriverElement;
use Facebook\WebDriver\WebDriverExpectedCondition;
use Facebook\WebDriver\WebDriverKeys;
use PHPUnit\Framework\TestCase;

class HmiTest extends TestCase
{
	/** @var RemoteWebDriver */
	public $driver;

	public function createDriver($browserName)
	{
		$serverUrl = 'http://localhost:4444/';
		switch ($browserName) {
			case 'chrome':
				$this->driver = RemoteWebDriver::create($serverUrl, DesiredCapabilities::chrome());
				break;
			case 'firefox':
				$this->driver = RemoteWebDriver::create($serverUrl, DesiredCapabilities::firefox());
				break;
			case 'edge':
				$this->driver = RemoteWebDriver::create($serverUrl, DesiredCapabilities::microsoftEdge());
				break;
			case 'iphone':
				$this->driver = RemoteWebDriver::create($serverUrl, DesiredCapabilities::iphone());
				break;
			case 'ipad':
				$this->driver = RemoteWebDriver::create($serverUrl, DesiredCapabilities::ipad());
				break;
			case 'opera':
				$this->driver = RemoteWebDriver::create($serverUrl, DesiredCapabilities::opera());
				break;
			case 'safari':
				$this->driver = RemoteWebDriver::create($serverUrl, DesiredCapabilities::safari());
				break;
			case 'android':
				$this->driver = RemoteWebDriver::create($serverUrl, DesiredCapabilities::android());
				break;
		}
	}

	public function getDriver()
	{
		if (empty($this->driver)) {
			throw new \Exception('You need to call "createDriver" before invoke this method!');
		}
		return $this->driver;
	}

	/**
	 * @param WebDriverElement $element
	 * @param int $timeout
	 * @return WebDriverElement
	 */
	public function whenVisible(WebDriverElement $element, $timeout = 10)
	{
		$this->driver->wait($timeout)->until(WebDriverExpectedCondition::visibilityOf($element));
		return $element;
	}

	public function whenClickable($id, $timeout = 10)
	{
		$this->driver->wait($timeout)->until(WebDriverExpectedCondition::elementToBeClickable(WebDriverBy::id($id)));
	}

	public function navigate($url) {
		$this->driver->get($url);
	}

	public function findElement($selector)
	{
		return $this->driver->findElement(WebDriverBy::cssSelector($selector));
	}

	public function findElements($selector)
	{
		return $this->driver->findElements(WebDriverBy::cssSelector($selector));
	}

	public function elementIsPresent()
	{

	}

	public function fillTextInput()
	{

	}

	public function getLabelOnError($selector = 'label.error')
	{
		return $this->driver->findElement(WebDriverBy::cssSelector('label.error'));
	}

	protected function pressEnter()
	{
		$this->driver->getKeyboard()->pressKey(WebDriverKeys::ENTER);
	}

	protected function pressKeyDown()
	{
		$this->driver->getKeyboard()->pressKey(WebDriverKeys::ARROW_DOWN);
	}

	protected function pressKeyUp()
	{
		$this->driver->getKeyboard()->pressKey(WebDriverKeys::ARROW_UP);
	}

	protected function isClickable($selector)
	{

	}

	protected function getLabel($selector)
	{

	}
}