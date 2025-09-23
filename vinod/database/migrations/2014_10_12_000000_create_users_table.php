<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();                                           // Primary key
            $table->string('name', 50);                             // Name
            $table->string('email', 100)->unique();                  // Unique email
            $table->string('mobile', 20)->nullable();                // Store as string to avoid numeric overflow
            $table->date('date_of_birth')->nullable();               // Date of birth
            $table->string('address', 255)->nullable();              // Full address
            //$table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();                                    // created_at & updated_at
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