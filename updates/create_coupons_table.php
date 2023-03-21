<?php namespace Depcore\Coupons\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;


return new class extends Migration
{
    public function up()
    {
        Schema::create('depcore_coupons_coupons', function(Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->boolean('is_used')->default(0);
            $table->timestamp('sent_at')->nullable();
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('depcore_coupons_coupons');
    }
};
