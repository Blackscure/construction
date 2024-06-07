<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'description', 'price', 'category', 'vendor_id'
    ];

    public function vendor()
    {
        return $this->belongsTo(Vendor::class);
    }
}
