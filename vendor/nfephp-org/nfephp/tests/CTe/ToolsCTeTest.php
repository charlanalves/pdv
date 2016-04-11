<?php

/**
 * Class ToolsCTeTest
 * @author Roberto L. Machado <linux.rlm at gmail dot com>
 */
use NFePHP\CTe\ToolsCTe;

class ToolsCTeTest extends PHPUnit_Framework_TestCase
{
    public $mdfe;
    
    /**
     * @expectedException NFePHP\Common\Exception\InvalidArgumentException
     */
    public function testeInstanciar()
    {
        $configJson = dirname(dirname(__FILE__)) . '/fixtures/config/fakeconfig.json';
        $this->mdfe = new ToolsCTe($configJson);
    }
}
