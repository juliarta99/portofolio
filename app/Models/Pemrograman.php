<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Project;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Support\Arr;

class Pemrograman extends Model
{
    use HasFactory;
    use Sluggable;

    protected $guarded = ['id'];

    public function projects()
    {
        return $this->belongsToMany(Project::class, 'project_pemrograman');
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

