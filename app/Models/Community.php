<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Community extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'foto',
        'pesan',
        'user_id',
        'judul',
    ];
}
