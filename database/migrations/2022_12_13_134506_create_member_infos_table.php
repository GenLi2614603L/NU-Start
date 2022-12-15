<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMemberInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member_infos', function (Blueprint $table) {
            $table->string('m_email')->unique();
            $table->String('OrganisationName');
            $table->String('OrganisationEmail');
            $table->String('Website')->nullable();
            $table->String('OrganisationPhone');
            $table->String('StreetAddress');
            $table->String('Town');
            $table->String('Postcode');
            $table->String('FirstName');
            $table->String('Phone');
            $table->String('Job');
            $table->String('LastName');
            $table->String('Email');
            $table->String('Role');
            $table->String('Establish')->nullable();;
            $table->String('CompanyNumber')->nullable();;
            $table->String('CharityNumber')->nullable();;
            $table->String('Group')->nullable();
            $table->String('WorkWith')->nullable();
            $table->String('SpecialistService');
            $table->String('Motivation');
            $table->String('Comment')->nullable();
            $table->String('Person');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('member_infos');
    }
}
