<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StoryModel extends Model
{
    use HasFactory;
    protected $fillable = [
        'storyID',
        'storyName',
        'storyDesc',
        'storyAuthor',
        'storyContent',
        'storyImage',
        'categoryID'
    ];
    protected $primaryKey = 'storyID';
}
