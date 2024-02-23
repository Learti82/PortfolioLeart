<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo get_the_title(); ?></title>
    <!-- Include Tailwind CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <!-- Custom Styles -->
    <style>
        .bg-header-color {
            background-color: #a5b4fc;
        }

        nav {
            padding: 1rem 0; /* Adjust the vertical padding */
            text-align: center; /* Center align navigation links */
        }

        nav a {
            font-size: 1rem; /* Adjust the font size */
            padding: 0.25rem 0.5rem; /* Adjust the vertical and horizontal padding for individual links */
            color: #1a202c; /* Set link color */
        }

        nav a:hover {
            color: #4a5568; /* Set link color on hover */
        }
    </style>
</head>

<body>

    <!-- Header with Navigation -->
    <nav class="bg-header-color py-2">
        <a href="<?php echo home_url(); ?>" class="hover:text-blue-700 transition duration-700 ease-in-out font-mono">Home</a>
        <span class="text-gray-500 font-mono">|</span>

        <!-- Portfolio Button -->
        <a href="<?php echo site_url('portfolio'); ?>" class="hover:text-blue-700 transition duration-700 ease-in-out font-mono">Portfolio</a>
        <span class="text-gray-500 font-mono">|</span>

        <!-- About Me Button -->
        <a href="<?php echo site_url('about-me'); ?>" class="hover:text-blue-700 transition duration-700 ease-in-out font-mono">About Me</a>
        <span class="text-gray-500 font-mono">|</span>

        <!-- Contact Button -->
        <a href="<?php echo site_url('contact'); ?>" class="hover:text-blue-700 transition duration-700 ease-in-out font-mono">Contact</a>
    </nav>

    <!-- Separator Line -->
    <div class="bg-header-color h-1"></div>

    <!-- Rest of the Page Content -->
    <div class="p-8">
        <!-- Your content goes here -->
    </div>

</body>

</html>
