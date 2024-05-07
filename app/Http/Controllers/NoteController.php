<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NoteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $note = Note::all();
        return view('admin.Dashboard', compact('note'));
    }
    // Create Page
    public function create(){
        return view('admin.create_note');
    }
    // Store
    public function store(Request $request){
        $request->validate([
            'title' => ['required'],
            'detail' => ['required']
        ]);

        $data = Note::create([
            "user_id" => auth()->id(),
            "note_title" => $request->title,
            "note_detail" => $request->detail,
        ]);
        if($data){
            return redirect()->back()->with('success','data has Been Saved');
        }else{
            return redirect()->back()->with('error','Something Error');
        }
    }
    // Edit
    public function edit($id){
        $note = Note::findOrFail($id);
        return view('admin.edit_note', compact('note'));
    }

    // Update
    public function update(Request $request, $id){
        $note = Note::findOrFail($id);
        $request->validate([
            'title' => ['required'],
            'detail' => ['required']
        ]);

        $data = $note->update([
            "note_title" => $request->title,
            "note_detail" => $request->detail,
        ]);
        if($data){
            return redirect()->back()->with('success','data has Been Updated');
        }else{
            return redirect()->back()->with('error','Something Error');
        }

    }

    public function notes(){
        $note = Note::where('user_id',Auth::id())->get();
        return view('admin.note_list', compact('note'));
    }

    public function delete($id){
        $data = Note::findOrFail($id);
        $data->delete();
        if($data){
            return redirect()->back()->with('success','data has Been Deleted');
        }else{
            return redirect()->back()->with('error','Something Error');
        }
    }


    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
