<?php

namespace Redstage\AutomatedTests\Model;

use Redstage\AutomatedTests\Helper\Data as HelperData;

class Validate
{
    /**
     * @var HelperData
     */
    protected $helper;

    public function __construct(
        HelperData $helper
    )
    {
        $this->helper = $helper;
    }

    /**
     * @param mixed $value
     * @return boolean
     */
    public function isValid($value)
    {
        if (!$this->helper->isNumeric($value)) {
            return false;
        }

        return true;
    }
}