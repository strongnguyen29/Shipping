<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    protected $fillable = ['region_id', 'area', 'service_id', 'weight', 'price'];

    protected $casts = ['weight' => 'integer', 'price' => 'integer'];

    /**
     * @param $regionId
     * @param $area
     * @param $serviceId
     * @param $weight
     * @return \Illuminate\Database\Eloquent\Builder|Model|null|object
     */
    public static function getPrice($regionId, $area, $serviceId, $weight) {
        return static::query()
            ->where('region_id', $regionId)
            ->where('area', $area)
            ->where('service_id', $serviceId)
            ->where('weight', '<=' ,$weight)
            ->orderBy('weight', 'DESC')
            ->first();
    }

    public static function getPriceByCity($cityId) {
        
    }
}
