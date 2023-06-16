<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('agendamentos', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('tel');
            $table->enum('origin', ['WhatsApp', 'Celular', 'Fixo', 'Facebook', 'Instagram', 'Google Meu Negócio']);
            $table->datetime('dt_ctt');
            $table->string('observation');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_agendamentos');
    }
};
