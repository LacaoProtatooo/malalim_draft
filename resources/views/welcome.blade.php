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
<body class="font-sans !bg-white">
    @include('common.header')


    <div class="relative isolate flex flex-col items-center gap-x-6 overflow-hidden bg-gray-50 px-6 py-2.5 sm:px-3.5 sm:before:flex-1 carousel">
  <div class="absolute left-1/2 transform -translate-x-1/2 top-1/2 -z-10 -translate-y-1/2 transform-gpu blur-2xl" aria-hidden="true">
    <div class="aspect-[577/310] w-[36.0625rem] bg-gradient-to-r from-[#ff80b5] to-[#9089fc] opacity-30" style="clip-path: polygon(74.8% 41.9%, 97.2% 73.2%, 100% 34.9%, 92.5% 0.4%, 87.5% 0%, 75% 28.6%, 58.5% 54.6%, 50.1% 56.8%, 46.9% 44%, 48.3% 17.4%, 24.7% 53.9%, 0% 27.9%, 11.9% 74.2%, 24.9% 54.1%, 68.6% 100%, 74.8% 41.9%)"></div>
  </div>
  <div class="absolute left-1/2 transform -translate-x-1/2 top-1/2 -z-10 -translate-y-1/2 transform-gpu blur-2xl" aria-hidden="true">
    <div class="aspect-[577/310] w-[36.0625rem] bg-gradient-to-r from-[#ff80b5] to-[#9089fc] opacity-30" style="clip-path: polygon(74.8% 41.9%, 97.2% 73.2%, 100% 34.9%, 92.5% 0.4%, 87.5% 0%, 75% 28.6%, 58.5% 54.6%, 50.1% 56.8%, 46.9% 44%, 48.3% 17.4%, 24.7% 53.9%, 0% 27.9%, 11.9% 74.2%, 24.9% 54.1%, 68.6% 100%, 74.8% 41.9%)"></div>
  </div>
  <div class="flex flex-col items-center gap-x-4 gap-y-2">
    <p class="text-sm leading-6 text-gray-900 text-center">
      <strong class="font-semibold">Bussin 2024</strong><svg viewBox="0 0 2 2" class="mx-2 inline h-0.5 w-0.5 fill-current" aria-hidden="true"><circle cx="1" cy="1" r="1" /></svg>Join us in Denver from June 7 – 9 to see what’s coming next.
    </p>
    <a href="#" class="flex-none rounded-full bg-gray-900 px-3.5 py-1 text-sm font-semibold text-white shadow-sm hover:bg-gray-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-900">Register now <span aria-hidden="true">&rarr;</span></a>
  </div>
  <div class="flex justify-center mt-2">
    <button type="button" class="-m-3 p-3 focus-visible:outline-offset-[-4px]">
      <span class="sr-only">Dismiss</span>
      <svg class="h-5 w-5 text-gray-900" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
        <path d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z" />
      </svg>
    </button>
  </div>
</div>

    <div class="group my-10 flex w-full max-w-md flex-col overflow-hidden border border-gray-100 bg-white shadow-md rounded-lg">
        <a class="relative flex h-80 overflow-hidden rounded-t-lg" href="#">
            <img class="absolute top-0 right-0 h-full w-full object-cover" src="https://images.unsplash.com/photo-1620799140408-edc6dcb6d633?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1072&q=80" alt="product image" />
            <div class="absolute bottom-0 mb-4 flex w-full justify-center space-x-4">
                <div class="h-3 w-3 rounded-full border-2 border-white bg-white"></div>
                <div class="h-3 w-3 rounded-full border-2 border-white bg-transparent"></div>
                <div class="h-3 w-3 rounded-full border-2 border-white bg-transparent"></div> 
            </div>
            <div class="absolute -right-16 bottom-0 mr-2 mb-4 space-y-2 transition-all duration-300 group-hover:right-0">
                <button class="flex h-12 w-12 items-center justify-center bg-gray-900 text-white transition hover:bg-gray-700 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" />
                    </svg>
                </button>
            </div>
        </a>
        <div class="mt-6 px-6 pb-6">
            <a href="#">
                <h5 class="text-2xl tracking-tight text-gray-900">Lululemon Comfort Tee - White</h5>
            </a>
            <div class="mt-3 mb-6 flex items-center justify-between">
                <p>
                    <span class="text-4xl font-bold text-gray-900">$79</span>
                    <span class="text-lg text-gray-700 line-through">$99</span>
                </p>
            </div>
            <div class="flex space-x-2">
                <button class="flex-1 items-center justify-center px-4 py-2 text-lg border-black text-black bg-gray-100 transition hover:bg-yellow-200 hover:text-black rounded-md">
                    Buy Now
                </button>
                <button class="flex-1 items-center justify-center px-4 py-2 text-lg border-black text-black bg-gray-100 transition hover:bg-yellow-200 hover:text-black rounded-md">
                    View Item
                </button>
            </div>
        </div>
    </div>
</body>

<div class="!bg-white">
    @include('common.footer')
</div>
</body>
</html>