<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::create('bookings', function (Blueprint $table) {
        $table->id();
        $table->foreignId('user_id')->constrained()->onDelete('cascade');
        $table->foreignId('resort_id')->constrained()->onDelete('cascade');
        $table->string('full_name');
        $table->string('phone');
        $table->string('email');
        $table->string('room_type');
        $table->decimal('room_price', 8, 2)->default(0);
        $table->integer('guests');
        $table->dateTime('check_in');
        $table->dateTime('check_out');
        $table->string('gcash_number');
        $table->decimal('gcash_amount', 8, 2);
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
        Schema::dropIfExists('bookings');
    }
};
