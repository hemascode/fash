<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
   <style type="text/css">
    .center
    {
        margin: auto;
        width: 50%;
        border: 2px solid  white;
        text-align: center;
        margin-top: 40px;
    }
    .font_size
    {
       text-align: center;
       font-size: 35px;
       padding-top:20px;
    }
    .img_size
    {
        width: 150px;
        height: 150px;

    }
    .th_color
    {
       background:lightseagreen
    }
    .th_deg{
        padding: 25px;

    }
   </style>

  </head>
  <body>
    <div class="container-scroller">
      @include('admin.sidebar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
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



                <h2 class="font_size">All Products</h2>

                <table class="center">
                    <tr class="th_color">
                       <th class="th_deg">Product ratings</th>
                       <th class="th_deg">product title</th>
                       <th class="th_deg">product price</th>
                       <th class="th_deg">discount Price</th>
                       <th class="th_deg" >product description</th>
                       <th class="th_deg" >product Catagory </th>
                       <th class="th_deg">Product Quantity </th>
                       <th class="th_deg">product images</th>
                       <th class="th_deg">Delete</th>
                       <th class="th_deg">Edit</th>


                    </tr>

                    @foreach ($product as $product)


                           <tr >
                            <td>{{ $product->ratings }}</td>
                            <td>{{ $product->title }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->discount_price }}</td>
                            <td>{{ $product->description }}</td>
                            <td>{{ $product->catagory }}</td>
                            <td>{{ $product->quantity }}</td>
                            <td><img class="img_size"    src="/product/{{ $product->image }}" alt="">
                            </td>
                            <td>
                              <a class="btn btn-danger" onclick="return confirm('Are You sure to delete this')"  href="{{ url('delete_product',$product->id) }}">Delete</a>
                            </td>
                            <td>
                               <a  class="btn btn-success" href="{{ url ('update_product' , $product->id)}}">Edit</a>
                            </td>
                           </tr>
                           @endforeach

                </table>
            </div>
        </div>
     @include('admin.js')
  </body>
</html>
