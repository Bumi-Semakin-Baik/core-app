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
        Schema::table('transactions', function (Blueprint $table) {
            $table->string("type", 20)->default("trx")->nullable(false)->after("id");
            $table->bigInteger('user_id')->nullable()->change();
            $table->string("email")->nullable()->after("user_id");
            $table->string("name")->nullable()->after("email");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropColumns("type");
        Schema::dropColumns("email");
        Schema::dropColumns("name");
        Schema::table('transactions', function (Blueprint $table) {
            $table->bigInteger('user_id')->nullable(false)->change();
        });
    }
};
