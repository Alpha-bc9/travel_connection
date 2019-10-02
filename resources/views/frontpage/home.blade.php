@extends('maintemplate')
@section('content')

  <section class="ftco-section ftco-destination">
    	<div class="container">
    		<div class="row justify-content-start mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate">
          	<span class="subheading">Featured</span>
            <h2 class="mb-4"><strong>Featured</strong> Destination</h2>
          </div>
        </div>
    		<div class="row">
    			<div class="col-md-12">
    				<div class="destination-slider owl-carousel ftco-animate">
    					<div class="item">
		    				<div class="destination">
		    					<a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/destination-1.jpg);">
		    						<div class="icon d-flex justify-content-center align-items-center">
		    							<span class="icon-search2"></span>
		    						</div>
		    					</a>
		    					<div class="text p-3">
		    						<h3><a href="#">Paris, Italy</a></h3>
		    						<span class="listing">15 Listing</span>
		    					</div>
		    				</div>
	    				</div>
	    				<div class="item">
		    				<div class="destination">
		    					<a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/destination-2.jpg);">
		    						<div class="icon d-flex justify-content-center align-items-center">
		    							<span class="icon-search2"></span>
		    						</div>
		    					</a>
		    					<div class="text p-3">
		    						<h3><a href="#">San Francisco, USA</a></h3>
		    						<span class="listing">20 Listing</span>
		    					</div>
		    				</div>
	    				</div>
	    				<div class="item">
		    				<div class="destination">
		    					<a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/destination-3.jpg);">
		    						<div class="icon d-flex justify-content-center align-items-center">
		    							<span class="icon-search2"></span>
		    						</div>
		    					</a>
		    					<div class="text p-3">
		    						<h3><a href="#">Lodon, UK</a></h3>
		    						<span class="listing">10 Listing</span>
		    					</div>
		    				</div>
	    				</div>
	    				<div class="item">
		    				<div class="destination">
		    					<a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/destination-4.jpg);">
		    						<div class="icon d-flex justify-content-center align-items-center">
		    							<span class="icon-search2"></span>
		    						</div>
		    					</a>
		    					<div class="text p-3">
		    						<h3><a href="#">Lion, Singapore</a></h3>
		    						<span class="listing">3 Listing</span>
		    					</div>
		    				</div>
	    				</div>
	    				<div class="item">
		    				<div class="destination">
		    					<a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/destination-5.jpg);">
		    						<div class="icon d-flex justify-content-center align-items-center">
		    							<span class="icon-search2"></span>
		    						</div>
		    					</a>
		    					<div class="text p-3">
		    						<h3><a href="#">Australia</a></h3>
		    						<span class="listing">3 Listing</span>
		    					</div>
		    				</div>
	    				</div>
	    				<div class="item">
		    				<div class="destination">
		    					<a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/destination-6.jpg);">
		    						<div class="icon d-flex justify-content-center align-items-center">
		    							<span class="icon-search2"></span>
		    						</div>
		    					</a>
		    					<div class="text p-3">
		    						<h3><a href="#">Paris, Italy</a></h3>
		    						<span class="listing">3 Listing</span>
		    					</div>
		    				</div>
	    				</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>

    <section class="ftco-section bg-light">
    	<div class="container">
				<div class="row justify-content-start mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate">
          	<span class="subheading">Special Offers</span>
            <h2 class="mb-4"><strong>Top</strong> Tour Packages</h2>
          </div>
        </div>    		
    	</div>
    	<div class="container-fluid">
    		<div class="row">
          @foreach($packages as $package)
          <div class="col-sm-3 col-md-3 col-lg-3 ftco-animate">
            <div class="destination">
              <a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/destination-1.jpg);">
                <div class="icon d-flex justify-content-center align-items-center">
                  <span class="icon-search2"></span>
                </div>
              </a>
              <div class="text p-3">
                <div class="d-flex">
                  <div class="one">
                    <h3><a href="#">{{$package->name}}</a></h3>
                    <p class="rate">
                      <i class="icon-star"></i>
                      <i class="icon-star"></i>
                      <i class="icon-star"></i>
                      <i class="icon-star"></i>
                      <i class="icon-star-o"></i>
                      <span>8 Rating</span>
                    </p>
                  </div>
                  <div class="two">
                    <span class="price"><small class="text-muted cat"> <i class="fa fa-dollar-sign"></i></i></small>&nbsp;{{$package->price}}</span>
                  </div>
                </div>
                <p>{{$package->description}}</p>
                <p class="days"><span>{{$package->duration}}</span></p>
                <hr>
                <p class="bottom-area d-flex">
                  <span><small class="text-muted cat"> <i class="fa fa-calendar"></i></small>&nbsp;{{$package->depature_date}}</span>
                  <span class="ml-auto"><a href="#">More Detail</a></span>
                </p>
                 @if(Auth::check())
                 <hr>
                <div class="card-footer text-muted d-flex justify-content-between bg-transparent border-top-0">


               
                <div class="stats">                 

                   @php
                    $likecheck=$package->numberoflikes()->get();
                    $likeorunlikecount=$package->numberoflikes()
                    ->where('count', '=',1)
                    ->get();
                    

                  @endphp 



                  

                  @if($likecheck->count()>0)                 


                    
                     @php
                     

                      $pid=$user->userlikes()->where('packages_id', '=',$package->id)
                      ->get();
                      $countlike=$user->userlikes()->where('packages_id', '=',$package->id)
                      ->first()->count;
                     


                     @endphp

                     

                     @if($pid->count()==1)

                     @if($countlike==1)



                      <a class="rounded-circle" id="icon" data-like="{{ $package->id }}">
                        <i id="like{{$package->id}}" class="far fa-thumbs-up"></i><span id="lcount1{{$package->id}}">{{$likeorunlikecount->count()}}</span><span id="lcount2{{$package->id}}"></span>
                      </a>

                      @else
                      <a class="rounded-circle" id="icon" data-like="{{ $package->id }}">
                        <i id="like{{$package->id}}" class="far fa-thumbs-down"></i><span id="lcount1{{$package->id}}">{{$likeorunlikecount->count()}}</span><span id="lcount2{{$package->id}}"></span>
                      </a>
                      @endif


                     @else


                      <a class="rounded-circle" id="icon" data-like="{{ $package->id }}">
                        <i id="like{{$package->id}}" class="far fa-thumbs-down"></i><span id="lcount1{{$package->id}}">{{$likeorunlikecount->count()}}</span><span id="lcount2{{$package->id}}"></span>
                      </a>

                     @endif

                    


                   


                         
                  

                    @else

                        <a id="icon" data-like="{{ $package->id }}">
                        <i id="like{{$package->id}}" class="far fa-thumbs-down"></i><span id="lcount1{{$package->id}}">0</span><span id="lcount2{{$package->id}}"></span>
                      </a>
                      </a>

                    @endif       
                 </div>
                <div class="stats">
                  <a action="{{route('comment.show',$package->id)}}" data-comment="{{ $package->id }}">
                    <i id="comment{{$package->id}}" class="far fa-comment"></i>
                  </a>

                </div>
                <div class="stats">

                  <a href=""> <i class="fa fa-share"></i></a>
                   Share
                </div>
                 
              </div>

              @endif
              </div>
            </div>
          </div>
          @endforeach
    			

    		</div>
    	</div>
    </section>

 <div class="modal fade" id="commentModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body" id="modalbody">
        
      </div>

      <div class="align-content-center my-2">
        <div class="container">
          <div class="row">
            <div class="col-md-12">

                <div class="card mb-3" style="width: 100%">
                  <div class="row no-gutters">
                    
                    <div class="col-md-12">
                      <div class="card-header">

                        Comments
                        <button type="button" class="close" data-dismiss="modal">
              ×
            </button>
                        
                      </div>
                      <div class="card-body" style=" max-height: 500px;
    overflow-y: auto;">


                  

                         <section class="form-elegant scrollbar-light-blue">




                                  <div class="card mb-3" style="max-width: 100%;">


                            <div class="row no-gutters">
                              <div class="col-md-2 text-center" >
                                <div style="font-size: 3rem;" id="userphoto">
                               
                              </div>
                            </div>
                              <div class="col-md-10">
                                <div class="card-body" id="card-body">
                                  


                                   
                                </div>
                              </div>
                            </div>
                          </div>

                          

                          
                        </section>  
              
                              
                      </div>
                      <div class="card-footer">

                         <div class="row">
            <div class="col-md-12">
              
            
               <form action="{{route('comment.store')}}" method="POST" id="commentform">
                <input type="hidden" name="packageid" id="packageid" value="" placeholder="">
                @csrf

                          <div class="form-group purple-border">
                          <label for="commentname">Comment</label>
                          <textarea class="form-control" id="commentname" name="commentname" rows="3"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Comment
                          
                        </button>





                     </form>

            </div>
            
          </div>
                        
                      </div>
                    </div>
                  </div>
                </div>
              
            </div>
            
          </div>
         
          
        </div>

         
      </div>
    </div>
  </div>
</div>

@endsection

@section('script')
  <!-- <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script> -->
  <script type="text/javascript">
    $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });

    
    $(document).ready(function() {    


      $('[data-like]').on('click', function(e) {

        var packageId=$(this).data('like');
        //console.log(packageId);
       // alert(packageId);     

        $.post('{{route("getlike")}}',{pid:packageId},function(response){
            //console.log(response);
            //alert(response);

            

            var likeunlike=parseInt(response.count);


            if(likeunlike==1){ 

              $.post('{{route("getlikecount")}}',{pid:packageId},function(response){

              console.log(response);

            likechange1=$('#'+'lcount1'+packageId);
            likechange2=$('#'+'lcount2'+packageId); 

            likechange1.hide();
            likechange2.text(response.length);  

             });
                        

            
            icon = $('#'+'like'+packageId);
            /*icon.addClass("fa-thumbs-o-up fa-thumbs-up");
            icon.removeClass("fa-thumbs-o-up fa-thumbs-up");*/

            icon.toggleClass("fa-thumbs-up fa-thumbs-down")


            }else{  

            $.post('{{route("getlikecount")}}',{pid:packageId},function(response){

              console.log(response);

            likechange1=$('#'+'lcount1'+packageId);
            likechange2=$('#'+'lcount2'+packageId); 

            likechange1.hide();
            likechange2.text(response.length-1);  

             });            

            
            icon =  $('#'+'like'+packageId);

            icon.toggleClass("fa-thumbs-down fa-thumbs-up")

          }

            
           
        });

      });

      $('[data-comment]').on('click', function(e) {

        var packageId=$(this).data('comment');
        $('#packageid').val(packageId);
        //console.log(packageId);

       //alert(packageId);

     
      

       var infoModal = $('#commentModal');
       
           $.post('{{route("getcomment")}}',{pid:packageId},function(response){
            //console.log(response);
            var html = '';
            var userphotohtml='';




            $.each(response,function(i,v){
              //console.log(i,v);
              var userid = v.name;
              var created_at = v.created_at;
              var description = v.description;
              //var username="";

               /* $.post('{{route("getuser")}}',{uid:userid},function(response){

                  //console.log(response);

                  $.each(response,function(i,v){
                     username=v.name;
                     html+="<h5 class='card-title'>"+username +"</h5>";
               
                  })
                
                  $('#card-body').html(html);
              });*/
             /*console.log(userid);
             console.log(created_at);
             console.log(description);*/
             // $('#userphoto').html(userphotohtml);
             html += "<h5 class='card-title'>"+userid +"</h5><small class='text-muted'><i class='fa fa-calendar'></i>"+created_at+"</small><p class='card-text'>"+description+"</p>";
            // userphotohtml="<i class='fa fa-user-circle'></i>";

            });
             
              $('#card-body').html(html);
             $('#commentModel').modal('show');
             //console.log(html);
            
            
           
                                  
           });

           });
        
    });
  </script>
@endsection