<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\StoryModel;

class CategoryModel extends Model
{
    use HasFactory;
    protected $fillable = [
        'categoryID',
        'categoryName'
    ];

    protected $primaryKey = 'categoryID';

    public function stories()
    {
        return $this->hasMany(StoryModel::class, 'categoryID');
    }
}
