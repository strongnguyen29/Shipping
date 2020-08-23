<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public $timestamps = false;

    protected $fillable = ['name', 'region_id', 'publish'];

    protected $casts = ['publish' => 'boolean'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function region() {
        return $this->belongsTo(Region::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function districts() {
        return $this->hasMany(District::class);
    }

    /**
     * @param $query Builder
     */
    public function scopePublish($query) {
        $query->where('publish', true);
    }
}
