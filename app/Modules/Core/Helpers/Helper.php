<?php

namespace App\Modules\Core\Helpers;

use App\Modules\Backend\V1\Auth\Models\User;
use Illuminate\Support\Arr;
use ReflectionClass;
use ReflectionException;
use App\Modules\Core\Constants\Constants;
use Illuminate\Support\Facades\Log;
use Exception;

class Helper
{
    /**
     * @param $class
     * @return string
     */
    public static function getResourceName($class): string
    {
        try {
            return (new ReflectionClass($class))->getShortName();
        } catch (ReflectionException $exception) {
            return $exception->getMessage();
        }
    }

    /**
     * @param $request
     * @param $key
     * @return bool
     */
    public static function checkIfNotNull($request, $key): bool
    {
        return (Arr::has($request, $key) && !is_null(Arr::get($request, $key)));
    }

    /**
     * @param $request
     * @param $key
     * @return bool
     */
    public static function checkIfTrue($request, $key): bool
    {
        return (Arr::has($request, $key) && (bool)Arr::get($request, $key) === true);
    }

    /**
     * check permission
     *
     * @param string $key
     * @param string $action
     * @return boolean
     */
    public static function checkPermissionAccess(string $key, string $action): bool
    {
        try {
            return self::getLoginUser()->hasPermissionTo($key, $action);
        } catch (Exception $ex) {
            Log::error($ex->getMessage());
            return Constants::STATUS_FALSE;
        }
    }

    /**
     * check permission
     *
     * @return User
     */
    public static function getLoginUser(): User
    {
        try {
            return auth()->user();
        } catch (Exception $ex) {
            Log::error($ex->getMessage());
            return Constants::STATUS_FALSE;
        }
    }
}
