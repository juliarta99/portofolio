<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pemrograman;
use Cviebrock\EloquentSluggable\Sluggable;

class Project extends Model
{
    use HasFactory;
    use Sluggable;

    protected $guarded = ['id'];

    public function scopeFilter($query, array $filters)
    {
            $query->when($filters['pemrogramans'] ?? false, function($query, $pemrogramans){
            return $query->whereHas('pemrogramans', function($query) use ($pemrogramans)
            {
                $query->where('slug', $pemrogramans);
            });
        });
    }

    public function pemrogramans()
    {
        return $this->belongsToMany(Pemrograman::class, 'project_pemrograman');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
}
