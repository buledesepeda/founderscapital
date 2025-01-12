<x-app-layout>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <div class="py-10">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Welcome to founders dashboard!") }}
                </div>
            </div>
        </div>
    </div>
    @if(session('status'))
    <div class="alert-msg bg-primary">
        {{session('status')}}
    </div>
    @endif
    <div class="container">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Add
          </button>
          @foreach($display_data as $display_data)
          <div class="title">
            {{$display_data->title}}
          </div> 
          <div class="title">
            {{$display_data->description}}
          </div> 
          <div class="title">
            {{$display_data->cofounders}}
          </div> 
          <div class="title">
            {{$display_data->problem}}
          </div> 
          <div class="title">
            {{$display_data->solution}}
          </div> 
          <div class="title">
            {{$display_data->funds}}
          </div> 
          <div class="title">
            {{$display_data->link}}
          </div> 
          <div class="title">
            <img src="{{$display_data->business_plan}}" alt="">
          </div> 
          <div class="title">
            <img src="{{$display_data->business_model}}" alt="">
          </div> 
          @endforeach
          
    </div>
    


    <form action="{{url('dashboard/insert')}}" method="post" enctype="multipart/form-data">
        @csrf
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Add data</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="div-nav">
                <div class="form-group">
                    <input type="text" class="form-control" required placeholder="Title of the business . . .">
                </div>
                <div class="mt-1 form-group">
                    <input type="text" class="form-control" required placeholder="Description of business ideas . . .">
                </div>
                <div class="mt-1 form-group">
                    <input type="text-box" class="form-control" required placeholder="Name of co-founders . . .">
                </div>
                <div class="mt-1 form-group">
                    <input type="text" class="form-control" required placeholder="Problem statement . . .">
                </div>
                <div class="mt-1 form-group">
                    <input type="text" class="form-control" required placeholder="Solution statement . . .">
                </div>
                <div class="mt-1 form-group">
                    <input type="text" class="form-control" required placeholder="Fund needed 'Peso currency' . . .">
                </div>
                <div class="mt-1 form-group">
                    <input type="url" class="form-control" required placeholder="Upload the link of the video presentation . . .">
                </div>
                <div class="mt-2 form-group">
                    <label for="" style="display:flex; flex:start">Upload the business plan </label>
                    <input type="file" class="form-control" required placeholder="Upload the business plan . . .">
                </div>
                <div class="mt-2 form-group">
                    <label for=""  style="display:flex; flex:start">Upload the business model canvas </label>
                    <input type="file" class="form-control" required placeholder="Upload the business model canvas . . .">
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

<footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</footer>
</x-app-layout>
