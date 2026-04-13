<?php

use Livewire\Component;

new class extends Component
{
   public $date=null;

   public function mount(){
       date_default_timezone_set("Asia/Kabul");
   $this->date=date('Y');
   }
};
?>
<div class="w-full bg-gray-900 text-gray-300 pt-10 pb-5 px-6">
    
    <div class="max-w-6xl mx-auto grid sm:grid-cols-1 md:grid-cols-3 gap-8">

        
        <div>
            <h2 class="text-xl font-bold text-white mb-3">Sharifi High School</h2>
            <p class="text-sm leading-6">
                Empowering students with knowledge, discipline, and innovation for a brighter future.
            </p>
        </div>

        
        <div>
            <h2 class="text-xl font-bold text-white mb-3">Quick Links</h2>
            <ul class="space-y-2 text-sm">
                <li><a href="#" class="hover:text-white transition">Home</a></li>
                <li><a href="#" class="hover:text-white transition">About</a></li>
                <li><a href="#" class="hover:text-white transition">Courses</a></li>
                <li><a href="#" class="hover:text-white transition">Contact</a></li>
            </ul>
        </div>

        <div>
            <h2 class="text-xl font-bold text-white mb-3">Contact</h2>
            <p class="text-sm">📍 Ghazni, Afghanistan</p>
            <p class="text-sm">📞 +93 700 000 000</p>
            <p class="text-sm">✉️ info@sharifi.edu</p>
        </div>

    </div>

    
    <div class="flex justify-center space-x-6 mt-8 text-xl">
        <a href="#" class="hover:text-white">🌐</a>
        <a href="#" class="hover:text-white">📘</a>
        <a href="#" class="hover:text-white">📸</a>
        <a href="#" class="hover:text-white">▶️</a>
    </div>

    <!-- 🔻 Bottom -->
    <div class="text-center mt-6 border-t border-gray-700 pt-4 text-sm">
        © {{$date}} Sharifi High School. All rights reserved.
    </div>

</div>