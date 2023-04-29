<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
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
        'pic',
        'is_vk',
        'status',
        'is_eng'
    ];

    public static function getPicUrl($url): string
    {
        return 'img/media/' . $url;
    }

    public static function getPreviewUrl($url): string
    {
        return 'img/preview/' . $url;
    }

    /**
     * @param int $id
     * @return Builder|Model|object
     */
    public static function getProjectById(int $id)
    {
        return self::query()->where(['id' => $id])->first();
    }


    /**
     * @param string $isVk
     * @return null|int
     */
    public static function getResultForVk(string $isVk): ?int
    {
        if ($isVk == 'on') {
            return null;
        } else {
            return  1;
        }
    }

    /**
     * @param string $isEng
     * @return null|int
     */
    public static function getResultForEng(string $isEng): ?int
    {
        if ($isEng == 'on') {
            return  1;
        } else {
            return null;
        }
    }
}
