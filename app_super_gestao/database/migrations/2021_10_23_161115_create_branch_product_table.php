<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBranchProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('branchs', function (Blueprint $table) {
            $table->id();
            $table->string("branch", 30);
            $table->timestamps();
        });

        Schema::create('branchs_product', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("branchs_id");
            $table->unsignedBigInteger("product_id");
            $table->decimal("sale_price", 8, 2);
            $table->integer("min_stock");
            $table->integer("max_stock");
            $table->timestamps();

            $table->foreign("branchs_id")->references("id")->on("branchs");
            $table->foreign("product_id")->references("id")->on("branchs");
        });

        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn(["sale_price", "min_stock", "max_stock"]);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->decimal("sale_price", 8, 2);
            $table->integer("min_stock");
            $table->integer("max_stock");
        });

        Schema::dropIfExists('branchs_product');

        Schema::dropIfExists('branchs');
    }
}
