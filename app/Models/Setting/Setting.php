<?php

namespace App\Models\Setting;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = [
        'slug','title', 'value', 'is_active'
    ];

    /**
     * The attributes that should be typecast into boolean.
     *
     * @var array
     */
    protected $casts = [
        'is_active' => 'boolean'
    ];

    /**
     * Scope a query to return specific value.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param $slug
     * @return \Illuminate\Database\Eloquent\Builder
     * @internal param bool $type
     */
    public function scopeFetch($query, $slug)
    {
        return $query->whereSlug($slug);
    }

    /**
     * Scope a query to get active or non services.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param bool $type
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeActive($query, $type = true)
    {
        return $query->whereIsActive($type);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphOne
     */
}
