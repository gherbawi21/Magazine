<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    /**
     * @var mixed
     */

    public function category(){
    return $this->belongsTo(Category::class,'category_id');
}
protected $fillable = ['name','category_id','excerpt','description','featured_photos'];
}
