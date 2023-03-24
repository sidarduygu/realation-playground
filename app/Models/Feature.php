<?php

namespace App\Models;

use App\Models\PropertyFeature;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Feature extends Model
{
    use HasFactory;

    protected  $guarded = [];
    
    public function propertyFeatures()
    {
        return $this->hasMany(PropertyFeature::class);
    }
}
