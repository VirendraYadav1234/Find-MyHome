<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight ">

        </h2>
    </x-slot>
    <style>
        .mainnnnn {
            width: auto;
            height: 500px;
        }

        li:hover {
            color: aqua;
        }
    </style>

    <div class="py-12">


        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">

                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <ul style="display: flex ">
                        <a href="/address/index">
                            <li style="margin-left: 50px">Home</li>
                        </a>
                        <a href="/address/create">
                            <li style="margin-left: 50px">create</li>
                        </a>

                    </ul>
                </div>
                <div class="mainnnnn"
                    style="background-image: url(https://c1.wallpaperflare.com/preview/520/481/267/exterior-home-walkway-home-exterior.jpg) ">

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
