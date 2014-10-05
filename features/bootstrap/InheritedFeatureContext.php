<?php

class InheritedFeatureContext extends Behat\MinkExtension\Context\MinkContext
{
    /**
     * @Then /^I wait for the suggestion box to appear$/
     */
    public function iWaitForTheSuggestionBoxToAppear()
    {
        $this->getSession()->wait(5000, "$('.suggestions-results').children().length > 0");
    }


    /**
     * @Given /^user selected a random vendor with name \'([^\']*)\' from \'([^\']*)\' menu$/
     */
    public function userSelectedARandomVendorWithNameFromMenu($arg1, $arg2)
    {

        $this->getSession()->visit("http://www.sparwelt.de");
        $this->getSession()->getPage()->clickLink("Gutscheine");
        $this->getSession()->getPage()->clickLink("Amazon");
        sleep(10);


    }


    /**
     * @When /^selects the \'([^\']*)\' of voucher with title \'([^\']*)\'$/
     */
    public function selectsTheOfVoucherWithTitle($arg1, $arg2)
    {
        
    }

    /**
     * @Then /^new page is opened$/
     */
    public function newPageIsOpened()
    {
        
    }



    /**
     * @Given /^voucher popup is shown with the title \'([^\']*)\'$/
     */
    public function voucherPopupIsShownWithTheTitle($arg1)
    {
        
    }



    /**
     * @Given /^the voucher code is shown with text \'([^\']*)\'$/
     */
    public function theVoucherCodeIsShownWithText($arg1)
    {
        
    }

    /**
     * @When /^user copies the voucher code by clicking sissior icon$/
     */
    public function userCopiesTheVoucherCodeByClickingSissiorIcon()
    {
        
    }


    /**
     * @Then /^the voucher code should be saved in clipboard$/
     */
    public function theVoucherCodeShouldBeSavedInClipboard()
    {
        
    }
















































}
