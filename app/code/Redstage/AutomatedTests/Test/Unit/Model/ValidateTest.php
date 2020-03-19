<?php

namespace Redstage\AutomatedTests\Test\Unit\Model;

use PHPUnit\Framework\TestCase;
use Redstage\AutomatedTests\Model\Validate;
use Redstage\AutomatedTests\Helper\Data as HelperData;

class ValidateTest extends TestCase
{
    /**
     * @var Validate
     */
    protected $validate;

    /**
     * @inheritdoc
     */
    protected function setUp()
    {
        parent::setUp();
        $helper = $this->createMock(HelperData::class);

        $helper->expects($this->once())
            ->method('isNumeric')
            ->will($this->returnValue(true));

        $this->validate = new Validate($helper);
    }

    /**
     * @return void
     */
    public function testIsValid()
    {
        $this->assertTrue($this->validate->isValid(5.5));
    }
}