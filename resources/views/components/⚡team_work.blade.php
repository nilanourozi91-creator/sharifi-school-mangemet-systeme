<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<div class=" h-fit w-full bg-sky-300 mx-auto flex justify-center my-9 items-center">
     <div class="bg-sky-300 w-[80vw] h-full p-10">
        <h1 class="md:text-xl lg:text-2xl text-sky-600 p-5">About us</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel voluptates impedit repellat! At repellendus obcaecati itaque, consectetur nam officiis, voluptatem saepe expedita hic maxime minima explicabo quasi libero, unde accusantium!</p>
        <div class=" flex flex-wrap pt-6 sm:flex-col lg:flex-row md:gap-y-52  lg:gap-y-1   justify-between items-center">
          <div class="text-center">
              <img class="lg:h-40 lg:w-40 sm:w-60 sm:h-60 rounded-xl hover:w-72 hover:h-72" src="images/team-1.jpg" alt="imge">
            <p class=" pb-5 pt-2">Me</p>
          </div>
            <div class="text-center">
              <img class="lg:h-40 lg:w-40 sm:w-60 sm:h-60 rounded-xl hover:w-72 hover:h-72 " src="images/team-2.jpg" alt="imge">
            <p class=" pb-5 pt-2">My Team</p>
          </div>
          <div class="text-center ">
              <img class="lg:h-40 lg:w-40 sm:w-60 sm:h-60 hover:w-72 hover:h-72 rounded-xl" src="images/team-3.jpg" alt="imge">
            <p class=" pb-5 pt-2">My Manager</p>
          </div>
        </div>
     </div>
</div>