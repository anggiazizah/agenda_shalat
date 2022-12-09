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
        Schema::create('agendas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('user')->onUpdate('cascade')->onDelete('cascade');
            $table->string('shalat_subuh')->nullable();
            $table->string('shalat_dzuhur')->nullable();
            $table->string('shalat_ashar')->nullable();
            $table->string('shalat_maghrib')->nullable();
            $table->string('shalat_isya')->nullable();
            $table->string('shalat_dhuha')->nullable();
            $table->string('shalat_tahajud')->nullable();
            $table->string('dzikir_pagi')->nullable();
            $table->string('dzikir_sore')->nullable();
            $table->string('istighfar')->nullable();
            $table->string('shalawat')->nullable();
            $table->string('berbuat_baik')->nullable();
            $table->string('ceramah')->nullable();
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
        Schema::dropIfExists('agendas');
    }
};
