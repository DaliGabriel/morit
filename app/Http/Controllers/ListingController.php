<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    //Show all listings
    public function index(){
        return view('listings.index', [
            'heading' => 'ultimas cosas',
            'listings' => Listing::latest()
                ->filter(request(['tag', 'search']))
                ->Paginate(6)
        ]);
    }

    //Show single listing
    public function show(Listing $listing){
        return view('listings.show', [
            'listing' => $listing
        ]);
    }

    //Show create form
    public function create(){
        return view('listings.create');
    }

    //Store Listing data
    public function store(Request $request){
        $formFields = $request->validate([
            'company' => 'required | unique:listings',
            'title' => 'required',
            'location' => 'required',
            'email' => 'required | email',
            'website' => 'required | url',
            'tags' => 'required',
            'description' => 'required'

        ]);


        if($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        $formFields['user_id'] = auth()->id();

        Listing::create($formFields);

        return redirect('/')->with('message', 'Registro creado exitosamente!!!!!');
    }

    //Show edit form
    public function edit(Listing $listing){
        return view('listings.edit', ['listing' => $listing]);
    }

    //Update Listing data
    public function update(Request $request, Listing $listing){

        //Make suer logged in user is owner
        if ($listing->user_id != auth()->id()){
            abort(403, 'Upss, parece que no tienes acceso');
        }

        $formFields = $request->validate([
            'company' => 'required',
            'title' => 'required',
            'location' => 'required',
            'email' => 'required | email',
            'website' => 'required | url',
            'tags' => 'required',
            'description' => 'required'

        ]);


        if($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        $listing->update($formFields);

        return back()->with('message', 'Registro actualizado exitosamente!!!!!');
    }

    //Delete Listing
    public function destroyy(Listing $listing){
        //Make suer logged in user is owner
        if ($listing->user_id != auth()->id()){
            abort(403, 'Upss, parece que no tienes acceso');
        }
        $listing->delete();
        return redirect('/')->with('message_delete', 'Registro Eliminado exitosamente!!!!!');
    }

    //Manage Listings
    public function manage()
    {
        return view('listings.manage', ['listings' => auth()->user()->listings()->get()]);
    }

}
