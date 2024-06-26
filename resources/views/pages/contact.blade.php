@extends('templates.base')

@section('content')
    <div class="p-5">
        <h1 class="text-4xl font-bold mb-4">Contact Us</h1>
        <p class="text-lg mb-4">We'd love to hear from you! Whether you have a question about our products, need assistance, or just want to give us feedback, feel free to get in touch.</p>

        <form action="" method="POST" class="bg-white p-6 rounded shadow-lg">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-gray-700">Name</label>
                <input type="text" name="name" id="name" class="w-full px-4 py-2 border rounded" required>
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700">Email</label>
                <input type="email" name="email" id="email" class="w-full px-4 py-2 border rounded" required>
            </div>
            <div class="mb-4">
                <label for="message" class="block text-gray-700">Message</label>
                <textarea name="message" id="message" class="w-full px-4 py-2 border rounded" rows="5" required></textarea>
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Send Message</button>
        </form>
    </div>  
@endsection
