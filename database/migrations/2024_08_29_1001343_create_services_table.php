<?php

// database/migrations/xxxx_xx_xx_create_services_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');  // Removed ->after('name')
            $table->text('short_description');
            $table->text('long_description');
            $table->string('service_image')->nullable();
            $table->string('service_banner')->nullable();
            $table->timestamps();
        });

    }

    public function down()
    {
        Schema::dropIfExists('services');
    }
};
