<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

use Behat\Mink\Mink,
    Behat\Mink\Session,
    Behat\Mink\Driver\BrowserKitDriver;

use Behat\Mink\Driver\DriverInterface;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context
{
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
    }

    /**
     * @Given some precondition
     */
    public function somePrecondition()
    {
        // Choose a Mink driver. More about it in later chapters.
        $app  = require_once(__DIR__.'/app.php'); // Silex app

        $mink = new Mink(array(
            'silex' => new Session(new DriverInterface),
        ));
        
        //$driver = new BrowserKitDriver();

        $mink->getSession('silex')->getPage()->findLink('Chat')->click();

        throw new PendingException();
    }

    /**
     * @Given some other precondition
     */
    public function someOtherPrecondition()
    {
        throw new PendingException();
    }

    /**
     * @When some action by the actor
     */
    public function someActionByTheActor()
    {
        throw new PendingException();
    }

    /**
     * @When some other action
     */
    public function someOtherAction()
    {
        throw new PendingException();
    }

    /**
     * @Then some testable outcome is achieved
     */
    public function someTestableOutcomeIsAchieved()
    {
        throw new PendingException();
    }
}
