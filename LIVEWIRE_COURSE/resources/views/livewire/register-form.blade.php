<div class="mt-10 p-5 mx-auto sm:w-full sm:max-w-sm shadow border-teal-500 border-t-2">
    <div class="flex">
        <h2 class="text-center font-semibold text-2x text-gray-800 mb-5">Create new account</h2>
    </div>
    @if(session('success'))
        <span class="text-green-500">{{ session('success') }}</span>
    @endif

    <form action="" wire:submit="create">
        <label for="name" class="mt-3 block text-sm font-medium leading-6 text-gray-900">Name</label>
        <input wire:model="name" type="text" id="name" placeholder="Name..." class="h-[40px] px-3 ring-1 ring-inset ring-gray-300 bg-gray-100 text-gray-900 text-sm rounded block w-full">
        @error('name')
            <span class="text-red-500 text-xs">{{ $message }}</span>
        @enderror

        <label for="email" class="mt-3 block text-sm font-medium leading-6 text-gray-900">Email</label>
        <input wire:model="email" type="email" id="email" placeholder="Name..." class="h-[40px] px-3 ring-1 ring-inset ring-gray-300 bg-gray-100 text-gray-900 text-sm rounded block w-full">
        @error('email')
            <span class="text-red-500 text-xs">{{ $message }}</span>
        @enderror

        <label for="password" class="mt-3 block text-sm font-medium leading-6 text-gray-900">Password</label>
        <input wire:model="password" type="password" id="password" placeholder="Name..." class="h-[40px] px-3 ring-1 ring-inset ring-gray-300 bg-gray-100 text-gray-900 text-sm rounded block w-full">
        @error('password')
        <span class="text-red-500 text-xs">{{ $message }}</span>
        @enderror

        <label for="image" class="mt-3 block text-sm font-medium leading-6 text-gray-900">Image</label>
        <input wire:model="image" type="file" accept="image/png, image/jpeg" id="image" placeholder="Name..." class="h-[40px] px-3 ring-1 ring-inset ring-gray-300 bg-gray-100 text-gray-900 text-sm rounded block w-full">
        @error('image')
        <span class="text-red-500 text-xs">{{ $message }}</span>
        @enderror
        @if($image)
            <img src="{{ $image->temporaryUrl() }}" alt="" class="rounded w-10 h-10 mt-5 block">

        @endif

        <div wire:loading wire:target="image">
            <span class="text-green-500">Uploading....</span>
        </div>

        <div wire:loading.delay.longest>
            <span class="text-green-500">Sending....</span>
        </div>

        <button @click="$dispatch('user-created')" type="button" class="block mt-3 px-4 py-2 bg-teal-500 text-white font-semibold rounded hover:bg-teal-600">
            Reload list
        </button><button wire:loading.class="bg-blue-500" wire:loading.attr="disabled" type="submit" class="block mt-3 px-4 py-2 bg-teal-500 text-white font-semibold rounded hover:bg-teal-600">
            Create +
        </button>
    </form>

</div>
