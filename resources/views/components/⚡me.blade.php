<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>
     
   <div>
    <h1 class="text-center text-4xl camponent py-16">About Me And My Team</h1>
   <div class="grid grid-cols-1 md:grid-cols-3 gap-6 p-6">
          
    <!-- Card 1 - Principal -->
    <div class="bg-white rounded-2xl shadow-lg p-6 text-center hover:shadow-2xl transition">
        <img src="images/my.png" class="mx-auto rounded-full mb-4">
        <h2 class="text-xl font-bold text-gray-800">Me</h2>
        <p class="text-sky-600 font-medium mb-2">Leadership</p>
        <p class="text-gray-600 text-sm">
            Leading Sharifi High School with dedication, discipline, and vision for student success.
        </p>
    </div>

    <!-- Card 2 - Teacher -->
    <div class="bg-white rounded-2xl shadow-lg p-6 text-center hover:shadow-2xl transition">
        <img src="/images/team.jpg" class="mx-auto rounded-full mb-4">
        <h2 class="text-xl font-bold text-gray-800">My Team</h2>
        <p class="text-sky-600 font-medium mb-2">Education</p>
        <p class="text-gray-600 text-sm">
            Our experienced teachers help students grow in knowledge, skills, and confidence.
        </p>
    </div>

    <!-- Card 3 - Students -->
    <div class="bg-white rounded-2xl shadow-lg p-6 text-center hover:shadow-2xl transition">
        <img src="/images/manager.jpg" class="mx-auto rounded-full mb-4">
        <h2 class="text-xl font-bold text-gray-800">Our Manger</h2>
        <p class="text-sky-600 font-medium mb-2">Future Leaders</p>
        <p class="text-gray-600 text-sm">
            Dedicated students working hard every day to build a bright future.
        </p>2 
    </div>
   </div>
</div>

