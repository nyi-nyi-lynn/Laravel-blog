<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Post extends Model
{
    use HasFactory,Notifiable;

    protected $fillable =['title' , 'content','slug','category_id'];

    // protected $guarded = [];

    public function category(){
        return $this->belongsTo(Category::class);
    }

}
