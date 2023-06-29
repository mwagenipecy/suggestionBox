<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class collages extends Model
{
    use HasFactory;
    protected $fillable=['collage_name','collage_location'];
}
