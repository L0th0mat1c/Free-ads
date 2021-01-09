<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use App\Http\Controllers\Controller;
use App\Models\Ads;
use App\Models\Category;
use App\Models\Locate;
use App\Models\User;
use Illuminate\Http\Request;

class DepotController extends Controller
{
    public function insert(Request $request) {

        //$data['ads'] = Ads::all();
        $data['categories'] = Category::all();
        $data['locates'] = Locate::all();
        //dd($data);
        // $data['user'] = User::where
        return view('pages.deposer', compact('data'));
    }


    public function storeAd(Request $request){

       /*  dd($request); */
        $Ad = new Ad();

        $Ad->title = $request->input('ad_title');
        $Ad->description = $request->input('ad_description');
        $Ad->price = $request->input('ad_price');
        $Ad->categorie_id = $request->input('ad_category');
        $Ad->locate_id = $request->input('ad_location');
        $Ad->user_id = $request->input('user_id');

        if ($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.'. $extension;
            $file->move('annonces/', $filename);
            $Ad->photo_principale = $filename;

        }else{
            /* return $request; */
            $Ad->photo_principale = "";
        }

        $Ad->save();

        return redirect('/search');
    

    }
    


}
