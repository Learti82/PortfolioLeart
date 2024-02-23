<?php get_header(); ?>

<div class="w-full md:pr-8 mb-8 md:mb-0">
    <div class="max-w-full w-full">
        <!-- Photo and Text Section -->
        <div class="flex flex-col md:flex-row items-center justify-center bg-white rounded-lg shadow-md overflow-hidden">
            <!-- Photo Section -->
            <div class="w-full md:w-1/2">
                <img src="http://portfolio.test/wp-content/uploads/2024/02/leart99.jpeg" alt="Profile Photo" class="w-full h-auto object-cover rounded-l-lg">
            </div>

            <!-- Text Information Section -->
            <div class="flex-grow p-6">
                <div class="text-center md:text-left">
                    <h2 class="text-3xl font-bold mb-4">About Me</h2>
                    <p class="text-sm md:text-base text-gray-800 mb-6 leading-tight">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce at magna ut magna eleifend lobortis. Suspendisse potenti. Vestibulum tristique urna nec dui sodales tempus. Morbi lacinia sapien in odio tincidunt, sed feugiat justo viverra. Aliquam suscipit augue eu turpis placerat, nec suscipit arcu tincidunt. Mauris rutrum odio et pharetra tempor. Donec sed magna quis purus posuere luctus.
                    </p>
                    
                    <!-- Skills Section -->
                    <div class="mb-4">
                        <h3 class="text-lg font-semibold mb-2">Skills</h3>
                        <ul class="list-disc list-inside">
                            <li>Web Development</li>
                            <li>Graphic Design</li>
                            <li>Content Writing</li>
                        </ul>
                    </div>

                    <!-- Education Section -->
                    <div>
                        <h3 class="text-lg font-semibold mb-2">Education</h3>
                        <ul class="list-disc list-inside">
                            <li>Bachelor of Science in Computer Science - University of Lorem Ipsum</li>
                            <li>Master of Arts in Graphic Design - Lorem Ipsum Institute</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
