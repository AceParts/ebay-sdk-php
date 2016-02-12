<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\Trading\Types;

/**
 *
 * @property string $ItemID
 * @property string $TransactionID
 * @property \DTS\eBaySDK\Trading\Types\FeedbackInfoType $FeedbackInfo
 * @property boolean $Shipped
 * @property boolean $Paid
 * @property \DTS\eBaySDK\Trading\Enums\ListingTypeCodeType $ListingType
 * @property \DTS\eBaySDK\Trading\Types\ShipmentType $Shipment
 * @property string $OrderID
 * @property string $OrderLineItemID
 */
class CompleteSaleRequestType extends \DTS\eBaySDK\Trading\Types\AbstractRequestType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'ItemID' => [
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ItemID'
        ],
        'TransactionID' => [
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'TransactionID'
        ],
        'FeedbackInfo' => [
            'type' => 'DTS\eBaySDK\Trading\Types\FeedbackInfoType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'FeedbackInfo'
        ],
        'Shipped' => [
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Shipped'
        ],
        'Paid' => [
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Paid'
        ],
        'ListingType' => [
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ListingType'
        ],
        'Shipment' => [
            'type' => 'DTS\eBaySDK\Trading\Types\ShipmentType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Shipment'
        ],
        'OrderID' => [
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'OrderID'
        ],
        'OrderLineItemID' => [
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'OrderLineItemID'
        ]
    ];

    /**
     * @param array $values Optional properties and values to assign to the object.
     */
    public function __construct(array $values = [])
    {
        list($parentValues, $childValues) = self::getParentValues(self::$propertyTypes, $values);

        parent::__construct($parentValues);

        if (!array_key_exists(__CLASS__, self::$properties)) {
            self::$properties[__CLASS__] = array_merge(self::$properties[get_parent_class()], self::$propertyTypes);
        }

        if (!array_key_exists(__CLASS__, self::$xmlNamespaces)) {
            self::$xmlNamespaces[__CLASS__] = 'xmlns="urn:ebay:apis:eBLBaseComponents"';
        }

        if (!array_key_exists(__CLASS__, self::$requestXmlRootElementNames)) {
            self::$requestXmlRootElementNames[__CLASS__] = 'CompleteSaleRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
