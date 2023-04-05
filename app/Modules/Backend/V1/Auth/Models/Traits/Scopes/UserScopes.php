<?php

namespace App\Modules\Backend\V1\Auth\Models\Traits\Scopes;

trait UserScopes
{
    /**
     * @param $query
     * @param $uuid
     * @return mixed
     */
    public function scopeUuid($query, $uuid)
    {
        return $query->where('uuid', $uuid);
    }
}
