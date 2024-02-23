<?php get_header(); ?>

<style>
    body {
        margin: 0;
        padding: 0;
        background-color: #f3f4f6; /* Set background color for the entire page */
    }
</style>

<div class="container">
    <!-- Header -->
    <header class="h-100px bg-gray-800"></header>

    <!-- Main Content -->
    <div class="container mx-auto text-center py-8">
        <!-- Introduction Section -->
        <div class="p-8 my-4">
            <img src="your-photo.jpg" alt="Your Name" class="rounded-full w-24 h-24 mx-auto mb-4 animate-pulse">
            <h1 class="text-3xl font-bold mb-2">Your Name</h1>
            <p class="text-gray-600">Web Developer</p>
            <p class="text-blue-500 hover:underline"><?php echo get_field('email', 'options'); ?></p>
            <p class="text-blue-500 hover:underline"><?php echo get_field('linkedin_profile', 'options'); ?></p>
            <p class="text-blue-500 hover:underline"><?php echo get_field('github_profile', 'options'); ?></p>
        </div>

        <!-- Relevant Experience Section -->
        <div class="bg-white p-8 my-4">
            <h2 class="text-2xl font-bold mb-4">Relevant Experience</h2>
            <!-- Include relevant experience details here -->
        </div>

        <!-- Relevant Skills Section -->
        <div class="p-8 my-4">
            <h2 class="text-2xl font-bold mb-4">Relevant Skills</h2>
            <?php
            $skills = get_field('skills');
            if ($skills) :
                foreach ($skills as $skill) :
            ?>
                        <div class="mb-2">
                            <span class="bg-blue-500 text-white px-2 py-1 rounded"><?php echo $skill['name']; ?></span>
                        </div>
            <?php
                endforeach;
            endif;
            ?>
        </div>

        <!-- Personal Projects Section -->
        <div class="bg-white p-8 my-4">
            <h2 class="text-2xl font-bold mb-4">Personal Projects</h2>
            <?php
            $personal_projects = get_field('personal_projects'); // ACF field for personal projects
            if ($personal_projects) :
                foreach ($personal_projects as $project) :
            ?>
                    <div class="mb-4">
                        <h3 class="text-lg font-semibold mb-2"><?php echo $project['title']; ?></h3>
                        <p class="text-gray-700"><?php echo $project['description']; ?></p>
                    </div>
            <?php
                endforeach;
            endif;
            ?>
        </div>

        <!-- Education Section -->
        <div class="p-8 my-4">
            <h2 class="text-2xl font-bold mb-4">Education</h2>
            <!-- Include education details here -->
        </div>
    </div>

    <!-- Footer -->
    <footer class="h-100px bg-gray-800"></footer>
</div>

<?php get_footer(); // Include footer.php ?>
