<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $table = "customers";

    protected $fillable = [
        'name', 'industry_id', 'primary_contact_name', 'primary_contact_phone', 
        'primary_contact_email', 'contact_job', 'primary_address', 'business_registration_no',
        'established_date', 'operational_status', 'company_scale', 'stock_status',
        'sales_orientation', 'sales_region', 'permission_status', 'note'
    ];
}
