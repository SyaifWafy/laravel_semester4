<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Identitas extends Model
{
    use HasFactory;

    protected $table = ['identitas'];
    protected $fillable = ['fullname', 'umur', 'alamat'];
}
