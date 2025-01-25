<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background: linear-gradient(to right, #8EC5FC, #E0C3FC);
            margin: 0;

            background-image: url('background/mudjapen.png');
            background-size: cover;
            /* Adjusts the image to cover the entire div */
            background-position: center;
            /* Centers the image within the div */
            background-repeat: no-repeat;
            /* Prevents the image from repeating */
        }

        .button-container {
            margin-bottom: 20px;
        }

        .button-container button {
            padding: 10px 20px;
            margin: 0 10px;
            font-size: 16px;
            cursor: pointer;
            border: none;
            border-radius: 4px;
            background-color: #ffffff;
            color: #4A90E2;
        }

        .button-container button:hover {
            background-color: #4A90E2;
            color: white;
        }

        .login-form {
            display: none;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        .login-form.show {
            display: block;
        }

        .login-form h2 {
            margin: 0 0 15px;
            color: #4A90E2;
        }

        .login-form label {
            display: block;
            margin-bottom: 5px;
            color: #333;
            transition: cubic-bezier(0.95, 0.05, 0.795, 0.035);
        }

        .login-form input {
            width: 93.5%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            background-color: #f9f9f9;
        }

        .login-form button {
            width: 100%;
            padding: 10px;
            background-color: #4A90E2;
            border: none;
            border-radius: 4px;
            color: white;
            font-size: 16px;
        }
    </style>
    <script>
        function showForm(formId) {
            document.getElementById('investor-form').classList.remove('show');
            document.getElementById('founder-form').classList.remove('show');
            document.getElementById(formId).classList.add('show');
        }
    </script>
</head>

<body>
    <div class="button-container">
        <button onclick="showForm('founder-form')">Founder Signup</button>

        <button onclick="showForm('investor-form')">Investor Signup</button>
    </div>

    <div id="investor-form" class="login-form">
        <h2>Investor Signup</h2>
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Firstname')" />
                <x-text-input id="name" class="block w-full mt-1" type="text" name="name" :value="old('name')" required
                    autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Lastname')" />
                <x-text-input id="email" class="block w-full mt-1" name="lastname" :value="old('lastname')" required
                    autocomplete="lastname" />
                <x-input-error :messages="$errors->get('lastname')" class="mt-2" />
            </div>
            <div class="mt-4">
                <x-input-label for="contact" :value="__('Contact no.')" />
                <x-text-input id="contact" class="block w-full mt-1" name="contact" :value="old('contact')" required
                    autocomplete="contact" />
                <x-input-error :messages="$errors->get('contact')" class="mt-2" />
            </div>
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')" required
                    autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block w-full mt-1" type="password" name="password" required
                    autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-text-input id="password_confirmation" class="block w-full mt-1" type="password" name="password_confirmation"
                    required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="text-sm text-gray-600 underline rounded-md dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                    href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-primary-button class="ms-4" style="cursor:pointer;">
                    {{ __('Register') }}
                </x-primary-button>
            </div>
        </form>
    </div>

    <div id="founder-form" class="login-form">
        <h2>Founder Signup</h2>
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Firstname')" />
                <x-text-input id="name" class="block w-full mt-1" type="text" name="name" :value="old('name')" required
                    autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Lastname')" />
                <x-text-input id="email" class="block w-full mt-1" name="lastname" :value="old('lastname')" required
                    autocomplete="lastname" />
                <x-input-error :messages="$errors->get('lastname')" class="mt-2" />
            </div>
            <div class="mt-4">
                <x-input-label for="contact" :value="__('Contact no.')" />
                <x-text-input id="contact" class="block w-full mt-1" name="contact" :value="old('contact')" required
                    autocomplete="contact" />
                <x-input-error :messages="$errors->get('contact')" class="mt-2" />
            </div>
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')" required
                    autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block w-full mt-1" type="password" name="password" required
                    autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-text-input id="password_confirmation" class="block w-full mt-1" type="password" name="password_confirmation"
                    required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="text-sm text-gray-600 underline rounded-md dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                    href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-primary-button class="ms-4" style="cursor:pointer;">
                    {{ __('Register') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</body>

</html>