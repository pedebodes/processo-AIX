<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAlunosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alunos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome',150);
            $table->char('situacao',2);
            $table->string('cep',15);
            $table->string('logradouro',150);
            $table->string('complemento',150);
            $table->string('bairro',150);
            $table->string('cidade',150);
            $table->char('uf',2);
            $table->string('avatar',255);
            $table->integer('id_curso');
            $table->string('turma',150);
            $table->date('data_matricula');
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
        Schema::drop('alunos');
    }
}
