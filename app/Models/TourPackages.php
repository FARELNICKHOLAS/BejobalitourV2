<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class TourPackages extends Model
{
    use HasFactory;

    protected $table = 'tourpackages'; 
    protected $fillable = ['id, tourname', 'slug', 'image', 'description', 'price'];

    public function getRouteKeyName()
    {
        return 'slug'; 
    }
}