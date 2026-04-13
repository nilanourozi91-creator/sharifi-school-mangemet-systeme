<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<div class="w-full bg-gray-100 py-12 px-6">

    <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-10 items-center">

        <!-- 🖼️ Image -->
        <div>
            <img src="/images/school.jpg" alt="School" class="rounded-2xl shadow-lg w-full">
        </div>

        <!-- 📝 Content -->
        <div>
            <h2 class="text-3xl font-bold text-gray-800 mb-4">
                About Sharifi High School
            </h2>

            <p class="text-gray-600 leading-7 mb-4">
                Sharifi High School is committed to providing high-quality education
                and shaping the future of our students through knowledge, discipline,
                and innovation.
            </p>

            <p class="text-gray-600 leading-7 mb-6">
                Our mission is to empower students with modern skills and strong values
                to succeed in their academic and professional lives.
            </p>

            <button class="bg-sky-600 text-white px-6 py-2 rounded-lg hover:bg-sky-700 transition">
                Learn More
            </button>
        </div>

    </div>

</div>