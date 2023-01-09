<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

Schema::defaultStringLength(191);

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_contact_us_requests', function (Blueprint $table) {
            $table->id()->autoIncrement()->unique();
            $table->integer('userId');
            $table->string('messageBox', 1000);
            $table->timestamp('timeStamp')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_contact_us_requests');
    }
};