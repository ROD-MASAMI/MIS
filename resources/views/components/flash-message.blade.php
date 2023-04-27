@if (session()->has('success'))
    <div x-data="{show: true}" x-init=" setTimeout(()=> show = false , 3000)" class="fixed top-3  transform  rounded bg-green-500 w-1/4 text-white grid py-3 justify-items-center left-1/3 text-lg" x-show="show">
    {{session('success')}}
    </div>

@endif

@if (session()->has('failed'))
    <div x-data="{show: true}" x-init=" setTimeout(()=> show = false , 3000)" class="fixed top-3  transform  rounded bg-red-500 w-1/4 text-white grid py-3 justify-items-center left-1/3 text-lg" x-show="show">
    {{session('failed')}}
    </div>

@endif