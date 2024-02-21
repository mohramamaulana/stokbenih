<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stoks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("produsen_id");
            $table->unsignedBigInteger("varietas_id");
            $table->unsignedBigInteger("kelas_id");
            $table->enum("sumber" , ["dalam provinsi" , "laur provinsi"]);
            $table->integer("jumlah");
            $table->text("catatan")->nullable();
            $table->timestamps();

            $table->foreign('produsen_id')->references('id')->on('produsens')->onDelete('cascade');
            $table->foreign('varietas_id')->references('id')->on('varietas')->onDelete('cascade');
            $table->foreign('kelas_id')->references('id')->on('kelas_benihs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stoks');
    }
}
