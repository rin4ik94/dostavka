<?php

namespace App\Soap\Request;

class TransmitSMSArguments extends UserArguments
{
    /**
     * @access public
     * @var ServiceArguments
     */
    public $service;
    /**
     * @access public
     * @var integer
     */
    public $count;
    /**
     * @access public
     * @var SMSArguments[]
     */
    public $messages;
}
