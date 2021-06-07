<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Gallery extends Model
{
    use SoftDeletes;
    protected $table = "gallery";
    protected $fillable = ['id', 'travel_packages_id', 'image'];

    public function travel_package()
    {
        return $this->belongsTo(TravelPackage::class, 'travel_packages_id', 'id');
    }

    public function getImageAttribute($value) {
        return url('/storage/' . $value);
    }
}
