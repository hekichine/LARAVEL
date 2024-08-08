<div class="my-5 max-w-[400px] mx-auto">
    @if(session('success'))
        <span class="w-full h-[50px] flex items-center justify-center text-white bg-green-600">{{ session('success') }}</span>
    @endif
    <form action="" wire:submit="handleSubmit">
        <input wire:model="name" type="text" placeholder="name" class="w-full my-3 p-2 border border-black rounded-md">
        @error('name')
            <span class="text-red-500 text-xs">{{ $message }}</span>
        @enderror
        <input wire:model="email" type="email" placeholder="email" class="w-full my-3 p-2 border border-black rounded-md">
        @error('email')
        <span class="text-red-500 text-xs">{{ $message }}</span>
        @enderror
        <input wire:model="password" type="password" placeholder="password" class="w-full my-3 p-2 border border-black rounded-md">
        @error('password')
        <span class="text-red-500 text-xs">{{ $message }}</span>
        @enderror
        <button type="submit" class="bg-blue-200 w-[150px] h-[50px] text-black flex items-center justify-center">Create user</button>
    </form>

    <div class="mt-[100px]">
        <ul>
            @foreach($users as $user)
                <li>
                    <span>{{ $user -> id }}</span>
                    <span class="ms-3">{{ $user -> name }}</span>
                </li>
            @endforeach
        </ul>
        {{ $users -> links() }}
    </div>
</div>
