<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            
            $table->string('login');
            $table->string('password');
            
            $table->string('first_name');
            $table->string('last_name');
            
            $table->string('img_file')->comment('Аватар');;
                        
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            
            $table->rememberToken();
            
            $table->string('about')->unique();
            $table->integer('subscription_id')->unsigned()->comment('Подписики');
            $table->integer('invite_id')->unsigned()->comment('Инвайт');
            
            $table->timestamps();
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
}
