<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesInvoice extends Model
{
    use HasFactory;
    protected $table = 'sales_invoice';
    protected $fillable = [
        'id', 'no_invoice', 'invoice_date', 'invoice_due_date', 'payment_method'
    ];
}
