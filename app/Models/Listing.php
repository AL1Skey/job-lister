<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Throwable;

class Listing extends Model
{
    use HasFactory;

    public static function findAndShow($data=null,$column='*',$value=null){
        if(!$data){
            return;
        }
        if(!count($data)){
            return ;
        }
        
        if(!$value){
            return self::all();
        }

        return self::mergeSearch($data,$column,$value);
    }

    /*
    -   Get the list
    -   Divide the list
    -   Search individually
    -   Check if any of them is same
    -   Combine
    */

}
