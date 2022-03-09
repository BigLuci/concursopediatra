<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidatos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('cpf')->unique();
            $table->string('name');
            $table->string('sex');
            $table->string('nationality');
            $table->string('birth_place');
            $table->string('parentage_1');
            $table->string('parentage_2')->nullable();
            $table->date('birth_date');
            $table->string('crm');
            $table->string('marital_status');
            $table->string('rg');
            $table->string('issuing_agency');
            $table->string('specialization');
            $table->string('pcd');

            $table->string('deficiency')->nullable();
            $table->string('cid')->nullable();

            $table->string('doc_id');
            $table->string('doc_cpf');
            $table->string('doc_cv');
            $table->string('doc_medicine');
            $table->string('doc_re_esp');
            $table->string('doc_crm');
            $table->string('doc_deficiency')->nullable();

            $table->string('email');
            $table->string('phone');

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

        Schema::dropIfExists('candidatos');
    }
}
