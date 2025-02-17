<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('table');
            $table->text('description');
            $table->unsignedBigInteger('job_location_id');
            $table->string('job_category_id');
            $table->unsignedBigInteger('experience_level_id');
            $table->unsignedBigInteger('contract_type');
            $table->unsignedBigInteger('minimum_education_id');
            $table->string('industry_ids');
            $table->unsignedBigInteger('salary_range_id')->nullable();
            $table->unsignedBigInteger('required_language_id');

            $table->unsignedBigInteger('province_id')->nullable();
            $table->unsignedBigInteger('regency_id')->nullable();
            $table->unsignedBigInteger('village_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
