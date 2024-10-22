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
    Schema::create('outlets', function (Blueprint $table) {
      $table->id();
      $table->string('code');
      $table->foreignId('department_id')
        ->constrained('departments')
        ->cascadeOnDelete();
      $table->string('store_type')
        ->nullable();
      $table->date('operational_date')
        ->nullable();
      $table->string('address')
        ->nullable();
      $table->foreignId('zip_id')
        ->nullable()->constrained('zips');
      $table->float('latitude')
        ->nullable();
      $table->float('longitude')
        ->nullable();
      $table->char('phone')
        ->nullable();
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('outlets');
  }
};
