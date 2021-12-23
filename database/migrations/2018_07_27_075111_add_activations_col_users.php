<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddActivationsColUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('role', 10)->default('member')->after('id');
            $table->string('phone', 20)->nullable()->after('email');
            $table->string('status', 20)->default('inactive')->after('password');
            $table->string('activation_token', 50)->nullable()->after('remember_token');
            $table->timestamp('activated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('role');
            $table->dropColumn('phone');
            $table->dropColumn('status');
            $table->dropColumn('activation_token');
            $table->dropColumn('activated_at');
        });
    }
}
