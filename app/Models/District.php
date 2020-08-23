<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    const AREA_NOI_TINH = 1;
    const AREA_VUNG_XA = 0;

    public $timestamps = false;

    protected $fillable = ['name', 'city_id', 'area', 'publish'];

    protected $casts = ['publish' => 'boolean'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function city() {
        return $this->belongsTo(Area::class);
    }

    /**
     * @param $query Builder
     */
    public function scopePublish($query) {
        $query->where('publish', true);
    }
}
