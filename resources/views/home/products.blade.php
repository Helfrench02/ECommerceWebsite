<section class="product_section layout_padding">
         <div class="container">
            <div class="heading_container heading_center">
               <h2>
                  Our <span>products</span>
               </h2>
            </div>
            <div class="row">
        
               
             
            @foreach($products as $productsX)
               <div class="col-sm-6 col-md-4 col-lg-4">
                  <div class="box">
                     <div class="option_container">
                        <div class="options">
                           <a href="{{url('product_description',$productsX->id)}}" class="option1" style="color:black">
                          Product Description
                           </a>
                           <form action="{{url('add_to_cart',$productsX->id)}}" method="POST">
                              @csrf
                              <div class="row">
                                 <div class="col-md-4">
                                 <input type="number" name="quantity"  value="1" min="1" style="width:100px">
                                 </div>
                                 <div class="col-md-4">
                                 <input type="submit" class="btn btn-primary" value="Add to Cart">
                                 </div>
                              </div>
                          
                              
                           </form>
                        </div>
                     </div>
                     <div class="img-box">
                     <img src="/product_image/{{$productsX->image}}" class="img-fluid img-thumbnail" alt="{{$productsX->image}}">
                     </div>
                     <div class="detail-box">
                        <h5>
                        {{$productsX->title}}
                        </h5>
                        @if($productsX->discount_price!=null)

                        <h6 style="color:red">  
                        <?php echo "$".number_format($productsX->discount_price,2); ?>                
                     
                        </h6>
                        <h6 style="text-decoration:line-through; color:blue">
                        <?php echo "$".number_format($productsX->price,2); ?>  
                        </h6>
                        @else

                        <h6 style="color:blue">
                        <?php echo "$".number_format($productsX->price,2); ?>  
                      
                        </h6>

                        @endif
                    
                     </div>
                  </div>
               </div>
               @endforeach
               <!-- {!!$products->appends(Request::all())->links()!!} -->
               <span style="padding-top: 10px;"> {!!$products->withQueryString()->links('pagination::bootstrap-5')!!}</span>
              
            </div>
    
         </div>
      </section>