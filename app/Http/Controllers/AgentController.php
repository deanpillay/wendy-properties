<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Agents;

class AgentController extends Controller
{
	/**
     * Create a new controller instance.
     *
     * @return void
     */
	public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() 
    {    	
    	$agents =Agents::all();
    	return view('admin.agents.index', ['agents' => $agents]);
    }

    public function create()
    {
        return view('admin.agents.create');
    }    

    /**
	* Store a newly created resource in storage.
	*
	* @param Illuminate\Http\Request $request
	* @return Illuminate\Http\Response
	*/
    public function store(Request $request) {
    	$this->validate($request, [
    		'profile_pic' => 'required',
			'firstname' => 'required',
			'lastname' => 'required',
			'cellphone' => 'required',
			'email' => 'required',
    	]);

    	$agent = new Agents;
    	$agent->profile_pic = $request->file('profile_pic');
		$agent->firstname = $request->firstname;
		$agent->lastname = $request->lastname;
		$agent->cellphone = $request->cellphone;
		$agent->email = $request->email;
		$agent->save();
		return redirect('agents')->with('message', 'Agent has been successfully added');
    }

    /**
    * Display the specified resource
    * 
    * @param int $id
	* @return Illuminate\Http\Response
	*/
	public function show($id)
	{
		$agent = Agents::find($id);
		if(!$agent){
			abort(404);
		}
		return view('admin.agents.details')->with('detailpage',$agent);
	}

	/**
    * Show the form for editing the specified resource.
    * 
    * @param int $id
	* @return Illuminate\Http\Response
	*/
	public function edit($id)
	{
		$agent = Agents::find($id);
		if(!$agent){
			abort(404);
		}
		return view('admin.agents.edit')->with('detailspage',$agent);
	}

	/**
	* Store a newly created resource in storage.
	*
	* @param Illuminate\Http\Request $request
	* @return Illuminate\Http\Response
	*/
    public function update(Request $request, $id) 
    {
    	$this->validate($request, [
    		'profile_pic' => 'required',
			'firstname' => 'required',
			'lastname' => 'required',
			'cellphone' => 'required',
			'email' => 'required',
    	]);

    	$agent = Agents::find($id);
    	$agent->profile_pic = $request->profile_pic;
		$agent->firstname = $request->firstname;
		$agent->lastname = $request->lastname;
		$agent->cellphone = $request->cellphone;
		$agent->email = $request->email;
		$agent->save();
		return redirect('agents')->with('message', 'Agent details have been edited');
    }

    /**
    * Rmove the specified resource  from storage.
    * 
    * @param int $id
	* @return Illuminate\Http\Response
	*/
	public function destroy($id)
	{
		$agent = Agents::find($id);
		$agent->delete();
		return redirect('agents')->with('message', 'Agent details have been edited');
	}

}
