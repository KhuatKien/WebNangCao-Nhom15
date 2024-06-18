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
        // Creating tblguest first since it has no foreign keys
        Schema::create('tblguest', function (Blueprint $table) {
            $table->id('GuestID');
            $table->date('DOB');
            $table->string('Gender', 6);
            $table->string('PhoneNo', 15);
            $table->string('PassportNo', 20);
            $table->string('Address', 100);
            $table->string('Postcode', 10);
            $table->string('City', 50);
            $table->string('Country', 50);
            $table->foreign('GuestID')->references('id')->on('users');
        });

        // Creating tblroomtype second since it has no foreign keys
        Schema::create('tblroomtype', function (Blueprint $table) {
            $table->string('RoomType', 25)->primary();
            $table->double('RoomPrice');
            $table->text('RoomDesc');
            $table->integer('Occupancy');
            $table->string('image_path', 50);
            $table->tinyInteger('Status')->default(1);
        });

        // Creating tblroom which has foreign key references to tblroomtype
        Schema::create('tblroom', function (Blueprint $table) {
            $table->integer('RoomNo')->primary();
            $table->string('RoomType', 25);
            $table->tinyInteger('Status')->default(1);
            $table->foreign('RoomType')->references('RoomType')->on('tblroomtype');
        });

        // Creating tbltable since it has no foreign keys
        Schema::create('tbltable', function (Blueprint $table) {
            $table->string('TableID', 10)->primary();
            $table->integer('Occupancy');
            $table->tinyInteger('TableStatus')->default(0);
        });

        // Creating tblbooking which has foreign key references to tblguest and tblroom
        Schema::create('tblbooking', function (Blueprint $table) {
            $table->string('BookingID', 10)->primary();
            $table->unsignedBigInteger('GuestID');
            $table->integer('RoomNo');
            $table->date('BookingDate');
            $table->time('BookingTime', 6);
            $table->date('ArrivalDate');
            $table->date('DepartureDate');
            $table->time('EstArrivalTime', 6);
            $table->time('EstDepartureTime', 6);
            $table->integer('NumAdults');
            $table->integer('NumChildren');
            $table->tinyInteger('Status')->default(0);
            $table->foreign('RoomNo')->references('RoomNo')->on('tblroom');
            $table->foreign('GuestID')->references('GuestID')->on('tblguest');
        });

        // Creating tblbill which has foreign key references to tblbooking
        Schema::create('tblbill', function (Blueprint $table) {
            $table->string('BillID', 10)->primary();
            $table->string('BookingID', 10);
            $table->double('RoomCharge');
            $table->double('RoomService');
            $table->double('RestaurantCharges');
            $table->date('PaymentDate');
            $table->string('PaymentMode', 10);
            $table->string('CreditCardNo', 20);
            $table->date('ExpireDate');
            $table->double('TotalPrice');
            $table->foreign('BookingID')->references('BookingID')->on('tblbooking');
        });

        // Creating tblbookres which has foreign key references to tblguest and tbltable
        Schema::create('tblbookres', function (Blueprint $table) {
            $table->string('BookID', 10)->primary();
            $table->unsignedBigInteger('GuestID');
            $table->string('TableID', 10);
            $table->date('BookDate');
            $table->integer('NumofPeople');
            $table->tinyInteger('StatusRes')->default(0);
            $table->foreign('GuestID')->references('GuestID')->on('tblguest');
            $table->foreign('TableID')->references('TableID')->on('tbltable');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tblbill');
        Schema::dropIfExists('tblbooking');
        Schema::dropIfExists('tblbookres');
        Schema::dropIfExists('tblguest');
        Schema::dropIfExists('tblroom');
        Schema::dropIfExists('tblroomtype');
        Schema::dropIfExists('tbltable');
    }
};
