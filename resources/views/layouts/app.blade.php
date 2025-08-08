<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8" />
    <title>Il mio sito</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body>
    <x-navbar />

    <main>
        {{ $slot }}
    </main>


    @livewireScripts
</body>
</html>
