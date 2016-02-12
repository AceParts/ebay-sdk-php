<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\Trading\Types;

/**
 *
 * @property string $SKU
 * @property \DTS\eBaySDK\Trading\Types\AmountType $StartPrice
 * @property integer $Quantity
 * @property \DTS\eBaySDK\Trading\Types\NameValueListArrayType[] $VariationSpecifics
 * @property integer $UnitsAvailable
 * @property \DTS\eBaySDK\Trading\Types\AmountType $UnitCost
 * @property \DTS\eBaySDK\Trading\Types\SellingStatusType $SellingStatus
 * @property string $VariationTitle
 * @property string $VariationViewItemURL
 * @property boolean $Delete
 * @property \DTS\eBaySDK\Trading\Types\SellingManagerProductInventoryStatusType $SellingManagerProductInventoryStatus
 * @property integer $WatchCount
 * @property string $PrivateNotes
 * @property \DTS\eBaySDK\Trading\Types\DiscountPriceInfoType $DiscountPriceInfo
 * @property \DTS\eBaySDK\Trading\Types\VariationProductListingDetailsType $VariationProductListingDetails
 */
class VariationType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'SKU' => [
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SKU'
        ],
        'StartPrice' => [
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'StartPrice'
        ],
        'Quantity' => [
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Quantity'
        ],
        'VariationSpecifics' => [
            'type' => 'DTS\eBaySDK\Trading\Types\NameValueListArrayType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'VariationSpecifics'
        ],
        'UnitsAvailable' => [
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'UnitsAvailable'
        ],
        'UnitCost' => [
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'UnitCost'
        ],
        'SellingStatus' => [
            'type' => 'DTS\eBaySDK\Trading\Types\SellingStatusType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellingStatus'
        ],
        'VariationTitle' => [
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'VariationTitle'
        ],
        'VariationViewItemURL' => [
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'VariationViewItemURL'
        ],
        'Delete' => [
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Delete'
        ],
        'SellingManagerProductInventoryStatus' => [
            'type' => 'DTS\eBaySDK\Trading\Types\SellingManagerProductInventoryStatusType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellingManagerProductInventoryStatus'
        ],
        'WatchCount' => [
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'WatchCount'
        ],
        'PrivateNotes' => [
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PrivateNotes'
        ],
        'DiscountPriceInfo' => [
            'type' => 'DTS\eBaySDK\Trading\Types\DiscountPriceInfoType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DiscountPriceInfo'
        ],
        'VariationProductListingDetails' => [
            'type' => 'DTS\eBaySDK\Trading\Types\VariationProductListingDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'VariationProductListingDetails'
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
