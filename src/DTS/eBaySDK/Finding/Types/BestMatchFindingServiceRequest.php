<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\Finding\Types;

/**
 *
 * @property \DTS\eBaySDK\Finding\Types\PaginationInput $paginationInput
 * @property string $buyerPostalCode
 * @property \DTS\eBaySDK\Finding\Types\Affiliate $affiliate
 */
class BestMatchFindingServiceRequest extends \DTS\eBaySDK\Finding\Types\BaseServiceRequest
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'paginationInput' => [
            'type' => 'DTS\eBaySDK\Finding\Types\PaginationInput',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'paginationInput'
        ],
        'buyerPostalCode' => [
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'buyerPostalCode'
        ],
        'affiliate' => [
            'type' => 'DTS\eBaySDK\Finding\Types\Affiliate',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'affiliate'
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
