<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')
 
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
        
              
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          @include('admin.footer')
  </body>
</html>