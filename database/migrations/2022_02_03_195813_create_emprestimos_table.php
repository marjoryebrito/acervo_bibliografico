<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmprestimosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emprestimos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('livro_id'); //chave estrangeira
            $table->unsignedBigInteger('leitor_id'); //chave estrangeira
            $table->timestamps();

            //constraint
            $table->foreign('livro_id')->references('id')->on('livros');//constraint
            $table->foreign('leitor_id')->references('id')->on('leitors');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('emprestimos');
    }
}
