<x-app-layout style="overflow: scroll">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">    
<div class="py-6">
      <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
          <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
              <div class="p-6 text-gray-900 dark:text-gray-100">
                  {{ __("Investors dashboard!") }}
                  <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#investors_modal">
                    Add data
                  </button>
              </div>
          </div>
      </div>
  </div>

  <div class="container">

<div class="display-text-div" style="max-width:800px;margin:auto">
@if(session('status'))
  <div class="alert-msg bg-primary">
      {{session('status')}}
  </div>
  @endif
        @foreach($display_data as $display_data)
        <hr>

        <div class="title display-flex">
          <i style="font-size:1.5rem;float:left">{{$display_data->name}}</i>
          <a href="{{url('/investors_dashboard/'.$display_data->id.'/delete/')}}" class="btn btn-danger float-end">X</a>
        </div> 
        <br>
        <hr>
        
        <div class="ml-3 title">
          <img src="{{url(''.$display_data->profile_pic)}}" style="max-width:500px">
        </div> 
        <div class="ml-3 title">
          <label for="">Years as an investor :  </label>
          <i>{{$display_data->years}}</i>
        </div> 
        <div class="ml-3 title">
          <label for="">Risk tolerance :  </label>
          <i>{{$display_data->risk}}</i>
        </div> 
        <div class="ml-3 title">
          <label for="">Preferred industry for investing :  </label>
          <i>{{$display_data->preferred_industry}}</i>
        </div> 
        <div class="ml-3 title">
          <label for="">Net worth in 'Peso' :  </label>
          <i>{{$display_data->net_worth}}</i>
        </div> 
        <div class="ml-3 title">
          <label for="">Pledge investable amount : </label>
          <i>{{$display_data->investable_amount}}</i>
        </div> 
          <a href="{{url('/investors/'.$display_data->id.'/edit/')}}" class="ml-3">Edit</a>     
        @endforeach
  </div>
  </div>
<hr>
  <form action="{{url('investors/insert/')}}" method="post" enctype="multipart/form-data">
      @csrf

      <div class="modal fade" id="investors_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Add data as an investor</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="div-nav">
                    <div class="form-group mb-2">
                      <label for="" class="ml-2" style="color:#5a5858;font-size:1.3rem;">Upload your display profile :</label>
                        <input type="file" class="form-control" name="profile_pic" required>
                    </div>
                    <hr>
                    <div class="mt-1 form-group">
                        <input type="text" class="form-control" name="name" required placeholder="Name of the investor . . .">
                    </div>
                    <div class="mt-1 form-group">
                        <input type="text" class="form-control" name="years" required placeholder="Number of years as an investor . . .">
                    </div>
                    <div class="mt-1 form-group w-60" style="border:1px solid #dfdede;border-radius:6px; display:flex">
                      <label for="" style="right:0;flex:start;padding:6px 12px;color:#5a5858">Risk Tolerance</label>
                        <select name="risk" style="flex:end;padding:6px;width:40%; border:1px solid #dfdede; border-top:0px;border-bottom:0px">
                          <option value="" id=""readonly >Select</option>
                          <option value="Low" id="">Low Risk</option>
                          <option value="Medium" id="">Medium Risk</option>
                          <option value="High" id="">High Risk</option>
                        </select>
                    </div>
                    
                    <div class="mt-1 form-group">
                        <input type="text" class="form-control" name="preferred_industry" required placeholder="Preferred industry for investment . . .">
                    </div>
                    <div class="mt-1 form-group">
                        <input type="text" class="form-control" name="net_worth" required placeholder="Net worth in (Must be in peso) . . .">
                    </div>
                    <div class="mt-1 form-group">
                        <input type="text" class="form-control" name="investable_amount" required placeholder="Pledge investable amount . . .">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>
</form>

<!-- Modal for see all -->

<footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</footer>
</x-app-layout>

