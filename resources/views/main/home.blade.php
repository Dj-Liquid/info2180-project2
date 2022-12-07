@extends('layout.layout')
@section('content')
    <div class="flex justify-start items-center">
        <h1 class="font-black text-7xl">Dashboard</h1>
    </div>
    <div class="flex align-center items-center overflow-x-auto m-auto mt-10 relative shadow-md w-10/12 bg-gray-700 text-gray-500 rounded-t-lg">
    <div class="flex align-center items-center text-3xl p-2 ">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 3c2.755 0 5.455.232 8.083.678.533.09.917.556.917 1.096v1.044a2.25 2.25 0 01-.659 1.591l-5.432 5.432a2.25 2.25 0 00-.659 1.591v2.927a2.25 2.25 0 01-1.244 2.013L9.75 21v-6.568a2.25 2.25 0 00-.659-1.591L3.659 7.409A2.25 2.25 0 013 5.818V4.774c0-.54.384-1.006.917-1.096A48.32 48.32 0 0112 3z" />
        </svg>
        Filter by:
    </div>
        <div id="all" class="pl-4 hover:text-violet-500 transition-colors cursor-pointer">All</div>
        <div id="sales" class="pl-4 hover:text-violet-500 transition-colors cursor-pointer">Sales lead</div>
        <div id="support" class="pl-4 hover:text-violet-500 transition-colors cursor-pointer">Support</div>
        <div id="assign" class="pl-4 hover:text-violet-500 transition-colors cursor-pointer">Assigned to me</div>
    </div>
    <div class="overflow-x-auto m-auto relative shadow-md w-10/12">
        <table id="example" class=" w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs uppercase text-gray-400">
            <tr>
                <th scope="col" class="py-3 px-6">
                    Name
                </th>
                <th scope="col" class="py-3 px-6">
                    Email
                </th>
                <th scope="col" class="py-3 px-6">
                    Company
                </th>
                <th scope="col" class="py-3 px-6">
                    Type
                </th>
                <th scope="col" class="py-3 px-6">

                </th>
            </tr>
            </thead>
            <tbody>
            @foreach($contacts as $contact)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $contact->title }} {{ $contact->firstname }} {{ $contact->lastname }}</th>
                <td class="py-4 px-6">{{ $contact->email }}</td>
                <td class="py-4 px-6">{{ $contact->company }}</td>
                <td class="py-4 px-6">{{ $contact->type }}</td>
                <td class="py-4 px-6 text-right">
                    <a href="{{ route('contactview', ['id' => $contact->id]) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">View</a>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>


@endsection
