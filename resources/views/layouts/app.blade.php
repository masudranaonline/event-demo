<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Event</title>
    @vite('resources/css/app.css')
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css"  rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

</head>

<body>
   <!-- Page Wrapper Start -->
<div class="flex h-screen overflow-hidden">
    <!-- Sidebar Start -->
    {{-- <aside id="sidebar-multi-level-sidebar" class="flex-shrink-0 w-64 bg-gray-50 dark:bg-gray-800">
        <!-- Sidebar content -->
    </aside> --}}
    @include('layouts.sidebar')
    <!-- Sidebar End -->

    <!-- Content Area Start -->
    <div class="flex-1 overflow-x-hidden overflow-y-auto">
        <!-- Main Content Start -->
        <main>
            {{ $slot }}
        </main>
        <!-- Main Content End -->
    </div>
    <!-- Content Area End -->
</div>
<!-- Page Wrapper End -->


    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
</body>

</html>
