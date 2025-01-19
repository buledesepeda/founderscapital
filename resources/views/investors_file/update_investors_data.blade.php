
  
  <x-app-layout style="overflow: scroll">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">    
  <body>
    
  <div class="py-6">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Investors dashboard!") }}
                    
                </div>
            </div>
        </div>
    </div>

<form action="{{'/investors/'.$edit_data->id.'/update_data/'}}" method="post" enctype="multipart/form-data">
    <div class="container">
  @csrf
  @method('PUT')
  <div class="display-text-div" style="max-width:800px;margin:auto">
    
          <hr>
          <div class="title display-flex">
            <i style="font-size:1.5rem;float:left">{{$edit_data->name}}</i>
            <button type="submit" class="btn btn-primary float-end">Save changes</button>
          </div> 
          <br>
          <hr>
          
          <div class="ml-3 title" >
            <img src="{{url(''.$edit_data->profile_pic)}}" alt="" name="profile_pic">
          </div> 
          <hr>
          <div>
            <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#investors_profile">
              Edit image
            </button>
          </div>
          <div class="ml-3 title" >
            <label for="">Name of the investor :  </label>
            <input type="text" name="name" value="{{$edit_data->name}}" required style="border:none; background:none">
          </div> 
          <div class="ml-3 title" >
            <label for="">Years as an investor :  </label>
            <input type="text" name="years" value="{{$edit_data->years}}" required style="border:none; background:none">
          </div> 
          <div class="mt-1 form-group w-60" style="border:1px solid #dfdede;border-radius:6px; border:none;display:flex">
                      <label for="" style="right:0;flex:start;padding:6px 12px;color:#5a5858">Risk Tolerance</label>
                        <select name="risk" style="flex:end;padding:6px;width:30%; border:1px solid #dfdede; border-top:0px;border-bottom:0px">
                          <option value="{{$edit_data->risk}}">{{$edit_data->risk}}</option>
                          <option value="Low" id="">Low</option>
                          <option value="Medium" id="">Medium</option>
                          <option value="High" id="">High</option>
                        </select>
                    </div>
          <div class="ml-3 title" >
            <label for="">Preferred industry for investing :  </label>
            <input type="text" name="preferred_industry" value="{{$edit_data->preferred_industry}}" required style="border:none; background:none">
          </div> 
          <div class="ml-3 title" >
            <label for="">Net worth in 'Peso' :  </label>
            <input type="text" name="net_worth" value="{{$edit_data->net_worth}}" required style="border:none; background:none">
          </div> 
          <div class="ml-3 title" >
            <label for="">Pledge investable amount : </label>
            <input type="text" name="investable_amount" value="{{$edit_data->investable_amount}}" required style="border:none; background:none">
          </div>
          
  <hr>
  </form>
    <form action="{{'/investors/'.$edit_data->id.'/update_image/'}}" method="post" enctype="multipart/form-data">
        @csrf
    @method('PUT')
        <div class="modal fade" id="investors_profile" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">Edit investors profile</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  <div class="div-nav">
                      <div class="form-group mb-2">
                        <label for="" class="ml-2" style="color:#5a5858;font-size:1.3rem;">Upload your new display profile :</label>
                          <input type="file" class="form-control" name="profile_pic" required>
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
  
</body>

  <!-- Modal for see all -->
  
  <footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </footer>
  </x-app-layout>
  
  