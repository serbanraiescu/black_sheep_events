<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContentSection extends Model
{
    protected $fillable = ['page_name', 'section_key', 'content', 'image_path'];
}
