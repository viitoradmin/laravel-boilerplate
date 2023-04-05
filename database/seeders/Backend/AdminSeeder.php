<?php

namespace Database\Seeders\Backend;

use App\Modules\Backend\V1\Auth\Models\User;
use Exception;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * @throws Exception
     */
    public function run(): void
    {
        try {
            
            /*
			|--------------------------------------------------------------------------
			| CREATE SUPER USER
			|--------------------------------------------------------------------------
			*/
            
            User::create([
                'name' => config('common-variables.user_credential.last_name'),
                'email' => config('common-variables.user_credential.email'),
                'phone' => config('common-variables.user_credential.phone'),
                'password' => Hash::make(config('common-variables.user_credential.password')),
                'email_verified_at' => now(),
            ]);
        } catch (Exception $exception) {
            Log::error($exception);

            throw $exception;
        }
    }
}
