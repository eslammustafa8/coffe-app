<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table='orders';

protected $fillable = ['user_id', 'first_name', 'last_name', 'state', 'address', 'city', 'zip_code', 'phone', 'email', 'total_price', 'status'];

}
