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
    <div class="flex justify-between items-center">
        <h1 class="font-black text-7xl">Users</h1>
        <button onclick="location.href='{{ route('adduser') }}';" type="button" class="flex justify-between items-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-2 py-2 h-10 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
            </svg>
            Add user</button>
    </div>
    <div class="overflow-x-auto m-auto mt-10 relative shadow-md sm:rounded-lg w-10/12">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs uppercase bg-gray-700 text-gray-400">
            <tr>
                <th scope="col" class="py-3 px-6">
                    Name
                </th>
                <th scope="col" class="py-3 px-6">
                    Email
                </th>
                <th scope="col" class="py-3 px-6">
                    Role
                </th>
                <th scope="col" class="py-3 px-6">
                    Created
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $user->firstname }}
                </th>
                <td class="py-4 px-6">
                    {{ $user->email }}
                </td>
                <td class="py-4 px-6">
                    {{ $user->role }}
                </td>
                <td class="py-4 px-6">
                    {{ $user->created_at }}
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>


@endsection
</body>

</html>
