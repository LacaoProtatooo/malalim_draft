<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MaLaLim</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.15.2/dist/full.css" rel="stylesheet">
    <style>
        .button-hover {
            background-color: #D7DA5E !important;
        }
    </style>
</head>
<body class="font-sans">
    <div class="flex justify-between items-center p-4 bg-white border-b border-gray-200 text-black">
        <a href="#" class="logo">
            <img src="../storage/logo.png" alt="MaLaLim" class="h-8">
        </a>
        <div class="flex space-x-4">
            <a href="#" class="btn-ghost hover:text-black hover:underline">SHOP BY</a>
            <a href="#" class="btn-ghost hover:text-black hover:underline">NEW</a>
            <a href="#" class="btn-ghost hover:text-black hover:underline">BEST SELLERS</a>
            <a href="#" class="btn-ghost hover:text-black hover:underline">EARRINGS</a>
            <a href="#" class="btn-ghost hover:text-black hover:underline">RINGS</a>
            <a href="#" class="btn-ghost hover:text-black hover:underline">NECKLACES</a>
            <a href="#" class="btn-ghost hover:text-black hover:underline">BRACELETS</a>
            <a href="#" class="btn-ghost hover:text-black hover:underline">MEN'S</a>
        </div>
        <div class="flex space-x-2">
            <div class="form-control">
                <input type="text" placeholder="Search" class="input input-bordered w-24 md:w-auto bg-transparent text-black" />
            </div>
            <div class="dropdown dropdown-end">
                <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
                    <div class="w-10 rounded-full">
                        <img alt="User Avatar" src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg" />
                    </div>
                </div>
                <ul tabindex="0" class="mt-3 z-[1] p-2 shadow menu menu-sm dropdown-content rounded-box w-52 bg-white text-black">
                    <li>
                        <a class="justify-between">
                            Profile
                        </a>
                    </li>
                    <li><a>Settings</a></li>
                    <li><a>Logout</a></li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>