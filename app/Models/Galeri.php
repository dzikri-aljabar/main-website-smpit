<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Galeri extends Model
{
    protected $table = 'galeri';
    protected $fillable = ['title', 'alt', 'path', 'jenis', 'slug'];

    protected static function boot()
    {
        //antisipasi slug tidak masuk dari fe
        static::creating(function ($galeri) {
            if (empty($galeri->slug)) {
                $galeri->slug = \Str::slug($galeri->title);
            }
        });

        parent::boot();

        /** @var Model $model */
        static::updating(function ($galeri) {
            if ($galeri->isDirty('path') && ($galeri->getOriginal('path') !== null)) {
                Storage::disk('public')->delete($galeri->getOriginal('path'));
            }
        });
    }
}
