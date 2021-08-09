@extends('layouts.app')

    @section('content')
    <div class="background-image grid grid-cols-1 m-auto">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
                    Do you want to become a backend developer?
                </h1>
                <a href="/blog" class="text-center bg-gray-50 text-gray-700 py-2 px-4 font bold text-xl uppercase">
                    Read More
                </a>
                
            </div>
        </div>
    </div>

    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div>
            <img src="https://cdn.pixabay.com/photo/2017/08/10/08/47/laptop-2620118_960_720.jpg"
            width="700" alt="">
        </div>

        <div class="m-auto sm:m auto text-left w-4/5 block">
            <h2 class="text-4xl font-extrabold text-gray-600">
                Need guidance on becoming a better web developer?
            </h2>

            <p class="py-8 text-gray-500 text-xl">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                Nemo veritatis quasi porro cum laudantium doloribus. 
            </p>

            <p class="font-extrabold text-gray-600 text-xl pb-9">
                Labore quidem aut facilis laborum porro aperiam officiis 
                liquam molestias pariatur, enim cum quas mollitia.
            </p>

            <a href="/blog" class="uppercase bg-blue-500
            text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">Find Out More..</a>
        </div>
    </div>

        <div class="text-center p-15 bg-black text-white">
            <h2 class="text-2xl pb-5 text-l">
                My interest are...
            </h2>

            <span class="font-extrabold block text-4xl py-1">
                Backend Development
            </span>

            <span class="font-extrabold block text-4xl py-1">
                Frontend Development
            </span>

            <span class="font-extrabold block text-4xl py-1">
                Machine Learning
            </span>

            <span class="font-extrabold block text-4xl py-1">
                Data Science
            </span>
        </div>
        
        <div class="text-center py-15">
            <span class="uppercase text-l text-gray-400">Blog</span>

            <h2 class="text-4xl font-bold py-10">Recent Posts</h2>

            <p class="m-auto w-4/5 text-gray-500">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Architecto tempore at incidunt a distinctio ipsa debitis dolorem, 
                amet atque obcaecati, rem doloremque velit.
                Reprehenderit dolor atque vel voluptatem dignissimos veniam!
            </p>
        </div>

        <div class="sm:grid grid-cols-2 w-4/5 m-auto">
            <div class="flex bg-yellow-700 text-gray-100 pt-10">
                <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
                    <span class="uppercase text-s">
                        PHP
                    </span>
                    <h3 class="text-xl font-bold py-10">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                        Maiores non voluptas atque veritatis cum magni explicabo sequi, 
                        vero vitae repellat earum, dolores, reiciendis 
                        omnis animi quia illum placeat recusandae in?
                    </h3>

                    <a href="" class="uppercase bg-transparent border-2 border-gray-100 
                    text-xs font-extrabold py-3 px-5 rounded-3xl">Find Out More</a>
                </div>
            </div>
            <div>
                <img src="https://st1.myideasoft.com/idea/ct/82/myassets/blogs/php-internet-programciligi.jpg"
                width="700" alt="">
            </div>
        </div>
    @endsection