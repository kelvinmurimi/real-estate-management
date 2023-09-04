<?php
declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'tag_id',
        'title',
        'slug',
        'excerpt',
        'min_to_read',
        'is_published',
        'body',
        'blogimage',
    ];
}
