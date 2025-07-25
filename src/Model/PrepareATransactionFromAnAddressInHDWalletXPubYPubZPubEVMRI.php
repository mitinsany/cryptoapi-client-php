<?php
/**
 * PrepareATransactionFromAnAddressInHDWalletXPubYPubZPubEVMRI
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
 * PrepareATransactionFromAnAddressInHDWalletXPubYPubZPubEVMRI Class Doc Comment
 *
 * @category Class
 * @package  MitinSany/CryptoapisApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PrepareATransactionFromAnAddressInHDWalletXPubYPubZPubEVMRI implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PrepareATransactionFromAnAddressInHDWalletXPubYPubZPubEVMRI';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'derivationIndex' => 'int',
        'inputData' => 'string',
        'nonce' => 'int',
        'recipient' => 'string',
        'sender' => 'string',
        'sigHash' => 'string',
        'value' => '\MitinSany/CryptoapisApiClient\Model\PrepareATransactionFromAnAddressInHDWalletXPubYPubZPubEVMRIValue',
        'fee' => '\MitinSany/CryptoapisApiClient\Model\PrepareATransactionFromAnAddressInHDWalletXPubYPubZPubEVMRIFee',
        'type' => 'string',
        'gasLimit' => 'int',
        'gasPrice' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'derivationIndex' => 'int64',
        'inputData' => null,
        'nonce' => null,
        'recipient' => null,
        'sender' => null,
        'sigHash' => null,
        'value' => null,
        'fee' => null,
        'type' => null,
        'gasLimit' => null,
        'gasPrice' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'derivationIndex' => false,
        'inputData' => false,
        'nonce' => false,
        'recipient' => false,
        'sender' => false,
        'sigHash' => false,
        'value' => false,
        'fee' => false,
        'type' => false,
        'gasLimit' => false,
        'gasPrice' => false
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
        'derivationIndex' => 'derivationIndex',
        'inputData' => 'inputData',
        'nonce' => 'nonce',
        'recipient' => 'recipient',
        'sender' => 'sender',
        'sigHash' => 'sigHash',
        'value' => 'value',
        'fee' => 'fee',
        'type' => 'type',
        'gasLimit' => 'gasLimit',
        'gasPrice' => 'gasPrice'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'derivationIndex' => 'setDerivationIndex',
        'inputData' => 'setInputData',
        'nonce' => 'setNonce',
        'recipient' => 'setRecipient',
        'sender' => 'setSender',
        'sigHash' => 'setSigHash',
        'value' => 'setValue',
        'fee' => 'setFee',
        'type' => 'setType',
        'gasLimit' => 'setGasLimit',
        'gasPrice' => 'setGasPrice'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'derivationIndex' => 'getDerivationIndex',
        'inputData' => 'getInputData',
        'nonce' => 'getNonce',
        'recipient' => 'getRecipient',
        'sender' => 'getSender',
        'sigHash' => 'getSigHash',
        'value' => 'getValue',
        'fee' => 'getFee',
        'type' => 'getType',
        'gasLimit' => 'getGasLimit',
        'gasPrice' => 'getGasPrice'
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

    public const TYPE_LEGACY_TRANSACTION = 'legacy-transaction';
    public const TYPE_ACCESS_LIST_TRANSACTION = 'access-list-transaction';
    public const TYPE_GAS_FEE_MARKET_TRANSACTION = 'gas-fee-market-transaction';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_LEGACY_TRANSACTION,
            self::TYPE_ACCESS_LIST_TRANSACTION,
            self::TYPE_GAS_FEE_MARKET_TRANSACTION,
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
     * @param mixed[]|null $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->setIfExists('derivationIndex', $data ?? [], null);
        $this->setIfExists('inputData', $data ?? [], null);
        $this->setIfExists('nonce', $data ?? [], null);
        $this->setIfExists('recipient', $data ?? [], null);
        $this->setIfExists('sender', $data ?? [], null);
        $this->setIfExists('sigHash', $data ?? [], null);
        $this->setIfExists('value', $data ?? [], null);
        $this->setIfExists('fee', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('gasLimit', $data ?? [], null);
        $this->setIfExists('gasPrice', $data ?? [], null);
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

        if ($this->container['derivationIndex'] === null) {
            $invalidProperties[] = "'derivationIndex' can't be null";
        }
        if ($this->container['inputData'] === null) {
            $invalidProperties[] = "'inputData' can't be null";
        }
        if ($this->container['nonce'] === null) {
            $invalidProperties[] = "'nonce' can't be null";
        }
        if ($this->container['recipient'] === null) {
            $invalidProperties[] = "'recipient' can't be null";
        }
        if ($this->container['sender'] === null) {
            $invalidProperties[] = "'sender' can't be null";
        }
        if ($this->container['sigHash'] === null) {
            $invalidProperties[] = "'sigHash' can't be null";
        }
        if ($this->container['value'] === null) {
            $invalidProperties[] = "'value' can't be null";
        }
        if ($this->container['fee'] === null) {
            $invalidProperties[] = "'fee' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type', must be one of '%s'",
                $this->container['type'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['gasLimit'] === null) {
            $invalidProperties[] = "'gasLimit' can't be null";
        }
        if ($this->container['gasPrice'] === null) {
            $invalidProperties[] = "'gasPrice' can't be null";
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
     * Gets derivationIndex
     *
     * @return int
     */
    public function getDerivationIndex()
    {
        return $this->container['derivationIndex'];
    }

    /**
     * Sets derivationIndex
     *
     * @param int $derivationIndex Representation of the derivation index of the xpub address
     *
     * @return self
     */
    public function setDerivationIndex($derivationIndex)
    {
        if (is_null($derivationIndex)) {
            throw new \InvalidArgumentException('non-nullable derivationIndex cannot be null');
        }
        $this->container['derivationIndex'] = $derivationIndex;

        return $this;
    }

    /**
     * Gets inputData
     *
     * @return string
     */
    public function getInputData()
    {
        return $this->container['inputData'];
    }

    /**
     * Sets inputData
     *
     * @param string $inputData Representation of the data in hex value
     *
     * @return self
     */
    public function setInputData($inputData)
    {
        if (is_null($inputData)) {
            throw new \InvalidArgumentException('non-nullable inputData cannot be null');
        }
        $this->container['inputData'] = $inputData;

        return $this;
    }

    /**
     * Gets nonce
     *
     * @return int
     */
    public function getNonce()
    {
        return $this->container['nonce'];
    }

    /**
     * Sets nonce
     *
     * @param int $nonce Represents the sequential running number for an address, starting from 0 for the first transaction. E.g., if the nonce of a transaction is 10, it would be the 11th transaction sent from the sender's address.
     *
     * @return self
     */
    public function setNonce($nonce)
    {
        if (is_null($nonce)) {
            throw new \InvalidArgumentException('non-nullable nonce cannot be null');
        }
        $this->container['nonce'] = $nonce;

        return $this;
    }

    /**
     * Gets recipient
     *
     * @return string
     */
    public function getRecipient()
    {
        return $this->container['recipient'];
    }

    /**
     * Sets recipient
     *
     * @param string $recipient Represents a recipient addresses. In account-based protocols like Ethereum there is only one address in this list.
     *
     * @return self
     */
    public function setRecipient($recipient)
    {
        if (is_null($recipient)) {
            throw new \InvalidArgumentException('non-nullable recipient cannot be null');
        }
        $this->container['recipient'] = $recipient;

        return $this;
    }

    /**
     * Gets sender
     *
     * @return string
     */
    public function getSender()
    {
        return $this->container['sender'];
    }

    /**
     * Sets sender
     *
     * @param string $sender Represents a sender address with the respective amount. In account-based protocols like Ethereum there is only one address in this list.
     *
     * @return self
     */
    public function setSender($sender)
    {
        if (is_null($sender)) {
            throw new \InvalidArgumentException('non-nullable sender cannot be null');
        }
        $this->container['sender'] = $sender;

        return $this;
    }

    /**
     * Gets sigHash
     *
     * @return string
     */
    public function getSigHash()
    {
        return $this->container['sigHash'];
    }

    /**
     * Sets sigHash
     *
     * @param string $sigHash Representation of the hash that should be signed.
     *
     * @return self
     */
    public function setSigHash($sigHash)
    {
        if (is_null($sigHash)) {
            throw new \InvalidArgumentException('non-nullable sigHash cannot be null');
        }
        $this->container['sigHash'] = $sigHash;

        return $this;
    }

    /**
     * Gets value
     *
     * @return \MitinSany/CryptoapisApiClient\Model\PrepareATransactionFromAnAddressInHDWalletXPubYPubZPubEVMRIValue
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     *
     * @param \MitinSany/CryptoapisApiClient\Model\PrepareATransactionFromAnAddressInHDWalletXPubYPubZPubEVMRIValue $value value
     *
     * @return self
     */
    public function setValue($value)
    {
        if (is_null($value)) {
            throw new \InvalidArgumentException('non-nullable value cannot be null');
        }
        $this->container['value'] = $value;

        return $this;
    }

    /**
     * Gets fee
     *
     * @return \MitinSany/CryptoapisApiClient\Model\PrepareATransactionFromAnAddressInHDWalletXPubYPubZPubEVMRIFee
     */
    public function getFee()
    {
        return $this->container['fee'];
    }

    /**
     * Sets fee
     *
     * @param \MitinSany/CryptoapisApiClient\Model\PrepareATransactionFromAnAddressInHDWalletXPubYPubZPubEVMRIFee $fee fee
     *
     * @return self
     */
    public function setFee($fee)
    {
        if (is_null($fee)) {
            throw new \InvalidArgumentException('non-nullable fee cannot be null');
        }
        $this->container['fee'] = $fee;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type Representation of the transaction type
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'type', must be one of '%s'",
                    $type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets gasLimit
     *
     * @return int
     */
    public function getGasLimit()
    {
        return $this->container['gasLimit'];
    }

    /**
     * Sets gasLimit
     *
     * @param int $gasLimit Represents the amount of gas used by this specific transaction alone.
     *
     * @return self
     */
    public function setGasLimit($gasLimit)
    {
        if (is_null($gasLimit)) {
            throw new \InvalidArgumentException('non-nullable gasLimit cannot be null');
        }
        $this->container['gasLimit'] = $gasLimit;

        return $this;
    }

    /**
     * Gets gasPrice
     *
     * @return int
     */
    public function getGasPrice()
    {
        return $this->container['gasPrice'];
    }

    /**
     * Sets gasPrice
     *
     * @param int $gasPrice Represents the price offered to the miner to purchase this amount of gas.
     *
     * @return self
     */
    public function setGasPrice($gasPrice)
    {
        if (is_null($gasPrice)) {
            throw new \InvalidArgumentException('non-nullable gasPrice cannot be null');
        }
        $this->container['gasPrice'] = $gasPrice;

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


