<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{

protected $table = 'dokters';
protected $primaryKey = 'id';
protected $fillable = ['firstname', 'lastname', 'phone', 'email', 'address', 'post'];
}
