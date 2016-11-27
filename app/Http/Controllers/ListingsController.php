<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Listings;

class ListingsController extends Controller
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
        $listings =Listings::all();
        return view('admin.listings.index', ['listings' => $listings]);
    }

    public function create()
    {
        return view('admin.listings.create');
    } 

    /**
    * Store a newly created resource in storage.
    *
    * @param Illuminate\Http\Request $request
    * @return Illuminate\Http\Response
    */
    public function store(Request $request) {
        $this->validate($request, [
            'listing_pic' => 'required',
            'price' => 'required',
            'num_of_bedrooms'=> 'required',
            'reference_num_own'=> 'required',
            'heading'=> 'required',
            'description'=> 'required',
            'surburb'=> 'required',
            'listing'=> 'required',
        ]);

        $listing = new listings;
        $listing->listing_pic = $request->listing_pic;
        $listing->price = $request->price;
        $listing->num_of_bedrooms = $request->num_of_bedrooms;
        $listing->reference_num_own = $request->reference_num_own;
        $listing->heading = $request->heading;
        $listing->description = $request->description;
        $listing->surburb = $request->surburb;
        $listing->listing = $request->listing;
        $listing->save();
        return redirect('listings')->with('message', 'Listing has been successfully added');
    }
}
