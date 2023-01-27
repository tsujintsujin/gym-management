<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\members;
use App\Models\trainers;
use App\Models\subscription;

use Carbon\Carbon;

class MemberController extends Controller
{
    public function welcome(){
        $subscription = subscription::all();
        $trainers = trainers::all();

        return view('welcome')
        ->with('members', members::all())
        ->with('trainers', trainers::all())
        ->with('subscription', subscription::all());
    }

    public function editpage($id){
        return view('editpage')
        ->with('members', members::find($id))
        ->with('trainers', trainers::all())
        ->with('subscription', subscription::all());
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

    public function createsubscription(Request $request){
        $subscription = new subscription;
        $subscription->membership_type = $request->membership_type;
        $subscription->membership_price = $request->membership_price;

        $subscription->save();        
        return redirect()->route('welcome')->with('Success', 'New Subscription Category has been added!');
    }


    public function editmember(Request $request, $id){
        $member = members::find($id);
        $member->name = $request->name;
        $member->email = $request->email;
        $member->trainer_id = $request-> trainer_id;
        $member->membership_id = $request-> membership_id;
        $member->update();        
        return redirect()->route('welcome')->with('Success', 'Member successfully edited!');
    }




    public function delete($id){
        $member = members::find($id);
        $member->delete();
        return redirect()->route('welcome')->with('Success', 'Member Record Deleted!');
    }


}
