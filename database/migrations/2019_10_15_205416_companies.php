<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Companies extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_companies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('title')->nullable()->default(null);
            $table->text('description')->nullable()->default(null);
            $table->string('services')->nullable()->default(null);
            $table->string('address')->nullable()->default(null);
            $table->string('city')->nullable()->default(null);
            $table->string('province')->nullable()->default(null);
            $table->string('country')->nullable()->default(null);
            $table->string('email')->unique();
            $table->string('phone')->nullable()->default(null);
            $table->text('keywords')->nullable()->default(null)->comment('comma separated list of keywords related to business');
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamp('phone_verified_at')->nullable();
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
        Schema::dropIfExists('tbl_companies');
    }
}
