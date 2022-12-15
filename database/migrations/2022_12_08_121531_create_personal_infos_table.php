<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_infos', function (Blueprint $table) {
            $table->string('p_email')->unique();;
            $table->String('FirstName');
            $table->String('MiddleName')->nullable();;
            $table->String('SurName');
            $table->String('sex');
            $table->date('DateOfBirth');
            $table->String('Nationality');
            $table->String('PostCode');
            $table->String('Telephone')->nullable();
            $table->String('Mobile')->nullable();
            $table->String('Passport');
            $table->String('PermanentAddress')->nullable();;
            $table->String('disable');
            $table->String('disableStatement')->nullable();
            $table->String('FullName');
            $table->String('Relationship');
            $table->String('Address');
            $table->String('ContactNo');
            $table->String('emailAddress');
//            $table->String('Statement')->nullable();
//            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personal_infos');
    }
}
