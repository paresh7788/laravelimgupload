<?php
//  this com=ntroller is used for api purpose
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\upload;

class devicecontroller extends Controller
{

    //  GET api to get all user information
    function list(){
        return upload::all();

    }
     //  GET api to get selected user information
    function specificlist($id=null){
        return upload::find($id);

    }

     //  POST api to submit user information
     function add(){
        return ["result" =>"data has been saved"];
     }
}
