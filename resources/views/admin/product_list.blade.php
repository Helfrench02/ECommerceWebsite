<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')
    <style type="text/css">
  .div_center{
    text-align: center;
    padding-top: 40px;
  
  }
  .h2_font{
    font-size: 40px;
    padding-bottom: 40px;
  }
  .input_color{
    color:black;
  }
  .center{
    margin: auto;
    width: 50%;
    text-align: center;
    margin-top: 30px;
    border: 3px solid white;
  }
  .data_color{
    color: white;
  }
  .img_product {
    height: 150px;
  width: 150px;
}
.table-image {
  td, th {
    vertical-align: middle;
  }
}
.container {
  padding: 2rem 0rem;
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
              <div class="div_center">
              <h2 class="h2_font">Product List</h2>


      <div class="container">
  <div class="row">
    <div class="col-12">
		<table class="table table-image">
		  <thead>
		    <tr>
		      <th scope="col">Image</th>
		      <th scope="col">Product Name</th>
		      <th scope="col">Product Description</th>
		      <th scope="col">Category</th>
		      <th scope="col">Quantity</th>
		      <th scope="col">Discount</th>
          <th scope="col">Price</th>
          <th scope="col">Action</th>
		    </tr>
		  </thead>
		  <tbody>
		   
        @foreach($data as $data)
        <tr>
        <td class="w-25">
			      <img src="/product_image/{{$data->image}}" class="img-fluid img-thumbnail" alt="{{$data->image}}">
		      </td>
          <td class="data_color">{{$data->title}}</td>
          <td class="data_color">{{$data->description}}</td>
          <td class="data_color">{{$data->category}}</td>
          <td class="data_color">{{$data->quantity}}</td>
          <td class="data_color">{{$data->discount_price}}</td>
          <td class="data_color">{{$data->price}}</td>
          <td>          
            <a  class="btn btn-success" href="{{url('edit_product',$data->id)}}">Edit</a>
        </td>
              <td>          
            <a onclick="return confirm('Are you sure you want to remove this?')" class="btn btn-danger" href="{{url('delete_product',$data->id)}}">Delete</a>
        </td>
        </tr>
        @endforeach
		  </tbody>
		</table>   
    </div>
  </div>
</div>


              </div>
        

              
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          @include('admin.footer')
  </body>
</html>