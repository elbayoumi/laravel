<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Cviebrock\EloquentSluggable\Sluggable;

// use Carbon\Carbon;

class post extends Model
{
    use HasFactory ,SoftDeletes, Sluggable ;

    protected $fillable= [
        'title',
        'user_Id',
        'desc',
        'created_at',
        'slug'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }


}
