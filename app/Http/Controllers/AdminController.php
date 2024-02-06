<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Catagory;
use App\Models\Product;



class AdminController extends Controller
{
    public function view_catagory() {

        $data=Catagory::all();

        return view('admin.catagory' , compact('data'));
}


  public function add_catagory(Request $request)
  {
        $data=new Catagory;
        $data->catagory_name=$request->catagory;
        $data->save();
        return redirect()->back()-> with('message','Catagory Added Successfully');

  }
   public function delete_catagory($id)
   {

    $data=Catagory::find($id);
    $data->delete();
    return redirect()->back()->with('message','catagory Deleted Successfully');

   }

   public function view_product()
   {
      $catagory=catagory::all();
      return view('admin.product' , compact('catagory'));
   }

   public function add_product(Request $request)
   {
      $product=new product;

      $product->ratings=$request->ratings;


      $product->title=$request->title;


      $product->price=$request->price;

      $product->discount_price=$request->dis_price;


      $product->quantity=$request->quantity;

      $product->description=$request->description;

      $product->catagory=$request->catagory;

      $image=$request->image;

      $imagename=time().'.'.$image->getClientOriginalExtension();

      $request->image->move('product',$imagename);

      $product->image=$imagename;




      $product->save();
      return redirect()->back()->with('message','product Added successfully');




   }

   public function show_product()
   {
      $product=product::all();
      return view('admin.show_product',compact('product'));
   }


   public function delete_product($id)
   {
    $product=product::find($id);
    $product->delete();
    return redirect()->back()->with('message','product Deleted Successfully');
   }


   public function update_product($id)
   {
           $product=product::find($id);
           $catagory=catagory::all();
           return view('admin.update_product',compact('product','catagory'));
   }

   public function update_product_confirm( Request $request,$id)
   {
         $product=product::find($id);

         $product->ratings=$request->ratings;

         $product->title=$request->title;

         $product->price=$request->price;

         $product->description=$request->description;


         $product->discount_price=$request->dis_price;

         $product->catagory=$request->catagory;

         $product->quantity=$request->quantity;




         $image=$request->image;

         if($image)
         {
            $imagename=time().'.'.$image->getClientOriginalExtension();

            $request->image->move('product',$imagename);

            $product->image=$imagename;
         }



         $product->save();
         return redirect()->back()->with('message','product updated Successfully');


   }



   
}
