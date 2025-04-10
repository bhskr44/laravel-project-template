<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        if (!Schema::hasTable('users')) {
            Schema::create('users', function (Blueprint $table) {
                $table->id();
                $table->string('dist_code')->nullable();
                $table->string('subdiv_code')->nullable();
                $table->string('cir_code')->nullable();
                $table->string('username')->unique();
                $table->string('user_code')->unique();
                $table->string('user_desig_code')->nullable();
                $table->boolean('status')->default(1);
                $table->date('date_from')->nullable();
                $table->date('date_to')->nullable();
                $table->binary('user_thumb_imp')->nullable();
                $table->binary('user_sign1')->nullable();
                $table->binary('user_sign2')->nullable();
                $table->binary('user_sign3')->nullable();
                $table->string('phone_no')->nullable();
                $table->string('usernm')->nullable();
                $table->string('email')->unique();
                $table->string('priority')->nullable();
                $table->string('display_name')->nullable();
                $table->string('aadhar_no')->nullable();
                $table->string('user_type')->nullable();
                $table->integer('dlc_priority')->nullable();
                $table->string('password');
                $table->rememberToken();
                $table->timestamps();
            });
    }
    
    if (!Schema::hasTable('password_reset_tokens')) {

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });
    }
    if (!Schema::hasTable('sessions')) {

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
