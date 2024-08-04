<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupplierTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supplier', function (Blueprint $table) {
            $table->increments('id_supplier');
            $table->string('nama_supplier', 150); // Menambahkan kolom nama_supplier
            $table->text('alamat');
            $table->string('no_hp', 15);
            $table->integer('id_barang')->unsigned();
            $table->timestamps();

            // Set foreign key constraint
            $table->foreign('id_barang')->references('id_barang')->on('barang')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('supplier', function (Blueprint $table) {
            $table->dropForeign(['id_barang']);
        });
        Schema::dropIfExists('supplier');
    }
}
