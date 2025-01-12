<x-app-layout style="overflow: scroll">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">    
<div class="py-6">
      <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
          <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
              <div class="p-6 text-gray-900 dark:text-gray-100">
                  {{ __("All data of founder!") }}
                  <a href="{{url('dashboard')}}" class="btn btn-secondary float-end">
                    Back
                  </a>
              </div>
          </div>
      </div>
  </div>

  <div class="container" style="max-width: 700px">
          <div class="display-text-div">
            <hr>
            <div class="mb-1 title">
              <i style="font-size:1.5rem;">{{$view_all->title}}</i>
            </div> 
            
            <div class="ml-3 title">
              {{$view_all->description}}
            </div> 
            <div class="ml-3 title">
              {{$view_all->cofounders}}
            </div> 
            <div class="ml-3 title">
              {{$view_all->problem}}
            </div> 
            <div class="ml-3 title">
              {{$view_all->solution}}
            </div> 
            <div class="ml-3 title">
              {{$view_all->funds}}
            </div> 
            <div class="ml-3 title" style="border: solid black 1px">
              <input type="text" value=" {{$view_all->youtube}}"
              style="width: 90%; border: none;background-color:transparent;color:blue"
               id="copyText" readonly>
              <button onclick="copyToClipboard()">
                <i class="fa fa-clone"></i>
              </button>
            </div>

   <br>
   <center>

            <div class="plan-model-container display-flex">
              <div class="title">
                <div class="plan float-start w-50">
                  <i>Business Plan</i>
                  <img src="{{asset(''.$view_all->business_plan)}}" alt="" style="height: 250px; width:auto;max-width:250px">
                </div>
              <div class="model float-end w-50">
                <i>Business Model</i>
                <img src="{{asset(''.$view_all->business_model)}}" alt="" style="height: 250px; width:auto;max-width:250px">  
              </div>
              </div> 
            </div>
          </center>
  

</div>


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
