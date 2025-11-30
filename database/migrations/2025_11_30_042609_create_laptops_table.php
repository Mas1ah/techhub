<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration
{
public function up()
{
Schema::create('laptops', function (Blueprint $table) {
$table->id();
$table->string('name');
$table->unsignedBigInteger('price');
$table->text('img'); // URL stored here
$table->timestamps();
});
}


public function down()
{
Schema::dropIfExists('laptops');
}
};