<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shopping extends Model
{
    use HasFactory;
    protected $fillable=[
        'product_id',
        'user_id',
        'post_date',
        'status',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function product()
    {
        return $this->hasOne(Product::class);
    }
    public function bill()
    {
        return $this->belongsTo(Bill::class);
    }
}
