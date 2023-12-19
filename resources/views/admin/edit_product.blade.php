<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <base href="/public">
    @include('admin.css')
    <style type="text/css">
  .div_center{
    text-align: center;
    width: auto;
    padding-top: 40px;
  }

  .font_size{
    font-size: 40px;
    padding-bottom: 40px;
  }
  .text_color{
    color: black;
  }
  .field_style{
    margin-bottom: 20px;
  }
  label{
    display: inline-block;
    width: 200px;
  }

 </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
     @include('admin.sidebar')
     <!-- partial -->
     
      <!-- partial:partials/_navbar.html -->
      @include('admin.header')
        <!-- partial -->
          <div class="main-panel" >
            <div class="content-wrapper">
            @if(session()->has('message'))
            <div class="alert alert-success">
              <button type="button" class="btn btn-danger" data-bs-dismiss="alert"  aria-hidden="true">x</button>
              {{session()->get('message')}}
            </div>
            @endif
            <div class="div_center">
<h2 class="font_size">Update Product</h2>
<form action="{{url('/edit_product_confirm',$data->id)}}" method="POST" enctype="multipart/form-data">
<div class="field_style">
  @csrf
  <label>Product Category:</label>
  <select class="text_color" name="category" required="">
<option value="{{$data->category}}">{{$data->category}}</option>
@foreach($category as $category)
    <option value="{{$category->category_name}}" >{{$category->category_name}}</option>
    @endforeach
  </select>
</div>
<div class="field_style">
  <label>Product Name:</label>
  <input type="text" class="text_color" name="title" placeholder="Write Product Name" value="{{$data->title}}" required="" >
</div>
<div class="field_style">
  <label>Description:</label>
  <input type="text" class="text_color" name="description" placeholder="Product Description" value="{{$data->description}}" required="">
</div>
<div class="field_style">
  <label>Product Quantity:</label>
  <input type="number" class="text_color" name="quantity" min="0" placeholder="0" value="{{$data->quantity}}" required="">
</div>
<div class="field_style">
  <label>Product Discount Price:</label>
  <input type="number" class="text_color" name="discount_price" value="{{$data->discount_price}}" placeholder="0">
</div>
<div class="field_style">
  <label>Product Price:</label>
  <input type="number" class="text_color" name="price" value="{{$data->price}}" placeholder="0" required="">
</div>
<div class="field_style">
  <label>Current Image:</label>
 <img style="margin: auto;" height="100" width="100" src="/product_image/{{$data->image}}" alt="{{$data->image}}">
</div>

<div class="field_style">
  <label>Upload Image:</label>
  <input type="file" name="image" value="{{$data->image}}" >
</div>
<div class="field_style">
  <input type="submit" name="submit"  class="btn btn-primary" value="Update Product" >
</div>
</form>



            </div>
              
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          @include('admin.footer')
  </body>
</html>