<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable=[
        'donation_id',
        'orgname',
        'orgemail',
        'orgcontact',
        'user_id'
    ];

    public function owner() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
