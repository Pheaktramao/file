<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = ['title', 'author', 'gender','publish_year'];

    public static function list(){
        return self::all();
    }

    
    // public static function find($id){
    //     return self::find($id);
    // }

    // public static function destroy($id)
    // {
    //     return self::destroy($id);
        
    // }

    

    public static function store($request, $id = null){
        $data = $request->only('title', 'author', 'gender','publish_year');
        $data = self::updateOrCreate(['id' => $id], $data);
        return $data;
        
    }
}