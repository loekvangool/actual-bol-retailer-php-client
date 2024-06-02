<?php

namespace Picqer\BolRetailerV10\Enum;

// This class is auto generated by OpenApi\ModelGenerator
enum UploadReportAssetSubStatus: string
{
    case DELETED = 'DELETED';
    case DOWNLOAD_FAILED_404 = 'DOWNLOAD_FAILED_404';
    case DOWNLOAD_FAILED_UNAUTHORIZED = 'DOWNLOAD_FAILED_UNAUTHORIZED';
    case IMAGE_FLAGGED_AS_DUPLICATE = 'IMAGE_FLAGGED_AS_DUPLICATE';
    case IMAGE_RATE_LIMITED = 'IMAGE_RATE_LIMITED';
    case IMPORT_FAILED = 'IMPORT_FAILED';
    case LABEL_UPDATED = 'LABEL_UPDATED';
    case MATCH_TO_PRODUCT_FAILED = 'MATCH_TO_PRODUCT_FAILED';
    case NOT_VALID_FOR_IMPORT = 'NOT_VALID_FOR_IMPORT';
    case PUBLISHED = 'PUBLISHED';
    case RECEIVED = 'RECEIVED';
    case SCORED_OTHER_IMAGE_WON = 'SCORED_OTHER_IMAGE_WON';
    case STORED = 'STORED';
    case SUPPLIED_FLAGGED_AS_BLACKLISTED = 'SUPPLIED_FLAGGED_AS_BLACKLISTED';
    case SUPPLIER_FLAGGED_AS_BLACKLISTED = 'SUPPLIER_FLAGGED_AS_BLACKLISTED';
    case UNKNOWN = 'UNKNOWN';
    case UNPUBLISHED = 'UNPUBLISHED';
    case UNSUPPORTED_MIMETYPE = 'UNSUPPORTED_MIMETYPE';
    case UPLOAD_CANCELLED = 'UPLOAD_CANCELLED';
    case UPLOAD_DEADLINE_REACHED = 'UPLOAD_DEADLINE_REACHED';
    case UPLOAD_FAILED = 'UPLOAD_FAILED';
    case UPLOAD_REJECTED = 'UPLOAD_REJECTED';
    case ASSET_DEDUPLICATED = 'ASSET_DEDUPLICATED';
}
