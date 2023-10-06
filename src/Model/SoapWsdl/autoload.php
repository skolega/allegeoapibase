<?php


 function autoload_3b4d44facc501c5f8edc156ebedf3892($class)
{
    $classes = array(
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\ServiceService' => __DIR__ .'/ServiceService.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\PackageInfoStruct' => __DIR__ .'/PackageInfoStruct.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\ArrayOfPackageinfostruct' => __DIR__ .'/ArrayOfPackageinfostruct.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoAddPackageInfoToPostBuyFormRequest' => __DIR__ .'/DoAddPackageInfoToPostBuyFormRequest.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\ArrayOfString' => __DIR__ .'/ArrayOfString.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\PostBuyFormPackageInfoStruct' => __DIR__ .'/PostBuyFormPackageInfoStruct.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\doAddPackageInfoToPostBuyFormResponse' => __DIR__ .'/doAddPackageInfoToPostBuyFormResponse.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\UserBlackListStruct' => __DIR__ .'/UserBlackListStruct.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\ArrayOfUserblackliststruct' => __DIR__ .'/ArrayOfUserblackliststruct.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoAddToBlackListRequest' => __DIR__ .'/DoAddToBlackListRequest.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\UserBlackListAddResultStruct' => __DIR__ .'/UserBlackListAddResultStruct.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\ArrayOfUserblacklistaddresultstruct' => __DIR__ .'/ArrayOfUserblacklistaddresultstruct.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\doAddToBlackListResponse' => __DIR__ .'/doAddToBlackListResponse.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\PharmacyRecipientDataStruct' => __DIR__ .'/PharmacyRecipientDataStruct.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoBidItemRequest' => __DIR__ .'/DoBidItemRequest.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\doBidItemResponse' => __DIR__ .'/doBidItemResponse.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoGetBidItem2Request' => __DIR__ .'/DoGetBidItem2Request.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\BidListStruct2' => __DIR__ .'/BidListStruct2.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\ArrayOfBidliststruct2' => __DIR__ .'/ArrayOfBidliststruct2.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\doGetBidItem2Response' => __DIR__ .'/doGetBidItem2Response.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoGetBlackListUsersRequest' => __DIR__ .'/DoGetBlackListUsersRequest.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\BlackListStruct' => __DIR__ .'/BlackListStruct.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\ArrayOfBlackliststruct' => __DIR__ .'/ArrayOfBlackliststruct.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\doGetBlackListUsersResponse' => __DIR__ .'/doGetBlackListUsersResponse.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoGetCountriesRequest' => __DIR__ .'/DoGetCountriesRequest.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\CountryInfoType' => __DIR__ .'/CountryInfoType.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\ArrayOfCountryinfotype' => __DIR__ .'/ArrayOfCountryinfotype.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\doGetCountriesResponse' => __DIR__ .'/doGetCountriesResponse.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoGetDealsRequest' => __DIR__ .'/DoGetDealsRequest.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\DealsStruct' => __DIR__ .'/DealsStruct.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\ArrayOfDealsstruct' => __DIR__ .'/ArrayOfDealsstruct.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\doGetDealsResponse' => __DIR__ .'/doGetDealsResponse.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoGetFilledPostBuyFormsRequest' => __DIR__ .'/DoGetFilledPostBuyFormsRequest.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\ArrayOfLong' => __DIR__ .'/ArrayOfLong.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\FilledPostBuyFormsStruct' => __DIR__ .'/FilledPostBuyFormsStruct.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\doGetFilledPostBuyFormsResponse' => __DIR__ .'/doGetFilledPostBuyFormsResponse.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoGetFreeDeliveryAmountRequest' => __DIR__ .'/DoGetFreeDeliveryAmountRequest.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\doGetFreeDeliveryAmountResponse' => __DIR__ .'/doGetFreeDeliveryAmountResponse.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoGetItemsInfoRequest' => __DIR__ .'/DoGetItemsInfoRequest.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\DurationInfoStruct' => __DIR__ .'/DurationInfoStruct.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\ItemInfo' => __DIR__ .'/ItemInfo.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\ItemCatList' => __DIR__ .'/ItemCatList.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\ArrayOfItemcatlist' => __DIR__ .'/ArrayOfItemcatlist.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\ItemImageList' => __DIR__ .'/ItemImageList.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\ArrayOfItemimagelist' => __DIR__ .'/ArrayOfItemimagelist.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\AttribStruct' => __DIR__ .'/AttribStruct.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\ArrayOfAttribstruct' => __DIR__ .'/ArrayOfAttribstruct.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\FulfillmentTimeStruct' => __DIR__ .'/FulfillmentTimeStruct.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\PostageStruct' => __DIR__ .'/PostageStruct.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\ArrayOfPostagestruct' => __DIR__ .'/ArrayOfPostagestruct.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\ItemPaymentOptions' => __DIR__ .'/ItemPaymentOptions.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\CompanyInfoStruct' => __DIR__ .'/CompanyInfoStruct.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\ProductParametersStruct' => __DIR__ .'/ProductParametersStruct.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\ArrayOfProductparametersstruct' => __DIR__ .'/ArrayOfProductparametersstruct.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\ProductParametersGroupStruct' => __DIR__ .'/ProductParametersGroupStruct.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\ArrayOfProductparametersgroupstruct' => __DIR__ .'/ArrayOfProductparametersgroupstruct.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\ProductStruct' => __DIR__ .'/ProductStruct.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\AfterSalesServiceConditionsStruct' => __DIR__ .'/AfterSalesServiceConditionsStruct.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\ItemInfoStruct' => __DIR__ .'/ItemInfoStruct.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\ArrayOfIteminfostruct' => __DIR__ .'/ArrayOfIteminfostruct.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\doGetItemsInfoResponse' => __DIR__ .'/doGetItemsInfoResponse.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoGetMyCurrentShipmentPriceTypeRequest' => __DIR__ .'/DoGetMyCurrentShipmentPriceTypeRequest.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\doGetMyCurrentShipmentPriceTypeResponse' => __DIR__ .'/doGetMyCurrentShipmentPriceTypeResponse.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoGetMyDataRequest' => __DIR__ .'/DoGetMyDataRequest.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\UserDataStruct' => __DIR__ .'/UserDataStruct.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\InvoiceDataStruct' => __DIR__ .'/InvoiceDataStruct.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\CompanyExtraDataStruct' => __DIR__ .'/CompanyExtraDataStruct.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\CompanySecondAddressStruct' => __DIR__ .'/CompanySecondAddressStruct.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\PharmacyDataStruct' => __DIR__ .'/PharmacyDataStruct.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\AlcoholDataStruct' => __DIR__ .'/AlcoholDataStruct.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\RelatedPersonsStruct' => __DIR__ .'/RelatedPersonsStruct.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\doGetMyDataResponse' => __DIR__ .'/doGetMyDataResponse.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoGetMyIncomingPaymentsRequest' => __DIR__ .'/DoGetMyIncomingPaymentsRequest.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\PaymentDetailsStruct' => __DIR__ .'/PaymentDetailsStruct.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\ArrayOfPaymentdetailsstruct' => __DIR__ .'/ArrayOfPaymentdetailsstruct.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\UserIncomingPaymentStruct' => __DIR__ .'/UserIncomingPaymentStruct.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\ArrayOfUserincomingpaymentstruct' => __DIR__ .'/ArrayOfUserincomingpaymentstruct.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\doGetMyIncomingPaymentsResponse' => __DIR__ .'/doGetMyIncomingPaymentsResponse.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoGetMyIncomingPaymentsRefundsRequest' => __DIR__ .'/DoGetMyIncomingPaymentsRefundsRequest.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\UserIncomingPaymentRefundsStruct' => __DIR__ .'/UserIncomingPaymentRefundsStruct.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\ArrayOfUserincomingpaymentrefundsstruct' => __DIR__ .'/ArrayOfUserincomingpaymentrefundsstruct.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\doGetMyIncomingPaymentsRefundsResponse' => __DIR__ .'/doGetMyIncomingPaymentsRefundsResponse.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoGetMyPaymentsInfoRequest' => __DIR__ .'/DoGetMyPaymentsInfoRequest.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\PaymentsUserDataStruct' => __DIR__ .'/PaymentsUserDataStruct.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\PayoutAutoFrequencyStruct' => __DIR__ .'/PayoutAutoFrequencyStruct.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\PayoutAutoSettingsStruct' => __DIR__ .'/PayoutAutoSettingsStruct.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\PaymentsPayoutStruct' => __DIR__ .'/PaymentsPayoutStruct.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\PaymentsInfoStruct' => __DIR__ .'/PaymentsInfoStruct.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\doGetMyPaymentsInfoResponse' => __DIR__ .'/doGetMyPaymentsInfoResponse.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoGetMyPayoutsRequest' => __DIR__ .'/DoGetMyPayoutsRequest.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\UserPayoutStruct' => __DIR__ .'/UserPayoutStruct.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\ArrayOfUserpayoutstruct' => __DIR__ .'/ArrayOfUserpayoutstruct.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\doGetMyPayoutsResponse' => __DIR__ .'/doGetMyPayoutsResponse.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoGetMyPayoutsDetailsRequest' => __DIR__ .'/DoGetMyPayoutsDetailsRequest.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\PayoutPaymentsStruct' => __DIR__ .'/PayoutPaymentsStruct.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\ArrayOfPayoutpaymentsstruct' => __DIR__ .'/ArrayOfPayoutpaymentsstruct.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\PayoutRefundFromStruct' => __DIR__ .'/PayoutRefundFromStruct.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\ArrayOfPayoutrefundfromstruct' => __DIR__ .'/ArrayOfPayoutrefundfromstruct.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\PayoutRefundToStruct' => __DIR__ .'/PayoutRefundToStruct.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\ArrayOfPayoutrefundtostruct' => __DIR__ .'/ArrayOfPayoutrefundtostruct.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\doGetMyPayoutsDetailsResponse' => __DIR__ .'/doGetMyPayoutsDetailsResponse.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoGetPaymentMethodsRequest' => __DIR__ .'/DoGetPaymentMethodsRequest.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\PaymentMethodStruct' => __DIR__ .'/PaymentMethodStruct.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\ArrayOfPaymentmethodstruct' => __DIR__ .'/ArrayOfPaymentmethodstruct.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\doGetPaymentMethodsResponse' => __DIR__ .'/doGetPaymentMethodsResponse.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoGetPostBuyDataRequest' => __DIR__ .'/DoGetPostBuyDataRequest.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\UserSentToDataStruct' => __DIR__ .'/UserSentToDataStruct.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\UserPostBuyDataStruct' => __DIR__ .'/UserPostBuyDataStruct.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\ArrayOfUserpostbuydatastruct' => __DIR__ .'/ArrayOfUserpostbuydatastruct.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\ItemPostBuyDataStruct' => __DIR__ .'/ItemPostBuyDataStruct.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\ArrayOfItempostbuydatastruct' => __DIR__ .'/ArrayOfItempostbuydatastruct.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\doGetPostBuyDataResponse' => __DIR__ .'/doGetPostBuyDataResponse.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoGetPostBuyFormsDataForSellersRequest' => __DIR__ .'/DoGetPostBuyFormsDataForSellersRequest.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\PostBuyFormItemDealsVariantStruct' => __DIR__ .'/PostBuyFormItemDealsVariantStruct.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\PostBuyFormItemDealsAdditionalServiceStruct' => __DIR__ .'/PostBuyFormItemDealsAdditionalServiceStruct.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\ArrayOfPostbuyformitemdealsadditionalservicestruct' => __DIR__ .'/ArrayOfPostbuyformitemdealsadditionalservicestruct.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\PostBuyFormItemDealsStruct' => __DIR__ .'/PostBuyFormItemDealsStruct.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\ArrayOfPostbuyformitemdealsstruct' => __DIR__ .'/ArrayOfPostbuyformitemdealsstruct.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\PostBuyFormItemStruct' => __DIR__ .'/PostBuyFormItemStruct.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\ArrayOfPostbuyformitemstruct' => __DIR__ .'/ArrayOfPostbuyformitemstruct.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\PostBuyFormAddressStruct' => __DIR__ .'/PostBuyFormAddressStruct.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\PostBuyFormShipmentTrackingStruct' => __DIR__ .'/PostBuyFormShipmentTrackingStruct.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\ArrayOfPostbuyformshipmenttrackingstruct' => __DIR__ .'/ArrayOfPostbuyformshipmenttrackingstruct.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\PostBuyFormDataStruct' => __DIR__ .'/PostBuyFormDataStruct.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\ArrayOfPostbuyformdatastruct' => __DIR__ .'/ArrayOfPostbuyformdatastruct.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\doGetPostBuyFormsDataForSellersResponse' => __DIR__ .'/doGetPostBuyFormsDataForSellersResponse.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\RangeValueType' => __DIR__ .'/RangeValueType.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\FilterOptionsType' => __DIR__ .'/FilterOptionsType.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\ArrayOfFilteroptionstype' => __DIR__ .'/ArrayOfFilteroptionstype.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoGetPostBuyFormsIdsRequest' => __DIR__ .'/DoGetPostBuyFormsIdsRequest.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\FilterValueType' => __DIR__ .'/FilterValueType.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\ArrayOfFiltervaluetype' => __DIR__ .'/ArrayOfFiltervaluetype.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\FilterRelationType' => __DIR__ .'/FilterRelationType.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\FiltersListType' => __DIR__ .'/FiltersListType.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\ArrayOfFilterslisttype' => __DIR__ .'/ArrayOfFilterslisttype.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\doGetPostBuyFormsIdsResponse' => __DIR__ .'/doGetPostBuyFormsIdsResponse.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoGetRefundsDealsRequest' => __DIR__ .'/DoGetRefundsDealsRequest.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\RefundsDealsListType' => __DIR__ .'/RefundsDealsListType.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\ArrayOfRefundsdealslisttype' => __DIR__ .'/ArrayOfRefundsdealslisttype.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\doGetRefundsDealsResponse' => __DIR__ .'/doGetRefundsDealsResponse.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoGetRefundsListRequest' => __DIR__ .'/DoGetRefundsListRequest.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\RefundDetailsType' => __DIR__ .'/RefundDetailsType.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\RefundListType' => __DIR__ .'/RefundListType.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\ArrayOfRefundlisttype' => __DIR__ .'/ArrayOfRefundlisttype.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\doGetRefundsListResponse' => __DIR__ .'/doGetRefundsListResponse.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoGetRefundsReasonsRequest' => __DIR__ .'/DoGetRefundsReasonsRequest.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\ReasonInfoType' => __DIR__ .'/ReasonInfoType.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\ArrayOfReasoninfotype' => __DIR__ .'/ArrayOfReasoninfotype.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\doGetRefundsReasonsResponse' => __DIR__ .'/doGetRefundsReasonsResponse.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoGetShipmentDataRequest' => __DIR__ .'/DoGetShipmentDataRequest.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\ShipmentTimeStruct' => __DIR__ .'/ShipmentTimeStruct.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\ShipmentDataStruct' => __DIR__ .'/ShipmentDataStruct.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\ArrayOfShipmentdatastruct' => __DIR__ .'/ArrayOfShipmentdatastruct.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\doGetShipmentDataResponse' => __DIR__ .'/doGetShipmentDataResponse.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoGetShipmentPriceTypesRequest' => __DIR__ .'/DoGetShipmentPriceTypesRequest.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\ShipmentPriceTypeStruct' => __DIR__ .'/ShipmentPriceTypeStruct.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\ArrayOfShipmentpricetypestruct' => __DIR__ .'/ArrayOfShipmentpricetypestruct.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\doGetShipmentPriceTypesResponse' => __DIR__ .'/doGetShipmentPriceTypesResponse.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoGetSiteJournalRequest' => __DIR__ .'/DoGetSiteJournalRequest.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\SiteJournal' => __DIR__ .'/SiteJournal.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\ArrayOfSitejournal' => __DIR__ .'/ArrayOfSitejournal.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\doGetSiteJournalResponse' => __DIR__ .'/doGetSiteJournalResponse.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoGetSiteJournalDealsRequest' => __DIR__ .'/DoGetSiteJournalDealsRequest.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\SiteJournalDealsStruct' => __DIR__ .'/SiteJournalDealsStruct.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\ArrayOfSitejournaldealsstruct' => __DIR__ .'/ArrayOfSitejournaldealsstruct.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\doGetSiteJournalDealsResponse' => __DIR__ .'/doGetSiteJournalDealsResponse.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoGetSiteJournalDealsInfoRequest' => __DIR__ .'/DoGetSiteJournalDealsInfoRequest.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\SiteJournalDealsInfoStruct' => __DIR__ .'/SiteJournalDealsInfoStruct.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\doGetSiteJournalDealsInfoResponse' => __DIR__ .'/doGetSiteJournalDealsInfoResponse.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoGetSiteJournalInfoRequest' => __DIR__ .'/DoGetSiteJournalInfoRequest.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\SiteJournalInfo' => __DIR__ .'/SiteJournalInfo.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\doGetSiteJournalInfoResponse' => __DIR__ .'/doGetSiteJournalInfoResponse.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoGetStatesInfoRequest' => __DIR__ .'/DoGetStatesInfoRequest.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\StateInfoStruct' => __DIR__ .'/StateInfoStruct.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\ArrayOfStateinfostruct' => __DIR__ .'/ArrayOfStateinfostruct.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\doGetStatesInfoResponse' => __DIR__ .'/doGetStatesInfoResponse.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoGetSystemTimeRequest' => __DIR__ .'/DoGetSystemTimeRequest.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\doGetSystemTimeResponse' => __DIR__ .'/doGetSystemTimeResponse.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoGetTransactionsIDsRequest' => __DIR__ .'/DoGetTransactionsIDsRequest.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\doGetTransactionsIDsResponse' => __DIR__ .'/doGetTransactionsIDsResponse.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoGetUserIDRequest' => __DIR__ .'/DoGetUserIDRequest.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\doGetUserIDResponse' => __DIR__ .'/doGetUserIDResponse.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoGetUserLoginRequest' => __DIR__ .'/DoGetUserLoginRequest.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\doGetUserLoginResponse' => __DIR__ .'/doGetUserLoginResponse.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoLoginRequest' => __DIR__ .'/DoLoginRequest.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\doLoginResponse' => __DIR__ .'/doLoginResponse.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoLoginEncRequest' => __DIR__ .'/DoLoginEncRequest.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\doLoginEncResponse' => __DIR__ .'/doLoginEncResponse.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoLoginWithAccessTokenRequest' => __DIR__ .'/DoLoginWithAccessTokenRequest.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\doLoginWithAccessTokenResponse' => __DIR__ .'/doLoginWithAccessTokenResponse.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoMyBillingRequest' => __DIR__ .'/DoMyBillingRequest.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\doMyBillingResponse' => __DIR__ .'/doMyBillingResponse.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoMyBillingItemRequest' => __DIR__ .'/DoMyBillingItemRequest.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\ItemBilling' => __DIR__ .'/ItemBilling.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\ArrayOfItembilling' => __DIR__ .'/ArrayOfItembilling.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\doMyBillingItemResponse' => __DIR__ .'/doMyBillingItemResponse.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoQueryAllSysStatusRequest' => __DIR__ .'/DoQueryAllSysStatusRequest.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\SysStatusType' => __DIR__ .'/SysStatusType.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\ArrayOfSysstatustype' => __DIR__ .'/ArrayOfSysstatustype.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\doQueryAllSysStatusResponse' => __DIR__ .'/doQueryAllSysStatusResponse.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoQuerySysStatusRequest' => __DIR__ .'/DoQuerySysStatusRequest.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\doQuerySysStatusResponse' => __DIR__ .'/doQuerySysStatusResponse.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoRemoveFromBlackListRequest' => __DIR__ .'/DoRemoveFromBlackListRequest.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\BlackListResStruct' => __DIR__ .'/BlackListResStruct.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\ArrayOfBlacklistresstruct' => __DIR__ .'/ArrayOfBlacklistresstruct.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\doRemoveFromBlackListResponse' => __DIR__ .'/doRemoveFromBlackListResponse.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoRequestPayoutRequest' => __DIR__ .'/DoRequestPayoutRequest.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\RequestPayoutStruct' => __DIR__ .'/RequestPayoutStruct.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\doRequestPayoutResponse' => __DIR__ .'/doRequestPayoutResponse.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\ArrayOfInt' => __DIR__ .'/ArrayOfInt.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoSellSomeAgainRequest' => __DIR__ .'/DoSellSomeAgainRequest.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\StructSellAgain' => __DIR__ .'/StructSellAgain.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\ArrayOfStructsellagain' => __DIR__ .'/ArrayOfStructsellagain.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\StructSellFailed' => __DIR__ .'/StructSellFailed.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\ArrayOfStructsellfailed' => __DIR__ .'/ArrayOfStructsellfailed.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\doSellSomeAgainResponse' => __DIR__ .'/doSellSomeAgainResponse.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoSellSomeAgainInShopRequest' => __DIR__ .'/DoSellSomeAgainInShopRequest.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\doSellSomeAgainInShopResponse' => __DIR__ .'/doSellSomeAgainInShopResponse.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoSendRefundFormRequest' => __DIR__ .'/DoSendRefundFormRequest.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\doSendRefundFormResponse' => __DIR__ .'/doSendRefundFormResponse.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoSetFreeDeliveryAmountRequest' => __DIR__ .'/DoSetFreeDeliveryAmountRequest.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\doSetFreeDeliveryAmountResponse' => __DIR__ .'/doSetFreeDeliveryAmountResponse.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoSetShipmentPriceTypeRequest' => __DIR__ .'/DoSetShipmentPriceTypeRequest.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\doSetShipmentPriceTypeResponse' => __DIR__ .'/doSetShipmentPriceTypeResponse.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoShowItemInfoExtRequest' => __DIR__ .'/DoShowItemInfoExtRequest.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\ItemInfoExt' => __DIR__ .'/ItemInfoExt.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\doShowItemInfoExtResponse' => __DIR__ .'/doShowItemInfoExtResponse.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoShowUserRequest' => __DIR__ .'/DoShowUserRequest.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\ShowUserFeedbacks' => __DIR__ .'/ShowUserFeedbacks.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\SellRatingAverageStruct' => __DIR__ .'/SellRatingAverageStruct.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\ArrayOfSellratingaveragestruct' => __DIR__ .'/ArrayOfSellratingaveragestruct.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\doShowUserResponse' => __DIR__ .'/doShowUserResponse.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoVerifyItemRequest' => __DIR__ .'/DoVerifyItemRequest.php',
        'Imper86\AllegroRestApiSdk\Model\SoapWsdl\doVerifyItemResponse' => __DIR__ .'/doVerifyItemResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_3b4d44facc501c5f8edc156ebedf3892');

// Do nothing. The rest is just leftovers from the code generation.
{
}
