<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('files', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->unsignedBigInteger('user_id');

            $table->longText('url');
            $table->longText('name');
            $table->longText('alt');

            // something for design
            $table->integer('col')->nullable()->default(rand(2,11));

            $table->string('type');
            $table->string('extension')->nullable();

            $table->unsignedBigInteger('fileable_id')->nullable();
            $table->string('fileable_type')->nullable();

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
        Schema::dropIfExists('files');
    }
}
