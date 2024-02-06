<!DOCTYPE html>
<html lang="en">
  <head>

    <base href="/public">
    @include('admin.css')

    <style type="text/css">
         .div_center
         {
            text-align: center;
            padding-top: 40px;
         }
         .font_size
         {
           font-size: 40px;
           padding-bottom: 40px;

         }
         .text_color
         {
            color: black;
            padding-bottom: 20px;
         }
         label
         {
           display: inline-block;
           width: 200px;

         }
         .div_design
         {
            padding-bottom: 15px;
         }
    </style>
  </head>
  <body>
    <div class="container-scroller">
      @include('admin.sidebar')
      <div class="container-fluid page-body-wrapper">
        @include('admin.header')
        <div class="main-panel">

            <div class="content-wrapper">

                @if(session()->has('message'))

                <div class="alert alert-success">

                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x

                    </button>

                    {{ session()->get('message') }}

                </div>

                @endif

                <div  class="div_center">

                    <h1 class="font_size">Update Products</h1>

                       <form action="{{ url('/update_product_confirm',$product->id) }}" method="POST" enctype="multipart/form-data">

                        @csrf

                      <div class="div_design">
                       <label > Product Ratings : </label>
                    <input  class="text_color"  type="number" name="ratings" placeholder="Enter the Ratings" value="{{ $product->ratings }}" required>
                </div>

             <div class="div_design">
                <label >product Title : </label>
             <input  class="text_color"  type="text" name="title" placeholder="Enter the title" value="{{ $product->title }}" required>
         </div>
         <div class="div_design">
            <label >product price :</label>
         <input  class="text_color"  type="number" name="price" placeholder="Enter the price"  value="{{ $product->price }}" required>
     </div>
     <div class="div_design">
        <label >discount Price :</label>
     <input  class="text_color"  type="number" name="dis_price" placeholder="Enter the discount Price"  value="{{ $product->discount_price }}" required>
 </div>

 <div class="div_design">
    <label >product description : </label>
 <input  class="text_color"  type="text" name="description" placeholder="Enter the description" value="{{ $product->description }}" required>
</div>


 <div class="div_design">
    <label >product Catagory :</label>
    <select class="text_color"  name="catagory" required>
        <option value="{{ $product->catagory }}" selected="">{{ $product->catagory }}</option>

        @foreach($catagory as $catagory)
        <option> {{$catagory->catagory_name }}</option>
        @endforeach

    </select>
</div>
<div class="div_design">
    <label >Product Quantity :</label>
 <input  class="text_color"  type="number"   min="0"  name="quantity" placeholder="Enter the Quantity" value="{{ $product->quantity }}" required>
</div>

<div class="div_design">
    <label > current Product Image: </label>
    <img  style="margin: auto"   height="100" width="100"  src="/product/{{ $product->image }}">
</div>


<div class="div_design">
    <label > change Product Image: </label>
 <input   type="file" name="image" required>
</div>
<div>

 <input   type="submit" value="update Product" class="btn btn-primary">
</div>
</form>

                </div>




            </div>
        </div>
     @include('admin.js')
  </body>
</html>
