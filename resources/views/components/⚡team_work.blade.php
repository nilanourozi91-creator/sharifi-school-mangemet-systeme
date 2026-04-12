<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<div class=" h-fit w-full mx-auto flex justify-center items-center mt-32 ">
     <div class=" w-[80vw] h-full p-10 shadow-[0px_0px_3px_gray] rounded-xl">
        <h1 class="md:text-xl lg:text-2xl text-sky-600 p-5">About us</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel voluptates impedit repellat! At repellendus obcaecati itaque, consectetur nam officiis, voluptatem saepe expedita hic maxime minima explicabo quasi libero, unde accusantium!</p>
        <div class=" flex flex-wrap pt-6 sm:flex-col lg:flex-row md:gap-y-52  lg:gap-y-1   justify-between items-center">
          <div class="text-center bg-white shadow hover:shadow-transparent px-9 pb-8 pt-3 rounded-lg">
              <img class=" h-32 w-32 rounded-full  shadow hover:shadow-transparent " src="images/team-1.jpg" alt="imge">
            <p class=" pb-5 pt-2">Me</p>
          </div>
            <div class="text-center bg-white shadow hover:shadow-transparent px-9 pb-8 pt-3 rounded-lg">
              <img class=" h-32 w-32 rounded-full  shadow hover:shadow-transparent" src="images/team-2.jpg" alt="imge">
            <p class=" pb-5 pt-2">My Team</p>
          </div>
          <div class="text-center bg-white shadow hover:shadow-transparent px-9 pb-8 pt-3 rounded-lg ">
              <img class=" h-32 w-32 rounded-full  shadow hover:shadow-transparent" src="images/team-3.jpg" alt="imge">
            <p class=" pb-5 pt-2">My Manager</p>
          </div>
        </div>
     </div>
</div>