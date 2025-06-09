<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Auto-Suggest Category Mapper')</title>
    
    <!-- Common CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Additional CSS -->
    @yield('styles')
</head>
<body>
    <!-- Header Section -->
    <header>
        @yield('header')
    </header>

    <!-- Main Content Section -->
    <main>
        @yield('content')
    </main>


    <!-- Common Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <!-- Additional Scripts -->
    @yield('scripts')
</body>
</html> 