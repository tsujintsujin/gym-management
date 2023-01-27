<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\members;
use App\Models\trainers;
use App\Models\memberships;

use Carbon\Carbon;

class MemberController extends Controller
{
    public function welcome(){
        $memberships = memberships::all();
        $trainers = trainers::all();

        return view('welcome')
        ->with('members', members::all())
        ->with('trainers', trainers::all())
        ->with('memberships', memberships::all());
    }

    public function store(Request $request){
      
        $membershipexpiry = Carbon::now()->addMonths(1);
        $member = new members;
        $member->name = $request->name;
        $member->email = $request->email;
        $member->trainer_id = $request-> trainer_id;
        $member->membership_id = $request-> membership_id;
        $member->membership_expiration = $membershipexpiry;

        $member->save();        
        return redirect()->route('welcome')->with('Success', 'Member has been added!');
    }

    public function storeTrainer(Request $request){
        $trainer = new trainers;
        $trainer->name = $request->name;
        $trainer->email = $request->email;
        $trainer->specialization = $request->specialization;
        $trainer->phone = $request->phone;

        $trainer->save();        
        return redirect()->route('welcome')->with('Success', 'Trainer has been added!');
    }


    public function delete($id){
        $member = members::find($id);
        $member->delete();
        return redirect()->route('welcome')->with('Success', 'Member Record Deleted!');
    }


}
