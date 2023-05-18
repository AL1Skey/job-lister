<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    private $temp;
    

    public static function findAndShow($data=null,$column=null,$value=null){
        // If data is not present and not countable
        if(!$data || !is_countable($data)){
            return;
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
    
    //MergeSearch: Divide into smaller part, search data based of column, check if there's contain value, return list of data that has been filtered
    protected static function mergeSearch($data,$column,$value){
        //Check if it's not countable
        if(!is_countable($data)){
            if(!$data || !$column){//Check if it's not countable because data value is null
                return;
            }
            
            $output = null;//Establish the output
            
            #If the column value are more than 1
            if(is_countable($column)){
                // Search by using column to fetch data
                foreach( $column as $lists ){// Use column presented in database as index
                    $list = $data[$lists];// Declare value of data from index

                    // See if there's contain searched index
                    if( gettype(stripos( $list,$value )) != 'boolean' ){
                        $output = $data;
                        break;
                    }
                }
                // } else {
                //     $list = strval( $data[$column] );
                //         if(stripos( $list,$value )){
                //             $output = $data;
                //         }
                // }
            }

            #If there's only single column
            else{
                $list = $data[$column];// Declare value of data from index

                // See if there's contain searched index
                if( gettype(stripos( $list,$value )) != 'boolean' ){
                    $output = $data;
                }
            }

            return $output;
        }

        // Set size and mid to split data
        $size = count($data)-1;
        $mid = intdiv($size,2)-1 > 0 ? intdiv($size,2) : 1;

        // Split data to left and right side
        $left = self::split($data,0,$mid-1);
        $right = self::split($data,$mid,$size);
        
        // Do merge search until there's one data and is not countable, then verify if there's contain specific value inside the data
        $leftHalf = self::mergeSearch($left,$column,$value);
        $rightHalf = self::mergeSearch($right,$column,$value);

        // Merge the data
        return self::merge($leftHalf,$rightHalf);
    }
    
    //Split function: slice array of data from first to last
    protected static function split($data,$first,$last){
        //if first and last is same, print data from index of both
        if($first == $last){
            return $data[$first];
        }
        
        $output = [];// Declare empty array

        //Loop from first to last, and add the array
        for( $first; $first<=$last; $first++ ){
            array_push($output,$data[$first]);
        }
        // if(count($output)==2){
        // dd($output);}
        
        //Return output if the array is not empty, else null
        return $output ? $output : null;
    }

    //Merge Function: Merge left and right array
    protected static function merge($left=null,$right=null){
        
        //If there's nothing
        if(!$left && !$right){
            return null;
        }
        
        //If right is present and left is not
        else if(!$left){
            return $right;
        }
        
        //If left is present and right is not
        else if(!$right){
            return $left;
        }
        
        $output = [];// I DECLARE THE OUTPUT AS ARRAY!!
        
        //If both is not array
        if( !is_countable($left) && !is_countable($right) ){
            $output = array($left,$right);
        }
        
        //If left is not array
        else if(!is_countable($left)){
            array_push($right,$left);
            $output = $right;
        }
        
        //If right is not array
        else if(!is_countable($right)){
            array_push($left,$right);
            $output = $left;
            
        }
        
        //If BOTH is array
        else{
            $output = array_merge($left,$right);
        }
        
        // Return the merged array
        return $output;
    }
}
