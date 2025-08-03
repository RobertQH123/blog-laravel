@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="max-w-5xl mx-auto py-10 px-4">
        <h1 class="text-3xl font-bold mb-8 text-center text-gray-800">Welcome to the Posts</h1>

        <div class="grid gap-6">
            @foreach($posts as $post)
                <div class="bg-white shadow-md rounded-lg p-6 border border-gray-200">
                    <h2 class="text-xl font-semibold text-gray-900 mb-2">{{ $post->title }}</h2>
                    <p class="text-gray-700 mb-4">{{ $post->content }}</p>

                    <div class="text-sm text-gray-600 flex flex-col sm:flex-row sm:justify-between">
                        <span><strong>Category:</strong> {{ $post->category ?? 'Uncategorized' }}</span>
                        <span><strong>Published at:</strong> {{ $post->published_at ? $post->published_at->format('M d, Y') : 'Not published' }}</span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
