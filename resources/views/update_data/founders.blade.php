<x-app-layout style="overflow: scroll">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">    
<div class="py-6">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">

            </div>
        </div>
    </div>

    <div class="container" style="max-width:600px">
    <form action="{{url('/update/'.$request->id.'/founders_data/')}}" method="post" enctype="multipart/form-data">
      @csrf
      @method('PUT')
  <div class="display-text-div" style="max-width:800px;margin:auto"> 
    <div class="div-nav">
      <hr>
    <div class="title-investors-update">
      <label style="float:left; font-size:1.3rem">{{$request->title}}</label>
        <button type="submit" class="btn btn-primary" style="float: right;">Save changes</button>
      </div>
<br>      
      <div class="form-group mt-4">
        <hr>
          <input type="text" class="form-control" name="title" required 
          value="{{$request->title}}" placeholder="Title of the business . . ." >
      </div>
      <div class="mt-1 form-group">
          <input type="text" class="form-control" name="description" required 
          value="{{$request->description}}" placeholder="Description of business ideas . . .">
      </div>
      <div class="mt-1 form-group">
          <input type="text-box" class="form-control" name="cofounders" required 
          value="{{$request->cofounders}}" placeholder="Name of co-founders . . .">
      </div>
      <div class="mt-1 form-group">
          <input type="text" class="form-control" name="problem" required 
          value="{{$request->problem}}" placeholder="Problem statement . . .">
      </div>
      <div class="mt-1 form-group">
          <input type="text" class="form-control" name="solution" required 
          value="{{$request->solution}}" placeholder="Solution statement . . .">
      </div>
      <div class="mt-1 form-group">
          <input type="text" class="form-control" name="funds" required 
          value="{{$request->funds}}" placeholder="Fund needed 'Peso currency' . . .">
      </div>
      <div class="mt-1 form-group">
          <input type="url" class="form-control" name="youtube" required 
          value="{{$request->youtube}}" placeholder="Upload the link of the video presentation . . .">
      </div>
      <div class="mt-2 form-group w-75">
        <button type="button" class="btn btn-primary" style="display: flex;float:right" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Edit
          </button>
          <label for=""  style="display:flex; flex:start">Business plan</label>
          <img src="{{asset(''.$request->business_plan)}}">
      </div>
      <div class="mt-2 form-group w-75">
        <button type="button" class="btn btn-primary" style="display: flex;float:right" data-bs-toggle="modal" data-bs-target="#model_modal">
          Edit
        </button>
          <label for=""  style="display:flex; flex:start">Business model canvas </label>
          <img src="{{asset(''.$request->business_model)}}">
      </div>

  </div>
    </div>
  <hr>
</form>
    </div>

  <form action="{{url('/update/'.$request->id.'/business_plan/')}}" method="post" enctype="multipart/form-data">
  <!-- Modal -->
  @csrf
  @method('PUT')
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Edit business plan</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
         <div class="form-group">
            <input type="file" class="form-control" name="business_plan" required>
         </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
</form>

  <form action="{{url('/update/'.$request->id.'/business_model/')}}" method="post" enctype="multipart/form-data">
  <!-- Modal -->
  @csrf
  @method('PUT')
  <div class="modal fade" id="model_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Edit business model</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
         <div class="form-group">
            <input type="file" class="form-control" name="business_model" required>
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
