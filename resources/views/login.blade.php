<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login ASIK</title>
    @vite('resources/css/app.css')
</head>
<body id="body-login " class="bg-blue-300">
    <div class="border shadow rounded bg-white loginForm text-sm">
        <h2 class="text-center my-5 font-bold">LOGIN <span class="text-blue-500">ASIKBP2MI</span></h2>
        <form action="/" class="flex flex-col gap-5 py-5">
            <div class="flex flex-col gap-1" style="width: 80%; margin: 0 auto">
                <label for="username" >Username</label>
                <input type="text" name="username" class="border rounded p-2 w-full" />
            </div>
            <div class="flex flex-col gap-1" style="width: 80%; margin: 0 auto">
                <label for="password" >Password</label>
                <input type="password" name="password" class="border rounded p-2" />
            </div>
            <div class="flex justify-center mt-10">
                <button class="border py-2 px-10 rounded shadow bg-blue-500 text-white hover:bg-blue-600"
                    style="width: 80%"
                >
                    SUBMIT
                </button>
            </div>
        </form>
    </div>
</body>
</html>