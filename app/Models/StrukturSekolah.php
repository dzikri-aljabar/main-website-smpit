<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class StrukturSekolah extends Model
{
    protected $table = 'struktur_sekolah';

    protected $fillable = [
        'nama',
        'jabatan',
        'deskripsi',
        'path',
    ];

    public static function boot()
    {
        parent::boot();

        /** @var Model $model */
        static::updating(function ($galeri) {
            if ($galeri->isDirty('path') && ($galeri->getOriginal('path') !== null)) {
                Storage::disk('public')->delete($galeri->getOriginal('path'));
            }
        });

        static::deleting(function ($record) {
            if ($record->path) {
                Storage::disk('public')->delete($record->path);
            }
        });
    }
}
