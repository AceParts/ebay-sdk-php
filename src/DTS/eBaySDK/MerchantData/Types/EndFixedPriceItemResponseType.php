<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\MerchantData\Types;

/**
 *
 * @property \DateTime $EndTime
 * @property string $SKU
 */
class EndFixedPriceItemResponseType extends \DTS\eBaySDK\MerchantData\Types\AbstractResponseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'EndTime' => [
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'EndTime'
        ],
        'SKU' => [
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SKU'
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
            self::$requestXmlRootElementNames[__CLASS__] = 'EndFixedPriceItemResponse';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
