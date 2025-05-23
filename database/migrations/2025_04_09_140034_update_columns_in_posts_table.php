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
        Schema::table('posts', function (Blueprint $table) {
          $table->text('category')->change();
          $table->text('title')->change();
          $table->longText('content')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
      Schema::table('posts', function (Blueprint $table) {
        $table->string('category')->change();
        $table->string('title')->change();
        $table->string('content')->change();
      });
    }
};
