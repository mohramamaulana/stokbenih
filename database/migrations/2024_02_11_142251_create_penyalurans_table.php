<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenyaluransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penyalurans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("varietas_id");
            $table->enum("tujuan" , ["dalam provinsi" , "laur provinsi"]);
            $table->enum("pasar" , ["subsidi" , "non subsidi"]);
            $table->integer("jumlah");
            $table->text("catatan");
            $table->timestamps();

            $table->foreign('varietas_id')->references('id')->on('varietas')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penyalurans');
    }
}
