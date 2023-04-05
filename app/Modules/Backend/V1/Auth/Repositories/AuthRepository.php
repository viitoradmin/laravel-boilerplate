<?php

namespace  App\Modules\Backend\V1\Auth\Repositories;

use App\Modules\Core\Repositories\Repository;
use App\Modules\Backend\V1\Auth\Interfaces\AuthInterface;

class AuthRepository extends Repository implements AuthInterface
{
    /**
     * @var string
     */
    private string $model;

    public function __construct()
    {
        $this->model = config('model-variables.model.user.class');
    }
}
