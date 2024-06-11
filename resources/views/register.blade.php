<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .button-hover {
            background-color: #D7DA5E !important;
        }
    </style>
</head>
<body class="font-sans">
    @include('common.header')
    <div class="text-black bg-gray-100 min-h-screen flex flex-col items-center justify-center ">
        <div class="grid md:grid-cols-2 items-center gap-4 max-w-6xl w-full p-4 m-4 shadow-[0_2px_10px_-3px_rgba(6,81,237,0.3)] rounded-md bg-white shadow-2xl">
            <div class="md:max-w-md w-full sm:px-6 py-4">
                <form>
                    <div class="mb-12">
                        <h3 class="text-3xl font-bold">Sign in</h3>
                        <p class="text-sm mt-4">Don't have an account <a href="{{route('login')}}" class="text-blue-600 font-semibold hover:underline ml-1 whitespace-nowrap">Have an account already?</a></p>
                    </div>
                    <div>
                        <label class="text-xs block mb-2">Email</label>
                        <div class="relative flex items-center">
                            <input name="email" type="text" required class="w-full text-sm border-b border-gray-300 focus:border-black px-2 py-3 outline-none" placeholder="Enter email" />
                        </div>
                    </div>
                    <div class="mt-8">
                        <label class="text-xs block mb-2">Password</label>
                        <div class="relative flex items-center">
                            <input name="password" type="password" required class="w-full text-sm border-b border-gray-300 focus:border-black px-2 py-3 outline-none" placeholder="Enter password" />
                        </div>
                    </div>
                    <div class="flex items-center justify-between gap-2 mt-5">
                        <div class="flex items-center">
                            <input id="remember-me" name="remember-me" type="checkbox" class="h-4 w-4 shrink-0 text-blue-600 focus:ring-blue-500 border-gray-300 rounded" />
                            <label for="remember-me" class="ml-3 block text-sm">
                                Remember me
                            </label>
                        </div>
                        <div>
                            <a href="javascript:void(0);" class="text-blue-600 font-semibold text-sm hover:underline">
                                Forgot Password?
                            </a>
                        </div>
                    </div>
                    <div class="mt-12">
                        <button type="submit" class="w-full shadow-xl py-2.5 px-4 text-sm font-semibold bg-yellow-300 rounded-full  hover:bg-yellow-500 hover:text-white focus:outline-none">
                            Sign in
                        </button>
                    </div>
                </form>
            </div>
            <div class="md:h-full max-md:mt-10 bg-[#000842] rounded-xl lg:p-12 p-8">
                <img src="../storage/logo.png" class="w-full h-full object-contain" alt="login-image" />
            </div>
        </div>
    </div>
<div class="!bg-white">
</div>
</body>
</html>