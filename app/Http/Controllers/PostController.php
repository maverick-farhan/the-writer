<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PostController extends Controller
{

    function posts(){
        $posts = DB::table('posts')->orderBy('id','desc')->simplePaginate(7);
	$post['header_title'] = "Unblurred: Information Crystal Clear";
        return view('reader_posts',compact('posts'));
    }
    function each_post(string $id){
    $post = DB::table('posts')->where('id',$id)->get();
	$meta_desc = substr($post[0]->article,0,157).'...';
	$header_title = $post[0]->title;
	$random_num_less_than_total_posts = rand(1,count(DB::table('posts')->get()));
	$random_post = DB::table('posts')->where('id','=',$random_num_less_than_total_posts)->get();
        return view('eachblog.template',compact('post','header_title','random_post','meta_desc'));
    }

    function post(Request $req){
        $req->validate([
            'title'=>'required',
            'author'=>'required',
            'category'=>'required',
            'keywords'=>'required',
            'image'=>'required',
            'credit'=>'required',
            'article'=>'required',
            'references'=>'required',
        ]);

        if(!empty($req->file('image'))){
        $image = $req->file('image');
        $image_ext = $image->getClientOriginalExtension();
        $imagerandomName = date('Ymdhis').Str::random(10);
        $imagename = strtolower($imagerandomName).'.'.$image_ext;
        $image->move('images/',$imagename);
        }

        $post = DB::table('posts')
        ->insert([
            'title'=>trim($req->title),
            'author'=>trim($req->author),
            'image'=>$imagename,
            'category'=>trim($req->category),
            'keywords'=>trim($req->keywords),
            'credit'=>trim($req->credit),
            'article'=>trim($req->article),
            'references'=>trim($req->references),
            'created_at'=>now(),
            'updated_at'=>now()
        ]);
    return redirect()->route('home');
}    

function filter(Request $req){

    if($req->newest=="1"){    
    $posts = DB::table('posts')->orderBy('id','desc')->simplePaginate(7);
    return view('reader_posts',compact('posts'));
    }
    if($req->oldest=="0"){
    $posts = DB::table('posts')->orderBy('id','asc')->simplePaginate(7);
    return view('reader_posts',compact('posts'));
    }
}
function search(Request $req){
    $keywords = explode(',', $req->search);
    foreach($keywords as $keyword){
    $search = DB::table('posts')
        ->where('category','LIKE','%'.$keyword.'%')
        ->orWhere('keywords','LIKE','%'.$keyword.'%')
        ->orWhere('title','LIKE','%'.$keyword.'%')
        ->orWhere('article','LIKE','%'.$keyword.'%')
        ->paginate(7);
        return view('search',compact('search'));
    }
}

} 
