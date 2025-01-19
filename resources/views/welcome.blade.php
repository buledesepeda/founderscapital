<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Founders Capital</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            
        @endif
        <style>

        body {
            background-image: url('background/mudjapen.png'); 
            background-size: cover; /* Adjusts the image to cover the entire div */ 
        background-position: center; /* Centers the image within the div */ 
        background-repeat: no-repeat; /* Prevents the image from repeating */ 
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color:rgb(248, 248, 248);
        }

        .container::-webkit-scrollbar { display: none; /* Hides scrollbar in Chrome, Safari, and Opera */
       
             }     
        .container {
            width: 80%;
            height: 80%;
            overflow-y: scroll;
            background-color: transparent;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            -ms-overflow-style: none; /* Hides scrollbar in Internet Explorer and Edge */ scrollbar-width: none; /* Hides scrollbar in Firefox */

        }
        iframe {
            width: 100%;
            height: 500px;
            border: none;
            margin-bottom: 20px;
           
        }
    .account-container { 
        width: 100%; height: 200px; 
        /* background-image: url('background/mudjapen.png');  */
        background-size: cover; /* Adjusts the image to cover the entire div */ 
        background-position: center; /* Centers the image within the div */ 
        background-repeat: no-repeat; /* Prevents the image from repeating */ 
        /* border: 1px solid white; */
    }
        
            </style>
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">

    
        <div class="container">
            <hr>
        <i style="font-size: 2rem;color:white;">Welcome to Founders Capital Website</i>
        <br><hr><br>
        <div class="reg-container"style="display:flex" >
        <div class="title-reg-div">
        <label style="font-size:1.25rem;color:white; float:left;">Login/Signup</label>
        </div>
        <div class="account-container" style="float:right;">

                    <header class="" >
                        
                        @if (Route::has('login'))
                            <nav class="flex justify-end flex-3 -mx-3">
                                @auth
                                    <a
                                        href="{{ url('/dashboard') }}"
                                        class="btn btn-success">
                                        Dashboard
                                    </a>
                                @else
                                    <a
                                        href="{{ route('login') }}"
                                        class="rounded-md px-3 py-10 text-white"
                                        style="border: 1px solid white; display:block;padding:10px;"
                                    >
                                        Log in
                                    </a>

                                    @if (Route::has('register'))
                                        <a
                                            href="{{ route('register') }}"
                                            class="rounded-md px-3 py-10 text-white"
                                            style="border: 1px solid white; display:block;padding:10px;margin-left:5px;"
                                        >
                                            Register
                                        </a>
                                    @endif
                                @endauth
                            </nav>
                        @endif

    </div>
    </div>
    
    <br>
    <br>
    <hr>

        <label  style="font-size:1.25rem;color:white;">News & Insights</label>
        <iframe src="https://www.example.com/news-insights"></iframe>
        
        <label  style="font-size:1.25rem;color:white;">Approach</label>
        <iframe src="https://www.example.com/approach"></iframe>
        
        <label  style="font-size:1.25rem;color:white;">Portfolio</label>
        <iframe src="https://www.example.com/portfolio"></iframe>
        
        <label style="font-size:1.25rem;color:white;">Contact Us</label>
        <iframe src="https://www.example.com/contact-us"></iframe>
        
        </div>

        </header>


<footer class="py-16 text-sm text-center text-black dark:text-white/70">
</footer>
</div>
</div>
    </body>
</html>


