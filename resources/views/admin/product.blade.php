<!DOCTYPE html>
<html lang="en">
  <head>
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

                    <h1 class="font_size">Add Products</h1>

                       <form action="{{ url('/add_product') }}" method="POST" enctype="multipart/form-data">

                        @csrf

                      <div class="div_design">
                       <label > Product Ratings : </label>
                    <input  class="text_color"  type="number" name="ratings" placeholder="Enter the Ratings" required>
                </div>

             <div class="div_design">
                <label >product title : </label>
             <input  class="text_color"  type="text" name="title" placeholder="Enter the title" required>
         </div>
         <div class="div_design">
            <label >product price :</label>
         <input  class="text_color"  type="number" name="price" placeholder="Enter the price" required>
     </div>
     <div class="div_design">
        <label >discount Price :</label>
     <input  class="text_color"  type="number" name="dis_price" placeholder="Enter the discount Price" required>
 </div>

 <div class="div_design">
    <label >product description : </label>
 <input  class="text_color"  type="text" name="description" placeholder="Enter the description" required>
</div>


 <div class="div_design">
    <label >product Catagory :</label>
    <select class="text_color"  name="catagory" required>
        <option value="" selected="">Add a catagory Here</option>
        @foreach($catagory as $catagory)
        <option> {{$catagory->catagory_name }}</option>
        @endforeach
    </select>
</div>
<div class="div_design">
    <label >Product Quantity :</label>
 <input  class="text_color"  type="number"   min="0"  name="quantity" placeholder="Enter the Quantity" required>
</div>

<div class="div_design">
    <label >product images: </label>
 <input   type="file" name="image" required>
</div>
<div>

 <input   type="submit" value="Add Product" class="btn btn-primary">
</div>
</form>

                </div>




            </div>
        </div>
     @include('admin.js')
  </body>
</html>
