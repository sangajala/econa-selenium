<?php
use Behat\MinkExtension\Context\RawMinkContext;
use Behat\MinkExtension\Context\MinkContext;
//require_once 'PHPUnit/Framework/Assert/Functions.php';
//require_once 'PHPUnit/Autoload.php';
//require_once 'vendor/autoload.php';

//use Behat\Behat\Context\ClosuredContextInterface,
//    Behat\Behat\Context\TranslatedContextInterface,
//    Behat\Behat\Context\BehatContext,
//    Behat\Behat\Exception\PendingException;
//use Behat\Gherkin\Node\PyStringNode,
//    Behat\Gherkin\Node\TableNode;

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
    /**
     * @Then /^Search Engine Robots can access the file with url "([^"]*)"$/
     */
    public function searchEngineRobotsCanAccessTheFileWithUrl($arg1)
    {
        $this->getSession()->visit($arg1);
        $headers = get_headers($arg1);
        $response_code = substr($headers[0], 9, 3);
        echo $response_code;
        \PHPUnit_Framework_Assert::assertEquals(200,$response_code);

        //the below command also checks for the status code, But that fucntion is not being supported by the
        //Behat\Mink\Driver\Selenium2Driver
        // $this->assertSession()->statusCodeEquals(200);
    }

    /**
     * @Then /^File content "([^"]*)" should be shown in the screen$/
     */
    public function fileContentShouldBeShownInTheScreen($arg1)
    {
        $page_content = $this->getSession()->getPage()->getContent();
        \PHPUnit_Framework_Assert::assertContains($arg1,$page_content);

        //another way to achieve the same assertion through Behat Mink function
        //This did not work. it internally looks for the element with xpath "//html"
        //and takes the page content and check for the presence of string passed as its argument
        //Our pages sitemap.xml and robot.txt too have have //html, but not sure why it does not work
        //$this->assertSession()->pageTextContains($this->fixStepArgument($arg1));
    }















































}
