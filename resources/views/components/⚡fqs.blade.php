<?php

use Livewire\Component;

new class extends Component
{
    public $openIndex = null;

    public $list = [
        ['Lorem ipsum dolor, sit amet consectetur adipisicing elit. Commodi saepe nisi placeat non doloribus pariatur in distinctio impedit cum! Possimus, nemo aperiam assumenda excepturi repudiandae iusto dolorem velit blanditiis voluptatem!', ' sit amet consectetur adipisicing elit. Commodi saepe nisi placeat non doloribus pariatur in distinctio impedit cum! Possimus, nemo aperiam assumenda excepturi repudiandae iusto dolorem veli'],
        ['Lorem ipsum dolor, sit amet consectetur adipisicing elit. Commodi saepe nisi placeat non doloribus pariatur in distinctio impedit cum! Possimus, nemo aperiam assumenda excepturi repudiandae iusto dolorem velit blanditiis voluptatem!', ' sit amet consectetur adipisicing elit. Commodi saepe nisi placeat non doloribus pariatur in distinctio impedit cum! Possimus, nemo aperiam assumenda excepturi repudiandae iusto dolorem veli'],
        ['Lorem ipsum dolor, sit amet consectetur adipisicing elit. Commodi saepe nisi placeat non doloribus pariatur in distinctio impedit cum! Possimus, nemo aperiam assumenda excepturi repudiandae iusto dolorem velit blanditiis voluptatem!', ' sit amet consectetur adipisicing elit. Commodi saepe nisi placeat non doloribus pariatur in distinctio impedit cum! Possimus, nemo aperiam assumenda excepturi repudiandae iusto dolorem veli'],
        ['Lorem ipsum dolor, sit amet consectetur adipisicing elit. Commodi saepe nisi placeat non doloribus pariatur in distinctio impedit cum! Possimus, nemo aperiam assumenda excepturi repudiandae iusto dolorem velit blanditiis voluptatem!', ' sit amet consectetur adipisicing elit. Commodi saepe nisi placeat non doloribus pariatur in distinctio impedit cum! Possimus, nemo aperiam assumenda excepturi repudiandae iusto dolorem veli'],
       
    ];

    public function toggle($index)
    {
        $this->openIndex = $this->openIndex === $index ? null : $index;
    }
}
?>
<div class="w-full p-14 grid grid-cols-3 justify-center items-center">

   <div class=" col-span-1">
     <h1 class="text-7xl font-bold mb-6 text-center camponent p-20">
        Freqentely Ask Question
    </h1>
    <p> explicabo asperiores at nam tempora sit facere velit.</p>
   </div>

    <div class="space-y-4 col-span-2">

        @foreach ($list as $index => $item)

            <div class="border rounded-2xl shadow-sm overflow-hidden">
                <button 
                    wire:click="toggle({{ $index }})"
                    class="w-full flex justify-between items-center p-5 text-left font-semibold hover:bg-gray-100 transition"
                >
                    <span>{{ $item[0] }}</span>

                    <span class="text-xl transition-transform duration-300 pl-5
                        {{ $openIndex === $index ? 'rotate-45' : '' }}">
                        <
                    </span>
                </button>
                <div 
                    class="px-5 overflow-hidden transition-all duration-500 ease-in-out
                    {{ $openIndex === $index ? 'max-h-40 py-4' : 'max-h-0' }}"
                >
                    <p class="text-gray-600">
                        {{ $item[1] }}
                    </p>
                </div>

            </div>

        @endforeach

    </div>

</div>