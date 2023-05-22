<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Banner;

class BannerController extends Controller
{
    public function banner(){

    	return view('banner');
    }


     public function post_banner(Request $request){




     	  $request ->validate([
             'banner_image'=>'required',
             'office_image'=>'required',
             'content' =>'required',
             'discription'=>'required',
        ]);


     	  $banner = new Banner();
          $banner->discription = $request->discription;
           $banner->content = $request->content;
          if ($request->file('banner_image'))
             {
               
                $img = $request->file('banner_image');
           
                $name= time().'.'.$img->extension();
                $fileName='/banner/'.$name;
                $img->move('/banner/', $name);
                $banner->banner_image=$fileName;
             }


              if ($request->file('office_image'))
             {
               
                $img = $request->file('office_image');
           
                $name= time().'.'.$img->extension();
                $fileName='/banner/'.$name;
                $img->move('/banner/', $name);
                $banner->office_image=$fileName;
             }

       
    
       
        $banner->save();

      return redirect('banner')->with('message','Banner Submitted Successfully!');
         

}



public function about_us(){

	return view('about-us');
}

    	


}
