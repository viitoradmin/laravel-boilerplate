<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Modules\Core\Constants\Constants;

return new class () extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            //get constants value
            $one = Constants::STATUS_ONE;
            $zero = Constants::STATUS_ZERO;

            $table->id();
            $table->uuid();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone', config('common-variables.phone_number_lenght'));
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->enum('status', [$one, $zero])->default($zero)->comment('1 - Active, 0 - Inactive');
            $table->dateTime('last_login_at')->nullable();
            $table->dateTime('logout_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
