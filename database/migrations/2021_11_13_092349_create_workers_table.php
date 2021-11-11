<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('workers');
        Schema::create('workers', function (Blueprint $table) {
            $table->id();
            $table->text('email');
            $table->text('code');
            $table->string('lnurl');
            $table->boolean('success')->default(0);
            $table->boolean('paid')->default(0);
            $table->unsignedBigInteger('lnurl_id');
            $table->foreign('lnurl_id')->references('id')->on('lnurls');
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
        Schema::dropIfExists('workers');
    }
}
