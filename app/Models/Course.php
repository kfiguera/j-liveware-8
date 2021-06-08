<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function posts()
    {
        return $this->HasMany(Post::class);
    }

    public function getGetExcerptAttribute()
    {
        return substr($this->description,0,140);
    }
    public function similar()
    {
        $courses = $this->where('category_id',$this->category_id)
            ->where('id','<>',$this->id)
            ->with('user')
            ->take(2)
            ->get();
        return $courses;
    }
}
