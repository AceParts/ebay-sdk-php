<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\Trading\Types;

/**
 *
 * @property \DTS\eBaySDK\Trading\Types\SellingStatusType $SellingStatus
 * @property string $TransactionID
 * @property \DTS\eBaySDK\Trading\Types\BestOfferType $BestOffer
 * @property string $OrderLineItemID
 */
class PlaceOfferResponseType extends \DTS\eBaySDK\Trading\Types\AbstractResponseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'SellingStatus' => [
            'type' => 'DTS\eBaySDK\Trading\Types\SellingStatusType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellingStatus'
        ],
        'TransactionID' => [
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'TransactionID'
        ],
        'BestOffer' => [
            'type' => 'DTS\eBaySDK\Trading\Types\BestOfferType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BestOffer'
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

        $this->setValues(__CLASS__, $childValues);
    }
}
