<?php
/**
 * AddressTokensTransactionConfirmedEachConfirmationToken
 *
 * PHP version 8.1
 *
 * @category Class
 * @package  MitinSany/CryptoapisApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * CryptoAPIs
 *
 * Crypto APIs is a complex and innovative infrastructure layer that radically simplifies the development of any Blockchain and Crypto related applications. Organized around REST, Crypto APIs can assist both novice Bitcoin/Ethereum enthusiasts and crypto experts with the development of their blockchain applications. Crypto APIs provides unified endpoints and data, raw data, automatic tokens and coins forwardings, callback functionalities, and much more.
 *
 * The version of the OpenAPI document: 2024-12-12
 * Contact: developers@cryptoapis.io
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.14.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace MitinSany/CryptoapisApiClient\Model;

use \ArrayAccess;
use \MitinSany/CryptoapisApiClient\ObjectSerializer;

/**
 * AddressTokensTransactionConfirmedEachConfirmationToken Class Doc Comment
 *
 * @category Class
 * @package  MitinSany/CryptoapisApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AddressTokensTransactionConfirmedEachConfirmationToken implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AddressTokensTransactionConfirmedEachConfirmationToken';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'symbol' => 'string',
        'decimals' => 'string',
        'amount' => 'string',
        'contractAddress' => 'string',
        'tokenId' => 'string',
        'propertyId' => 'string',
        'transactionType' => 'string',
        'createdByTransactionId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'name' => null,
        'symbol' => null,
        'decimals' => null,
        'amount' => null,
        'contractAddress' => null,
        'tokenId' => null,
        'propertyId' => null,
        'transactionType' => null,
        'createdByTransactionId' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'name' => false,
        'symbol' => false,
        'decimals' => false,
        'amount' => false,
        'contractAddress' => false,
        'tokenId' => false,
        'propertyId' => false,
        'transactionType' => false,
        'createdByTransactionId' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'name' => 'name',
        'symbol' => 'symbol',
        'decimals' => 'decimals',
        'amount' => 'amount',
        'contractAddress' => 'contractAddress',
        'tokenId' => 'tokenId',
        'propertyId' => 'propertyId',
        'transactionType' => 'transactionType',
        'createdByTransactionId' => 'createdByTransactionId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'symbol' => 'setSymbol',
        'decimals' => 'setDecimals',
        'amount' => 'setAmount',
        'contractAddress' => 'setContractAddress',
        'tokenId' => 'setTokenId',
        'propertyId' => 'setPropertyId',
        'transactionType' => 'setTransactionType',
        'createdByTransactionId' => 'setCreatedByTransactionId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'symbol' => 'getSymbol',
        'decimals' => 'getDecimals',
        'amount' => 'getAmount',
        'contractAddress' => 'getContractAddress',
        'tokenId' => 'getTokenId',
        'propertyId' => 'getPropertyId',
        'transactionType' => 'getTransactionType',
        'createdByTransactionId' => 'getCreatedByTransactionId'
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
        return self::$openAPIModelName;
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
     * @param mixed[]|null $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('symbol', $data ?? [], null);
        $this->setIfExists('decimals', $data ?? [], null);
        $this->setIfExists('amount', $data ?? [], null);
        $this->setIfExists('contractAddress', $data ?? [], null);
        $this->setIfExists('tokenId', $data ?? [], null);
        $this->setIfExists('propertyId', $data ?? [], null);
        $this->setIfExists('transactionType', $data ?? [], null);
        $this->setIfExists('createdByTransactionId', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['symbol'] === null) {
            $invalidProperties[] = "'symbol' can't be null";
        }
        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if ($this->container['contractAddress'] === null) {
            $invalidProperties[] = "'contractAddress' can't be null";
        }
        if ($this->container['tokenId'] === null) {
            $invalidProperties[] = "'tokenId' can't be null";
        }
        if ($this->container['propertyId'] === null) {
            $invalidProperties[] = "'propertyId' can't be null";
        }
        if ($this->container['transactionType'] === null) {
            $invalidProperties[] = "'transactionType' can't be null";
        }
        if ($this->container['createdByTransactionId'] === null) {
            $invalidProperties[] = "'createdByTransactionId' can't be null";
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
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets symbol
     *
     * @return string
     */
    public function getSymbol()
    {
        return $this->container['symbol'];
    }

    /**
     * Sets symbol
     *
     * @param string $symbol symbol
     *
     * @return self
     */
    public function setSymbol($symbol)
    {
        if (is_null($symbol)) {
            throw new \InvalidArgumentException('non-nullable symbol cannot be null');
        }
        $this->container['symbol'] = $symbol;

        return $this;
    }

    /**
     * Gets decimals
     *
     * @return string|null
     */
    public function getDecimals()
    {
        return $this->container['decimals'];
    }

    /**
     * Sets decimals
     *
     * @param string|null $decimals decimals
     *
     * @return self
     */
    public function setDecimals($decimals)
    {
        if (is_null($decimals)) {
            throw new \InvalidArgumentException('non-nullable decimals cannot be null');
        }
        $this->container['decimals'] = $decimals;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return string
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param string $amount amount
     *
     * @return self
     */
    public function setAmount($amount)
    {
        if (is_null($amount)) {
            throw new \InvalidArgumentException('non-nullable amount cannot be null');
        }
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets contractAddress
     *
     * @return string
     */
    public function getContractAddress()
    {
        return $this->container['contractAddress'];
    }

    /**
     * Sets contractAddress
     *
     * @param string $contractAddress contractAddress
     *
     * @return self
     */
    public function setContractAddress($contractAddress)
    {
        if (is_null($contractAddress)) {
            throw new \InvalidArgumentException('non-nullable contractAddress cannot be null');
        }
        $this->container['contractAddress'] = $contractAddress;

        return $this;
    }

    /**
     * Gets tokenId
     *
     * @return string
     */
    public function getTokenId()
    {
        return $this->container['tokenId'];
    }

    /**
     * Sets tokenId
     *
     * @param string $tokenId tokenId
     *
     * @return self
     */
    public function setTokenId($tokenId)
    {
        if (is_null($tokenId)) {
            throw new \InvalidArgumentException('non-nullable tokenId cannot be null');
        }
        $this->container['tokenId'] = $tokenId;

        return $this;
    }

    /**
     * Gets propertyId
     *
     * @return string
     */
    public function getPropertyId()
    {
        return $this->container['propertyId'];
    }

    /**
     * Sets propertyId
     *
     * @param string $propertyId Defines the ID of the property for Omni Layer.
     *
     * @return self
     */
    public function setPropertyId($propertyId)
    {
        if (is_null($propertyId)) {
            throw new \InvalidArgumentException('non-nullable propertyId cannot be null');
        }
        $this->container['propertyId'] = $propertyId;

        return $this;
    }

    /**
     * Gets transactionType
     *
     * @return string
     */
    public function getTransactionType()
    {
        return $this->container['transactionType'];
    }

    /**
     * Sets transactionType
     *
     * @param string $transactionType Defines the type of the transaction.
     *
     * @return self
     */
    public function setTransactionType($transactionType)
    {
        if (is_null($transactionType)) {
            throw new \InvalidArgumentException('non-nullable transactionType cannot be null');
        }
        $this->container['transactionType'] = $transactionType;

        return $this;
    }

    /**
     * Gets createdByTransactionId
     *
     * @return string
     */
    public function getCreatedByTransactionId()
    {
        return $this->container['createdByTransactionId'];
    }

    /**
     * Sets createdByTransactionId
     *
     * @param string $createdByTransactionId The transaction ID used to create the token.
     *
     * @return self
     */
    public function setCreatedByTransactionId($createdByTransactionId)
    {
        if (is_null($createdByTransactionId)) {
            throw new \InvalidArgumentException('non-nullable createdByTransactionId cannot be null');
        }
        $this->container['createdByTransactionId'] = $createdByTransactionId;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


