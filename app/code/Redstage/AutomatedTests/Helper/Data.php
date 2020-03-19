<?php

namespace Redstage\AutomatedTests\Helper;

use Magento\Framework\App\Helper\AbstractHelper;

class Data extends AbstractHelper
{
    /**
     * Check if numeric
     *
     * @return boolean
     */
    public function isNumeric($value)
    {
        if (
            empty($value) ||
            (!empty($value) && !is_numeric($value))
        ) {
            return false;
        }
        return true;
    }

    /**
     * Clear string
     *
     * @param string $string
     * @return string
     */
    public function clearString($string)
    {
        return preg_replace('/\s*/m', '', $string);
    }
}
