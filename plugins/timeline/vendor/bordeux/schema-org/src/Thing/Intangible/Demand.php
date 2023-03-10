<?php

namespace Bordeux\SchemaOrg\Thing\Intangible;

/**
 * Generated by bordeux/schema
 *
 * @author Krzysztof Bednarczyk <schema@bordeux.net>
 * @link http://schema.org/Demand
 *
 *
 * -------------------------------- AcceptedPaymentMethod ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Intangible\Enumeration\PaymentMethod|\Bordeux\SchemaOrg\Thing\Intangible\Enumeration\PaymentMethod[] acceptedPaymentMethod
 *
 * @method \Bordeux\SchemaOrg\Thing\Intangible\Enumeration\PaymentMethod|\Bordeux\SchemaOrg\Thing\Intangible\Enumeration\PaymentMethod[] getAcceptedPaymentMethod() The payment method(s) accepted by seller for this offer.
 *
 * @method Demand setAcceptedPaymentMethod(\Bordeux\SchemaOrg\Thing\Intangible\Enumeration\PaymentMethod $acceptedPaymentMethod ) setAcceptedPaymentMethod(\Bordeux\SchemaOrg\Thing\Intangible\Enumeration\PaymentMethod[] $acceptedPaymentMethod )The payment method(s) accepted by seller for this offer.
 *
 *
 * -------------------------------- AdvanceBookingRequirement ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue|\Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue[] advanceBookingRequirement
 *
 * @method \Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue|\Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue[] getAdvanceBookingRequirement() The amount of time that is required between accepting the offer and the actual usage of the resource or service.
 *
 * @method Demand setAdvanceBookingRequirement(\Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue $advanceBookingRequirement ) setAdvanceBookingRequirement(\Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue[] $advanceBookingRequirement )The amount of time that is required between accepting the offer and the actual usage of the resource or service.
 *
 *
 * -------------------------------- Availability ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Intangible\Enumeration\ItemAvailability|\Bordeux\SchemaOrg\Thing\Intangible\Enumeration\ItemAvailability[] availability
 *
 * @method \Bordeux\SchemaOrg\Thing\Intangible\Enumeration\ItemAvailability|\Bordeux\SchemaOrg\Thing\Intangible\Enumeration\ItemAvailability[] getAvailability() The availability of this item???for example In stock, Out of stock, Pre-order, etc.
 *
 * @method Demand setAvailability(\Bordeux\SchemaOrg\Thing\Intangible\Enumeration\ItemAvailability $availability ) setAvailability(\Bordeux\SchemaOrg\Thing\Intangible\Enumeration\ItemAvailability[] $availability )The availability of this item???for example In stock, Out of stock, Pre-order, etc.
 *
 *
 * -------------------------------- AvailabilityEnds ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\SchemaDateTime|\Bordeux\SchemaOrg\SchemaDateTime[] availabilityEnds
 *
 * @method \Bordeux\SchemaOrg\SchemaDateTime|\Bordeux\SchemaOrg\SchemaDateTime[] getAvailabilityEnds() The end of the availability of the product or service included in the offer.
 *
 * @method Demand setAvailabilityEnds(\Bordeux\SchemaOrg\SchemaDateTime $availabilityEnds ) setAvailabilityEnds(\Bordeux\SchemaOrg\SchemaDateTime[] $availabilityEnds )The end of the availability of the product or service included in the offer.
 *
 *
 * -------------------------------- AvailabilityStarts ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\SchemaDateTime|\Bordeux\SchemaOrg\SchemaDateTime[] availabilityStarts
 *
 * @method \Bordeux\SchemaOrg\SchemaDateTime|\Bordeux\SchemaOrg\SchemaDateTime[] getAvailabilityStarts() The beginning of the availability of the product or service included in the offer.
 *
 * @method Demand setAvailabilityStarts(\Bordeux\SchemaOrg\SchemaDateTime $availabilityStarts ) setAvailabilityStarts(\Bordeux\SchemaOrg\SchemaDateTime[] $availabilityStarts )The beginning of the availability of the product or service included in the offer.
 *
 *
 * -------------------------------- AvailableAtOrFrom ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Place|\Bordeux\SchemaOrg\Thing\Place[] availableAtOrFrom
 *
 * @method \Bordeux\SchemaOrg\Thing\Place|\Bordeux\SchemaOrg\Thing\Place[] getAvailableAtOrFrom() The place(s) from which the offer can be obtained (e.g. store locations).
 *
 * @method Demand setAvailableAtOrFrom(\Bordeux\SchemaOrg\Thing\Place $availableAtOrFrom ) setAvailableAtOrFrom(\Bordeux\SchemaOrg\Thing\Place[] $availableAtOrFrom )The place(s) from which the offer can be obtained (e.g. store locations).
 *
 *
 * -------------------------------- AvailableDeliveryMethod ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Intangible\Enumeration\DeliveryMethod|\Bordeux\SchemaOrg\Thing\Intangible\Enumeration\DeliveryMethod[] availableDeliveryMethod
 *
 * @method \Bordeux\SchemaOrg\Thing\Intangible\Enumeration\DeliveryMethod|\Bordeux\SchemaOrg\Thing\Intangible\Enumeration\DeliveryMethod[] getAvailableDeliveryMethod() The delivery method(s) available for this offer.
 *
 * @method Demand setAvailableDeliveryMethod(\Bordeux\SchemaOrg\Thing\Intangible\Enumeration\DeliveryMethod $availableDeliveryMethod ) setAvailableDeliveryMethod(\Bordeux\SchemaOrg\Thing\Intangible\Enumeration\DeliveryMethod[] $availableDeliveryMethod )The delivery method(s) available for this offer.
 *
 *
 * -------------------------------- BusinessFunction ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Intangible\Enumeration\BusinessFunction|\Bordeux\SchemaOrg\Thing\Intangible\Enumeration\BusinessFunction[] businessFunction
 *
 * @method \Bordeux\SchemaOrg\Thing\Intangible\Enumeration\BusinessFunction|\Bordeux\SchemaOrg\Thing\Intangible\Enumeration\BusinessFunction[] getBusinessFunction() The business function (e.g. sell, lease, repair, dispose) of the offer or component of a bundle (TypeAndQuantityNode). The default is http://purl.org/goodrelations/v1#Sell.
 *
 * @method Demand setBusinessFunction(\Bordeux\SchemaOrg\Thing\Intangible\Enumeration\BusinessFunction $businessFunction ) setBusinessFunction(\Bordeux\SchemaOrg\Thing\Intangible\Enumeration\BusinessFunction[] $businessFunction )The business function (e.g. sell, lease, repair, dispose) of the offer or component of a bundle (TypeAndQuantityNode). The default is http://purl.org/goodrelations/v1#Sell.
 *
 *
 * -------------------------------- DeliveryLeadTime ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue|\Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue[] deliveryLeadTime
 *
 * @method \Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue|\Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue[] getDeliveryLeadTime() The typical delay between the receipt of the order and the goods leaving the warehouse.
 *
 * @method Demand setDeliveryLeadTime(\Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue $deliveryLeadTime ) setDeliveryLeadTime(\Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue[] $deliveryLeadTime )The typical delay between the receipt of the order and the goods leaving the warehouse.
 *
 *
 * -------------------------------- EligibleCustomerType ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Intangible\Enumeration\BusinessEntityType|\Bordeux\SchemaOrg\Thing\Intangible\Enumeration\BusinessEntityType[] eligibleCustomerType
 *
 * @method \Bordeux\SchemaOrg\Thing\Intangible\Enumeration\BusinessEntityType|\Bordeux\SchemaOrg\Thing\Intangible\Enumeration\BusinessEntityType[] getEligibleCustomerType() The type(s) of customers for which the given offer is valid.
 *
 * @method Demand setEligibleCustomerType(\Bordeux\SchemaOrg\Thing\Intangible\Enumeration\BusinessEntityType $eligibleCustomerType ) setEligibleCustomerType(\Bordeux\SchemaOrg\Thing\Intangible\Enumeration\BusinessEntityType[] $eligibleCustomerType )The type(s) of customers for which the given offer is valid.
 *
 *
 * -------------------------------- EligibleDuration ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue|\Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue[] eligibleDuration
 *
 * @method \Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue|\Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue[] getEligibleDuration() The duration for which the given offer is valid.
 *
 * @method Demand setEligibleDuration(\Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue $eligibleDuration ) setEligibleDuration(\Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue[] $eligibleDuration )The duration for which the given offer is valid.
 *
 *
 * -------------------------------- EligibleQuantity ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue|\Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue[] eligibleQuantity
 *
 * @method \Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue|\Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue[] getEligibleQuantity() The interval and unit of measurement of ordering quantities for which the offer or price specification is valid. This allows e.g. specifying that a certain freight charge is valid only for a certain quantity.
 *
 * @method Demand setEligibleQuantity(\Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue $eligibleQuantity ) setEligibleQuantity(\Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue[] $eligibleQuantity )The interval and unit of measurement of ordering quantities for which the offer or price specification is valid. This allows e.g. specifying that a certain freight charge is valid only for a certain quantity.
 *
 *
 * -------------------------------- EligibleRegion ---------------------------------------------
 *
 * @property string|string[]|\Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\GeoShape|\Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\GeoShape[] eligibleRegion
 *
 * @method string|string[]|\Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\GeoShape|\Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\GeoShape[] getEligibleRegion() The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, or the GeoShape for the geo-political region(s) for which the offer or delivery charge specification is valid.
 *
 * @method Demand setEligibleRegion(string $eligibleRegion ) setEligibleRegion(string[] $eligibleRegion ) setEligibleRegion(\Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\GeoShape $eligibleRegion ) setEligibleRegion(\Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\GeoShape[] $eligibleRegion )The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, or the GeoShape for the geo-political region(s) for which the offer or delivery charge specification is valid.
 *
 *
 * -------------------------------- EligibleTransactionVolume ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\PriceSpecification|\Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\PriceSpecification[] eligibleTransactionVolume
 *
 * @method \Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\PriceSpecification|\Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\PriceSpecification[] getEligibleTransactionVolume() The transaction volume, in a monetary unit, for which the offer or price specification is valid, e.g. for indicating a minimal purchasing volume, to express free shipping above a certain order volume, or to limit the acceptance of credit cards to purchases to a certain minimal amount.
 *
 * @method Demand setEligibleTransactionVolume(\Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\PriceSpecification $eligibleTransactionVolume ) setEligibleTransactionVolume(\Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\PriceSpecification[] $eligibleTransactionVolume )The transaction volume, in a monetary unit, for which the offer or price specification is valid, e.g. for indicating a minimal purchasing volume, to express free shipping above a certain order volume, or to limit the acceptance of credit cards to purchases to a certain minimal amount.
 *
 *
 * -------------------------------- Gtin13 ---------------------------------------------
 *
 * @property string|string[] gtin13
 *
 * @method string|string[] getGtin13() The GTIN-13 code of the product, or the product to which the offer refers. This is equivalent to 13-digit ISBN codes and EAN UCC-13. Former 12-digit UPC codes can be converted into a GTIN-13 code by simply adding a preceeding zero.
 *
 * @method Demand setGtin13(string $gtin13 ) setGtin13(string[] $gtin13 )The GTIN-13 code of the product, or the product to which the offer refers. This is equivalent to 13-digit ISBN codes and EAN UCC-13. Former 12-digit UPC codes can be converted into a GTIN-13 code by simply adding a preceeding zero.
 *
 *
 * -------------------------------- Gtin14 ---------------------------------------------
 *
 * @property string|string[] gtin14
 *
 * @method string|string[] getGtin14() The GTIN-14 code of the product, or the product to which the offer refers.
 *
 * @method Demand setGtin14(string $gtin14 ) setGtin14(string[] $gtin14 )The GTIN-14 code of the product, or the product to which the offer refers.
 *
 *
 * -------------------------------- Gtin8 ---------------------------------------------
 *
 * @property string|string[] gtin8
 *
 * @method string|string[] getGtin8() The GTIN-8 code of the product, or the product to which the offer refers. This code is also known as EAN/UCC-8 or 8-digit EAN.
 *
 * @method Demand setGtin8(string $gtin8 ) setGtin8(string[] $gtin8 )The GTIN-8 code of the product, or the product to which the offer refers. This code is also known as EAN/UCC-8 or 8-digit EAN.
 *
 *
 * -------------------------------- IncludesObject ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\TypeAndQuantityNode|\Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\TypeAndQuantityNode[] includesObject
 *
 * @method \Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\TypeAndQuantityNode|\Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\TypeAndQuantityNode[] getIncludesObject() This links to a node or nodes indicating the exact quantity of the products included in the offer.
 *
 * @method Demand setIncludesObject(\Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\TypeAndQuantityNode $includesObject ) setIncludesObject(\Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\TypeAndQuantityNode[] $includesObject )This links to a node or nodes indicating the exact quantity of the products included in the offer.
 *
 *
 * -------------------------------- InventoryLevel ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue|\Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue[] inventoryLevel
 *
 * @method \Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue|\Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue[] getInventoryLevel() The current approximate inventory level for the item or items.
 *
 * @method Demand setInventoryLevel(\Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue $inventoryLevel ) setInventoryLevel(\Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue[] $inventoryLevel )The current approximate inventory level for the item or items.
 *
 *
 * -------------------------------- ItemCondition ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Intangible\Enumeration\OfferItemCondition|\Bordeux\SchemaOrg\Thing\Intangible\Enumeration\OfferItemCondition[] itemCondition
 *
 * @method \Bordeux\SchemaOrg\Thing\Intangible\Enumeration\OfferItemCondition|\Bordeux\SchemaOrg\Thing\Intangible\Enumeration\OfferItemCondition[] getItemCondition() A predefined value from OfferItemCondition or a textual description of the condition of the product or service, or the products or services included in the offer.
 *
 * @method Demand setItemCondition(\Bordeux\SchemaOrg\Thing\Intangible\Enumeration\OfferItemCondition $itemCondition ) setItemCondition(\Bordeux\SchemaOrg\Thing\Intangible\Enumeration\OfferItemCondition[] $itemCondition )A predefined value from OfferItemCondition or a textual description of the condition of the product or service, or the products or services included in the offer.
 *
 *
 * -------------------------------- ItemOffered ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Product|\Bordeux\SchemaOrg\Thing\Product[] itemOffered
 *
 * @method \Bordeux\SchemaOrg\Thing\Product|\Bordeux\SchemaOrg\Thing\Product[] getItemOffered() The item being offered.
 *
 * @method Demand setItemOffered(\Bordeux\SchemaOrg\Thing\Product $itemOffered ) setItemOffered(\Bordeux\SchemaOrg\Thing\Product[] $itemOffered )The item being offered.
 *
 *
 * -------------------------------- Mpn ---------------------------------------------
 *
 * @property string|string[] mpn
 *
 * @method string|string[] getMpn() The Manufacturer Part Number (MPN) of the product, or the product to which the offer refers.
 *
 * @method Demand setMpn(string $mpn ) setMpn(string[] $mpn )The Manufacturer Part Number (MPN) of the product, or the product to which the offer refers.
 *
 *
 * -------------------------------- PriceSpecification ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\PriceSpecification|\Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\PriceSpecification[] priceSpecification
 *
 * @method \Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\PriceSpecification|\Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\PriceSpecification[] getPriceSpecification() One or more detailed price specifications, indicating the unit price and delivery or payment charges.
 *
 * @method Demand setPriceSpecification(\Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\PriceSpecification $priceSpecification ) setPriceSpecification(\Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\PriceSpecification[] $priceSpecification )One or more detailed price specifications, indicating the unit price and delivery or payment charges.
 *
 *
 * -------------------------------- Seller ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Organization|\Bordeux\SchemaOrg\Thing\Organization[]|\Bordeux\SchemaOrg\Thing\Person|\Bordeux\SchemaOrg\Thing\Person[] seller
 *
 * @method \Bordeux\SchemaOrg\Thing\Organization|\Bordeux\SchemaOrg\Thing\Organization[]|\Bordeux\SchemaOrg\Thing\Person|\Bordeux\SchemaOrg\Thing\Person[] getSeller() The organization or person making the offer.
 *
 * @method Demand setSeller(\Bordeux\SchemaOrg\Thing\Organization $seller ) setSeller(\Bordeux\SchemaOrg\Thing\Organization[] $seller ) setSeller(\Bordeux\SchemaOrg\Thing\Person $seller ) setSeller(\Bordeux\SchemaOrg\Thing\Person[] $seller )The organization or person making the offer.
 *
 *
 * -------------------------------- SerialNumber ---------------------------------------------
 *
 * @property string|string[] serialNumber
 *
 * @method string|string[] getSerialNumber() The serial number or any alphanumeric identifier of a particular product. When attached to an offer, it is a shortcut for the serial number of the product included in the offer.
 *
 * @method Demand setSerialNumber(string $serialNumber ) setSerialNumber(string[] $serialNumber )The serial number or any alphanumeric identifier of a particular product. When attached to an offer, it is a shortcut for the serial number of the product included in the offer.
 *
 *
 * -------------------------------- Sku ---------------------------------------------
 *
 * @property string|string[] sku
 *
 * @method string|string[] getSku() The Stock Keeping Unit (SKU), i.e. a merchant-specific identifier for a product or service, or the product to which the offer refers.
 *
 * @method Demand setSku(string $sku ) setSku(string[] $sku )The Stock Keeping Unit (SKU), i.e. a merchant-specific identifier for a product or service, or the product to which the offer refers.
 *
 *
 * -------------------------------- ValidFrom ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\SchemaDateTime|\Bordeux\SchemaOrg\SchemaDateTime[] validFrom
 *
 * @method \Bordeux\SchemaOrg\SchemaDateTime|\Bordeux\SchemaOrg\SchemaDateTime[] getValidFrom() The date when the item becomes valid.
 *
 * @method Demand setValidFrom(\Bordeux\SchemaOrg\SchemaDateTime $validFrom ) setValidFrom(\Bordeux\SchemaOrg\SchemaDateTime[] $validFrom )The date when the item becomes valid.
 *
 *
 * -------------------------------- ValidThrough ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\SchemaDateTime|\Bordeux\SchemaOrg\SchemaDateTime[] validThrough
 *
 * @method \Bordeux\SchemaOrg\SchemaDateTime|\Bordeux\SchemaOrg\SchemaDateTime[] getValidThrough() The end of the validity of offer, price specification, or opening hours data.
 *
 * @method Demand setValidThrough(\Bordeux\SchemaOrg\SchemaDateTime $validThrough ) setValidThrough(\Bordeux\SchemaOrg\SchemaDateTime[] $validThrough )The end of the validity of offer, price specification, or opening hours data.
 *
 *
 * -------------------------------- Warranty ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\WarrantyPromise|\Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\WarrantyPromise[] warranty
 *
 * @method \Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\WarrantyPromise|\Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\WarrantyPromise[] getWarranty() The warranty promise(s) included in the offer.
 *
 * @method Demand setWarranty(\Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\WarrantyPromise $warranty ) setWarranty(\Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\WarrantyPromise[] $warranty )The warranty promise(s) included in the offer.
 *
 *
 */
 class Demand extends \Bordeux\SchemaOrg\Thing\Intangible {

 }