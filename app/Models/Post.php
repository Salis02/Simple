<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use HasFactory;

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    // public function sluggable(): array
    // {
    //     return [
    //         'slug' => [
    //             'source' => 'title'
    //         ]
    //     ];
    // }

    // protected $fillable = ['title','excerpt', 'body'];
    protected $guarded = ['id'];
    protected $with =['category', 'user'];

    public function scopeFilter($query, array $filters)
    {
        //kalau ada search, maka ambil apapun di dalam search, misal tidak ada maka false, function dibawah jangan dicompile, (usabele utk search bersadarkan author dan category
        // if(isset($filters['search']) ? $filters['search'] : false ){ 
        //     return $query -> where('title', 'like', '%' .$filters['search'] . '%')
        //                   ->orWhere('body', 'like', '%' .$filters['search'] . '%');
        // }

        $query->when($filters['search'] ?? false, function($query, $search){
            return $query -> where('title', 'like', '%' . $search . '%')
                    ->orWhere('body', 'like', '%' . $search . '%');
        });
        
        //versi callback functipn
        $query->when($filters['category'] ?? false, function($query, $category){
            return $query -> whereHas('category', function ($query) use ($category){
                $query->where('slug', $category);
            });
            
        });

        //versi arrow functipn
        $query->when($filters['user'] ?? false, fn($query, $user) => 
            $query -> whereHas('user', fn ($query) =>
                $query->where('username', $user)
            )
            
        );
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
