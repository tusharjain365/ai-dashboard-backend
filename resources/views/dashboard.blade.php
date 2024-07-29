<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Dashboard</title>
</head>

<body>
    <div class="">
        <div class="flex h-screen overflow-hidden">
            <!-- sidebar -->
            <aside
                class="absolute left-0 top-0 z-[9999] flex h-screen w-56 flex-col overflow-y-hidden bg-white duration-300 ease-linear lg:static"
                id="sidebar">
                <div class="flex items-center justify-between gap-2 px-6 py-5.5 lg:py-6.5">
                    <a href="/">
                        <img src="{{ asset('images/ai-salesman-2.svg') }}" alt="Logo"
                            style="height:40px; margin:10px 0" />
                    </a>

                    <button aria-controls="sidebar" class="block lg:hidden " id="hide-sidebar">
                        <svg class="fill-current" width="20" height="18" viewBox="0 0 20 18" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M19 8.175H2.98748L9.36248 1.6875C9.69998 1.35 9.69998 0.825 9.36248 0.4875C9.02498 0.15 8.49998 0.15 8.16248 0.4875L0.399976 8.3625C0.0624756 8.7 0.0624756 9.225 0.399976 9.5625L8.16248 17.4375C8.31248 17.5875 8.53748 17.7 8.76248 17.7C8.98748 17.7 9.17498 17.625 9.36248 17.475C9.69998 17.1375 9.69998 16.6125 9.36248 16.275L3.02498 9.8625H19C19.45 9.8625 19.825 9.4875 19.825 9.0375C19.825 8.55 19.45 8.175 19 8.175Z"
                                fill="" />
                        </svg>
                    </button>
                </div>
                <div class="no-scrollbar flex flex-col overflow-y-auto duration-300 ease-linear">
                    <nav class="mt-5 py-1 px-4 lg:mt-0 lg:px-6">
                        <div>
                            <h3 class="mb-4 ml-4 text-sm font-semibold text-black">
                                MENU
                            </h3>

                            <ul class="mb-6 flex flex-col gap-1.5">
                                <li class="">
                                    <a href="/"
                                        class="group relative flex items-center gap-2.5 rounded-md px-4 py-2 font-medium text-black text-white duration-300 ease-in-out bg-[#8b3dff]  text-black text-sm">
                                        <svg class="fill-current" width="16" height="16" viewBox="0 0 18 18" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M6.10322 0.956299H2.53135C1.5751 0.956299 0.787598 1.7438 0.787598 2.70005V6.27192C0.787598 7.22817 1.5751 8.01567 2.53135 8.01567H6.10322C7.05947 8.01567 7.84697 7.22817 7.84697 6.27192V2.72817C7.8751 1.7438 7.0876 0.956299 6.10322 0.956299ZM6.60947 6.30005C6.60947 6.5813 6.38447 6.8063 6.10322 6.8063H2.53135C2.2501 6.8063 2.0251 6.5813 2.0251 6.30005V2.72817C2.0251 2.44692 2.2501 2.22192 2.53135 2.22192H6.10322C6.38447 2.22192 6.60947 2.44692 6.60947 2.72817V6.30005Z"
                                                fill="" />
                                            <path
                                                d="M15.4689 0.956299H11.8971C10.9408 0.956299 10.1533 1.7438 10.1533 2.70005V6.27192C10.1533 7.22817 10.9408 8.01567 11.8971 8.01567H15.4689C16.4252 8.01567 17.2127 7.22817 17.2127 6.27192V2.72817C17.2127 1.7438 16.4252 0.956299 15.4689 0.956299ZM15.9752 6.30005C15.9752 6.5813 15.7502 6.8063 15.4689 6.8063H11.8971C11.6158 6.8063 11.3908 6.5813 11.3908 6.30005V2.72817C11.3908 2.44692 11.6158 2.22192 11.8971 2.22192H15.4689C15.7502 2.22192 15.9752 2.44692 15.9752 2.72817V6.30005Z"
                                                fill="" />
                                            <path
                                                d="M6.10322 9.92822H2.53135C1.5751 9.92822 0.787598 10.7157 0.787598 11.672V15.2438C0.787598 16.2001 1.5751 16.9876 2.53135 16.9876H6.10322C7.05947 16.9876 7.84697 16.2001 7.84697 15.2438V11.7001C7.8751 10.7157 7.0876 9.92822 6.10322 9.92822ZM6.60947 15.272C6.60947 15.5532 6.38447 15.7782 6.10322 15.7782H2.53135C2.2501 15.7782 2.0251 15.5532 2.0251 15.272V11.7001C2.0251 11.4188 2.2501 11.1938 2.53135 11.1938H6.10322C6.38447 11.1938 6.60947 11.4188 6.60947 11.7001V15.272Z"
                                                fill="" />
                                            <path
                                                d="M15.4689 9.92822H11.8971C10.9408 9.92822 10.1533 10.7157 10.1533 11.672V15.2438C10.1533 16.2001 10.9408 16.9876 11.8971 16.9876H15.4689C16.4252 16.9876 17.2127 16.2001 17.2127 15.2438V11.7001C17.2127 10.7157 16.4252 9.92822 15.4689 9.92822ZM15.9752 15.272C15.9752 15.5532 15.7502 15.7782 15.4689 15.7782H11.8971C11.6158 15.7782 11.3908 15.5532 11.3908 15.272V11.7001C11.3908 11.4188 11.6158 11.1938 11.8971 11.1938H15.4689C15.7502 11.1938 15.9752 11.4188 15.9752 11.7001V15.272Z"
                                                fill="" />
                                        </svg>
                                        Dashboard
                                    </a>
                                </li>
                                <li>
                                    <a href="/call"
                                        class="group relative flex items-center gap-2
                                        rounded-md py-2 px-4 font-medium text-black hover:text-white duration-300 ease-in-out hover:bg-[#8b3dff] text-black text-sm">
                                        <svg class="fill-current" width="16" height="16" viewBox="0 0 18 19" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clipPath="url(#clip0_130_9756)">
                                                <path
                                                    d="M15.7501 0.55835H2.2501C1.29385 0.55835 0.506348 1.34585 0.506348 2.3021V15.8021C0.506348 16.7584 1.29385 17.574 2.27822 17.574H15.7782C16.7345 17.574 17.5501 16.7865 17.5501 15.8021V2.3021C17.522 1.34585 16.7063 0.55835 15.7501 0.55835ZM6.69385 10.599V6.4646H11.3063V10.5709H6.69385V10.599ZM11.3063 11.8646V16.3083H6.69385V11.8646H11.3063ZM1.77197 6.4646H5.45635V10.5709H1.77197V6.4646ZM12.572 6.4646H16.2563V10.5709H12.572V6.4646ZM2.2501 1.82397H15.7501C16.0313 1.82397 16.2563 2.04897 16.2563 2.33022V5.2271H1.77197V2.3021C1.77197 2.02085 1.96885 1.82397 2.2501 1.82397ZM1.77197 15.8021V11.8646H5.45635V16.3083H2.2501C1.96885 16.3083 1.77197 16.0834 1.77197 15.8021ZM15.7501 16.3083H12.572V11.8646H16.2563V15.8021C16.2563 16.0834 16.0313 16.3083 15.7501 16.3083Z"
                                                    fill="" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_130_9756">
                                                    <rect width="18" height="18" fill="white"
                                                        transform="translate(0 0.052124)" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                        Upload Your Data
                                    </a>
                                </li>

                                <li>
                                    <a href="/plans" class="group relative flex items-center gap-2.5 rounded-md
                                        py-2 px-4 font-medium text-black hover:text-white duration-300
                                        ease-in-out hover:bg-[#8b3dff] text-black text-sm">
                                        <svg version="1.1" id="Layer_1" width="18" height="18"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128"
                                            enable-background="new 0 0 128 128" fill="#000000">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                stroke-linejoin="round"></g>
                                            <g id="SVGRepo_iconCarrier">
                                                <path fill="#FFA000"
                                                    d="M112,36c-6.629,0-12,5.375-12,12c0,1.68,0.352,3.273,0.973,4.727L84,60L69.801,34.445 C73.48,32.391,76,28.508,76,24c0-6.625-5.371-12-12-12s-12,5.375-12,12c0,4.508,2.52,8.391,6.199,10.445L44,60l-16.973-7.273 C27.648,51.273,28,49.68,28,48c0-6.625-5.371-12-12-12S4,41.375,4,48s5.371,12,12,12c0.93,0,1.822-0.133,2.695-0.328L28,100v8 c0,4.422,3.582,8,8,8h56c4.418,0,8-3.578,8-8v-8l9.309-40.328C110.176,59.875,111.07,60,112,60c6.629,0,12-5.375,12-12 S118.629,36,112,36z M64,20c2.207,0,4,1.797,4,4s-1.793,4-4,4s-4-1.797-4-4S61.793,20,64,20z M12,48c0-2.203,1.793-4,4-4 s4,1.797,4,4s-1.793,4-4,4S12,50.203,12,48z M92,108H36v-8h56V108z M93.633,92H34.367L27.34,61.563l13.508,5.789 C41.871,67.789,42.941,68,43.996,68c2.828,0,5.547-1.5,6.996-4.117L64,40.477l13.008,23.406C78.457,66.5,81.176,68,84.004,68 c1.055,0,2.125-0.211,3.148-0.648l13.508-5.789L93.633,92z M112,52c-2.207,0-4-1.797-4-4s1.793-4,4-4s4,1.797,4,4S114.207,52,112,52 z">
                                                </path>
                                            </g>
                                        </svg>
                                        Upgrade Plans
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </nav>
                </div>
            </aside>

            <div class="relative flex flex-1 flex-col overflow-y-auto overflow-x-hidden bg-gray-100">
                <!-- navbar starts -->
                <header class="sticky top-0 z-[999] flex w-full bg-white drop-shadow-md">
                    <div class="flex flex-grow items-center justify-between px-4 py-4 shadow-2 md:px-6 2xl:px-11">
                        <div class="flex items-center gap-2 sm:gap-4">
                            <button aria-controls="sidebar" id="open-sidebar"
                                class="z-[99999] block rounded-sm border border-stroke bg-white p-1.5 shadow-sm lg:hidden">

                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                                </svg>

                            </button>
                            <a href="/call" class="block flex-shrink-0">
                                <button type="button"
                                    class="py-2.5 px-5 me-2 mb-0.5 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100  ">
                                    Upload File
                                </button>
                            </a>
                        </div>

                        <div class="hidden sm:block">
                            <!-- Optional content for larger screens -->
                        </div>

                        <div class="flex items-center gap-3 sm:gap-7">

                            <!-- User Area -->
                            <div
                                class="flex items-center rounded-lg text-black hover:bg-gray-100 justify-around p-2 gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-4">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                                </svg>

                                <a class="" href="{{ route('profile.edit') }}">Profile</a>
                            </div>
                        </div>
                    </div>
                </header>

                <main>

                    <!-- Follow up Modal -->
                    <div id="modal" class="fixed z-10 inset-0 overflow-y-auto hidden">
                        <div class="flex items-center justify-center min-h-screen px-4">
                            <div class="fixed inset-0 transition-opacity">
                                <div class="absolute inset-0 bg-gray-500 opacity-75 right-2"></div>
                            </div>

                            <div
                                class="bg-white rounded-lg overflow-hidden shadow-xl transform transition-all sm:max-w-lg sm:w-full">
                                <button id="close-modal"
                                    class="absolute right-2 top-2 bg-red-500 hover:bg-red-700 text-white font-bold py-[3px] px-[10px] rounded">
                                    X
                                </button>
                                <div class="bg-white p-6">
                                    <h2 class="text-lg font-medium text-gray-900 mb-4">Enter your follow-up instructions
                                    </h2>
                                    <form method="post" action="{{ route('submit.follow') }}">
                                        @csrf
                                        <textarea id="follow-instructions-textarea"
                                            class="w-full p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
                                            name="follow_up_instructions" rows="5"
                                            placeholder="Start typing here...">{{$user->follow_up_instructions}}</textarea>
                                        <div class="text-right text-sm text-gray-600 mt-2" id="word-count-follow">
                                            Letter count: 0 / 300
                                        </div>
                                        <div class="mt-4 flex justify-end">
                                            <button id=""
                                                class="bg-[#8b3dff] text-white font-bold py-[3px] px-2 rounded">
                                                Send
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Details modal -->
                    <div id="detailsModal" class="fixed z-10 inset-0 overflow-y-auto hidden">
                        <div class="flex items-center justify-center min-h-screen px-4">
                            <div class="fixed inset-0 transition-opacity">
                                <div class="absolute inset-0 bg-gray-500 opacity-75 right-2"></div>
                            </div>

                            <div
                                class="bg-white rounded-lg overflow-hidden shadow-xl transform transition-all sm:max-w-lg sm:w-full">
                                <button id="closeModal"
                                    class="absolute right-2 top-2 bg-red-500 hover:bg-red-700 text-white font-bold py-[3px] px-[10px] rounded">
                                    X
                                </button>
                                <div class="bg-white p-6">
                                    <h2 class="text-lg font-medium text-gray-900 mb-4">Details</h2>
                                    <div id="modalContent">
                                        <!-- Details will be populated here dynamically -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- cards -->
                    <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
                        <div class="grid grid-cols-1 gap-4 md:grid-cols-2 md:gap-6 xl:grid-cols-4 2xl:gap-7.5">
                            <div
                                class="rounded-3xl bg-gradient-to-r from-slate-200 to-slate-300 border border-stroke bg-white py-6 px-6 shadow-default ">
                                <div class="flex h-12 w-12 items-center justify-center rounded-full bg-white ">
                                    <svg class="fill-purple-500" width="22" height="18" viewBox="0 0 22 18" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M7.18418 8.03751C9.31543 8.03751 11.0686 6.35313 11.0686 4.25626C11.0686 2.15938 9.31543 0.475006 7.18418 0.475006C5.05293 0.475006 3.2998 2.15938 3.2998 4.25626C3.2998 6.35313 5.05293 8.03751 7.18418 8.03751ZM7.18418 2.05626C8.45605 2.05626 9.52168 3.05313 9.52168 4.29063C9.52168 5.52813 8.49043 6.52501 7.18418 6.52501C5.87793 6.52501 4.84668 5.52813 4.84668 4.29063C4.84668 3.05313 5.9123 2.05626 7.18418 2.05626Z"
                                            fill="" />
                                        <path
                                            d="M15.8124 9.6875C17.6687 9.6875 19.1468 8.24375 19.1468 6.42188C19.1468 4.6 17.6343 3.15625 15.8124 3.15625C13.9905 3.15625 12.478 4.6 12.478 6.42188C12.478 8.24375 13.9905 9.6875 15.8124 9.6875ZM15.8124 4.7375C16.8093 4.7375 17.5999 5.49375 17.5999 6.45625C17.5999 7.41875 16.8093 8.175 15.8124 8.175C14.8155 8.175 14.0249 7.41875 14.0249 6.45625C14.0249 5.49375 14.8155 4.7375 15.8124 4.7375Z"
                                            fill="" />
                                        <path
                                            d="M15.9843 10.0313H15.6749C14.6437 10.0313 13.6468 10.3406 12.7874 10.8563C11.8593 9.61876 10.3812 8.79376 8.73115 8.79376H5.67178C2.85303 8.82814 0.618652 11.0625 0.618652 13.8469V16.3219C0.618652 16.975 1.13428 17.4906 1.7874 17.4906H20.2468C20.8999 17.4906 21.4499 16.9406 21.4499 16.2875V15.4625C21.4155 12.4719 18.9749 10.0313 15.9843 10.0313ZM2.16553 15.9438V13.8469C2.16553 11.9219 3.74678 10.3406 5.67178 10.3406H8.73115C10.6562 10.3406 12.2374 11.9219 12.2374 13.8469V15.9438H2.16553V15.9438ZM19.8687 15.9438H13.7499V13.8469C13.7499 13.2969 13.6468 12.7469 13.4749 12.2313C14.0937 11.7844 14.8499 11.5781 15.6405 11.5781H15.9499C18.0812 11.5781 19.8343 13.3313 19.8343 15.4625V15.9438H19.8687Z"
                                            fill="" />
                                    </svg>
                                </div>

                                <div class="mt-4 flex items-end justify-between">
                                    <div>
                                        <h4 class="text-2xl font-bold text-black ">
                                            {{$user->total_users}}
                                        </h4>
                                        <span class="text-sm font-medium">Total Users</span>
                                    </div>
                                </div>
                            </div>

                            <div
                                class=" rounded-3xl bg-gradient-to-r from-slate-200 to-slate-300 border border-stroke bg-white py-6 px-6 shadow-default ">
                                <div class="flex h-12 w-12 items-center justify-center rounded-full bg-white ">
                                    <svg fill="#3aba17" height="22" width="24" version="1.1" id="Layer_1"
                                        viewBox="0 0 472.615 472.615" stroke="#3aba17">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                        </g>
                                        <g id="SVGRepo_iconCarrier">
                                            <g>
                                                <g>
                                                    <polygon
                                                        points="307.83,17.572 307.83,37.265 421.427,37.265 266.849,191.851 280.773,205.774 435.35,51.187 435.35,164.784 455.042,164.784 455.042,17.572 ">
                                                    </polygon>
                                                </g>
                                            </g>
                                            <g>
                                                <g>
                                                    <path
                                                        d="M368.354,269.33c0,0-17.809,24.3-35.344,42.161l106.985,106.98c18.552-23.121,32.619-44.883,32.619-44.883L368.354,269.33 z">
                                                    </path>
                                                </g>
                                            </g>
                                            <g>
                                                <g>
                                                    <path
                                                        d="M99.025,0c0,0-21.763,14.067-44.885,32.622l106.982,106.983c17.862-17.536,42.165-35.344,42.165-35.344L99.025,0z">
                                                    </path>
                                                </g>
                                            </g>
                                            <g>
                                                <g>
                                                    <path
                                                        d="M318.275,324.601c-3.929,2.848-7.555,4.853-10.527,5.334c-69.6,11.24-176.307-95.468-165.067-165.067 c0.48-2.974,2.483-6.599,5.332-10.526L39.008,45.337C18.212,63.678,0.001,84.014,0,99.024 c0,132.084,241.506,373.592,373.591,373.592c15.011-0.002,35.349-18.216,53.691-39.011L318.275,324.601z">
                                                    </path>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                </div>

                                <div class="mt-4 flex items-end justify-between">
                                    <div>
                                        <h4 class="text-2xl font-bold text-black ">
                                            {{isset($callStatistics->total_calls_connected) ?
                                            $callStatistics->total_calls_connected : 0}}
                                        </h4>
                                        <span class="text-sm font-medium">Total Calls Connected</span>
                                    </div>
                                </div>
                            </div>

                            <div
                                class="rounded-3xl bg-gradient-to-r from-slate-200 to-slate-300 border border-stroke bg-white py-6 px-6 shadow-default ">
                                <div class="flex h-12 w-12 items-center justify-center rounded-full bg-white ">
                                    <svg fill="#da2b2b" height="22" width="24" version="1.1" id="Layer_1"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 472.62 472.62" stroke="#da2b2b">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                        </g>
                                        <g id="SVGRepo_iconCarrier">
                                            <g>
                                                <g>
                                                    <path
                                                        d="M367.315,269.902c0,0-17.756,24.232-35.239,42.042l106.677,106.681c18.501-23.055,32.53-44.755,32.53-44.755 L367.315,269.902z">
                                                    </path>
                                                </g>
                                            </g>
                                            <g>
                                                <g>
                                                    <path
                                                        d="M317.382,325.018c-3.92,2.841-7.537,4.842-10.503,5.322c-69.403,11.208-175.81-95.199-164.601-164.602 c0.479-2.966,2.478-6.582,5.32-10.502L38.901,46.538C18.162,64.831,0.001,85.11,0,100.08 c0,131.712,240.825,372.538,372.536,372.538c14.969-0.003,35.248-18.163,53.539-38.9L317.382,325.018z">
                                                    </path>
                                                </g>
                                            </g>
                                            <g>
                                                <g>
                                                    <path
                                                        d="M98.745,1.335c0,0-21.7,14.028-44.755,32.529l106.681,106.679c17.811-17.485,42.042-35.239,42.042-35.239L98.745,1.335z">
                                                    </path>
                                                </g>
                                            </g>
                                            <g>
                                                <g>
                                                    <polygon
                                                        points="472.62,13.886 458.736,0.002 383.231,75.505 307.726,0.002 293.842,13.886 369.347,89.389 293.842,164.891 307.726,178.775 383.231,103.273 458.736,178.775 472.62,164.891 397.115,89.389 ">
                                                    </polygon>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                </div>

                                <div class="mt-4 flex items-end justify-between">
                                    <div>
                                        <h4 class="text-2xl font-bold text-black ">
                                            {{isset($callStatistics->total_calls_not_connected) ?
                                            $callStatistics->total_calls_not_connected : 0}}
                                        </h4>
                                        <span class="text-sm font-medium">Total Calls Connected</span>
                                    </div>
                                </div>
                            </div>

                            <div
                                class="rounded-3xl bg-gradient-to-r from-slate-200 to-slate-300 border border-stroke bg-white py-6 px-6 shadow-default ">
                                <div class="flex h-12 w-12 items-center justify-center rounded-full bg-white ">
                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 490.01 490.01" xml:space="preserve" fill="#ec8d5b" stroke="#ec8d5b"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <rect id="XMLID_60_" x="-14.319" y="147.421" transform="matrix(0.3244 -0.9459 0.9459 0.3244 -125.6895 185.1588)" style="fill:#A7A9AC;" width="162.194" height="66.298"></rect> <path d="M169.994,106.097l-6.1,3c-7.6,3.7-16.5,4.2-24.4,1.4l-10.2-3.6c-0.6-0.4-1.2-0.7-1.8-0.9l-62.8-21.5 c-4.7-1.6-9.9,0.9-11.5,5.6l-52.7,153.5c-0.8,2.3-0.6,4.8,0.4,6.9s2.9,3.8,5.2,4.6l62.7,21.5c1,0.3,2,0.5,2.9,0.5 c3.8,0,7.3-2.4,8.6-6.1l49.7-144.6l3.4,1.2c12.5,4.4,26.5,3.6,38.5-2.2l6.1-3c7.5-3.7,16.3-4.2,24.2-1.5l115.3,39.7 c-1.2,4.8-3.6,10.5-8,13.6c-4.9,3.4-12.2,3.4-21.8,0.1l-51.4-17.6c-2.4-0.8-5-0.6-7.2,0.6c-2.2,1.2-3.8,3.3-4.5,5.7 c-0.1,0.3-7.2,26.9-29.9,39.1c-14.3,7.7-32.1,8-53,0.9c-4.7-1.6-9.9,0.9-11.5,5.6c-1.6,4.7,0.9,9.9,5.6,11.5 c12,4.1,23.3,6.2,33.8,6.2c12.2,0,23.4-2.7,33.6-8.2c20.3-10.9,30.8-30,35.6-41.4l42.9,14.7c15.3,5.3,28.1,4.5,38-2.4 c15.9-11,16.7-33.3,16.8-34.3c0.1-4-2.4-7.5-6.1-8.8l-122.4-42.2C195.694,99.497,181.794,100.397,169.994,106.097z M66.194,256.497l-45.6-15.6l46.7-136.3l45.6,15.6L66.194,256.497z"></path> <rect id="XMLID_142_" x="334.311" y="148.377" transform="matrix(-0.4395 -0.8982 0.8982 -0.4395 434.9314 634.4379)" style="fill:#3C92CA;" width="162.188" height="66.294"></rect> <path d="M410.194,266.797l-21.5,19.8c-19.5,17.9-41.5,33-65.3,44.6l-114.1,55.8c-5,2.5-11.1,0.4-13.6-4.7 c-2.5-5-0.4-11.1,4.7-13.6l1.4-0.7l0,0l62.4-30.5c4.5-2.2,6.4-7.6,4.2-12.1c-2.2-4.5-7.6-6.4-12.1-4.2l-62.4,30.5l0,0l-31.4,15.4 c-5,2.5-11.1,0.4-13.6-4.7c-1.2-2.4-1.4-5.2-0.5-7.7c0.9-2.6,2.7-4.6,5.1-5.8l23.7-11.6l0,0l67.8-33.2c4.5-2.2,6.4-7.6,4.2-12.1 s-7.6-6.4-12.1-4.2l-67.9,33.3l0,0l-2.6,1.3l-32.4,15.9c-2.4,1.2-5.2,1.4-7.7,0.5c-2.6-0.9-4.6-2.7-5.8-5.1 c-2.5-5-0.4-11.1,4.7-13.6l11.2-5.5l0,0l22.9-11.2l6.4-3.1l0,0l52.6-25.8c4.5-2.2,6.4-7.6,4.2-12.1s-7.6-6.4-12.1-4.2l-57,27.9 l-24.9,12.2c-5,2.4-11.1,0.4-13.6-4.7c-1.2-2.4-1.4-5.2-0.5-7.7c0.9-2.6,2.7-4.6,5.1-5.8l43.5-21.3c4.5-2.2,6.4-7.6,4.2-12.1 s-7.6-6.4-12.1-4.2l-43.5,21.3c-6.8,3.3-11.9,9.1-14.3,16.2s-2,14.8,1.3,21.6c2.1,4.2,5.1,7.7,8.7,10.3c-6.3,8.3-7.9,19.7-3,29.7 c3.3,6.8,9.1,11.9,16.2,14.3c3,1,6,1.5,9,1.5c-0.1,4.5,0.8,9,2.9,13.1c4.9,10,15,15.8,25.4,15.8c4.2,0,8.4-0.9,12.4-2.9l6.4-3.1 c0.3,3.4,1.2,6.7,2.7,9.9c4.9,10,15,15.8,25.4,15.8c4.2,0,8.4-0.9,12.4-2.9l114.1-55.8c25.4-12.4,48.8-28.4,69.6-47.5l25.5-23.5 l58.4-28.6c4.5-2.2,6.4-7.6,4.2-12.1l-71.4-145.5c-1.1-2.2-2.9-3.8-5.2-4.6c-2.3-0.8-4.8-0.6-6.9,0.4l-59.6,29.1 c-4.5,2.2-6.4,7.6-4.2,12.1L410.194,266.797z M405.394,106.197l63.3,129.5l-43.3,21.2l-63.3-129.5L405.394,106.197z"></path> </g> </g> </g></svg>
                                </div>

                                <div class="mt-4 flex items-end justify-between">
                                    <div>
                                        <h4 class="text-2xl font-bold text-black ">
                                            {{isset($callStatistics->total_leads_acquired) ?
                                            $callStatistics->total_leads_acquired : 0}}
                                        </h4>
                                        <span class="text-sm font-medium">Total Leads acquired</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-4 grid grid-cols-12 gap-4 md:mt-6 md:gap-6 2xl:mt-8 2xl:gap-8">
                        <div class="col-span-12 xl:col-span-12">

                            <div class="p-4">
                                <div class="flex justify-between items-center pl-4">
                                    <h3 class="text-lg text-center font-bold mb-4 text-gray-800 mt-2">
                                        Call Record and Details
                                    </h3>
                                    <div class='flex justify-end items-center mr-4'>
                                        <button id="open-modal"
                                            class="text-white hover:text-white text-sm flex  justify-center gap-2 bg-green-600 p-2  rounded-lg">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                strokeWidth="1.5" stroke="currentColor" class="w-5 h-5">
                                                <path strokeLinecap="round" strokeLinejoin="round"
                                                    d="M20.25 3.75v4.5m0-4.5h-4.5m4.5 0-6 6m3 12c-8.284 0-15-6.716-15-15V4.5A2.25 2.25 0 0 1 4.5 2.25h1.372c.516 0 .966.351 1.091.852l1.106 4.423c.11.44-.054.902-.417 1.173l-1.293.97a1.062 1.062 0 0 0-.38 1.21 12.035 12.035 0 0 0 7.143 7.143c.441.162.928-.004 1.21-.38l.97-1.293a1.125 1.125 0 0 1 1.173-.417l4.423 1.106c.5.125.852.575.852 1.091V19.5a2.25 2.25 0 0 1-2.25 2.25h-2.25Z" />
                                            </svg>
                                            Follow Up
                                        </button>
                                    </div>
                                </div>
                                <div class="shadow-lg border p-2 overflow-auto">

                                    <!-- table -->
                                    <div class="mb-4">
                                        <input id="search-input" type="text" placeholder="Search..."
                                            class="p-2 border rounded-lg w-full">
                                    </div>
                                    <div class="overflow-x-auto">
                                        <table id="business-table"
                                            class="min-w-full divide-y divide-gray-300 rounded-lg overflow-hidden shadow-lg">
                                            <thead class="bg-gray-100">
                                                <tr>
                                                    <th
                                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Business Name</th>
                                                    <th
                                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Phone</th>
                                                    <th
                                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Email</th>
                                                    <th
                                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Name</th>
                                                    <th
                                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Status</th>
                                                    <th
                                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Action</th>
                                                </tr>
                                            </thead>
                                            <tbody id="table-body" class="bg-white divide-y divide-gray-300 w-[2px] overflow-x-auto">
                                                <!-- Table rows will be populated by JavaScript -->
                                            </tbody>
                                        </table>
                                    </div>
                                    <div id="pagination" class="flex justify-center mt-4 bg-white py-2 rounded-md">
                                        <!-- Pagination controls will be populated by JavaScript -->
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>


        </div>
    </div>
</body>
<script>
    document.getElementById('close-modal').addEventListener('click', function () {
        document.getElementById('modal').classList.add('hidden');
    });

    document.getElementById('open-modal').addEventListener('click', function () {
        document.getElementById('modal').classList.remove('hidden');
    });
    const wordLimit = 300;
    const wordCountDisplayFollow = document.getElementById('word-count-follow');
    const textareaFollow = document.getElementById('follow-instructions-textarea');

    // Mapping ENUM status values to one-word descriptions
    const statusMapping = {
        'call_not_done': 'Pending',
        'call_not_connected': 'Not Connected',
        'call_connected_user_not_interested': 'Not Interested',
        'call_connected_follow_up': 'Follow-Up',
        'call_connected_user_interested': 'Interested'
    };

    textareaFollow.addEventListener('input', () => {
        const text = textareaFollow.value;
        const wordCount = text.trim().split(/\s+/).filter(Boolean).length; // Count words

        if (wordCount > wordLimit) {
            // Truncate text to fit word limit
            const words = text.trim().split(/\s+/).slice(0, wordLimit).join(' ');
            textareaFollow.value = words;
        }

        // Update the display with current word count
        wordCountDisplayFollow.textContent = `Letter count: ${textareaFollow.value.length} / 300`;
    });
    function displayDetails(businessData) {
    businessData = JSON.parse(businessData);

    

    const modal = document.getElementById('detailsModal');
    const modalContent = document.getElementById('modalContent');

    // Get one-word description for the status
    const statusDescription = statusMapping[businessData.status] || 'Pending';

    // Populate modal content
    modalContent.innerHTML = `
        <p><strong>Business Name:</strong> ${businessData.business_name}</p>
        <p><strong>Phone:</strong> ${businessData.phone}</p>
        <p><strong>Business Email:</strong> ${businessData.email}</p>
        <p><strong>Founder's Name:</strong> ${businessData.name}</p>
        <p><strong>Status:</strong> ${statusDescription}</p>
    `;

    // Display the modal
    modal.classList.remove('hidden');
}


    document.addEventListener('DOMContentLoaded', function () {
        const closeModal = document.getElementById('closeModal');
        const modal = document.getElementById('detailsModal');

        closeModal.addEventListener('click', function () {
            modal.classList.add('hidden');
        });

        // Close the modal if clicked outside
        window.addEventListener('click', function (event) {
            if (event.target === modal) {
                modal.classList.add('hidden');
            }
        });
    });

    const sidebar = document.getElementById('sidebar');
    const showSidebarBtn = document.getElementById('open-sidebar');
    const hideSidebarBtn = document.getElementById('hide-sidebar');

    showSidebarBtn.addEventListener('click', function () {
        sidebar.classList.add('translate-x-0');
        sidebar.classList.remove('-translate-x-full');
    });

    hideSidebarBtn.addEventListener('click', function () {
        console.log("click");
        sidebar.classList.remove('translate-x-0');
        sidebar.classList.add('-translate-x-full');
    });

    //pagination logic here
    const businessData = @json($businessData); // Assuming you pass $businessData to the script
    const rowsPerPage = 10;
    let currentPage = 1;

    function displayTablePage(page, data) {
        const tableBody = document.getElementById('table-body');
        tableBody.innerHTML = '';

        const start = (page - 1) * rowsPerPage;
        const end = start + rowsPerPage;
        const paginatedData = data.slice(start, end);

        paginatedData.forEach(data => {
            const row = document.createElement('tr');
            row.innerHTML = `
                <td class="max-w-8 px-6 py-4 text-sm font-medium text-gray-900 break-words">${data.business_name}</td>
                <td class="max-w-8 px-6 py-4 text-sm text-gray-500 break-words whitespace-normal">${data.phone}</td>
                <td class="max-w-8 px-6 py-4 text-sm text-gray-500 break-words whitespace-normal">${data.email}</td>
                <td class="max-w-8 px-6 py-4 text-sm text-gray-500 break-words whitespace-normal">${data.name}</td>
                <td class="max-w-8 px-6 py-4">
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">${statusMapping[data.status] || 'Pending'}</span>
                </td>
                <td class="max-w-8 px-6 py-2">
                <button class="text-white hover:bg-blue-500 text-sm flex justify-center items-center bg-blue-400 p-2 rounded-lg transition duration-200 ease-in-out" onclick='displayDetails(\`${JSON.stringify(data).replace(/'/g, "\\'")}\`)'>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m5.231 13.481L15 17.25m-4.5-15H5.625c-.621 0-1.125.504-1.125 1.125v16.5c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Zm3.75 11.625a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z"/>
                        </svg>
                        Details
                    </button>
                </td>
            `;
            tableBody.appendChild(row);
        });
    }

    function setupPagination() {
        const paginationDiv = document.getElementById('pagination');
        paginationDiv.innerHTML = '';

        const pageCount = Math.ceil(businessData.length / rowsPerPage);

        const prevButton = document.createElement('button');
        prevButton.className = 'mx-1 px-3 py-1 bg-blue-400 text-white rounded text-white hover:bg-blue-500 text-sm flex justify-center items-center bg-blue-400 p-2 rounded-lg transition duration-200 ease-in-out mt-1';
        prevButton.innerText = 'Previous';
        prevButton.addEventListener('click', () => {
            if (currentPage > 1) {
                currentPage--;
                displayTablePage(currentPage, businessData);
                setupPagination();
            }
        });
        
        const pageInfo = document.createElement('span');
        pageInfo.className = 'mx-2 px-3 py-1 text-gray-700';
        pageInfo.innerText = `Showing page ${currentPage} of ${pageCount}`;
        
        const nextButton = document.createElement('button');
        nextButton.className = 'mx-1 px-3 py-1 bg-blue-400 text-white rounded text-white hover:bg-blue-500 text-sm flex justify-center items-center bg-blue-400 p-2 rounded-lg transition duration-200 ease-in-out mt-1';
        nextButton.innerText = 'Next';
        nextButton.addEventListener('click', () => {
            if (currentPage < pageCount) {
                currentPage++;
                displayTablePage(currentPage, businessData);
                setupPagination();
            }
        });


        if(pageCount!=0) {
            paginationDiv.appendChild(prevButton);
            paginationDiv.appendChild(pageInfo);
            paginationDiv.appendChild(nextButton);
        }
    }

    //search filters
    function filterTable() {
        const searchTerm = document.getElementById('search-input').value.toLowerCase();
        filteredData = businessData.filter(data =>
            data.business_name.toLowerCase().includes(searchTerm) ||
            data.phone.toLowerCase().includes(searchTerm) ||
            data.email.toLowerCase().includes(searchTerm) ||
            data.name.toLowerCase().includes(searchTerm) ||
            data.status.toLowerCase().includes(searchTerm)
        );
        currentPage = 1;
        displayTablePage(currentPage, filteredData);
        setupPagination();
    }

    document.getElementById('search-input').addEventListener('input', filterTable);

    displayTablePage(currentPage, businessData);
    setupPagination();
</script>

</html>