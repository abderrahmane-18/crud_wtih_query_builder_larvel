<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class postController extends Controller
{
    //
    public function create()
    {
        return 'a';
    }
    public function hello()
    {
        return view('posts.create');
    }
    public function show()
    {
        $p=DB::table('posts')->get();
        return view('posts.show',compact('p'));
    }
    
    public function update (Request $request,$id)
    {
     //   return $id;
     DB::table('posts')->where('id',$id)->update([
'title'=>$request->t,
'body'=>$request->b

     ]);
//return response('update successfuly ');
return redirect()->route('posts_show');
    }
    

    public function insert(Request $request)

    {
DB::table('posts')->insert([
'title'=>$request->t,'body'=>$request->b,
]);
//
return redirect()->route('posts_show');
//return response('adding successfuly');
    }
    public function edit($id)
    {
      
        $pp=DB::table('posts')->where('id',$id)->first();
       //return $pp;
        return view('posts.edit',compact('pp'));
    }
    public function delete($id)
    {
      
        DB::table('posts')->where('id','=',$id)->delete();
      
        return redirect()->route('posts_show');
       
        
    }
      public function feleteAll()
    {
        //return 'ssdde';
        DB::table('posts')->delete();

        //return view('posts.edit');
        return redirect()->route('posts_show');
       
        
    }
    public function deletesTruncate()
    {
        DB::table('posts')->truncate();
        return redirect()->route('posts.create');

    }
 
}
