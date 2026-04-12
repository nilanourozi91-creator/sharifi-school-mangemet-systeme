<?php

use Livewire\Component;

new class extends Component
{
    public $openIndex = null;

    public $list = [
        ['What is Laravel?', 'Laravel is a PHP framework for web development.'],
        ['What is Livewire?', 'Livewire lets you build dynamic interfaces using PHP.'],
        ['What is Tailwind?', 'Tailwind is a utility-first CSS framework.'],
    ];

    public function toggle($index)
    {
        $this->openIndex = $this->openIndex === $index ? null : $index;
    }
}
?>


<div class="max-w-3xl mx-auto p-6">

    <h1 class="text-3xl font-bold mb-6 text-center">
        FAQ Accordion
    </h1>

    <div class="space-y-4">

        @foreach ($list as $index => $item)

            <div class="border rounded-2xl shadow-sm overflow-hidden">

                <!-- سوال -->
                <button 
                    wire:click="toggle({{ $index }})"
                    class="w-full flex justify-between items-center p-5 text-left font-semibold hover:bg-gray-100 transition"
                >
                    <span>{{ $item[0] }}</span>

                    <!-- آیکون -->
                    <span class="text-xl transition-transform duration-300 
                        {{ $openIndex === $index ? 'rotate-45' : '' }}">
                        +
                    </span>
                </button>

                <!-- جواب -->
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