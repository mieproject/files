<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTempFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temp_files', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('file_id');

            $table->string('user_agent')->nullable(NULL);
            $table->ipAddress('ip')->nullable(NULL);
            $table->string('referrer')->nullable(NULL);
            $table->integer('online_time')->default(7200); // 7200s = 2h
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
        Schema::dropIfExists('temp_files');
    }
}
