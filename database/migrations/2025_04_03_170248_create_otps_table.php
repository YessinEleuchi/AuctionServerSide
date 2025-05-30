<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('otps', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('code');
            $table->foreignId('user_id')->nullable()->constrained('users')->onDelete('cascade');
        });
    }

    public function down() {
        Schema::dropIfExists('otps');
    }
};
