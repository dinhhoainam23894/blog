<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\User;
use App\Comments;
use Log;
use DB;
use Auth;
use Response;

class BlogController extends Controller
{
	public function __construct(){
    	$this->middleware('auth',['except'=>'index']);
    }
	public function index(){
		$data = Blog::orderBy('id','desc')->paginate(10);
		return view('blogshow.home',[
				'data' => $data,
			]);
	}
	public function create(){
		$data = User::all();
		return view('blog.create',[
				'data' => $data,
			]);
	}
	public function store(Request $request){
			    $data = $request->all();
				unset($data['_token']);

				// $data['image'] = $request->file('image')->storeAs('images',time().'.jpg');
		  		
		     	Blog::create($data);
		     	
			    return response()->json($data);

			
		
	}
	public function show($id){

		$data = Blog::orderBy('id','desc')->paginate(10);
		$data_id = Blog::find($id);
		$user = Auth::User();
		$comment = Comments::select('*')->where('blog_id','=',$id)->get();
		
		 return view('blogshow.details',[
		 		'data' => $data,
		 		'data_id' => $data_id,
		 		'user' 		=> $user,
		 		'comment'	=> $comment
		 	]);
	}

	public function edit($id){

	   $data = Blog::find($id)->toArray();
	   $user = User::all();
       return view('blog.edit',[
       		'edit' => $data,
       		'user' => $user,       	
       	]);
	}
	public function update(Request $request,$id){
		$data = $request->all();
		unset($data['_token']);
		unset($data['_method']);
  		$data['image'] = $request->file('image')->storeAs('images',time().'.jpg');
  		
     	
     	Blog::find($id)->update($data);
       return redirect()->route('blog.index');
	}

	public function destroy($id){
		Blog::find($id)->delete();
		return redirect(route('blog.index'));
	}

	public function addcomment(Request $request , $id){
		
		$data = $request->all();
		Comments::insert([
				'user_id' => Auth::User()->id,
				'blog_id' => $id,
				'comments'=> $data['comments'],
				"created_at" =>  \Carbon\Carbon::now(),
                "updated_at" => \Carbon\Carbon::now(),
			]);
		$id = Comments::select('id')->where('blog_id','=',$id)->where('comments','=',$data['comments'])->where('user_id','=',Auth::User()->id)->get();
		foreach($id as $value){
			$data['id'] = $value['id'];
		}
		return Response::json($data);
		// unset($data['_token']);
		

	}

	public function ajaxStore(Request $request){
		$data = $request->all();
		$data['image'] = $request->file('image')->storeAs('images',time().'.jpg');	
		Blog::create($data);

		     	
		
		return response()->json($data);
	}
}
