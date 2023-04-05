<?php

namespace App\Modules\Backend\V1\Auth\Models;

use App\Modules\Core\Traits\Uuid;
use App\Modules\Backend\V1\Auth\Models\Traits\Attributes\UserAttributes;
use App\Modules\Backend\V1\Auth\Models\Traits\Relationships\UserRelationships;
use App\Modules\Backend\V1\Auth\Models\Traits\Scopes\UserScopes;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory;
    use UserAttributes;
    use UserRelationships;
    use UserScopes;
    use Uuid;
    use HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'uuid',
        'name',
        'email',
        'password',
        'phone',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];


    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at'  => 'datetime',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'logout_at' => 'datetime',
        'status' => 'boolean',
    ];
}
