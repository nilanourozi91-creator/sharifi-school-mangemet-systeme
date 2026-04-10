<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<div class=" max-w-6xl mx-auto">
    <div class=" justify-center flex flex-col items-center text-wrap shadow-[0px_0px_0px_rgba(0,0,0,0,0.4)]">
           <h1 class="sm:text-xl md:text-4xl py-6 lg:text-6xl font-bold">Sharifi high School</h1>
           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt natus magni temporibus nihil id, dolorem laudantium officia blanditiis facere, delectus, quasi qui dicta optio laborum earum explicabo alias beatae facilis.</p>
    </div>
    <div class=" grid md:grid-cols-2 lg:grid-cols-3 gap-2">
    <div class="h-fit py-2 px-3 w-full rounded-xl md:col-span-1 lg:col-span-2  bg-gray-200">
        <h1 class="text-sky-700 sm:text-xl md:text-2xl lg:text-3xl font-semibold p-4">Sharifi High School</h1>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe facilis quas nihil molestias necessitatibus nam fuga distinctio, possimus mollitia velit praesentium ducimus accusantium nostrum vitae delectus fugiat, explicabo dolore et.</p>
        <div class="h-fit py-2 px-4 w-full grid md:grid-clos-1 lg:grid-cols-3  gap-2">
            <div class="md:col-span-1 lg:col-span-2">
                <h1 class="md:text-sm lg:text-xl text-sky-600 pb-2">Manager</h1>
                <h1 class="md:text-sm lg:text-2xl text-sky-600 ">Esmatollah Gholami</h1>
                <p></p>
            </div>
            <img src="images/esmat.jpg" class="md:col-span-1 lg:col-span-1 border-sky-600 border-2 rounded-xl md:h-32 md:w-32 lg:h-52 lg:w-52  hover:rotate-12 hover:shadow-2xl " alt="imge">
        </div>
    </div>
    <div class="  py-2 px-3 w-full rounded-xl md:col-span-1 lg:col-span-1 bg-gray-200 h-fit">
         <livewire:hastory/>
    </div>
</div>
</div>
