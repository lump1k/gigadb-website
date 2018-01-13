<?php

use Behat\Behat\Context\ClosuredContextInterface,
    Behat\Behat\Context\TranslatedContextInterface,
    Behat\Behat\Context\BehatContext,
    Behat\Behat\Exception\PendingException;
use Behat\Gherkin\Node\PyStringNode,
    Behat\Gherkin\Node\TableNode;

use Behat\MinkExtension\Context\MinkContext;
use Behat\YiiExtension\Context\YiiAwareContextInterface;



/**
 * AuthorWorkflow Features context.
 */
class AuthorWorkflowContext extends Behat\MinkExtension\Context\MinkContext implements Behat\YiiExtension\Context\YiiAwareContextInterface
{
    private $surname = null;
    private $first_name = null;
    private $middle_name =  null;

	    /**
     * Initializes context.
     * Every scenario gets it's own context object.
     *
     * @param array $parameters context parameters (set them up through behat.yml)
     */
    public function __construct(array $parameters)
    {
        // Initialize your context here
    }
    public function setYiiWebApplication(\CWebApplication $yii)
    {
        $this->yii = $yii ;
    }
    public function getYii()
    {
        if (null === $this->yii) {
            throw new \RuntimeException(
                'Yii instance has not been set on Yii context class. ' .
                'Have you enabled the Yii Extension?'
            );
        }
        return $this->yii ;
    }
//
// Place your definition and hook methods here:
//
//    /**
//     * @Given /^I have done something with "([^"]*)"$/
//     */
//    public function iHaveDoneSomethingWith($argument)
//    {
//        doSomethingWith($argument);
//    }
//
    
    /**
     * @Given /^author has surname "([^"]*)"$/
     */
    public function authorHasSurname($arg1)
    {
        $this->surname = $arg1 ;
    }

    /**
     * @Given /^author has first name "([^"]*)"$/
     */
    public function authorHasFirstName($arg1)
    {
        $this->first_name = $arg1 ;
    }

    /**
     * @Given /^author has middle name "([^"]*)"$/
     */
    public function authorHasMiddleName($arg1)
    {
        $this->middle_name = $arg1 ;
    }



    /**
     * @BeforeScenario
     */
    public function reset()
    {
        $this->surname = null;
        $this->first_name = null;
        $this->middle_name = null;
    }



    /**
     * @BeforeSuite
     */
    public static function initialize_databaes()
    {
        print_r("Initializing the database... ");
         exec("vagrant ssh -c \"sudo -Hiu postgres /usr/bin/psql < /vagrant/sql/kill_drop_recreate.sql\"",$kill_output);
        // var_dump($kill_output);
        exec("vagrant ssh -c \"pg_restore -i -h localhost -p 5432 -U gigadb -d gigadb -v /vagrant/sql/author-names-80-81-82.pgdmp
\"",$output);
        // var_dump($output);
    }


}