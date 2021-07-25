<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeopleTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('people', function (Blueprint $table) {
      $table->id();
      $table->string('company');
      $table->string('address');
      $table->integer('postcode');
      $table->string('email');
      $table->string('phone');
      $table->string('bank');
      $table->string('bin');
      $table->string('iik');
      $table->string('bik');
      $table->string('fio');
      $table->string('response_fio');
      $table->string('response_phone');
      $table->string('response_email');
      $table->string('domain');
      // $table->text('document');
      // $table->text('captcha');
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
    Schema::dropIfExists('people');
  }
}