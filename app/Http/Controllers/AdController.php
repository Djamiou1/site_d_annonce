<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Adsrequest;
use App\Models\Ad;
use App\Models\User;

class AdController extends Controller
{
    //
    //  use App\Http\Controllers\Auth;

    public  function __construct()
    {
        // $this->middleware('auth')->except('ad.index');
    }

    public function index()
    {
        $ads = DB::table('ads')->orderBy('created_at' ,'DESC')->paginate(8);

        return view('ads', compact('ads')); 
    }
    

    public function create()
    {
        return view('create');
    }

    public function store(Adsrequest $request)
    {
       $validated = $request->validated();
       $ad = new Ad();
       $ad->title = $validated['title'];

    //    $images = $ad->image = $validated['image'];
    //    $this->storeImage($images);
    //    dd($images);
       $ad->localisation = $validated['localisation'];
       $ad->price = $validated['price'];
       $ad->user_id = auth()->user()->id;
       $ad->description = $validated['description'];
       $ad->save();

       return redirect()->route('welcome')->with('success', 'Votre annonce a éte postée');
    }

    

    public function search(Request $request){
        
        $words = $request->words;

        $ads = DB::table('ads')
        ->where('title', 'LIKE', "%$words%")
        ->orWhere('description', 'LIKE', "%$words%")
        ->orderBy('created_at', 'DESC')
        ->get();

        return response()->json(['success' => true, 'ads' => $ads ]);
    }
}
