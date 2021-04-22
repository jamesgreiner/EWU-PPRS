<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entries', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('study_id');
            $table->string('study_name');
            $table->mediumText('study_description');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('faculty_name');
            $table->string('faculty_contact');
            $table->string('student_name');
            $table->string('student_contact');
            $table->json('keywords');
            $table->mediumText('seed_name');
            $table->mediumText('seeding_date');
            $table->mediumText('plant_name');
            $table->mediumText('planting_date');
            $table->mediumText('flora_other');
            $table->mediumText('fauna_other');
            $table->mediumText('soil_amendment_type');
            $table->mediumText('soil_amendment_date');
            $table->mediumText('soil_other');
            $table->mediumText('hydrological_other');
            $table->mediumText('herbicide_treatment_type');
            $table->mediumText('herbicide_treatment_date');
            $table->mediumText('mowings');
            $table->mediumText('management_other');
            $table->mediumText('data_description');
            $table->string('data_files');
            $table->string('metadata_files');
            $table->string('project_files');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entries');
    }
}
