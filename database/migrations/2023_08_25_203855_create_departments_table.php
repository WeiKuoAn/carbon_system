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
        Schema::create('departments', function (Blueprint $table) {
            $table->increments('id');
            
            $table->string('name', 50);
            $table->string('manager_ID',10);
            $table->string('manager_name',50);
            $table->string('location',100);
            $table->enum('scale',[0, 1, 2, 3]);
            $table->date('established_date');
            $table->text('description')->nullable();
            $table->timestamps();
            
            // Define foreign key constraints
            // $table->foreign('manager_ID')->references('id')->on('managers');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('departments');
    }
};
