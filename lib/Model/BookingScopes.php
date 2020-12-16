<?php
/**
 * BookingScopes
 *
 * PHP version 5
 *
 * @category Class
 * @package  DocPlanner\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Docplanner Integrations API
 *
 * This API gives You the ability to build Your own application and integrate it with Docplanner services.
 *
 * OpenAPI spec version: 0.0.1c
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.23
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace DocPlanner\Client\Model;
use \DocPlanner\Client\ObjectSerializer;

/**
 * BookingScopes Class Doc Comment
 *
 * @category Class
 * @package  DocPlanner\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BookingScopes
{
    /**
     * Possible values of this enum
     */
    const PATIENT = 'booking.patient';
const ADDRESS_SERVICE = 'booking.address_service';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::PATIENT,
self::ADDRESS_SERVICE,        ];
    }
}
