<?php 
/*
 * UberAPILib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ) on 07/17/2016
 */

namespace UberAPILib\Models;

use JsonSerializable;

/**
 * @todo Write general description for this model
 */
class Error implements JsonSerializable {
    /**
     * @todo Write general description for this property
     * @var integer $code public property
     */
    public $code;

    /**
     * @todo Write general description for this property
     * @var string $message public property
     */
    public $message;

    /**
     * @todo Write general description for this property
     * @var object $fields public property
     */
    public $fields;

    /**
     * Constructor to set initial or default values of member properties
     * @param   integer           $code      Initialization value for the property $this->code   
     * @param   string            $message   Initialization value for the property $this->message
     * @param   object            $fields    Initialization value for the property $this->fields 
     */
    public function __construct()
    {
        if(3 == func_num_args())
        {
            $this->code    = func_get_arg(0);
            $this->message = func_get_arg(1);
            $this->fields  = func_get_arg(2);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['code']    = $this->code;
        $json['message'] = $this->message;
        $json['fields']  = $this->fields;

        return $json;
    }
}