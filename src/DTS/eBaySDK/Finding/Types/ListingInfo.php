<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\Finding\Types;

/**
 *
 * @property boolean $bestOfferEnabled
 * @property boolean $buyItNowAvailable
 * @property \DTS\eBaySDK\Finding\Types\Amount $buyItNowPrice
 * @property \DTS\eBaySDK\Finding\Types\Amount $convertedBuyItNowPrice
 * @property \DateTime $startTime
 * @property \DateTime $endTime
 * @property string $listingType
 * @property boolean $gift
 */
class ListingInfo extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'bestOfferEnabled' => [
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'bestOfferEnabled'
        ],
        'buyItNowAvailable' => [
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'buyItNowAvailable'
        ],
        'buyItNowPrice' => [
            'type' => 'DTS\eBaySDK\Finding\Types\Amount',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'buyItNowPrice'
        ],
        'convertedBuyItNowPrice' => [
            'type' => 'DTS\eBaySDK\Finding\Types\Amount',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'convertedBuyItNowPrice'
        ],
        'startTime' => [
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'startTime'
        ],
        'endTime' => [
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'endTime'
        ],
        'listingType' => [
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'listingType'
        ],
        'gift' => [
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'gift'
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
            self::$xmlNamespaces[__CLASS__] = 'xmlns="http://www.ebay.com/marketplace/search/v1/services"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
