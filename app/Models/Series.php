<?php

namespace App\Models;

use Attribute;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Series extends Model
{
    use HasFactory;
    protected $fillable = ['nome', 'cover'];
    // protected $appends = ['links'];

    //método de relacionamento com temporadas.
    public function seasons()
    {
        return $this->hasMany(Season::class, 'series_id');
    }

    public function episodes()
    {
        return $this->hasManyThrough(Episode::class, Season::class);
    }

    protected static function booted()
    {
        self::addGlobalScope('ordered', function (Builder $queryBuilder) {
            $queryBuilder->orderBy('nome');
        });
    }

    // public function links(): Attribute
    // {
    //     return new Attribute(
    //         get: fn () => [
    //             [
    //                 "rel" => "self",
    //                 "url" => "/api/series/{$this->id}"
    //             ],
    //             [
    //                 "rel" => "self",
    //                 "url" => "/api/series/{$this->id}/seasons"
    //             ],
    //             [
    //                 "rel" => "self",
    //                 "url" => "/api/series/{$this->id}/episodes"
    //             ],
    //         ],
    //     );
    // }
}
