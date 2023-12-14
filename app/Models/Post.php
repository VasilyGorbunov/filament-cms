<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Post extends Model implements HasMedia
{
    use HasFactory;
    use SoftDeletes;
    use InteractsWithMedia;

    protected static $unguarded = true;

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function excerpt(): string
    {
        return Str::words(strip_tags($this->content), 200, '...');
    }
}
