<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\CategoryModel;

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

    public function category(){
        return $this->belongsTo(CategoryModel::class, 'categoryID');
    }
}
