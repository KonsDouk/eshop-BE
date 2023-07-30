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
        Schema::table('users', function (Blueprint $table) {
            $table->string('lName');
            $table->string('phone');
            $table->string('cellphone');
            $table->string('address');
            $table->string('streetNo');
            $table->boolean('isActive');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('lName');
            $table->dropColumn('phone');
            $table->dropColumn('cellphone');
            $table->dropColumn('address');
            $table->dropColumn('streetNo');
            $table->dropColumn('isActive');
        });
    }
};
