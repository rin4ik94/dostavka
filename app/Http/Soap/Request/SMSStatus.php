<?php

namespace App\Soap\Request;

class SMSStatus
{
    /**
     * @access public
     * @var integer
     */
    public $id;
    /**
     * @access public
     * @var integer
     */
    public $status;
    /**
     * @access public
     * @var dateTime
     */
    public $timeStamp;
}
