<?php

class Example
{
/*
  $this->webDriver->get($url);

		$this->whenVisible($this->getCheckBoxElement($P1_F1_checkbox, 1))->click();
		$this->whenVisible($this->getInputElement($P1_F3_text))->sendKeys("P1 F3")->sendKeys(WebDriverKeys::ENTER);
		$this->whenVisible($this->getInputElement($P2_F1_text))->sendKeys("P2 F1")->sendKeys(WebDriverKeys::ENTER);
		$this->whenVisible($this->getInputElement($P2_F2_postalCode))->sendKeys("31000")->sendKeys(WebDriverKeys::ENTER);
		$this->whenVisible($this->getInputElement($P3_F1_email))->sendKeys("p3_f1@test.fr")->sendKeys(WebDriverKeys::ENTER);

		// Assertion after submit and goto
        $formSubmission = FormSubmission::Find();
        $this->array($formSubmission)->hasSize(1);
        $this->integer($formSubmission[0]->test)->isEqualTo(0);
		$formSubmissionField = FormSubmissionField::Find();
		$this->array($formSubmissionField)->hasSize(5);
		$this->string($formSubmissionField[0]->answer)->isEqualTo("P1 F1 V1");
		$this->string($formSubmissionField[1]->answer)->isEqualTo("P1 F3");
		$this->string($formSubmissionField[2]->answer)->isEqualTo("P2 F1");
		$this->string($formSubmissionField[3]->answer)->isEqualTo("31000"); //P2 F3
		$this->string($formSubmissionField[4]->answer)->isEqualTo("P2 F3 submitAndGoto");

		$this->whenVisible($this->getEndElement());

		// Assertion after submit
        $formSubmission = FormSubmission::Find();
        $this->array($formSubmission)->hasSize(1);
        $this->integer($formSubmission[0]->test)->isEqualTo(0);
		$formSubmissionField = FormSubmissionField::Find();
		$this->array($formSubmissionField)->hasSize(7);
		$this->string($formSubmissionField[5]->answer)->isEqualTo("p3_f1@test.fr");
		$this->string($formSubmissionField[6]->answer)->isEqualTo("submit");
 */
}