<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')
                  ->on('users')->onUpdate('cascade')->onDelete('set null');
            $table->string('name');
            $table->integer('phonenumber');
            $table->string('email');
            $table->text('address');
            $table->string('country');
            $table->string('state');
            $table->integer('zip');
            $table->string('cardtype');
            $table->string('nameoncard');
            $table->integer('creditcardnum');
            $table->string('expiration');
            $table->integer('cvv');
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
        Schema::dropIfExists('orders');
    }
}
