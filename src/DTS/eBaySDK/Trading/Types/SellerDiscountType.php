<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\Trading\Types;

/**
 *
 * @property integer $CampaignID
 * @property string $CampaignDisplayName
 * @property \DTS\eBaySDK\Trading\Types\AmountType $ItemDiscountAmount
 * @property \DTS\eBaySDK\Trading\Types\AmountType $ShippingDiscountAmount
 */
class SellerDiscountType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'CampaignID' => [
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CampaignID'
        ],
        'CampaignDisplayName' => [
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CampaignDisplayName'
        ],
        'ItemDiscountAmount' => [
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ItemDiscountAmount'
        ],
        'ShippingDiscountAmount' => [
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingDiscountAmount'
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
