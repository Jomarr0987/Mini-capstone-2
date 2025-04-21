<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResortsTable extends Migration
{
    public function up()
    {
        Schema::create('resorts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('location');
            $table->string('address')->nullable(); // Add if not yet added
            $table->string('contact')->nullable();
            $table->string('email')->nullable();
            $table->string('image');  // This will store the path of the image
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('resorts');
    }
}
