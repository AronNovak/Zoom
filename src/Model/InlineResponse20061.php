<?php
/**
 * InlineResponse20061
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Zoom API
 *
 * The Zoom API allows developers to safely and securely access information from Zoom. You can use this API to build private services or public applications on the [Zoom App Marketplace](http://marketplace.zoom.us). To learn how to get your credentials and create private/public applications, read our [Authorization Guide](https://marketplace.zoom.us/docs/guides/authorization/credentials). All endpoints are available via `https` and are located at `api.zoom.us/v2/`.  For instance you can list all users on an account via `https://api.zoom.us/v2/users/`.
 *
 * OpenAPI spec version: 2.0.0
 * Contact: developersupport@zoom.us
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.13
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Weble\Zoom\Model;

use \ArrayAccess;
use \Weble\Zoom\ObjectSerializer;

/**
 * InlineResponse20061 Class Doc Comment
 *
 * @category Class
 * @description Zoom User Profile
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InlineResponse20061 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'inline_response_200_61';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'phone_user_id' => 'string',
        'email' => 'string',
        'calling_plan' => '\Weble\Zoom\Model\InlineResponse20061CallingPlan[]',
        'phone_numbers' => '\Weble\Zoom\Model\InlineResponse20061PhoneNumbers[]',
        'extension_number' => 'int',
        'status' => 'string',
        'site_id' => 'string',
        'site_admin' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'phone_user_id' => null,
        'email' => null,
        'calling_plan' => null,
        'phone_numbers' => null,
        'extension_number' => null,
        'status' => null,
        'site_id' => null,
        'site_admin' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'phone_user_id' => 'phone_user_id',
        'email' => 'email',
        'calling_plan' => 'calling_plan',
        'phone_numbers' => 'phone_numbers',
        'extension_number' => 'extension_number',
        'status' => 'status',
        'site_id' => 'site_id',
        'site_admin' => 'site_admin'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'phone_user_id' => 'setPhoneUserId',
        'email' => 'setEmail',
        'calling_plan' => 'setCallingPlan',
        'phone_numbers' => 'setPhoneNumbers',
        'extension_number' => 'setExtensionNumber',
        'status' => 'setStatus',
        'site_id' => 'setSiteId',
        'site_admin' => 'setSiteAdmin'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'phone_user_id' => 'getPhoneUserId',
        'email' => 'getEmail',
        'calling_plan' => 'getCallingPlan',
        'phone_numbers' => 'getPhoneNumbers',
        'extension_number' => 'getExtensionNumber',
        'status' => 'getStatus',
        'site_id' => 'getSiteId',
        'site_admin' => 'getSiteAdmin'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    const STATUS_ACTIVATE = 'activate';
    const STATUS_DEACTIVATE = 'deactivate';



    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_ACTIVATE,
            self::STATUS_DEACTIVATE,
        ];
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['phone_user_id'] = isset($data['phone_user_id']) ? $data['phone_user_id'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['calling_plan'] = isset($data['calling_plan']) ? $data['calling_plan'] : null;
        $this->container['phone_numbers'] = isset($data['phone_numbers']) ? $data['phone_numbers'] : null;
        $this->container['extension_number'] = isset($data['extension_number']) ? $data['extension_number'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['site_id'] = isset($data['site_id']) ? $data['site_id'] : null;
        $this->container['site_admin'] = isset($data['site_admin']) ? $data['site_admin'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id Zoom User Id.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets phone_user_id
     *
     * @return string
     */
    public function getPhoneUserId()
    {
        return $this->container['phone_user_id'];
    }

    /**
     * Sets phone_user_id
     *
     * @param string $phone_user_id Zoom Phone User Id.
     *
     * @return $this
     */
    public function setPhoneUserId($phone_user_id)
    {
        $this->container['phone_user_id'] = $phone_user_id;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email Email address of the user.
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets calling_plan
     *
     * @return \Weble\Zoom\Model\InlineResponse20061CallingPlan[]
     */
    public function getCallingPlan()
    {
        return $this->container['calling_plan'];
    }

    /**
     * Sets calling_plan
     *
     * @param \Weble\Zoom\Model\InlineResponse20061CallingPlan[] $calling_plan Calling Plan of the user
     *
     * @return $this
     */
    public function setCallingPlan($calling_plan)
    {
        $this->container['calling_plan'] = $calling_plan;

        return $this;
    }

    /**
     * Gets phone_numbers
     *
     * @return \Weble\Zoom\Model\InlineResponse20061PhoneNumbers[]
     */
    public function getPhoneNumbers()
    {
        return $this->container['phone_numbers'];
    }

    /**
     * Sets phone_numbers
     *
     * @param \Weble\Zoom\Model\InlineResponse20061PhoneNumbers[] $phone_numbers phone_numbers
     *
     * @return $this
     */
    public function setPhoneNumbers($phone_numbers)
    {
        $this->container['phone_numbers'] = $phone_numbers;

        return $this;
    }

    /**
     * Gets extension_number
     *
     * @return int
     */
    public function getExtensionNumber()
    {
        return $this->container['extension_number'];
    }

    /**
     * Sets extension_number
     *
     * @param int $extension_number Extension number
     *
     * @return $this
     */
    public function setExtensionNumber($extension_number)
    {
        $this->container['extension_number'] = $extension_number;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status The status of the user.<br> `activate`: An active user. <br> `deactivate`: User has been deactivated from the ZoomPhone system.
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets site_id
     *
     * @return string
     */
    public function getSiteId()
    {
        return $this->container['site_id'];
    }

    /**
     * Sets site_id
     *
     * @param string $site_id Unique Identifier for a [site](https://support.zoom.us/hc/en-us/articles/360020809672).
     *
     * @return $this
     */
    public function setSiteId($site_id)
    {
        $this->container['site_id'] = $site_id;

        return $this;
    }

    /**
     * Gets site_admin
     *
     * @return bool
     */
    public function getSiteAdmin()
    {
        return $this->container['site_admin'];
    }

    /**
     * Sets site_admin
     *
     * @param bool $site_admin Indicates whether the user is a [site admin](https://support.zoom.us/hc/en-us/articles/360042099012) or not.
     *
     * @return $this
     */
    public function setSiteAdmin($site_admin)
    {
        $this->container['site_admin'] = $site_admin;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

