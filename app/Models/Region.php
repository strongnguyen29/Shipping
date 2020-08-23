<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    public $timestamps = false;

    protected $fillable = ['name', 'publish'];

    protected $casts = ['publish' => 'boolean'];

    public function cities() {
        return $this->hasMany(City::class);
    }

    /**
     * @param $query Builder
     */
    public function scopePublish($query) {
        $query->where('publish', true);
    }
}
