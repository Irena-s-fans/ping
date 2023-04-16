<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'description',
        'preview',
        'pic'
    ];

    public static function getPicUrl($url): string
    {
        return 'img/media/' . $url;
    }

    public static function getPreviewUrl($url): string
    {
        return 'img/preview/' . $url;
    }
}
