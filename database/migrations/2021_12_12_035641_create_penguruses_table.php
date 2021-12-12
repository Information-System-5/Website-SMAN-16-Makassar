<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengurusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penguruses', function (Blueprint $table) {
            $table->id();
            $table->string('mabigus');
            $table->string('pembinaUtama');
            $table->string('ketuaDewanPutra');
            $table->string('ketuaDewanPutri');
            $table->string('sekretarisPutra');
            $table->string('sekretarisPutri');
            $table->string('bendaharaPutra');
            $table->string('bendaharaPutri');
            $table->string('pemangkuAdatPutra');
            $table->string('pemangkuAdatPutri');
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
        Schema::dropIfExists('penguruses');
    }
}
