<?php

namespace App\Modules\Core\Constants;

use Symfony\Component\HttpFoundation\Response;

/**
 * HTTP Headers based on IANA Message Headers Registry and Wikipedia list.
 *
 * Class Constants
 */
final class Constants extends Response
{
    /*
    |--------------------------------------------------------------------------
    | HTTP Code
    |--------------------------------------------------------------------------
    */

    /**
     * @var int
     */
    public const HTTP_OK = Response::HTTP_OK;

    /**
     * @var int
     */
    public const HTTP_FOUND = Response::HTTP_FOUND;

    /**
     * @var int
     */
    public const HTTP_TEMPORARY_REDIRECT = Response::HTTP_TEMPORARY_REDIRECT;

    /**
     * @var int
     * RFC7238
     */
    public const HTTP_PERMANENTLY_REDIRECT = Response::HTTP_PERMANENTLY_REDIRECT;

    /**
     * @var int
     */
    public const HTTP_BAD_REQUEST = Response::HTTP_BAD_REQUEST;

    /**
     * @var int
     */
    public const HTTP_UNAUTHORIZED = Response::HTTP_UNAUTHORIZED;

    /**
     * @var int
     */
    public const HTTP_FORBIDDEN = Response::HTTP_FORBIDDEN;

    /**
     * @var int
     */
    public const HTTP_NOT_FOUND = Response::HTTP_NOT_FOUND;

    /**
     * @var int
     */
    public const HTTP_METHOD_NOT_ALLOWED = Response::HTTP_METHOD_NOT_ALLOWED;

    /**
     * @var int
     */
    public const HTTP_REQUEST_TIMEOUT = Response::HTTP_REQUEST_TIMEOUT;

    /**
     * @var int
     */
    public const HTTP_UNSUPPORTED_MEDIA_TYPE = Response::HTTP_UNSUPPORTED_MEDIA_TYPE;

    /**
     * @var int
     * RFC4918
     */
    public const HTTP_UNPROCESSABLE_ENTITY = Response::HTTP_UNPROCESSABLE_ENTITY;

    /**
     * @var int
     * RFC4918
     */
    public const HTTP_LOCKED = Response::HTTP_LOCKED;

    /**
     * @var int
     * RFC2817
     */
    public const HTTP_UPGRADE_REQUIRED = Response::HTTP_UPGRADE_REQUIRED;

    /**
     * @var int
     * RFC6585
     */
    public const HTTP_TOO_MANY_REQUESTS = Response::HTTP_TOO_MANY_REQUESTS;

    /**
     * @var int
     */
    public const HTTP_INTERNAL_SERVER_ERROR = Response::HTTP_INTERNAL_SERVER_ERROR;

    /**
     * @var int
     */
    public const HTTP_NOT_IMPLEMENTED = Response::HTTP_NOT_IMPLEMENTED;

    /**
     * @var int
     */
    public const HTTP_BAD_GATEWAY = Response::HTTP_BAD_GATEWAY;

    /**
     * @var int
     */
    public const HTTP_SERVICE_UNAVAILABLE = Response::HTTP_SERVICE_UNAVAILABLE;

    /**
     * @var int
     */
    public const HTTP_GATEWAY_TIMEOUT = Response::HTTP_GATEWAY_TIMEOUT;

    /**
     * @var int
     */
    public const HTTP_VERSION_NOT_SUPPORTED = Response::HTTP_VERSION_NOT_SUPPORTED;

    /**
     * @var int
     * RFC4918
     */
    public const HTTP_INSUFFICIENT_STORAGE = Response::HTTP_INSUFFICIENT_STORAGE;

    /**
     * @var int
     * RFC5842
     */
    public const HTTP_LOOP_DETECTED = Response::HTTP_LOOP_DETECTED;

    /**
     * @var int
     * RFC6585
     */
    public const HTTP_NETWORK_AUTHENTICATION_REQUIRED = Response::HTTP_NETWORK_AUTHENTICATION_REQUIRED;

    /*
    |--------------------------------------------------------------------------
    | Entity Status
    |--------------------------------------------------------------------------
    */

    /**
     * @var string
     */
    public const STATUS_ACTIVE = 'active';

    /**
     * @var string
     */
    public const STATUS_INACTIVE = 'inactive';


    /**
     * @var string
     */
    public const STATUS_ALL = 'all';

    /**
     * @var null
     */
    public const STATUS_NULL = null;

    /*
    |--------------------------------------------------------------------------
    | Typographical Symbols
    |--------------------------------------------------------------------------
    */

    /**
     * @var string
     */
    public const BACK_SLASH = '\\';

    /**
     * @var string
     */
    public const SLASH = '/';

    /**
     * @var string
     */
    public const UNDERSCORE = '_';

    /**
     * @var string
     */
    public const HYPHEN = '-';

    /**
     * @var string
     */
    public const AT_SIGN = '@';

    /**
     * @var string
     */
    public const SPACE_BETWEEN = ' ';

    /*
    |--------------------------------------------------------------------------
    | File and Directory Modes
    |--------------------------------------------------------------------------
    */

    /**
     * @var int
     */
    public const FILE_READ_MODE = 0644;

    /**
     * @var int
     */
    public const FILE_WRITE_MODE = 0644;

    /**
     * @var int
     */
    public const DIR_READ_MODE = 0755;

    /**
     * @var int
     */
    public const DIR_WRITE_MODE = 0755;

    /*
    |--------------------------------------------------------------------------
    | General Status Code
    |--------------------------------------------------------------------------
    */

    /**
     * @var int
     */
    public const STATUS_ZERO = 0;

    /**
     * User in created_from field as well
     * This constant used as a Wellbase (1)
     *
     * @var int
     */
    public const STATUS_ONE = 1;

    /**
     * User in created_from field as well
     * This constant used as a Hubspot (2)
     *
     * @var int
     */
    public const STATUS_TWO = 2;

    /**
     * @var int
     */
    public const STATUS_THREE = 3;

    /**
     * @var int
     */
    public const STATUS_FOUR = 4;

    /**
     * @var bool
     */
    public const STATUS_TRUE = true;

    /**
     * @var bool
     */
    public const STATUS_FALSE = false;

    /*
    |--------------------------------------------------------------------------
    | PAGINATION CONSTANTS
    |--------------------------------------------------------------------------
    */

    /**
     * @var int
     */
    public const PAGINATION_LIMIT = 10;

    /*
    |--------------------------------------------------------------------------
    | COMMON CONSTANTS
    |--------------------------------------------------------------------------
    */

    public const PHONE_NUMBER_LIMIT = 16;

    public const TOKEN_LIMIT = 64;


    /*
    |--------------------------------------------------------------------------
    | COMMON PERMISSION ACTION POINT
    |--------------------------------------------------------------------------
    */

    public const PERMISSION_READ = 'read';

    public const PERMISSION_EDIT = 'edit';

    public const PERMISSION_DELETE = 'delete';
}
