@extends('template')

@section('content')
	<div class="container-fluid">

        

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-success">DataTables Example</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table text-center table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead class="bg-success text-white">
                    <tr>
                      <th>No.</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th>Departure Date</th>
                      <th>Departure</th>
                      <th>Destination</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                 
                  <tbody>
              <!--       <tr>
                      <td>1</td>
                      <td>Ingyinn</td>
                      <td>ingyinnhtike98@gmail.com</td>
                      <td>09750140033</td>
                      <td>
                          <div class="row">
                          <div class="col-md-3">
                          <span class="float-right">Yangon</span>
                          </div>
                          <div class="col-md-1 p-0">
                          <i class="fas fa-exchange-alt pt-1 pl-2" id=""></i>
                          </div>
                          <div class="col-md-5">
                          <span>Mandalay</span>
                          </div>
                        </div>

                      </td>
                      <td><select id="pending2">
                      <option value="pending">Pending</option>
                      <option value="confirm">Confirm</option>
                      <option value="cancel">Cancel</option>

                      </select></td>
                    </tr> -->


                  @php
                      $i=1;
                  @endphp 
                  @foreach($bookings as $booking)

                    <tr>
                      <input type="hidden" name="" class="booking_id" value="{{$booking->id}}">
                      <td>{{$booking->id}}</td>
                      <td>{{$booking->package->name}}</td>
                      <td>{{$booking->user->email}}</td>
                      <td>{{$booking->user->phone}}</td>
                      <td>{{$booking->package->departure_date}}</td>
                      <td>{{$booking->package->departurecity->name}}</td>
                      <td>{{$booking->package->destinationcity->name}}</td>
                      <td>
                      <select id="pending2">
                      <option value="pending">Pending</option>
                      <option value="confirm">Confirm</option>
                      <option value="cancel">Cancel</option>

                      </select>
                      </td>
                      
                    </tr>
                  @endforeach 

                  </tbody>
                   <tfoot>

                    <tr>
                      <th>No.</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th>Deperature</th>
                      <th></th>
                      <th>Destination</th>
                      <th>Status</th>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
          </div>

        </div>

@endsection


@section('script')<script type="text/javascript">
  $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
</script>
<script type="text/javascript">
$('#pending2').on('change',function(){


var booking =  $( "#pending2 option:selected" ).val();
var token = $(this).data('token');
var base_url = $(this).data('url');
 var id=$('.booking_id').val();

  console.log(booking);

   $.post("{{route('bookingupdate')}}",{id:id,booking:booking},function(response){
        

     console.log(response);
        })


      });




   // $.get('/booking/' + id, function(data) {
   //          console.log(data);
   //          $('#city').empty();
   //          $.each(data, function(index,subCatObj){
   //              $('#city').append(''+subCatObj.name+'');
   //          });
   //      });




</script>


@endsection