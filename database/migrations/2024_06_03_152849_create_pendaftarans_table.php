<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendaftaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Pendaftaran', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('partner_name');
            $table->string('job_target');
            $table->string('email');
            $table->string('phone');
            $table->text('address');
            $table->string('photo');
            $table->string('ktp');
            $table->string('kk');
            $table->string('ijazah');
            $table->string('sertifikat_vaksin');
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
        Schema::dropIfExists('Pendaftaran');
    }
}
