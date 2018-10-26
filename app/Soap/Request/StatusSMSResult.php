<?php

namespace App\Soap\Request;

class StatusSMSResult
{
    /**
     * @access public
     * @var integer
     */
    public $status;
    /**
     * @access public
     * @var string
     */
    public $errorMsg;
    /**
     * @access public
     * @var integer
     */
    public $count;
    /**
     * @access public
     * @var SMSStatus[]
     */
    public $messages;
}
