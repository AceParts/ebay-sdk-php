<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\HalfFinding\Types;

/**
 *
 * @property \DTS\eBaySDK\HalfFinding\Enums\SortOrder $sortOrder
 * @property \DTS\eBaySDK\HalfFinding\Enums\SortOnType $sortOn
 */
class SortByType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'sortOrder' => [
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'sortOrder'
        ],
        'sortOn' => [
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'sortOn'
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
            self::$xmlNamespaces[__CLASS__] = 'xmlns="http://www.ebay.com/marketplace/half/v1/services"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
