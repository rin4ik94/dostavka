<?php

namespace App\Soap\Request;

class SMSArguments
{
    /**
     * @access public
     * @var integer
     */
    public $id;
    /**
     * @access public
     * @var string
     */
    public $phone;
    /**
     * @access public
     * @var string
     */
    public $text;
    /**
     * @access public
     * @var dateTime
     */
    public $type;
}
