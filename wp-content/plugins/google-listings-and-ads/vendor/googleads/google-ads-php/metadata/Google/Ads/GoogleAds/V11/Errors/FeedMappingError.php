<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v11/errors/feed_mapping_error.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V11\Errors;

class FeedMappingError
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
8google/ads/googleads/v11/errors/feed_mapping_error.protogoogle.ads.googleads.v11.errors"�
FeedMappingErrorEnum"�
FeedMappingError
UNSPECIFIED 
UNKNOWN
INVALID_PLACEHOLDER_FIELD
INVALID_CRITERION_FIELD
INVALID_PLACEHOLDER_TYPE
INVALID_CRITERION_TYPE
NO_ATTRIBUTE_FIELD_MAPPINGS 
FEED_ATTRIBUTE_TYPE_MISMATCH8
4CANNOT_OPERATE_ON_MAPPINGS_FOR_SYSTEM_GENERATED_FEED	*
&MULTIPLE_MAPPINGS_FOR_PLACEHOLDER_TYPE
(
$MULTIPLE_MAPPINGS_FOR_CRITERION_TYPE+
\'MULTIPLE_MAPPINGS_FOR_PLACEHOLDER_FIELD)
%MULTIPLE_MAPPINGS_FOR_CRITERION_FIELD\'
#UNEXPECTED_ATTRIBUTE_FIELD_MAPPINGS.
*LOCATION_PLACEHOLDER_ONLY_FOR_PLACES_FEEDS)
%CANNOT_MODIFY_MAPPINGS_FOR_TYPED_FEED:
6INVALID_PLACEHOLDER_TYPE_FOR_NON_SYSTEM_GENERATED_FEED;
7INVALID_PLACEHOLDER_TYPE_FOR_SYSTEM_GENERATED_FEED_TYPE)
%ATTRIBUTE_FIELD_MAPPING_MISSING_FIELDB�
#com.google.ads.googleads.v11.errorsBFeedMappingErrorProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v11/errors;errors�GAA�Google.Ads.GoogleAds.V11.Errors�Google\\Ads\\GoogleAds\\V11\\Errors�#Google::Ads::GoogleAds::V11::Errorsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

