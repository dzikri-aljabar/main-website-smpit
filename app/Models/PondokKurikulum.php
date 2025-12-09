<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PondokKurikulum extends Model
{
    protected $table = 'program_pondok_kurikulum';
    protected $fillable = ['konten'];
}
