<?php
class Test{
    protected static function mergeSearch($data, $key, $value){
        $size = count($data);

        if( $size <= 1 ){
        	$result = $data[0];

            if($result[$key]==null){
                print('NULL Founded');
            }
            if(!in_array($value,$result[$key])){
                return;
            }
            return $data;
        }
        $left = [];
        $right = [];

        for($i=0; $i < $size-1; $i++){
            $maxIndex =  $size-1-$i;
            
            if($maxIndex != $i ){

                array_push($left,$data[$i]);
                array_push($right,$data[$maxIndex]);
            }
            
        }
        // print('Left');
        // print_r($left);
        // print('Right');
        // print_r($right);
        $leftHalf = self::mergeSearch($left,$key,$value);
        $rightHalf = self::mergeSearch($right,$key,$value);

        return self::merge($leftHalf,$rightHalf);
    }

	protected static function merge($left,$right){
        if(!$left && !$right){
            return;            
        }

        if(!$left){
            return $right;
        } else if(!$right){
            return $left;
        }

        return array_merge($left,$right);
    }

    public static function findAndShow($data,$column,$value){
        return self::mergeSearch($data,$column,$value);
    }
}

    
$some = [
    	['title'=>'myanmar',
    	'tags'=>['ab','cd','ef']
    	],
    	['title'=>'brunei',
    	'tags'=>['ab','cd','ef']
    	],
    	['title'=>'malay',
    	'tags'=>['ab','cd','ef']
    	],
    	['title'=>'india',
    	'tags'=>['ab','cd','ef']
    	],
    	['title'=>'amerik',
    	'tags'=>['ab','sd','ef']
    	]
    	];
print_r(Test::findAndShow($some,'tags','cd'));