<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BookRecord extends Model
{

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function book(){
        return $this->belongsTo(Book::class, 'book_id');
    }
    use HasFactory,SoftDeletes;
    protected $fillable = ['book_id', 'user_id', 'borrow_date', 'return_date'];

    public static function list(){
        return BookRecord::all();
    }


    public static function store($request, $id = null){
        $data = $request->only('book_id', 'user_id', 'borrow_date', 'return_date');
        $data = self::updateOrCreate(['id' => $id], $data);
        return $data;
        
    }
}
