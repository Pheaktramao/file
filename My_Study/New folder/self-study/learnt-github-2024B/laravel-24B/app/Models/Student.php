<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = ['name', 'age', 'province', 'score', 'phoneNumber'];
    
    public function getStatusAttribute(){
        if ($this-> score<=49) {
            # code...
            return 'Fail';
        } else {
            # code...
            return 'Pass';
        }
        
    }
    public static function list()
    {
        $data = self::all();
        return $data;
    }

    public static function store($request,$id=null)
    {
        $data = $request->only('name', 'age', 'province', 'score', 'phoneNumber');
        $data = self::updateOrCreate(['id'=>$id],$data);
        return $data;
    }
}
 