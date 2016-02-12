<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\Trading\Types;

/**
 *
 * @property integer $FeedbackScore
 * @property \DateTime $RegistrationDate
 * @property boolean $SubscribeSA
 * @property boolean $SubscribeSAPro
 * @property boolean $SubscribeSM
 * @property boolean $SubscribeSMPro
 */
class ValidateTestUserRegistrationRequestType extends \DTS\eBaySDK\Trading\Types\AbstractRequestType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'FeedbackScore' => [
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'FeedbackScore'
        ],
        'RegistrationDate' => [
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'RegistrationDate'
        ],
        'SubscribeSA' => [
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SubscribeSA'
        ],
        'SubscribeSAPro' => [
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SubscribeSAPro'
        ],
        'SubscribeSM' => [
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SubscribeSM'
        ],
        'SubscribeSMPro' => [
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SubscribeSMPro'
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
            self::$requestXmlRootElementNames[__CLASS__] = 'ValidateTestUserRegistrationRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
