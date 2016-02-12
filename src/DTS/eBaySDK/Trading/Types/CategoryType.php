<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\Trading\Types;

/**
 *
 * @property boolean $BestOfferEnabled
 * @property boolean $AutoPayEnabled
 * @property boolean $B2BVATEnabled
 * @property boolean $CatalogEnabled
 * @property string $CategoryID
 * @property integer $CategoryLevel
 * @property string $CategoryName
 * @property string[] $CategoryParentID
 * @property string[] $CategoryParentName
 * @property boolean $Expired
 * @property boolean $LeafCategory
 * @property boolean $Virtual
 * @property boolean $ORPA
 * @property boolean $ORRA
 * @property boolean $LSD
 */
class CategoryType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'BestOfferEnabled' => [
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BestOfferEnabled'
        ],
        'AutoPayEnabled' => [
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'AutoPayEnabled'
        ],
        'B2BVATEnabled' => [
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'B2BVATEnabled'
        ],
        'CatalogEnabled' => [
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CatalogEnabled'
        ],
        'CategoryID' => [
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CategoryID'
        ],
        'CategoryLevel' => [
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CategoryLevel'
        ],
        'CategoryName' => [
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CategoryName'
        ],
        'CategoryParentID' => [
            'type' => 'string',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'CategoryParentID'
        ],
        'CategoryParentName' => [
            'type' => 'string',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'CategoryParentName'
        ],
        'Expired' => [
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Expired'
        ],
        'LeafCategory' => [
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LeafCategory'
        ],
        'Virtual' => [
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Virtual'
        ],
        'ORPA' => [
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ORPA'
        ],
        'ORRA' => [
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ORRA'
        ],
        'LSD' => [
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LSD'
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
