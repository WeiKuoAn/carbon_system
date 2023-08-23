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
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id'); //流水號
            $table->string('name', 20); //廠商名稱
            $table->string('industry_id', 10); //行業類別
            $table->string('primary_contact_name', 10); //主要聯絡人姓名
            $table->string('primary_contact_phone', 30); //主要聯絡人電話
            $table->string('primary_contact_email', 100); //主要聯絡人信箱
            $table->string('contact_job', 20); //主要聯絡人職稱
            $table->text('primary_address'); //主要地址
            $table->string('business_registration_no', 100)->nullable(); //商業登記編號/統一編號
            $table->date('established_date')->nullable(); //成立日期
            $table->enum('operational_status', [0, 1]); //營運狀態
            $table->enum('company_scale', [0, 1]); //公司規模
            $table->enum('stock_status', [0, 1, 2]); //上市櫃狀態
            $table->string('sales_orientation', 10); //銷售方向
            $table->string('sales_region', 10); //銷售區域
            $table->enum('permission_status', [0, 1]); //檢視權限
            $table->text('note')->nullable(); //備註
            $table->timestamps(); // This will create both 'created_at' and 'updated_at'
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
