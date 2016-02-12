<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\Trading\Types;

/**
 *
 * @property string $SaleTemplateID
 * @property string $SaleTemplateName
 * @property double $SuccessPercent
 * @property \DTS\eBaySDK\Trading\Types\SellingManagerProductDetailsType $SellingManagerProductDetails
 * @property \DTS\eBaySDK\Trading\Types\ItemType $Template
 */
class SellingManagerTemplateDetailsType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'SaleTemplateID' => [
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SaleTemplateID'
        ],
        'SaleTemplateName' => [
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SaleTemplateName'
        ],
        'SuccessPercent' => [
            'type' => 'double',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SuccessPercent'
        ],
        'SellingManagerProductDetails' => [
            'type' => 'DTS\eBaySDK\Trading\Types\SellingManagerProductDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellingManagerProductDetails'
        ],
        'Template' => [
            'type' => 'DTS\eBaySDK\Trading\Types\ItemType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Template'
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
