<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSelfDescriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('self_descriptions', function (Blueprint $table) {
            $table->id();
            $table->string('deskripsi_diri');
            $table->string('email');
            $table->string('no_hp');
            $table->string('pengalaman');
            $table->string('soft_skills');
            $table->string('hard_skills');
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
        Schema::dropIfExists('self_descriptions');
    }
}
