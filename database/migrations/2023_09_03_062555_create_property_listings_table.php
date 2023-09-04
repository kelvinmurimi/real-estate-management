<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('property_listings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('propertytype_id')->constrained('property_types')->onDelete('cascade');
            $table->foreignUuId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('amenities_id')->constrained('property_amenities')->onDelete('cascade');
            $table->foreignId('facility_id')->constrained('facilities')->onDelete('cascade');
            $table->foreignId('propertycategory_id')->constrained('property_categories')->onDelete('cascade');
            $table->boolean('status');
            $table->string('name');
            $table->string('lowestprice');
            $table->string('maxprice');
            $table->string('bedrooms');
            $table->string('bathrooms');
            $table->string('garage');
            $table->string('garagesize');
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->string('featuredimage');
            $table->string('multipleimages');
            $table->string('location');
            $table->string('postalcode');
            $table->string('size');
            $table->string('description');
            $table->text('content');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('property_listings');
    }
};