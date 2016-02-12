<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\Trading\Types;

/**
 *
 * @property \DTS\eBaySDK\Trading\Enums\PaymentStatusCodeType $eBayPaymentStatus
 * @property \DateTime $LastModifiedTime
 * @property \DTS\eBaySDK\Trading\Enums\BuyerPaymentMethodCodeType $PaymentMethod
 * @property \DTS\eBaySDK\Trading\Enums\CompleteStatusCodeType $Status
 * @property boolean $IntegratedMerchantCreditCardEnabled
 * @property \DTS\eBaySDK\Trading\Types\EBayPaymentMismatchDetailsType $eBayPaymentMismatchDetails
 * @property \DTS\eBaySDK\Trading\Enums\BuyerPaymentInstrumentCodeType $PaymentInstrument
 */
class CheckoutStatusType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'eBayPaymentStatus' => [
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'eBayPaymentStatus'
        ],
        'LastModifiedTime' => [
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LastModifiedTime'
        ],
        'PaymentMethod' => [
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PaymentMethod'
        ],
        'Status' => [
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Status'
        ],
        'IntegratedMerchantCreditCardEnabled' => [
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'IntegratedMerchantCreditCardEnabled'
        ],
        'eBayPaymentMismatchDetails' => [
            'type' => 'DTS\eBaySDK\Trading\Types\EBayPaymentMismatchDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'eBayPaymentMismatchDetails'
        ],
        'PaymentInstrument' => [
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PaymentInstrument'
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
