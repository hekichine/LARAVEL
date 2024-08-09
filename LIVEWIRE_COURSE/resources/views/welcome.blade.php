<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo App template</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

<div id="content" class="mx-5 relative">
    <div class="flex mt-[50px]">
        <div class="flex-1 w-1/2">
            @livewire('user-list')
        </div>
        <div class="flex-1 w-1/2">
            @livewire('register-form')
        </div>
    </div>
</div>

</body>

</html>
