<x-app-layout style="overflow: scroll">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">    
<div class="py-6">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Founders dashboard!") }}
                    <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">
                      Add data
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="container">

  <div class="display-text-div" style="max-width:800px;margin:auto">
  @if(session('status'))
    <div class="alert-msg bg-primary m-auto " style="border-radius: 5px 5px 0px 0px">
        <i style="padding: 12px;color:aliceblue">{{session('status')}}</i>
    </div>
    @endif
          @foreach($display_data as $display_data)
          <hr>

          <div class="title display-flex">
            <i style="font-size:1.5rem;float:left">{{$display_data->title}}</i>
            <a href="{{url('/dashboard/'.$display_data->id.'/delete/')}}" class="btn btn-danger float-end">X</a>
          </div> 
          <br>
          <hr>
          
          <div class="title ml-3">
            {{$display_data->description}}
          </div> 
          <div class="title ml-3">
            {{$display_data->cofounders}}
          </div> 
          <div class="title ml-3">
            {{$display_data->problem}}
          </div> 
          <div class="title ml-3">
            {{$display_data->solution}}
          </div> 
          <div class="title ml-3">
            {{$display_data->funds}}
          </div> 
          <div class="title ml-3" style="border: solid black 1px">
            <input type="text" value=" {{$display_data->youtube}}"
            style="width: 90%; border: none;background-color:transparent;color:blue"
             id="copyText" readonly>
            <button onclick="copyToClipboard()">
              <i class="fa fa-clone"></i>
            </button>
          </div>
            <!-- Button trigger modal -->
          <a href="{{url('/dashboard/'.$display_data->id.'/seeData/')}}" class="ml-3">See all</a>     
          <a href="{{url('/founders/'.$display_data->id.'/edit/')}}" class="ml-3">Edit</a>     
 <br>
          @endforeach
        
          
    </div>
  <hr>
    <form action="{{url('dashboard/insert/')}}" method="post" enctype="multipart/form-data">
        @csrf
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Add data for founders</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="div-nav">
                <div class="form-group">
                    <input type="text" class="form-control" name="title" required placeholder="Title of the business . . .">
                </div>
                <div class="mt-1 form-group">
                    <input type="text" class="form-control" name="description" required placeholder="Description of business ideas . . .">
                </div>
                <div class="mt-1 form-group">
                    <input type="text-box" class="form-control" name="cofounders" required placeholder="Name of co-founders . . .">
                </div>
                <div class="mt-1 form-group">
                    <input type="text" class="form-control" name="problem" required placeholder="Problem statement . . .">
                </div>
                <div class="mt-1 form-group">
                    <input type="text" class="form-control" name="solution" required placeholder="Solution statement . . .">
                </div>
                <div class="mt-1 form-group">
                    <input type="text" class="form-control" name="funds" required placeholder="Fund needed 'Peso currency' . . .">
                </div>
                <div class="mt-1 form-group">
                    <input type="url" class="form-control" name="youtube" required placeholder="Upload the link of the video presentation . . .">
                </div>
                <div class="mt-2 form-group">
                    <label for="" style="display:flex; flex:start">Upload the business plan </label>
                    <input type="file" class="form-control" name="business_plan" required placeholder="Upload the business plan . . .">
                </div>
                <div class="mt-2 form-group">
                    <label for=""  style="display:flex; flex:start">Upload the business model canvas </label>
                    <input type="file" class="form-control" name="business_model" required placeholder="Upload the business model canvas . . .">
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
    <script>
      function copyToClipboard() {
        var copyText = document.getElementById("copyText");
        copyText.select();
        document.execCommand("copy");
        alert("Copied the text: " + copyText.value);
      }
      </script>
      
  </footer>
</x-app-layout>
