<?php

namespace Redstage\AutomatedTests\Test\Unit\Helper;

use PHPUnit\Framework\TestCase;
use Redstage\AutomatedTests\Helper\Data as HelperData;
use Magento\Framework\App\Helper\Context;

class DataTest extends TestCase
{
    /**
     * @var HelperData
     */
    protected $helper;

    /**
     * @inheritdoc
     */
    protected function setUp()
    {
        parent::setUp();
        $context = $this->createMock(Context::class);
        $this->helper = new HelperData($context);
    }

    /**
     * @return void
     */
    public function testIsNumeric()
    {
        $this->assertTrue($this->helper->isNumeric(5.5));
    }

    /**
     * @return void
     */
    public function testIsNotNumeric()
    {
        $this->assertFalse($this->helper->isNumeric('test'));
    }

    /**
     * @return void
     */
    public function testClearString()
    {
        $clearedString = $this->helper->clearString("Test,\t\n Text  ");
        $this->assertEquals($clearedString, 'Test,Text');
    }
}