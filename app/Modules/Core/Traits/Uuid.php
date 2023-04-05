<?php

namespace App\Modules\Core\Traits;

use Ramsey\Uuid\Uuid as RamseyUuid;

trait Uuid
{
    /**
    * Use Laravel bootable traits.
    */
    protected static function boot(): void
    {
        parent::boot();

        static::creating(function ($model) {
            $model->uuid = RamseyUuid::uuid4()->toString();
        });
    }
}
