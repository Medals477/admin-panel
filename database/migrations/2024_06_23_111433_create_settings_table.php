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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('website_name');
            $table->string('website_url');
            $table->mediumText('address');
            $table->string('mobile');
            $table->string('email');
            $table->string('logo')->nullable();
            $table->string('logo_alt');
            $table->string('favicon')->nullable();
            $table->string('favicon_alt');
            $table->boolean('robots');
            $table->longText('description');
            $table->string('meta_title', 600);
            $table->string('meta_keywords', 600);
            $table->longText('meta_description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('setting');
    }
};
