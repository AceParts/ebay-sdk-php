<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\MerchantData\Types;

/**
 *
 * @property integer $SummaryDays
 * @property integer $TotalBids
 * @property integer $BidActivityWithSeller
 * @property integer $BidsToUniqueSellers
 * @property integer $BidsToUniqueCategories
 * @property integer $BidRetractions
 * @property \DTS\eBaySDK\MerchantData\Types\ItemBidDetailsType[] $ItemBidDetails
 */
class BiddingSummaryType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'SummaryDays' => [
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SummaryDays'
        ],
        'TotalBids' => [
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'TotalBids'
        ],
        'BidActivityWithSeller' => [
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BidActivityWithSeller'
        ],
        'BidsToUniqueSellers' => [
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BidsToUniqueSellers'
        ],
        'BidsToUniqueCategories' => [
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BidsToUniqueCategories'
        ],
        'BidRetractions' => [
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BidRetractions'
        ],
        'ItemBidDetails' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\ItemBidDetailsType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'ItemBidDetails'
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
