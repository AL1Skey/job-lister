<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Throwable;

class Listing extends Model
{
    use HasFactory;

    private $temp;

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
        $output = self::mergeSearch($data,$column,$value);
        return $output;
    }

    /*
    -   Get the list
    -   Divide the list
    -   Search individually
    -   Check if any of them is same
    -   Combine
    */
    protected static function mergeSearch($data,$column,$value){
        if(!$data){
            return $data;
        }
        
        if(!is_countable($data)){
            dd($data);
            $output = null;

            if( $column='*' ){
                foreach( $data as $list ){               
                    $list = strval( $list );
                    
                    if(stripos( $list,$value )){
                        $output = $data;
                        break;
                    }
                }
            } else {
                $list = strval( $data[$column] );
                    if(stripos( $list,$value )){
                        $output = $data;
                    }
            }
            return $output;
        }

        $size = count($data)-1;
        $mid = intdiv($size,2);
        
        $left = self::split($data,0,$mid-1);
        $right = self::split($data,$mid,$size);

        $leftHalf = self::mergeSearch($left,$column,$value);
        $rightHalf = self::mergeSearch($right,$column,$value);

        return self::merge($leftHalf,$rightHalf);
    }
    protected static function split($data,$first,$last){
        if($first == $last){
            return $data;
        }
        $output = [];
        for( $first; $first<$last; $first++ ){
            array_push($output,$data[$first]);
        }
        
        return $output;
    }
    protected static function merge($left,$right){
        if(!$left && !$right){
            return null;
        }
        if(!$left){
            return $right;
        }
        if(!$right){
            return $left;
        }

        $output = array_merge($left,$right);
        return $output;
    }
}
