<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Leads;

class LeadsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
	// public function __construct()
 //    {
 //        $this->middleware('auth');
 //    }

    public function index() 
    {    	
    	$leads =Leads::all();
    	return view('admin.leads.index', ['leads' => $leads]);
    }


    /**
	* Store a newly created resource in storage.
	*
	* @param Illuminate\Http\Request $request
	* @return Illuminate\Http\Response
	*/
    public function store(Request $request) {
    	$this->validate($request, [
			'firstname' => 'required',
			'lastname' => 'required',
			'email' => 'required',
			'message' => 'required',
    	]);

    	$lead = new leads;
		$lead->firstname = $request->firstname;
		$lead->lastname = $request->lastname;
		$lead->email = $request->email;
		$lead->message = $request->message;
		$lead->save();
		return redirect('pages.thankyou');
    }

}
