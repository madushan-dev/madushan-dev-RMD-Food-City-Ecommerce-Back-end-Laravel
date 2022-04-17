<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Customer extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $table = 'customers';
    protected $primarykey = 'id';
    protected $fillable = ['first_name','last_name','phone','email','address','profile_photo_path','password'];
}
