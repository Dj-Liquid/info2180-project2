<!doctype html>
<html lang="en" class="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @vite('resources/css/app.css')
    <title>Users</title>
</head>

<body>
@extends('layout.layout')
@section('content')


    <div class=" px-56">
        <div class="flex justify-between items-center">
            <div>
                <div
                    class="title text-black text-5xl font-black">{{ $contact->title }} {{ $contact->firstname }} {{ $contact->lastname }}</div>
                <div class="text-zinc-400 font-black">Created on: {{ $contact->created_at }} </div>
                <div class="text-zinc-400 font-black">Updated on: {{ $contact->updated_at }} </div>
            </div>
            <div class="flex">
                <button class=" flex bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded h-10">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M10.05 4.575a1.575 1.575 0 10-3.15 0v3m3.15-3v-1.5a1.575 1.575 0 013.15 0v1.5m-3.15 0l.075 5.925m3.075.75V4.575m0 0a1.575 1.575 0 013.15 0V15M6.9 7.575a1.575 1.575 0 10-3.15 0v8.175a6.75 6.75 0 006.75 6.75h2.018a5.25 5.25 0 003.712-1.538l1.732-1.732a5.25 5.25 0 001.538-3.712l.003-2.024a.668.668 0 01.198-.471 1.575 1.575 0 10-2.228-2.228 3.818 3.818 0 00-1.12 2.687M6.9 7.575V12m6.27 4.318A4.49 4.49 0 0116.35 15m.002 0h-.002"/>
                    </svg>
                    Assign to me
                </button>
                <button class="flex bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 ml-3 rounded h-10">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M7.5 21L3 16.5m0 0L7.5 12M3 16.5h13.5m0-13.5L21 7.5m0 0L16.5 12M21 7.5H7.5"/>
                    </svg>
                    Switch to sales lead
                </button>
            </div>
        </div>
        <div class="grid grid-cols-2 mt-10 gap-y-10 border">
            <div>Email: {{ $contact->email }} </div>
            <div>Telephone: {{ $contact->telephone }}</div>
            <div>Company: {{ $contact->company }}</div>
            <div>Assigned to: {{ $assigned->firstname }} {{ $assigned->lastname }}</div>
        </div>
        <section class="bg-white dark:bg-gray-900 py-8 lg:py-16">
            <div class="max-w-2xl mx-auto px-4">
                @foreach($notes as $note)
                <article class="p-6 text-base bg-white border-t border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                    <footer class="flex justify-between items-center mb-2">
                        <div class="flex items-center">

                            <p class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">{{ $note->created_by }}</p>
                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                <time pubdate datetime="2022-06-23"
                                      title="June 23rd, 2022">{{ $note->created_at }}
                                </time>
                            </p>
                        </div>
                    </footer>
                    <p class="text-gray-500 dark:text-gray-400">{{$note->comment}}</p>
                </article>
                @endforeach
                <form action=" {{ route('addnote') }}" method="post" class="mb-6">
                    @csrf
                    <div class="py-2 px-4 mb-4 bg-white rounded-lg rounded-t-lg border border-gray-200 dark:bg-gray-800 dark:border-gray-700">
                        <input type='hidden' name='contact_id' value='{{ request()->segment(count(request()->segments())) }}'>
                        <label for="comment" class="sr-only">Your note</label>
                        <textarea name="comment" id="comment" rows="6"
                                  class="px-0 w-full text-sm text-gray-900 border-0 focus:ring-0 focus:outline-none dark:text-white dark:placeholder-gray-400 dark:bg-gray-800"
                                  placeholder="Write a note..." required></textarea>
                    </div>
                    <button type="submit" class="inline-flex items-center py-2.5 px-4 text-xs font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                        Post note
                    </button>
                </form>
            </div>
        </section>
    </div>

@endsection
</body>

</html>
