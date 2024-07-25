<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Make Call</title>
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
                                        class="group relative flex items-center gap-2.5 rounded-md px-4 py-2 font-medium text-black hover:text-white duration-300 ease-in-out hover:bg-[#8b3dff]  text-black text-sm">
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
                                        rounded-md py-2 px-4 font-medium text-black text-white duration-300 ease-in-out bg-[#8b3dff] text-black text-sm">
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
                <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">

                    <!-- progress bar -->
                    <nav aria-label="Progress" class="bg-white">
                        <ol role="list"
                            class="divide-y divide-gray-300 rounded-md border border-gray-300 md:flex md:divide-y-0">
                            <li class="relative md:flex md:flex-1">
                                <a href="#call-instructions" class="flex items-center px-6 py-4 text-sm font-medium"
                                    aria-current="step">
                                    <span
                                        class="flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-full border-2 border-indigo-600">
                                        <span class="text-indigo-600">01</span>
                                    </span>
                                    <span class="ml-4 text-sm font-medium text-indigo-600">Call Instructions</span>
                                </a>
                                <div class="absolute right-0 top-0 hidden h-full w-5 md:block" aria-hidden="true">
                                    <svg class="h-full w-full text-gray-300" viewBox="0 0 22 80" fill="none"
                                        preserveAspectRatio="none">
                                        <path d="M0 -2L20 40L0 82" vectorEffect="non-scaling-stroke"
                                            stroke="currentcolor" strokeLinejoin="round" />
                                    </svg>
                                </div>
                            </li>

                            <li class="relative md:flex md:flex-1">
                                <a href="#follow-up" class="flex items-center px-6 py-4 text-sm font-medium"
                                    aria-current="step">
                                    <span
                                        class="flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-full border-2 border-indigo-600">
                                        <span class="text-indigo-600">02</span>
                                    </span>
                                    <span class="ml-4 text-sm font-medium text-indigo-600">Follow Up Instructions</span>
                                </a>
                                <div class="absolute right-0 top-0 hidden h-full w-5 md:block" aria-hidden="true">
                                    <svg class="h-full w-full text-gray-300" viewBox="0 0 22 80" fill="none"
                                        preserveAspectRatio="none">
                                        <path d="M0 -2L20 40L0 82" vectorEffect="non-scaling-stroke"
                                            stroke="currentcolor" strokeLinejoin="round" />
                                    </svg>
                                </div>
                            </li>

                            <li class="relative md:flex md:flex-1">
                                <a href="#upload-file" class="flex items-center px-6 py-4 text-sm font-medium"
                                    aria-current="step">
                                    <span
                                        class="flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-full border-2 border-indigo-600">
                                        <span class="text-indigo-600">03</span>
                                    </span>
                                    <span class="ml-4 text-sm font-medium text-indigo-600">Upload data files</span>
                                </a>
                                <div class="absolute right-0 top-0 hidden h-full w-5 md:block" aria-hidden="true">
                                    <svg class="h-full w-full text-gray-300" viewBox="0 0 22 80" fill="none"
                                        preserveAspectRatio="none">
                                        <path d="M0 -2L20 40L0 82" vectorEffect="non-scaling-stroke"
                                            stroke="currentcolor" strokeLinejoin="round" />
                                    </svg>
                                </div>
                            </li>

                            <li class="relative md:flex md:flex-1">
                                <a href="#schedule-calls" class="group flex items-center">
                                    <span class="flex items-center px-6 py-4 text-sm font-medium">
                                        <span
                                            class="flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-full border-2 border-indigo-600 group-hover:border-indigo-600">
                                            <span class="text-indigo-600">04</span>
                                        </span>
                                        <span class="ml-4 text-sm font-medium text-indigo-600">Schedule Calls</span>
                                    </span>
                                </a>
                            </li>


                        </ol>
                    </nav>

                    <!-- uploads -->
                    <div class="flex flex-col gap-10 mt-4">
                    <form id="callForm" action="{{ route('submit.call') }}" method="POST" enctype="multipart/form-data" class="space-y-2">
    @csrf
    <div id='call-instructions'>
        <div class='flex items-start justify-center rounded-md bg-white p-4'>
            <div class="w-full bg-white rounded-lg shadow-md p-6">
                <h2 class="text-lg font-medium text-gray-900 mb-4">Enter your call instructions</h2>
                <textarea
                    id="call-instructions-textarea"
                    class="w-full p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
                    name="call_instructions" rows="5"
                    placeholder="Start typing here...">{{$call_instructions}}</textarea>
                <div class="text-right text-sm text-gray-600 mt-2" id="word-count-call">
                    Letter count: 0 / 300
                </div>
            </div>
        </div>
    </div>
    <div id="follow-up">
        <div class='flex items-start justify-center rounded-md bg-white p-4'>
            <div class="w-full bg-white rounded-lg shadow-md p-6">
                <h2 class="text-lg font-medium text-gray-900 mb-4">Enter your follow-up instructions</h2>
                <textarea
                    id="follow-instructions-textarea"
                    class="w-full p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
                    name="follow_up_instructions" rows="5"
                    placeholder="Start typing here...">{{$follow_up_instructions}}</textarea>
                <div class="text-right text-sm text-gray-600 mt-2" id="word-count-follow">
                    Letter count: 0 / 300
                </div>
            </div>
        </div>
    </div>
    <div id="upload-file">
        <div class="flex flex-col items-center justify-center bg-white p-6 rounded-md shadow-md">
            <div class="w-full max-w-4xl bg-white rounded-lg shadow-lg p-6">
                <div class="flex flex-col sm:flex-row justify-between items-center mb-6">
                    <h2 class="text-lg font-medium text-gray-900">Upload CSV Files</h2>
                    <div class="mt-4 sm:mt-0">
                        <a href="/sample.csv" download="sample.csv" class="text-md text-red-600 hover:text-red-800">
                            Download Sample CSV
                        </a>
                    </div>
                </div>
                <p class="text-sm text-gray-600 mb-4">
                    Please upload CSV files containing the following fields:
                    <ul class="text-sm text-gray-600 mb-4 list-disc pl-5">
                        <li>Client's Business Name as <strong>Business Name</strong></li>
                        <li>Client's Email as <strong>Email ID</strong></li>
                        <li>Client's Phone number as <strong>Phone</strong></li>
                        <li>Client's Website as <strong>Website</strong></li>
                        <li>Founder's Name as <strong>Name</strong></li>
                    </ul>
                    Please select all the files at once
                </p>
                <div>
                    <label for="file-upload" class="flex flex-col items-center justify-center border-2 border-dashed border-gray-300 rounded-lg p-6 cursor-pointer hover:bg-gray-50 transition duration-150 ease-in-out">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18" width="36" height="36" fill="#4CAF50">
                            <path d="M6 3v18h12V3H6zm2 2h8v2H8V5zm0 4h8v2H8V9zm0 4h6v2H8v-2z" />
                        </svg>
                        <span class="mt-2 text-sm text-gray-600">Click to upload</span>
                        <input id="file-upload" name="files[]" type="file" accept=".csv" class="sr-only" multiple />

                    </label>
                    <div class="mt-6">
                        <h3 class="text-lg font-semibold mb-2 text-gray-800">Selected Files:</h3>
                        <ul class="divide-y divide-gray-300" id="file-list">
                            <!-- List of selected files will appear here -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-white rounded-md p-4" id="schedule-calls">
        <div class="flex flex-wrap justify-between items-center">
            <div class="w-full sm:w-auto mb-4 sm:mb-0">
                <label htmlFor="callCapacity" class="text-slate-700 font-bold">
                    Select Calls per Day:
                </label>
                <span
                    class="inline-block ml-1 px-1 py-0 bg-yellow-500 text-white text-[10px] font-semibold rounded">
                    PRO
                </span>
                <select disabled id="callCapacity"
                    class="block mt-1 border-[1px] h-7 border-gray-300 rounded-md focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50 cursor-not-allowed w-full sm:w-auto"
                    value={selectedCapacity} onChange={handleCapacityChange}>
                    <option value={50}>All calls</option>
                    <option value={50}>50 calls/day</option>
                    <option value={100}>100 calls/day</option>
                    <option value={200}>200 calls/day</option>
                </select>
            </div>
            <div class="w-full sm:w-auto mb-4 sm:mb-0">
                <label htmlFor="startDate" class="text-slate-700 font-bold">
                    Start Date:
                </label>
                <span
                    class="inline-block ml-1 px-1 py-0 bg-yellow-500 text-white text-[10px] font-semibold rounded">
                    PRO
                </span>
                <input disabled type="date" id="startDate" name="start_date"
                    class="block mt-1 border-[1px] h-7 border-gray-300 rounded-md focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50 cursor-not-allowed w-full sm:w-auto" />
            </div>
            <button
                id="startCall"
                class="w-full sm:w-auto bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                >
                <svg class="w-6 h-6 inline-block mr-2" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 20 20" fill="currentColor">
                    <path fillRule="evenodd"
                        d="M10 2a8 8 0 100 16 8 8 0 000-16zm0 14a6 6 0 110-12 6 6 0 010 12zm1-8a1 1 0 100-2 1 1 0 000 2z"
                        clipRule="evenodd" />
                </svg>
                Start Call
            </button>
        </div>
    </div>
</form>
                    </div>

                </div>
                </main>
            </div>
        </div>
    </div>

    
    </body>
    <script>

document.getElementById('file-upload').addEventListener('change', function(event) {
    const fileList = event.target.files;
    const fileListElement = document.getElementById('file-list');
    fileListElement.innerHTML = ''; // Clear previous list

    Array.from(fileList).forEach(file => {
        const listItem = document.createElement('li');
        listItem.className = 'flex items-center justify-between py-2 bg-gray-100 px-2 rounded-md my-2';
        listItem.innerHTML = `
            <span class="text-sm text-gray-700">${file.name}</span>
        `;
        fileListElement.appendChild(listItem);
    });
});

// function removeFile(button) {
//     const listItem = button.closest('li');
//     listItem.remove();
// }
        
        const textareaCall= document.getElementById('call-instructions-textarea');
        const textareaFollow= document.getElementById('follow-instructions-textarea');

        const wordCountDisplayCall = document.getElementById('word-count-call');
        const wordCountDisplayFollow = document.getElementById('word-count-follow');
        const wordLimit = 300;

        textareaCall.addEventListener('input', () => {
            const text = textareaCall.value;
            const wordCount = text.trim().split(/\s+/).filter(Boolean).length; // Count words
            
            if (wordCount > wordLimit) {
                // Truncate text to fit word limit
                const words = text.trim().split(/\s+/).slice(0, wordLimit).join(' ');
                textareaCall.value = words;
            }

            // Update the display with current word count
            wordCountDisplayCall.textContent = `Letter count: ${textareaCall.value.length} / 300`;
        });

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


    </script>
    
</html>