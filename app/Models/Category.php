<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public $timestamps = false;

    public function name()
    {
        // if (app()->isLocale('en')) {
        //     return $this->name_en ?: $this->name;
        // }elseif (app()->isLocale('ru')) {
        //     return $this->name_ru ?: $this->name;
        // }else
     {
            return $this->name;
        }
    }
    public function estates()
    {
        return $this->hasMany(Estate::class);
    }
}
