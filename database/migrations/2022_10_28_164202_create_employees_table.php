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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('codeemployee');
            $table->string('firstname');
            $table->string('secondname');
            $table->string('communname')->nullable();
            $table->string('birthday')->date();
            $table->string('gender');
            $table->string('addresse');
            $table->string('state')->nullable();
            $table->string('country')->nullable();
            $table->string('pincode')->nullable();
            $table->string('phonenumber')->nullable();
            $table->string('email')->nullable();
            $table->string('company');
            $table->string('departement')->nullable();
            $table->string('fonction')->nullable();
            $table->string('report_to')->nullable();
            $table->string('images')->nullable();
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
        Schema::dropIfExists('employees');
    }
};
