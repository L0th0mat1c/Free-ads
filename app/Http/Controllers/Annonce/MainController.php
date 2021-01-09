<?php

namespace App\Http\Controllers\Annonce;

use App\Models\Ad;
use App\Models\Ads;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Locate;
use App\Models\User;
use Illuminate\Http\Request;


class MainController extends Controller
{
    //
    public function viewhome(){

        $ads = Ads::orderBy('created_at', 'asc')->take(4)->get();


        return view('pages.home', compact('ads'));
    }


    
    public function search(Request $request) {

        $data['ads'] = Ads::all();
        $data['categories'] = Category::all();
        $data['locates'] = Locate::all();

        return view('pages.search', compact('data'));
    }

    public function fiche(Request $request){//récupé la fiche de l'annonce
        //récupérer l'id pour charger les données qui sont liées
        
        $data['ads'] = Ads::where('id',$request->id)->get(); 
        $data['users'] = User::where('id', $request->user_id)->get();
        
        $data['categories'] = Category::where('id', $request->categorie_id)->get();
        $data['locates'] = Locate::where('id', $request->locate_id)->get();
       return view('pages.fichead', compact('data'));
    }

    public function viewbycategory(Request $request) {
        //Récupérer toute les catégories
        $data['ads'] = Ads::where('categorie_id',$request->id)->get();
        $data['categories'] = Category::all();
        $data['locates'] = Locate::all();

        return view('pages.categorie', compact('data'));
    } 
    public function viewbylocate(Request $request) {

        $data['ads'] = Ads::where('locate_id',$request->id)->get();
        return view('pages.categorie', compact('data'));

    }
    public function search_ads(Request $request) {
 
        $data['ads'] = Ads::where('description', 'LIKE', '%'.$request->input('search_title').'%')

        ->where('locate_id', $request->input('search_locate'))
        ->where('categorie_id', $request->input('search_categorie'))->get();
    
 
        return view('pages.search_result', compact('data'));
    }

    public function ad_avatar(Request $request){

        /* dd($request); */

        if ($request->hasfile('image_avatar')){
            $file = $request->file('image_avatar');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.'. $extension;
            $file->move('avatar/', $filename);
/*             $avatar->avatar = $filename;

 */         $avatar = User::where('id', $request->id)
            ->update(['avatar' => $filename]);
           /*  dd($avatar); */
        }else{
            /* return $request; */
            $avatar = User::where('id', $request->id)
            ->update(['avatar' => ""]);
        }

       /*  $avatar->save(); */
/*        dd($avatar);
 */
        return redirect('/compte');

    }
    public function delete(Request $request){

        /* dd($request); */
        $del_ad = Ads::where('id', $request->id)->delete();
        /*  $image_path = "/annonces/$del_ad->photo_principale"; 
        
        dd($del_ad); */
        

        return redirect('/compte');
    }
    

}
