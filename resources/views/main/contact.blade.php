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
    <div class="flex justify-start items-center">
        <h1 class="font-black text-7xl">New contact</h1>
    </div>

    <div class="font-sans antialiased bg-grey-lightest">
        <div class="w-full bg-grey-lightest">
            <div class="container mx-auto py-8">
                <div class="w-5/6 lg:w-1/2 mx-auto bg-white rounded shadow">
                    <div class="py-4 px-8 text-black text-xl border-b border-grey-lighter">New contact</div>
                    <form action="{{ route('storecontact') }}" method="post">
                        @csrf
                    <div class="py-4 px-8">
                        <div class="mb-4 w-64">
                            <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                            <select id="countries" name="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected>Choose a title</option>
                                <option value="Mr">Mr</option>
                                <option value="Mrs">Mrs</option>
                                <option value="Ms">Ms</option>
                                <option value="Miss">Miss</option>
                            </select>
                        </div>
                        <div class="flex mb-4">
                            <div class="w-1/2 mr-1">
                                <label class="block text-grey-darker text-sm font-bold mb-2" for="first_name">First Name</label>
                                <input class="appearance-none border rounded w-full py-2 px-3 text-grey-darker" name="firstname" id="first_name" type="text" placeholder="Your first name">
                            </div>
                            <div class="w-1/2 ml-1">
                                <label class="block text-grey-darker text-sm font-bold mb-2" for="last_name">Last Name</label>
                                <input class="appearance-none border rounded w-full py-2 px-3 text-grey-darker" name="lastname" id="last_name" type="text" placeholder="Your last name">
                            </div>
                        </div>
                        <div class="flex mb-4">
                            <div class="w-1/2 mr-1">
                                <label class="block text-grey-darker text-sm font-bold mb-2" for="email">Email Address</label>
                                <input class="appearance-none border rounded w-full py-2 px-3 text-grey-darker" name="email" id="first_name" type="text" placeholder="Your email address">
                            </div>
                            <div class="w-1/2 ml-1">
                                <label class="block text-grey-darker text-sm font-bold mb-2" for="telephone">Telephone</label>
                                <input class="appearance-none border rounded w-full py-2 px-3 text-grey-darker" name="telephone" id="telephone" type="telephone" placeholder="">
                            </div>
                        </div>
                        <div class="flex mb-4">
                            <div class="w-1/2 mr-1">
                                <label class="block text-grey-darker text-sm font-bold mb-2" for="company">Company</label>
                                <input class="appearance-none border rounded w-full py-2 px-3 text-grey-darker" name="company" id="company" type="text" placeholder="company">
                            </div>
                            <div class="w-1/2 ml-1">
                                <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Type</label>
                                <select id="countries" name="type" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option value="SUPPORT">Support</option>
                                    <option value="SALES LEAD">Sales Lead</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Assigned to</label>
                            <select id="countries" name="assigned_to" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                @foreach($users as $user)
                                <option value="{{ $user->id }}">{{ $user->firstname }} {{ $user->lastname }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="flex items-center justify-end mt-8">
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">
                                Save
                            </button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
</body>

</html>
