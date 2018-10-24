<?php

namespace App\Soap\Request;

class StatusSMSArguments extends UserArguments
{
    /**
     * @access public
     * @var integer
     */
    public $count;
    /**
     * @access public
     * @var integer[]
     */
    public $ids;
}
