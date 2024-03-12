<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Property extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable= [
        'title',
        'description',
        'surface', 
        'rooms',
        'bedrooms',
        'floor',
        'price',
        'city',
        'address',
        'postal_code',
        'sold',
        'image'
    ];

    protected $casts = [
        'sold' => 'boolean'
    ];

    public function options(): BelongsToMany
    {
        return $this->belongsToMany(Option::class);
    }

    public function getSlug(): string
    {
        return Str::slug($this->title);
    }

    public function imageUrl ()
    {
        return Storage::disk('public')->url($this->image);
    }

    public function scopeAvailable(Builder $builder, Bool $available = true): Builder
    {
        return $builder->where('sold', !$available);
    }

    public function scopeRecent(Builder $builder): Builder
    {
        return $builder->orderBy('created_at', 'desc');
    }
}
