<?php

use App\Models\Listing;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/world',function(){
//     return response('<h1><u>HELLO WORLD</u></h1>')// Return html response
//     ->header('Content-Type','text/plain')// change COntent Type to text/plain
//     ->header('Hello','World');// Add Header Hello with value WOrld
// });

// Route::get('/hello',function(){
//     return view('hello');
// });

// Route::get('/post/{id}',function($id){// Route to wildcard parameter and pass parameter to function 
//     return response('Post ' . $id);// Return the response with parameter value fetched from wildcard endpoint named id
// })->where('id','[0-9]+');// Constraint/Set id only for numeric value

// Route::get('/debug/{par}',function($par){
//     $something = 19;
//     ddd($par);//Die Dump: Terminate every process and show par parameter
//     return response($something . " Thou Shalt Not Live");
// });

// Route::get('/search',function(Request $request){//Use request class from Illuminate/http/Request
//     dd($request->some . ' ' . $request->thing);//Paste the query value. 
//     //Syntax:
//     //https://somewebsite.fake/the?some=is-but-those&thing=is-fool
//     //some and thing is  query variable
//     // the "is-but-those" is value from "some" variable
//     // while "is-fool" is  value from "thing" variable
// });



Route::get('/',function(Request $request){

    return view('listings.index',[
        'selfLink'=>'/',
        'heading'=>'Latest news',
        'name'=>$request,
        'listing'=>Listing::all()
    ]);
});

// This function
// Route::get('/list/post/{post}', function( $post ){
//     $listing = Listing::find($post);
    
//     if($listing){

//         return view( 'post', [
//         'heading'=> $post,
//         'listing' => Listing::find($post)
//         ]);
//     } else {
//         abort('404');
//     }
// });

// Same as
Route::get('/post/{post}', function( Listing $post ){
    // dd($post->title);

    return view( 'listings.post', [
        'selfLink'=>'/',
        'heading'=>$post->id,
        'listing'=>$post
    ]);
});

Route::get('/index', function( Request $req){
    $listing = Listing::all();
    $query = collect($req->all())->keys()->all()[0];// Print name of query
    
    $value = $req->query($query);// Print value of query

    $result = Listing::findAndShow($listing,$query,$value);

    // dd($result);

    return view('listings.index',[
        'selfLink'=>'/',
        'heading'=>'Latest news',
        'name'=>$req,
        'listing'=>$result
    ]);
});

Route::get('/search',function( Request $req){
    // Get all the database
    // Expected output: 
    /*
    Illuminate\Database\Eloquent\Collection {#1282 ▼ // routes\web.php:115
    items: array:47 [▶]
    escapeWhenCastingToString: false
    }
    */
    $listing = Listing::all();

    // Print name of query
    // Expected output: search
    $query = collect($req->all())->keys()->all()[0];

    // Print value of query
    // Expected output: input value on search bar (like django, front, asdhfsdhf, etc.)
    $value = $req->query($query);
    // dd(str_contains(strtolower('Front End Dev'),strtolower($value)));
    $result = Listing::findAndShow( $listing,['title','tags','desc'], $value );

    // dd($result);

    return view('listings.index',[
        'selfLink'=>'/',
        'heading'=>'Latest news',
        'name'=>$req,
        'listing'=>$result
    ]);
});