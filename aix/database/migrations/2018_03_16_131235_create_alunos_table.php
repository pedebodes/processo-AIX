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
            $table->string('cep',30);
            $table->string('logradouro',150);
            $table->string('complemento',150)->nullable();;
            $table->string('bairro',150);
            $table->string('cidade',150);
            $table->char('uf',2);
            $table->string('avatar',255)->nullable();;
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
