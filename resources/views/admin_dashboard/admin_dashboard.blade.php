<x-app-layout style="overflow: scroll">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">    
<div class="py-6">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Admin dashboard!") }}
                    <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">
                      Add data
                    </button>
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

  {{-- <div class="display-text-div" style="max-width:800px;margin:auto">

          @foreach($display_data as $display_data)
          <hr>

          <div class="title display-flex">
            <i style="font-size:1.5rem;float:left">{{$display_data->title}}</i>
            <a href="{{url('/dashboard/'.$display_data->id.'/delete/')}}" class="btn btn-danger float-end">X</a>
          </div> 
          <br>
          <hr>
          
          <div class="ml-3 title">
            {{$display_data->description}}
          </div> 
          <div class="ml-3 title">
            {{$display_data->cofounders}}
          </div> 
          <div class="ml-3 title">
            {{$display_data->problem}}
          </div> 
          <div class="ml-3 title">
            {{$display_data->solution}}
          </div> 
          <div class="ml-3 title">
            {{$display_data->funds}}
          </div> 
          <div class="ml-3 title" style="border: solid black 1px">
            <input type="text" value=" {{$display_data->youtube}}"
            style="width: 90%; border: none;background-color:transparent;color:blue"
             id="copyText" readonly>
            <button onclick="copyToClipboard()">
              <i class="fa fa-clone"></i>
            </button>
          </div>
            <!-- Button trigger modal -->
          <a href="{{url('/dashboard/'.$display_data->id.'/seeData/')}}" class="ml-3">See all</a>     
 <br>
          @endforeach
        
           --}}
    </div>
  <hr>
    <form action="{{url('dashboard/insert/')}}" method="post" enctype="multipart/form-data">
        @csrf
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Add data for your website</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="div-nav">
                <div class="form-group">
                    <textarea class="form-control" name="about" rows="5" required placeholder="About the website . . .">
                    </textarea>
                    </div>
                <div class="mt-1 form-group">
                    <input type="text" class="form-control" name="portfolio" required placeholder="Portfolio . . .">
                </div>
                <div class="mt-1 form-group">
                    <input type="text-box" class="form-control" name="approach" required placeholder="Approach . . .">
                </div>
                <div class="mt-1 form-group">
                    <input type="text" class="form-control" name="news" required placeholder="News & Insights . . .">
                </div>
                <div class="mt-1 form-group">
                    <input type="text" class="form-control" name="contact" required placeholder="Contact us . . .">
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
