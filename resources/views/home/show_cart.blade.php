<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="home/images/favicon.png" type="">
      <title>Famms - Fashion HTML Template</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="home/css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="home/css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="home/css/responsive.css" rel="stylesheet" />
      <style type="text/css">
  .div_center{
    text-align: center;

  
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

    border: 3px solid black;
  }
  .data_color{
    color: black;
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
      <div class="hero_area">

         <!-- header section strats -->
        @include('home.header')
         <!-- end header section -->

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
		      <th scope="col">Product Title</th>
		      <th scope="col">Product Quantity</th>
		      <th scope="col">Price</th>
		      <th scope="col">Action</th>
		    </tr>
		  </thead>
		  <tbody>
            <?php $totalPrice = 0; ?>
          @foreach($cart as $carts)
        <tr>
        <td class="w-25">
			      <img src="/product_image/{{$carts->image}}" class="img-fluid img-thumbnail" alt="{{$carts->image}}" class="img-fluid img-thumbnail" alt="">
		      </td>
              <td>sdfsdf</td>
          <td class="data_color">{{$carts->quantity}}</td>
          <td class="data_color"> <?php echo "$".number_format($carts->price,2); ?> </td>

              <td>          
            <a onclick="return confirm('Are you sure you want to remove this?')" class="btn btn-danger" href="{{url('remove_to_cart',$carts->id)}} ">Remove</a>
        </td>
        </tr>
        <?php $totalPrice = $totalPrice + $carts->price; ?>
        @endforeach
    
		  </tbody>
		</table>  
        <div> <h2>Total Price:     <?php echo "$".number_format($totalPrice,2); ?></h2></div> 
    </div>
  </div>
</div>


              </div>
        

              
            </div>
          </div>  

      </div>
      
   

      <!-- footer start -->
      @include('home.footer')
      <!-- footer end -->
      
      <div class="cpy_">
         <p class="mx-auto">© 2021 All Rights Reserved By <a href="https://html.design/">Free Html Templates</a><br>
         
            Distributed By <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>
         
         </p>
      </div>
      <!-- jQery -->
      <script src="home/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="home/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="home/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="home/js/custom.js"></script>
   </body>
</html>