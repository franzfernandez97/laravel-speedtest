<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('speed_tests', function (Blueprint $table) {
            $table->id();
            $table->string('file_name');
            $table->dateTime('date');
            $table->decimal('download_speed', 10, 2);
            $table->decimal('upload_speed', 10, 2);
            $table->string('isp');
            $table->string('server_country');
            $table->string('server_location');
            $table->foreignId('client_id')->nullable()->constrained('clients')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('speed_tests');
    }
};
