<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    function index(){
        $activity = new Activity();
        $data = $activity->all();
        return view('home', compact('data'));
    }

    function add() {
        return view('add');
    }




    public function store(Request $request)
    {
        $request->validate([
            'activity_name' => 'required|min:4|max:20|string|'
        ],[
            'activity_name.required' => 'isi guys!', 
            'activity_name.min' => 'min 4 brow ', 
            'activity_name.maks' => 'maks 20 brow ', 
        ]);
        $activity = new Activity();
        
        $activity -> activity_name = $request->activity_name;
        $activity->save();
        return redirect ('/')->with('success', 'Activity has added!');
    }

    public function update(Request $request, string $id) {
        $request->validate([
            'activity_name' => 'required|min:4|max:20|string|'
        ],[
            'activity_name.required' => 'isi guys!', 
            'activity_name.min' => 'min 4 brow ', 
            'activity_name.maks' => 'maks 20 brow ', 
        ]);
        $activity = new Activity;
        $data = $activity -> find($id);
        $data -> activity_name = $request->activity_name;
        $data->save();
        
        return redirect ('/')->with('success', 'Activity has added!');
    }

    public function show(string $id){
        $activity = new Activity;
        $data = $activity->find($id);
        if(!isset($data)){
            return abort(404, 'Activity not found');
        }
            return view('update', compact('data'));
    }

    public function destroy(string $id){
        $activity = new Activity;
        $data = $activity->find($id);
        $data -> delete();
        return redirect ('/')->with('success', 'Activity has deleted!');
    }
}