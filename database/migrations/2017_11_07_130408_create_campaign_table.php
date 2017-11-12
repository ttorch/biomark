<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCampaignTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campaign', function (Blueprint $table) {
            $table->increments('id');
            $table->string('subject');
            $table->string('from_name');
            $table->string('from_email');
            $table->string('to_name');
            $table->string('to_email');
            $table->longtext('email_body');
            $table->integer('template_id');
            $table->string('ref_code');
            $table->unsignedInteger('client_id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('human_resource_id');
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
        Schema::dropIfExists('campaign');
    }
}
