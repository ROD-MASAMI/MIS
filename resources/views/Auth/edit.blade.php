@extends('layout')
@section('content')
    <section class="bg-gray-50 dark:bg-gray-900">
        <a href="/home">
            <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 focus:outline-none ">BACK</button>
            </a>
  <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
      
      <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
          <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
              <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                  Edit user
              </h1>
              <form class="space-y-4 md:space-y-6" method="POST" action="/user/edit/{{$user->id}}" id="register">
                @csrf
                @method('PUT')
                <div class=" flex flex-row justify-between">
                    <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> email</label>
                    <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 " placeholder="name@company.com" required="" value={{$user->email}}>
                    @error('email')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
                </div>
                    <div>
                    <label for="username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
                    <input type="text" name="username" id="username" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Username" required="" value={{$user->username}}>
                    @error('username')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror    
                </div>
                </div>
                <div class=" flex flex-row justify-between">
                    <div>
                    <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> Phone_number</label>
                    <input type="text" name="Phone_number" id="Phone_number" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 " placeholder="0759123081" required="" value={{$user->Phone_number}}>
                    @error('Phone_number')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror   
                </div>
                    <div>
                    <label for="Address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Address</label>
                    <input type="text" name="Address" id="Address" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 " placeholder="P.O.BOX 31589" required="" value={{$user->Address}}>
                    @error('Address')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror   
                </div>
                </div>
                <div>
                    <label for="Role">Choose a role:</label>
                    <select name="Role" id="Role" form="register" >
                        <option value={{$user->Role}}>{{$user->Role}}</option>
                      <option value="Admin">Admin</option>
                      <option value="User">User</option>
                      
                    </select>
                    @error('Role')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
                </div>
                  
                  
                  <button type="submit" class="w-full text-white bg-blue-400 hover:bg-blue-600 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">Edit user</button>
              </form>
          </div>
      </div>
  </div>
</section>
@endsection