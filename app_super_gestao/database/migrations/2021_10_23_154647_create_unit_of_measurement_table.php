<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnitOfMeasurementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unit_of_measurement', function (Blueprint $table) {
            $table->id();
            $table->string("unit", 5);
            $table->string("description", 30);
            $table->timestamps();
        });

        //add relationship with products table
        Schema::table('products', function (Blueprint $table) {
            $table->unsignedBigInteger("unit_id");
            $table->foreign("unit_id")->references("id")->on("unit_of_measurement");
        });

        //add relationship with product_details table
        Schema::table('product_details', function (Blueprint $table) {
            $table->unsignedBigInteger("unit_id");
            $table->foreign("unit_id")->references("id")->on("unit_of_measurement");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Need to remove relationship before dorp unit_of_measurement table
        Schema::table('product_details', function (Blueprint $table) {
            $table->dropForeign("product_details_unit_id_foreign");
            $table->dropColumn("unit_id");
        });

        Schema::table('products', function (Blueprint $table) {
            $table->dropForeign("products_unit_id_foreign");
            $table->dropColumn("unit_id");
        });

        Schema::dropIfExists('unit_of_measurement');
    }
}
