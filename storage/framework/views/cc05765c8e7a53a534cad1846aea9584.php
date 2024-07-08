<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alalum National High School</title>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
</head>

<body class=" bg-royalblue text-white">
    <!-- ========== HEADER ========== -->
    <header
        class="sticky top-0 inset-x-0 flex flex-wrap sm:justify-start sm:flex-nowrap z-50 w-full bg-royalblue text-white border-b border-gray-200 text-sm py-3 sm:py-0">
        <nav class="relative max-w-[85rem] w-full mx-auto px-4 sm:flex sm:items-center sm:justify-between sm:px-6 lg:px-8"
            aria-label="Global">
            <div class="flex flex-shrink-0 items-center justify-between p-2">
                <div class="flex p-1 flex-shrink-1"><a href="<?php echo e(route('home')); ?>"><img src="images/AlalumNHS-Logo.png"
                            alt="Logo" height="75" width="75"></a>
                </div>
                <div class="flex flex-col items-center justify-start">
                    <a class="flex text-xl font-semibold" href="<?php echo e(route('home')); ?>" aria-label="Brand">Alalum National
                        High School</a>
                    <span class="flex-none"> Alalum, San Pascual, Batangas </span>
                </div>
                <div class="sm:hidden">
                    <button type="button"
                        class="hs-collapse-toggle size-9 flex justify-center items-center text-sm font-semibold rounded-lg border border-gray-100 text-gray-100 hover:text-gray-300 disabled:opacity-50 disabled:pointer-events-none"
                        data-hs-collapse="#navbar-collapse-with-animation"
                        aria-controls="navbar-collapse-with-animation" aria-label="Toggle navigation">
                        <svg class="hs-collapse-open:hidden flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="3" x2="21" y1="6" y2="6" />
                            <line x1="3" x2="21" y1="12" y2="12" />
                            <line x1="3" x2="21" y1="18" y2="18" />
                        </svg>
                        <svg class="hs-collapse-open:block hidden flex-shrink-0 size-4"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path d="M18 6 6 18" />
                            <path d="m6 6 12 12" />
                        </svg>
                    </button>
                </div>
            </div>
            <div id="navbar-collapse-with-animation"
                class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow sm:block">
                <div
                    class="flex flex-col gap-y-4 gap-x-0 mt-5 sm:flex-row sm:items-center sm:justify-end sm:gap-y-0 sm:gap-x-7 sm:mt-0 sm:ps-100">
                    <a class="font-medium text-gray-300 hover:text-gray-400 sm:py-6" href="<?php echo e(route('home')); ?>">Home</a>
                    <a class="font-medium text-gray-50 sm:py-6" href="<?php echo e(route('aboutus')); ?>" aria-current="page">About
                        Us</a>
<<<<<<< HEAD
                    <a class="font-medium text-gray-300 hover:text-gray-400 sm:py-6"
                        href="<?php echo e(route('announcement')); ?>">Announcement</a>
=======
                    <a class="font-medium text-gray-300 hover:text-gray-400 sm:py-6" href="#">Announcement</a>
>>>>>>> 72bbe70 (Add system to git)
                    <a class="font-medium text-gray-300 hover:text-gray-400 sm:py-6" href="#">Performance
                        Indicators</a>
                    <a class="font-medium text-gray-300 hover:text-gray-400 sm:py-6" href="#">Activities</a>
                    <a class="font-medium text-gray-300 hover:text-gray-400 sm:py-6" href="#">PPA's</a>
                    <a class="font-medium text-gray-300 hover:text-gray-400 sm:py-6" href="#">STE</a>
                    <a class="font-medium text-gray-300 hover:text-gray-400 sm:py-6" href="#">Curriculum</a>

                    <a class="flex items-center gap-x-2 font-medium text-gray-300 hover:text-gray-400 sm:border-s sm:border-gray-300 sm:my-6 sm:ps-6"
                        href="#">
                        <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2" />
                            <circle cx="12" cy="7" r="4" />
                        </svg>
                        Log in
                    </a>
                </div>
            </div>
        </nav>

    </header>
    <!-- ========== END HEADER ========== -->


    <!-- ========== MAIN CONTENT ========== -->
    <main class="bg-white" id="content">
        <div class="grid grid-cols-1 divide-y divide-solid divide-royalblue">
            <!-- Testimonials -->
            <div class="relative max-w-[85rem] px-4 py-14 sm:px-6 lg:px-6 lg:py-14 mx-auto">
                <!-- Blockquote -->
                <blockquote class="text-center lg:mx-auto lg:w-5/6">
                    <p class="relative text-lg sm:text-xl md:text-2xl md:leading-normal font-bold text-gray-800">ABOUT
                        ALALUM NATIONAL HIGH SCHOOL</p>

                    <div class="mt-6 lg:mt-10">
                        <p
                            class="relative text-base sm:text-lg md:text-xl md:leading-normal font-medium text-gray-800">
                            <svg class="absolute top-0 start-0 transform -translate-x-8 -translate-y-8 size-16 text-gray-200 sm:h-24 sm:w-24"
                                width="16" height="13" viewBox="0 0 16 13" fill="none"
                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path
                                    d="M7.18079 9.25611C7.18079 10.0101 6.93759 10.6211 6.45119 11.0891C5.96479 11.5311 5.35039 11.7521 4.60799 11.7521C3.71199 11.7521 2.96958 11.4531 2.38078 10.8551C1.81758 10.2571 1.53598 9.39911 1.53598 8.28111C1.53598 7.08511 1.86878 5.91511 2.53438 4.77111C3.22559 3.60111 4.18559 2.67811 5.41439 2.00211L6.29759 3.36711C5.63199 3.83511 5.09439 4.35511 4.68479 4.92711C4.30079 5.49911 4.04479 6.16211 3.91679 6.91611C4.14719 6.81211 4.41599 6.76011 4.72319 6.76011C5.43999 6.76011 6.02879 6.99411 6.48959 7.46211C6.95039 7.93011 7.18079 8.52811 7.18079 9.25611ZM14.2464 9.25611C14.2464 10.0101 14.0032 10.6211 13.5168 11.0891C13.0304 11.5311 12.416 11.7521 11.6736 11.7521C10.7776 11.7521 10.0352 11.4531 9.44639 10.8551C8.88319 10.2571 8.60159 9.39911 8.60159 8.28111C8.60159 7.08511 8.93439 5.91511 9.59999 4.77111C10.2912 3.60111 11.2512 2.67811 12.48 2.00211L13.3632 3.36711C12.6976 3.83511 12.16 4.35511 11.7504 4.92711C11.3664 5.49911 11.1104 6.16211 10.9824 6.91611C11.2128 6.81211 11.4816 6.76011 11.7888 6.76011C12.5056 6.76011 13.0944 6.99411 13.5552 7.46211C14.016 7.93011 14.2464 8.52811 14.2464 9.25611Z"
                                    fill="currentColor" />
                            </svg>
                            <span class="relative z-10 italic text-gray-800">Alalum National High School is an
                                institution that
                                implement two programs, the Special Science Class – Science and Technology and
                                Engineering Program
                                (STE), and the regular program both anchored on the K to 12 Basic Education Program.
                            </span>
                        </p>
                    </div>
                </blockquote>
                <!-- End Blockquote -->
            </div>
            <!-- End Testimonials -->
            <!-- Testimonials -->
            <div class="relative max-w-[85rem] px-4 py-14 sm:px-6 lg:px-6 lg:py-14 mx-auto">
                <!-- Blockquote -->
                <blockquote class="text-center lg:mx-auto lg:w-5/6">
                    <p class="relative text-lg sm:text-xl md:text-2xl md:leading-normal font-bold text-gray-800">THE
                        DEPED VISION</p>

                    <div class="mt-6 lg:mt-10">
                        <p
                            class="relative text-base sm:text-lg md:text-xl md:leading-normal font-medium text-gray-800">
                            <svg class="absolute top-0 start-0 transform -translate-x-8 -translate-y-8 size-16 text-gray-200 sm:h-24 sm:w-24"
                                width="16" height="13" viewBox="0 0 16 13" fill="none"
                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path
                                    d="M7.18079 9.25611C7.18079 10.0101 6.93759 10.6211 6.45119 11.0891C5.96479 11.5311 5.35039 11.7521 4.60799 11.7521C3.71199 11.7521 2.96958 11.4531 2.38078 10.8551C1.81758 10.2571 1.53598 9.39911 1.53598 8.28111C1.53598 7.08511 1.86878 5.91511 2.53438 4.77111C3.22559 3.60111 4.18559 2.67811 5.41439 2.00211L6.29759 3.36711C5.63199 3.83511 5.09439 4.35511 4.68479 4.92711C4.30079 5.49911 4.04479 6.16211 3.91679 6.91611C4.14719 6.81211 4.41599 6.76011 4.72319 6.76011C5.43999 6.76011 6.02879 6.99411 6.48959 7.46211C6.95039 7.93011 7.18079 8.52811 7.18079 9.25611ZM14.2464 9.25611C14.2464 10.0101 14.0032 10.6211 13.5168 11.0891C13.0304 11.5311 12.416 11.7521 11.6736 11.7521C10.7776 11.7521 10.0352 11.4531 9.44639 10.8551C8.88319 10.2571 8.60159 9.39911 8.60159 8.28111C8.60159 7.08511 8.93439 5.91511 9.59999 4.77111C10.2912 3.60111 11.2512 2.67811 12.48 2.00211L13.3632 3.36711C12.6976 3.83511 12.16 4.35511 11.7504 4.92711C11.3664 5.49911 11.1104 6.16211 10.9824 6.91611C11.2128 6.81211 11.4816 6.76011 11.7888 6.76011C12.5056 6.76011 13.0944 6.99411 13.5552 7.46211C14.016 7.93011 14.2464 8.52811 14.2464 9.25611Z"
                                    fill="currentColor" />
                            </svg>
                            <span class="relative z-10 italic text-gray-800">We dream of Filipinos </br>
                                who passionately love their country </br>
                                and whose values and competencies </br>
                                enable them to realize their full potential </br>
                                and contribute meaningfully to building the nation. </br></br>

                                As a learner-centered public institution, </br>
                                the Department of Education </br>
                                continuously improves itself </br>
                                to better serve its stakeholders.
                            </span>
                        </p>
                    </div>
                </blockquote>
                <!-- End Blockquote -->
            </div>
            <!-- End Testimonials -->
            <!-- Testimonials -->
            <div class="relative max-w-[85rem] px-4 py-14 sm:px-6 lg:px-8 lg:py-14 mx-auto">
                <!-- Blockquote -->
                <blockquote class="text-center lg:mx-auto lg:w-5/6">
                    <p class="relative text-lg sm:text-xl md:text-2xl md:leading-normal font-bold text-gray-800">THE
                        DEPED MISSION</p>

                    <div class="mt-6 lg:mt-10">
                        <p
                            class="relative text-base sm:text-lg md:text-xl md:leading-normal font-medium text-gray-800">
                            <svg class="absolute top-0 start-0 transform -translate-x-8 -translate-y-8 size-16 text-gray-200 sm:h-24 sm:w-24"
                                width="16" height="13" viewBox="0 0 16 13" fill="none"
                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path
                                    d="M7.18079 9.25611C7.18079 10.0101 6.93759 10.6211 6.45119 11.0891C5.96479 11.5311 5.35039 11.7521 4.60799 11.7521C3.71199 11.7521 2.96958 11.4531 2.38078 10.8551C1.81758 10.2571 1.53598 9.39911 1.53598 8.28111C1.53598 7.08511 1.86878 5.91511 2.53438 4.77111C3.22559 3.60111 4.18559 2.67811 5.41439 2.00211L6.29759 3.36711C5.63199 3.83511 5.09439 4.35511 4.68479 4.92711C4.30079 5.49911 4.04479 6.16211 3.91679 6.91611C4.14719 6.81211 4.41599 6.76011 4.72319 6.76011C5.43999 6.76011 6.02879 6.99411 6.48959 7.46211C6.95039 7.93011 7.18079 8.52811 7.18079 9.25611ZM14.2464 9.25611C14.2464 10.0101 14.0032 10.6211 13.5168 11.0891C13.0304 11.5311 12.416 11.7521 11.6736 11.7521C10.7776 11.7521 10.0352 11.4531 9.44639 10.8551C8.88319 10.2571 8.60159 9.39911 8.60159 8.28111C8.60159 7.08511 8.93439 5.91511 9.59999 4.77111C10.2912 3.60111 11.2512 2.67811 12.48 2.00211L13.3632 3.36711C12.6976 3.83511 12.16 4.35511 11.7504 4.92711C11.3664 5.49911 11.1104 6.16211 10.9824 6.91611C11.2128 6.81211 11.4816 6.76011 11.7888 6.76011C12.5056 6.76011 13.0944 6.99411 13.5552 7.46211C14.016 7.93011 14.2464 8.52811 14.2464 9.25611Z"
                                    fill="currentColor" />
                            </svg>
                            <span class="relative z-10 italic text-gray-800">To protect and promote the right of every
                                Filipino to quality, equitable, culture-based, and complete basic education where:
                                </br></br>
                                <span class="font-bold">Students</span> learn in a child-friendly, gender-sensitive,
                                safe, and motivating
                                environment. </br>
                                <span class="font-bold">Teachers</span> facilitate learning and constantly nurture
                                every learner. </br>
                                <span class="font-bold">Administrators and staff</span>, as stewards of the
                                institution, ensure an enabling and supportive environment for effective learning to
                                happen. </br>
                                <span class="font-bold">Family, community, and other stakeholders</span> are actively
                                engaged and share responsibility for developing life-long learners.
                            </span>
                        </p>
                    </div>
                </blockquote>
                <!-- End Blockquote -->
            </div>
            <!-- End Testimonials -->
            <!-- Testimonials -->
            <div class="relative max-w-[85rem] px-4 py-14 sm:px-6 lg:px-8 lg:py-14 mx-auto">
                <!-- Blockquote -->
                <blockquote class="text-center lg:mx-auto lg:w-5/6">
                    <p class="relative text-lg sm:text-xl md:text-2xl md:leading-normal font-bold text-gray-800">OUR
                        CORE VALUES</p>

                    <div class="mt-6 lg:mt-10">
                        <p
                            class="relative text-base sm:text-lg md:text-xl md:leading-normal font-medium text-gray-800">
                            <svg class="absolute top-0 start-0 transform -translate-x-8 -translate-y-8 size-16 text-gray-200 sm:h-24 sm:w-24"
                                width="16" height="13" viewBox="0 0 16 13" fill="none"
                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path
                                    d="M7.18079 9.25611C7.18079 10.0101 6.93759 10.6211 6.45119 11.0891C5.96479 11.5311 5.35039 11.7521 4.60799 11.7521C3.71199 11.7521 2.96958 11.4531 2.38078 10.8551C1.81758 10.2571 1.53598 9.39911 1.53598 8.28111C1.53598 7.08511 1.86878 5.91511 2.53438 4.77111C3.22559 3.60111 4.18559 2.67811 5.41439 2.00211L6.29759 3.36711C5.63199 3.83511 5.09439 4.35511 4.68479 4.92711C4.30079 5.49911 4.04479 6.16211 3.91679 6.91611C4.14719 6.81211 4.41599 6.76011 4.72319 6.76011C5.43999 6.76011 6.02879 6.99411 6.48959 7.46211C6.95039 7.93011 7.18079 8.52811 7.18079 9.25611ZM14.2464 9.25611C14.2464 10.0101 14.0032 10.6211 13.5168 11.0891C13.0304 11.5311 12.416 11.7521 11.6736 11.7521C10.7776 11.7521 10.0352 11.4531 9.44639 10.8551C8.88319 10.2571 8.60159 9.39911 8.60159 8.28111C8.60159 7.08511 8.93439 5.91511 9.59999 4.77111C10.2912 3.60111 11.2512 2.67811 12.48 2.00211L13.3632 3.36711C12.6976 3.83511 12.16 4.35511 11.7504 4.92711C11.3664 5.49911 11.1104 6.16211 10.9824 6.91611C11.2128 6.81211 11.4816 6.76011 11.7888 6.76011C12.5056 6.76011 13.0944 6.99411 13.5552 7.46211C14.016 7.93011 14.2464 8.52811 14.2464 9.25611Z"
                                    fill="currentColor" />
                            </svg>
                            <span class="relative z-10 italic text-gray-800">Maka-Diyos</br>
                                Maka-tao</br>
                                Makakalikasan</br>
                                Makabansa</br></span>
                        </p>
                    </div>
                </blockquote>
                <!-- End Blockquote -->
            </div>
            <!-- End Testimonials -->
        </div>
    </main>
    <!-- ========== END MAIN CONTENT ========== -->



    <!-- ========== FOOTER ========== -->
    <footer class="mt-auto w-full max-w-[85rem] py-10 px-4 sm:px-6 lg:px-8 mx-auto">
        <!-- Grid -->
        <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-5 gap-5 mb-10">
            <div class="col-span-full lg:col-span-2 lg:block">
                <a class="flex-none text-xl font-semibold" href="<?php echo e(route('home')); ?>" aria-label="Brand">Alalum
                    National High
                    School</a>
                <p class="mt-3 text-xs sm:text-sm text-gray-100">Alalum National High School is an institution that
                    implement two programs, the Special Science Class – Science and Technology and Engineering Program
                    (STE), and the regular program both anchored on the K to 12 Basic Education Program.</p>

            </div>
            <!-- End Col -->

            <div>
                <h4 class="text-xs font-semibold text-gray-100 uppercase">Links</h4>

                <div class="mt-3 grid space-y-3 text-sm">
                    <p><a class="inline-flex gap-x-2 text-gray-100 hover:text-gray-400"
                            href="<?php echo e(route('home')); ?>">Home</a></p>
                    <p><a class="inline-flex gap-x-2 text-gray-100 hover:text-gray-400"
                            href="<?php echo e(route('aboutus')); ?>">About Us</a>
                    </p>
                    <p><a class="inline-flex gap-x-2 text-gray-100 hover:text-gray-400"
<<<<<<< HEAD
                            href="<?php echo e(route('announcement')); ?>">Announcement</a></p>
=======
                            href="#">Announcement</a></p>
>>>>>>> 72bbe70 (Add system to git)
                    <p><a class="inline-flex gap-x-2 text-gray-100 hover:text-gray-400" href="#">Performance
                            Indicators</a>
                    </p>
                    <p><a class="inline-flex gap-x-2 text-gray-100 hover:text-gray-400" href="#">Activities</a>
                    </p>
                    <p><a class="inline-flex gap-x-2 text-gray-100 hover:text-gray-400" href="#">PPA's</a></p>
                    <p><a class="inline-flex gap-x-2 text-gray-100 hover:text-gray-400" href="#">STE</a></p>
                    <p><a class="inline-flex gap-x-2 text-gray-100 hover:text-gray-400" href="#">Curriculum</a>
                    </p>
                </div>
            </div>
            <!-- End Col -->

            <div>
                <h4 class="text-xs font-semibold text-gray-100 uppercase">Information</h4>

                <div class="mt-3 grid space-y-3 text-sm">
                    <p class="mt-3 text-xs sm:text-sm text-gray-100">Address: 4204, Alalum, San Pascual, Batangas</p>
                    <p class="mt-3 text-xs sm:text-sm text-gray-100">Tel. No.: (043) 489-0545</p>
                    <p class="mt-3 text-xs sm:text-sm text-gray-100">Email Address: 301067@deped.gov.ph</p>
                    <p class="mt-3 text-xs sm:text-sm text-gray-100"><a href="https://www.facebook.com/AlalumNHS/">FB
                            Page: Deped Tayo Alalum NHS - Batangas Province</a>
                    </p>
                </div>
            </div>
            <!-- End Col -->

            <div>
                <h4 class="text-xs font-semibold text-gray-100 uppercase">Map</h4>

                <div class="mt-3 grid space-y-3 text-sm">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d993.790263623056!2d121.02926112559173!3d13.82290073274332!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33bd0fa474177c7f%3A0x4bea592730c6b445!2sAlalum%20National%20High%20School!5e1!3m2!1sen!2sph!4v1717390788723!5m2!1sen!2sph"
                        width="250" height="250" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <!-- End Col -->


        </div>
        <!-- End Grid -->

    </footer>
    <!-- ========== END FOOTER ========== -->
</body>

</html>
<?php /**PATH /home/tharsis/AlalumNHS/resources/views/home/aboutus.blade.php ENDPATH**/ ?>