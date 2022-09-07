<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    //Mass assignment, basically protect for a hijacking sesion
    //Fillable allow user alter models, and insert data in a database....
    // https://stackoverflow.com/questions/22279435/what-does-mass-assignment-mean-in-laravel
    protected $fillable = [
        'title',
        'company',
        'location',
        'website',
        'email',
        'description',
        'tags',
        'logo',
        'user_id'
    ];


    //Buscador
    public function scopeFilter($query, array $filters){
        //search with tag
        //?? = if filter tag not exist filter tag is equal to false
        if($filters['tag'] ?? false){
            $query->where('tags', 'like', '%'.request('tag').'%');
        }

        //search with search query parameter
        if($filters['search'] ?? false){
            $query->where('title', 'like', '%'.request('search').'%')
            -> orWhere('description', 'like', '%'.request('search').'%')
                -> orWhere('tags', 'like', '%'.request('search').'%')
            ;
        }
    }

    //Relationship to user
    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

}
