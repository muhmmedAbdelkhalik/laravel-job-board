<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::dropIfExists('post');

        Schema::create('post', function (Blueprint $table) {
//            $table->dropColumn('id'); //  not used for sqlLite
            $table->uuid('id')->primary();
            $table->string('title');
            $table->string('body');
            $table->boolean('published');
            $table->string('author')->after('title');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post');

        Schema::create('post', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('body');
            $table->boolean('published');
            $table->string('author')->after('title');
            $table->timestamps();
        });
    }
};
