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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->foreignId('company_id')->constrained('companies', 'id')->restrictOnDelete();
            $table->foreignId('department_id')->constrained('departments', 'id')->restrictOnDelete();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('mobile');
            $table->string('address');
            $table->string('designation');
            $table->string('status')->default('application_received');
            $table->date('hired_on')->nullable();
            $table->timestamps();
            $table->softDeletes('deleted_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
