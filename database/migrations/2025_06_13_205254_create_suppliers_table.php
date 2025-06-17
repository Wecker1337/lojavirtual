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
       Schema::create('supplier', function (Blueprint $table) {
             $table->id();
            $table->enum('type', ['F', 'J'])->comment('F: Física, J: Jurídica');
            $table->string('name_reason', 100);
            $table->string('cpf_cnpj', 20)->unique();
            $table->string('phone', 20)->nullable();
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suppliers');
    }
};
