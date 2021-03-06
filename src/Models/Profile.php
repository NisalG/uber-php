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
class Profile implements JsonSerializable {
    /**
     * First name of the Uber user.
     * @maps first_name
     * @var string $firstName public property
     */
    public $firstName;

    /**
     * Last name of the Uber user.
     * @maps last_name
     * @var string $lastName public property
     */
    public $lastName;

    /**
     * Email address of the Uber user
     * @var string $email public property
     */
    public $email;

    /**
     * Image URL of the Uber user.
     * @var string $picture public property
     */
    public $picture;

    /**
     * Promo code of the Uber user.
     * @maps promo_code
     * @var string $promoCode public property
     */
    public $promoCode;

    /**
     * Constructor to set initial or default values of member properties
     * @param   string            $firstName    Initialization value for the property $this->firstName 
     * @param   string            $lastName     Initialization value for the property $this->lastName  
     * @param   string            $email        Initialization value for the property $this->email     
     * @param   string            $picture      Initialization value for the property $this->picture   
     * @param   string            $promoCode    Initialization value for the property $this->promoCode 
     */
    public function __construct()
    {
        if(5 == func_num_args())
        {
            $this->firstName  = func_get_arg(0);
            $this->lastName   = func_get_arg(1);
            $this->email      = func_get_arg(2);
            $this->picture    = func_get_arg(3);
            $this->promoCode  = func_get_arg(4);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['first_name'] = $this->firstName;
        $json['last_name']  = $this->lastName;
        $json['email']      = $this->email;
        $json['picture']    = $this->picture;
        $json['promo_code'] = $this->promoCode;

        return $json;
    }
}