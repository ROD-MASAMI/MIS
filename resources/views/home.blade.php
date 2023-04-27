@extends('layout')
@section('content')
<div class=" flex flex-row justify-between w-full">
    <h1 class=" font-bold text-3xl"> USERS</h1>
   @if (auth()->user()->Role == 'Admin')
   <a href="/register">
   <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 focus:outline-none ">Add user</button>
   </a>
   @endif
   
</div>

<div class="bg-white overflow-auto">
    <table class="min-w-full bg-white">
        <thead class="bg-gray-800 text-white">
            <tr>
                <th class=" w-1/5 text-left py-3 px-4 uppercase font-semibold text-sm">Name</th>
                <th class="w-1/5 text-left py-3 px-4 uppercase font-semibold text-sm">Email</th>
                <th class=" w-1/5 text-left py-3 px-4 uppercase font-semibold text-sm">Phone </th>
                <th class="w-1/5 text-left py-3 px-4 uppercase font-semibold text-sm">Role</th>
                <th class="w-1/5 text-left py-3 px-4 uppercase font-semibold text-sm">Address</th>
                @if (auth()->user()->Role == 'Admin')
                <th class="w-1/5 text-left py-3 px-4 uppercase font-semibold text-sm">Actions</th>
                @endif
            </tr>
        </thead>
        <tbody class="text-gray-700">
            @foreach ($users as $user)
            <tr>
                <td class="w-1/5 text-left py-3 px-4">{{$user->username}}</td>
                <td class="w-1/5 text-left py-3 px-4">{{$user->email}}</td>
                <td class="w-1/5 text-left py-3 px-4">0{{$user->Phone_number}}</td>
                <td class="w-1/5 text-left py-3 px-4">{{$user->Role}}</td>
                <td class="w-1/5 text-left py-3 px-4">{{$user->Address}}</td>
                
                @if (auth()->user()->Role == 'Admin')
                <td class="w-1/5 text-left py-3 px-4">
                 
                <div class=" flex flex-row px-4">
                    <a href="/user/edit/{{$user->id}}">
                        <button type="button" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 focus:outline-none ">Edit</button> 
                    </a>
                   <form action="/user/delete/{{$user->id}}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 focus:outline-none ">Delete </button>
                </form>
                    
                </div>
                </td>
                @endif
            </tr>
            @endforeach
            
        </tbody>
    </table>
</div>
    
@endsection