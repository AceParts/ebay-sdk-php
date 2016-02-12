<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\ReturnManagement\Types;

/**
 *
 * @property \DTS\eBaySDK\ReturnManagement\Types\IssueRefundOptionType $issueRefund
 * @property \DTS\eBaySDK\ReturnManagement\Types\ProvideSellerInfoOptionType $provideSellerInfo
 */
class ActivityOptionListType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'issueRefund' => [
            'type' => 'DTS\eBaySDK\ReturnManagement\Types\IssueRefundOptionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'issueRefund'
        ],
        'provideSellerInfo' => [
            'type' => 'DTS\eBaySDK\ReturnManagement\Types\ProvideSellerInfoOptionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'provideSellerInfo'
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
            self::$xmlNamespaces[__CLASS__] = 'xmlns="http://www.ebay.com/marketplace/returns/v1/services"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
