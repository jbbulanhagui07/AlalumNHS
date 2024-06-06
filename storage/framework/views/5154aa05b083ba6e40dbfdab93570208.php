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
                    <a class="font-medium text-gray-50 sm:py-6" href="<?php echo e(route('home')); ?>" aria-current="page">Home</a>
                    <a class="font-medium text-gray-300 hover:text-gray-400 sm:py-6" href="<?php echo e(route('aboutus')); ?>">About
                        Us</a>
<<<<<<< HEAD
                    <a class="font-medium text-gray-300 hover:text-gray-400 sm:py-6"
                        href="<?php echo e(route('announcement')); ?>">Announcement</a>
                    <a class="font-medium text-gray-300 hover:text-gray-400 sm:py-6"
                        href="<?php echo e(route('performanceindicators')); ?>">Performance
=======
                    <a class="font-medium text-gray-300 hover:text-gray-400 sm:py-6" href="#">Announcement</a>
                    <a class="font-medium text-gray-300 hover:text-gray-400 sm:py-6" href="#">Performance
>>>>>>> 72bbe70 (Add system to git)
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
<<<<<<< HEAD

        <div class="max-w-[85rem] mx-auto py-8 px-4 sm:px-6 lg:px-8">
=======
        <div class="max-w-[85rem] min-h-[75rem] mx-auto py-10 px-4 sm:px-6 lg:px-8">
>>>>>>> 72bbe70 (Add system to git)
            <!-- Slider -->
            <div data-hs-carousel='{
            "loadingClasses": "opacity-0",
            "isAutoPlay": true }'
                class="relative">
                <div
                    class="hs-carousel relative overflow-hidden content-center w-full min-h-56 sm:min-h-80 md:min-h-80 lg:min-h-96 xl:min-h-128 bg-white rounded-lg">
                    <div
                        class="hs-carousel-body absolute top-0 bottom-0 start-0 flex flex-nowrap transition-transform duration-700 opacity-0">
                        <div class="hs-carousel-slide">
                            <div class="flex justify-center h-full bg-gray-100 p-3">
                                <img class="object-cover h-full w-full rounded-t-xl" src="images/Faculty.jpeg"
                                    alt="Image Description">
                            </div>
                        </div>
                        <div class="hs-carousel-slide">
                            <div class="flex justify-center h-full bg-gray-200 p-3">
                                <img class="h-auto rounded-t-xl" src="images/Faculty-stairs.jpeg"
                                    alt="Image Description">
                            </div>
                        </div>
                        <div class="hs-carousel-slide">
                            <div class="flex justify-center h-full bg-gray-300 p-3">
                                <img class="h-auto rounded-t-xl" src="images/Faculty2.jpeg" alt="Image Description">
                            </div>
                        </div>
                    </div>
                </div>

                <button type="button"
                    class="hs-carousel-prev hs-carousel:disabled:opacity-50 disabled:pointer-events-none absolute inset-y-0 start-0 inline-flex justify-center items-center w-[46px] h-full text-gray-800 hover:bg-gray-800/10 rounded-s-lg">
                    <span class="text-2xl" aria-hidden="true">
                        <svg class="flex-shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m15 18-6-6 6-6"></path>
                        </svg>
                    </span>
                    <span class="sr-only">Previous</span>
                </button>
                <button type="button"
                    class="hs-carousel-next hs-carousel:disabled:opacity-50 disabled:pointer-events-none absolute inset-y-0 end-0 inline-flex justify-center items-center w-[46px] h-full text-gray-800 hover:bg-gray-800/10 rounded-e-lg">
                    <span class="sr-only">Next</span>
                    <span class="text-2xl" aria-hidden="true">
                        <svg class="flex-shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m9 18 6-6-6-6"></path>
                        </svg>
                    </span>
                </button>

                <div class="hs-carousel-pagination flex justify-center absolute bottom-3 start-0 end-0 space-x-2">
                    <span
                        class="hs-carousel-active:bg-blue-700 hs-carousel-active:border-blue-700 size-3 border border-gray-400 rounded-full cursor-pointer"></span>
                    <span
                        class="hs-carousel-active:bg-blue-700 hs-carousel-active:border-blue-700 size-3 border border-gray-400 rounded-full cursor-pointer"></span>
                    <span
                        class="hs-carousel-active:bg-blue-700 hs-carousel-active:border-blue-700 size-3 border border-gray-400 rounded-full cursor-pointer"></span>
                </div>
            </div>
            <!-- End Slider -->
        </div>
<<<<<<< HEAD

        

=======
>>>>>>> 72bbe70 (Add system to git)
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
<<<<<<< HEAD
                    <p><a class="inline-flex gap-x-2 text-gray-100 hover:text-gray-400"
                            href="<?php echo e(route('aboutus')); ?>">About Us</a>
                    </p>
                    <p><a class="inline-flex gap-x-2 text-gray-100 hover:text-gray-400"
                            href="<?php echo e(route('announcement')); ?>">Announcement</a></p>
                    <p><a class="inline-flex gap-x-2 text-gray-100 hover:text-gray-400"
                            href="<?php echo e(route('performanceindicators')); ?>">Performance
=======
                    <p><a class="inline-flex gap-x-2 text-gray-100 hover:text-gray-400" href="#">About Us</a>
                    </p>
                    <p><a class="inline-flex gap-x-2 text-gray-100 hover:text-gray-400"
                            href="#">Announcement</a></p>
                    <p><a class="inline-flex gap-x-2 text-gray-100 hover:text-gray-400" href="#">Performance
>>>>>>> 72bbe70 (Add system to git)
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
<?php /**PATH /home/tharsis/AlalumNHS/resources/views/home/index.blade.php ENDPATH**/ ?>