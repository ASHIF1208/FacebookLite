<?php

namespace App\Http\Controllers;
use App\Models\connection;
use App\Models\comment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class connectController extends Controller
{
    public function index(){
        return view("sphereblades.post");
    }
    public function submitpost(Request $res){
        $item = new connection();
        $item->title = $res->title;
        $item->content = $res->content;
        $item->user_id = Auth::id();
        $file = $res->file('image');
        $filename = time().".".$file->getClientOriginalExtension();
        $item->image=$filename;
        $file->storeAs('file',$filename,'public');
        $item->save();
        return redirect("/show");
    }
    public function update($id){
        $updating = connection::find($id);
        return view("sphereblades.update",compact('updating'));
    }
    public function updatedpost(Request $res,$id){
        $upd = connection::find($id);
        $upd->title = $res->title;
        $upd->content = $res->content;
        $upd->user_id = Auth::id();
        $file = $res->file('image');
        $filename = time().".".$file->getClientOriginalExtension();
        $upd->image=$filename;
        $file->storeAs('file',$filename,'public');
        $upd->save();
        return redirect("/show");
    }
    public function del($id){
        $deletedata = connection::find($id);
        $deletedata->delete();
        return redirect("/show");
    }
    public function show(){
        $item = connection::get();
        $comments = comment::get();
        $user = User::get();
        return view('dashboard',compact('item','comments','user'));
    }
    public function comment(Request $comm,$id){
        $comments = new comment();
        $comments->comment= $comm->comment;
        $comments->user_id = Auth::id();
        $comments->connection_id = $id;
        $comments->save();
        return back();
    }
     public function findpost($id){
        $item = connection::get();
        $comments = comment::get();
        $user = User::get();
        $find =  connection::get()->where("user_id","=",$id);
        return view('sphereblades.userpost',compact('find','item','comments','user'));
    }
    public function commentdelete($id){
        $comments = comment::find($id);
        $comments ->delete();
        return back();
    }
}
