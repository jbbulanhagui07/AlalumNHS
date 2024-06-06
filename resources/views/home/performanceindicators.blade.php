<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alalum National High School</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class=" bg-royalblue text-white">
    <!-- ========== HEADER ========== -->
    <header
        class="sticky top-0 inset-x-0 flex flex-wrap sm:justify-start sm:flex-nowrap z-50 w-full bg-royalblue text-white border-b border-gray-200 text-sm py-3 sm:py-0">
        <nav class="relative max-w-[85rem] w-full mx-auto px-4 sm:flex sm:items-center sm:justify-between sm:px-6 lg:px-8"
            aria-label="Global">
            <div class="flex flex-shrink-0 items-center justify-between p-2">
                <div class="flex p-1 flex-shrink-1"><a href="{{ route('home') }}"><img src="images/AlalumNHS-Logo.png"
                            alt="Logo" height="75" width="75"></a>
                </div>
                <div class="flex flex-col items-center justify-start">
                    <a class="flex text-xl font-semibold" href="{{ route('home') }}" aria-label="Brand">Alalum National
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
                    <a class="font-medium text-gray-300 sm:py-6" href="{{ route('home') }}">Home</a>
                    <a class="font-medium text-gray-300 hover:text-gray-400 sm:py-6" href="{{ route('aboutus') }}">About
                        Us</a>
                    <a class="font-medium text-gray-300  sm:py-6" href="{{ route('announcement') }}">Announcement</a>
                    <a class="font-medium text-gray-50 hover:text-gray-400 sm:py-6"
                        href="{{ route('performanceindicators') }}" aria-current="page">Performance
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

        <div class="max-w-[60rem] mx-auto py-8 px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col">
                <div class="-m-1.5 overflow-x-auto">
                    <div class="p-1.5 min-w-full inline-block align-middle">
                        <p
                            class="text-base sm:text-lg md:text-xl md:leading-normal font-bold text-gray-800 flex justify-center">
                            Key Performance Indicators</p>
                        <p
                            class="text-base sm:text-lg md:text-xl md:leading-normal font-bold text-gray-800 flex justify-center">
                            S.Y. 2023 - 2024</p></br>
                        <div class="border rounded-lg overflow-hidden">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col"
                                            class="px-6 py-3 text-small font-large text-gray-600 uppercase">
                                            KPI</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-small font-large text-gray-600 uppercase">
                                            Percentage</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200">
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">1.
                                            Transition Rate</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">72.94%</td>
                                    </tr>

                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">2.
                                            Promotion Rate</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">100%</td>
                                    </tr>

                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">3.
                                            Repetition Rate</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">0%</td>
                                    </tr>

                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">4.
                                            School Leaver Rate</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">2.32%</td>
                                    </tr>

                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">5.
                                            Cohort Survival Rate</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">93.55%</td>
                                    </tr>

                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">6.
                                            Completion Rate</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">88.78%</td>
                                    </tr>

                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">7.
                                            Retention Rate</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">98.50%</td>
                                    </tr>

                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">8.
                                            Simple Dropped Out Rate</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">1.22%</td>
                                    </tr>

                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">9.
                                            Participation Rate</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">96.76%</td>
                                    </tr>

                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">10.
                                            Graduation Rate</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">98.85%</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
    <!-- ========== END MAIN CONTENT ========== -->



    <!-- ========== FOOTER ========== -->
    <footer class="mt-auto w-full max-w-[85rem] py-10 px-4 sm:px-6 lg:px-8 mx-auto">
        <!-- Grid -->
        <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-5 gap-5 mb-10">
            <div class="col-span-full lg:col-span-2 lg:block">
                <a class="flex-none text-xl font-semibold" href="{{ route('home') }}" aria-label="Brand">Alalum
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
                            href="{{ route('home') }}">Home</a></p>
                    <p><a class="inline-flex gap-x-2 text-gray-100 hover:text-gray-400"
                            href="{{ route('aboutus') }}">About Us</a>
                    </p>
                    <p><a class="inline-flex gap-x-2 text-gray-100 hover:text-gray-400"
                            href="{{ route('announcement') }}">Announcement</a></p>
                    <p><a class="inline-flex gap-x-2 text-gray-100 hover:text-gray-400"
                            href="{{ route('performanceindicators') }}">Performance
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
