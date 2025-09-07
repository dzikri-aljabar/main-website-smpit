<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Berita extends Model
{
    protected $table = 'berita';

    protected $fillable = [
        'judul',
        'slug',
        'konten',
        'gambar',
        'jenis',
        'penulis',
    ];

    protected static function booted()
    {
        parent::boot();

        static::creating(function ($berita) {
            if (empty($berita->slug)) {
                $berita->slug = \Str::slug($berita->judul);
            }
        });

        static::updating(function ($berita) {
            if (empty($berita->slug)) {
                $berita->slug = \Str::slug($berita->judul);
            }

            $oldBerita = $berita->getOriginal('konten');
            $newBerita = $berita->konten;

            preg_match_all('/<img[^>]+src="([^">]+)"/', $oldBerita, $oldMatches);
            $oldImages = $oldMatches[1] ?? [];

            preg_match_all('/<img[^>]+src="([^">]+)"/', $newBerita, $newMatches);
            $newImages = $newMatches[1] ?? [];

            $imagesToDelete = array_diff($oldImages, $newImages);

            foreach ($imagesToDelete as $imageUrl) {
                $imagePath = str_replace('/storage/', '', parse_url($imageUrl, PHP_URL_PATH));
                if (\Storage::disk('public')->exists($imagePath)) {
                    \Storage::disk('public')->delete($imagePath);
                }
            }

            if ($berita->isDirty('gambar') && ($berita->getOriginal('gambar') !== null)) {
                Storage::disk('public')->delete($berita->getOriginal('gambar'));
            }
        });
    }
}
