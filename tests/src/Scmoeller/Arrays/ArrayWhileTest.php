<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Scmoeller\Arrays;

require_once __DIR__ . '/../../../../src/Scmoeller/Arrays/ArrayWhile.php';

use PHPUnit_Framework_TestCase;

/**
 * Description of TestArrayWhile
 *
 * @author moeller
 */
class ArrayWhileTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var ArrayWhile
     */
    private $arrayWhile;
    
    protected function setUp()
    {
        parent::setUp();
        
        $this->arrayWhile = new ArrayWhile();
    }

    public function testExecute()
    {
        $testArray = array(
            'EDDH' => 'Hamburg',
            'EDDF' => 'Frankfurt am Main',
            'EDDM' => 'München'
        );
        
        $this->assertEquals($testArray, $this->arrayWhile->execute($testArray));
    }
}
