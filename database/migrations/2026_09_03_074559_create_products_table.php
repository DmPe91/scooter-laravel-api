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
        Schema::create('products', function (Blueprint $table) {
             $table->id();
             $table->string('name')->unique();
             $table->integer('price');
             $table->string('img');
             $table->text('tizer_description')->nullable();  // <-- ВОТ НОВОЕ ПОЛЕ
             $table->text('description')->nullable();         // <-- И ЕЩЕ ОДНО
             $table->unsignedBigInteger('type_id')->nullable();
             $table->unsignedBigInteger('condition_id')->nullable();
             $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
    public function baskets()
    {
    return $this->belongsToMany(Basket::class, 'basket_products')
                ->withPivot('quantity');
    }
    public function infos()
    {
    return $this->hasMany(ProductInfo::class);
    }
};
