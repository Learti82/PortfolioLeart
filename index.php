<?php get_header(); ?>

<style>
    /* Ensure no margin or padding on the body, header, or footer */
    body, header, footer {
        margin: 0;
        padding: 0;
    }

    /* Set background color for the main page */
    #home {
        background-color: #ffffff; /* White background */
        min-height: 100vh; /* Ensure the main page fills the entire screen */
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    /* Style for the photo section */
    #home .photo-section img {
        width: 150px;
        height: 150px;
        border-radius: 50%;
        object-fit: cover;
    }

    /* Style for the text information section */
    #home .text-information-section {
        text-align: center;
        margin-bottom: 20px;
    }
</style>

<div id="home">
    <!-- Photo Section -->
    <div class="photo-section mb-8">
        <?php
        $photo = get_field('home_photo'); // Replace 'home_photo' with your ACF field name
        if ($photo) :
        ?>
            <img src="<?php echo $photo['url']; ?>" alt="<?php echo $photo['alt']; ?>">
        <?php endif; ?>
    </div>

    <!-- Text Information Section -->
    <div class="text-information-section mb-8">
        <!-- Remove the "About Me" heading and content -->
        <!-- <h2 class="text-lg font-semibold text-gray-800 mb-4">About Me</h2> -->
        <!-- <p class="text-gray-700"> -->
            <!-- <?php echo get_field('home_about_me'); ?> -->
        <!-- </p> -->
        <!-- Add more text information or other content as needed -->

        <!-- Add a new section for Skills or Interests -->
        <h2 class="text-2xl font-semibold text-gray-800 mb-4">Skills or Interests</h2>
        <?php
        $skills_interests = get_field('home_skills_interests'); // Replace 'home_skills_interests' with your ACF field name
        if ($skills_interests) :
            foreach ($skills_interests as $skill_interest) :
        ?>
                <div class="mb-2">
                    <span class="bg-blue-500 text-white px-2 py-1 rounded"><?php echo $skill_interest; ?></span>
                </div>
        <?php
            endforeach;
        endif;
        ?>
    </div>

    <!-- Project Section -->
    <div class="project-section">
        <h2 class="text-2xl font-semibold text-gray-800 mb-4">Featured Projects</h2>
        
        <?php
        $featured_projects = get_field('home_featured_projects'); // Replace 'home_featured_projects' with your ACF field name
        if ($featured_projects) :
            foreach ($featured_projects as $project) :
        ?>
                <div class="project">
                    <h3 class="text-lg font-semibold text-gray-800 mb-2"><?php echo $project['title']; ?></h3>
                    <p class="text-gray-700 mb-4"><?php echo $project['description']; ?></p>
                    <a href="<?php echo $project['link']; ?>" class="text-blue-500 hover:underline">View Project</a>
                </div>
        <?php
            endforeach;
        endif;
        ?>
    </div>
</div>

<?php get_footer(); ?>
