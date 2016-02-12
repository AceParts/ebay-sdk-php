<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\BusinessPoliciesManagement\Types;

/**
 *
 * @property string $superscript
 * @property integer $maxDeliveryServiceDefinition
 * @property integer $minDeliveryServiceDefinition
 * @property string $name
 */
class ServiceDefinition extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'superscript' => [
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'superscript'
        ],
        'maxDeliveryServiceDefinition' => [
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'maxDeliveryServiceDefinition'
        ],
        'minDeliveryServiceDefinition' => [
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'minDeliveryServiceDefinition'
        ],
        'name' => [
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'name'
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
            self::$xmlNamespaces[__CLASS__] = 'xmlns="http://www.ebay.com/marketplace/selling/v1/services"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
