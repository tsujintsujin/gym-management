<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use Carbon\Carbon;

class MemberController extends Controller
{
    public function welcome(){
        return view('welcome')->with('Member', Member::all());
    }

    public function store(Request $request){
        // $member = new students;
        // $member->name = $request->name;
        // $member->email = $request->email;
        // $member->age = $request->age;

        // $member->save();        

        // return redirect()->route('welcome')->with('Success', 'Member has been added!');
        return Carbon::now();
    }
}
