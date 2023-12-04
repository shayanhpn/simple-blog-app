<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'body',
        'post_image',
        'tags',
        'category'
    ];

    public static function boot()
    {
        parent::boot();
        static::creating(function($model){
            $model->user_id = auth()->user()->id;
        });
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
