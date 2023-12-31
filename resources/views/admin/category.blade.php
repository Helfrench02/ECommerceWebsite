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
              <h2 class="h2_font">Add Category</h2>
              <form action="{{url('/add_category')}}" method="POST">
                @csrf
                <input type="text" name="category_name" class="input_color" placeholder="Write Category Name">
                <input type="submit" name="submit" class="btn btn-primary" value="Add Category">
              </form>
              </div>
              <table class="center table table-dark">
                <tr>
                  <td class="data_color">Category Name</td>
                  <td class="data_color">Action</td>
                </tr>
                @foreach($data as $data)
                <tr>
                  <td class="data_color">{{$data->category_name}}</td>
                  <td>
                    
                    <a onclick="return confirm('Are you sure you want to remove this?')" class="btn btn-danger" href="{{url('delete_category',$data->id)}}">Delete</a>
                </td>
                </tr>
                @endforeach
              </table>
              
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          @include('admin.footer')
  </body>
</html>