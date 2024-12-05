<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
class Order extends Model
{
    use HasFactory;
    protected $fillable = [ 'fullname', 'address', 'city', 'district', 'state', 'postalcode', 'mobile', 'email', 'products', 'user_id' ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
