<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Plans</title>
</head>
<body>
<div class="">
        <div class="flex h-screen overflow-hidden">

            <!-- sidebar -->
            <aside
                class="absolute left-0 top-0 z-9999 flex h-screen w-72.5 flex-col overflow-y-hidden bg-white duration-300 ease-linear lg:static lg:translate-x-0 -translate-x-full">
                <div class="flex items-center justify-between gap-2 px-6 py-5.5 lg:py-6.5">
                    <a href="/">
                        <img src="" alt="Logo" />
                    </a>

                    <button aria-controls="sidebar" class="block hidden">
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
                                        class="group relative flex items-center gap-2.5 rounded-md px-4 py-2 font-medium text-black hover:text-white duration-300 ease-in-out hover:bg-[#8b3dff]  text-black">
                                        <svg class="fill-current" width="18" height="18" viewBox="0 0 18 18" fill="none"
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
                                    <a href="/call" class="group relative flex items-center gap-2.5
                                        rounded-md py-2 px-4 font-medium text-black hover:text-white duration-300 ease-in-out hover:bg-[#8b3dff] text-black ">
                                        <svg class="fill-current" width="18" height="19" viewBox="0 0 18 19" fill="none"
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
                                        py-2 px-4 font-medium text-black text-white duration-300
                                        ease-in-out bg-[#8b3dff] text-black">
                                        <svg version="1.1" id="Layer_1" width="20" height="20"
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
                            <button aria-controls="sidebar"
                                class="z-[99999] block rounded-sm border border-stroke bg-white p-1.5 shadow-sm lg:hidden">
                                <span class="relative block h-5.5 w-5.5 cursor-pointer">
                                    <span class="relative block h-full w-full">
                                        <span
                                            class="relative left-0 top-0 my-1 block h-0.5 w-0 rounded-sm bg-black transition-all duration-200 ease-in-out "></span>
                                        <span
                                            class="relative left-0 top-0 my-1 block h-0.5 w-0 rounded-sm bg-black transition-all duration-200 ease-in-out "></span>
                                        <span
                                            class="relative left-0 top-0 my-1 block h-0.5 w-0 rounded-sm bg-black transition-all duration-200 ease-in-out "></span>
                                    </span>
                                    <span class="absolute right-0 h-full w-full rotate-45">
                                        <span
                                            class="absolute left-2.5 top-0 block h-full w-0.5 rounded-sm bg-black transition-all duration-200 ease-in-out "></span>
                                        <span
                                            class="absolute left-0 top-2.5 block h-0.5 w-full rounded-sm bg-black transition-all duration-200 ease-in-out "></span>
                                    </span>
                                </span>
                            </button>

                            <a href="/" class="block flex-shrink-0 lg:hidden">
                                <img src="path/to/your/logo-icon.png" alt="Logo" class="h-10" />
                            </a>
                            <a href="/call" class="block flex-shrink-0">
                                <button type="button"
                                    class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100  ">
                                    Upload File
                                </button>
                            </a>
                        </div>

                        <div class="hidden sm:block">
                            <!-- Optional content for larger screens -->
                        </div>

                        <div class="flex items-center gap-3 sm:gap-7">
                            <ul class="flex items-center gap-2 sm:gap-4">
                                <!-- Dark Mode Toggler -->
                                <!-- <DarkModeSwitcher /> -->
                                <!-- Notification Menu Area -->
                                <li><a href="#notifications">Notifications</a></li>
                                <!-- Chat Notification Area -->
                                <!-- <DropdownMessage /> -->
                            </ul>

                            <!-- User Area -->
                            <li><a href="#user">User</a></li>
                        </div>
                    </div>
                </header>

                <main>
                <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
                <div class="bg-white p-4 rounded-md">
    <main>
      <!-- Pricing section -->
      <div class="mx-auto max-w-3xl px-6 lg:px-1">
        <p class="mx-auto max-w-2xl text-center text-lg leading-8 text-gray-600">
          Choose an affordable plan
        </p>
        <div class="m-2 flex justify-center pb-4">
          <fieldset aria-label="Payment frequency">
            <div class="grid grid-cols-2 gap-x-1 rounded-full p-1 text-center text-xs font-semibold leading-5 ring-1 ring-inset ring-gray-200">
              <!-- Payment frequency options -->
              <!-- Replace with actual options -->
              <label class="cursor-pointer rounded-full px-2.5 py-1 bg-indigo-600 text-white">
                <input type="radio" name="frequency" value="monthly" class="sr-only" checked>
                Monthly
              </label>
              <label class="cursor-pointer rounded-full px-2.5 py-1 text-gray-500">
                <input type="radio" name="frequency" value="yearly" class="sr-only">
                Yearly
              </label>
            </div>
          </fieldset>
        </div>
        <div class="isolate mx-auto m-4 grid max-w-md grid-cols-1 gap-8 md:max-w-2xl md:grid-cols-2 lg:max-w-4xl xl:mx-0 xl:max-w-none xl:grid-cols-2">
          <!-- Pricing tiers -->
          <!-- Replace with actual tiers -->
          <div class="bg-gradient-to-t from-indigo-500 to-indigo-800 text-white rounded-3xl p-4 shadow-md shadow-gray-500/50 cursor-pointer">
            <h2 id="basic" class="text-lg font-semibold leading-8">Basic Plan</h2>
            <p class="mt-4 text-sm leading-6">This is the basic plan description.</p>
            <p class="mt-6 flex items-baseline gap-x-1">
              <span class="text-4xl font-bold tracking-tight">$10</span>
              <span class="text-sm font-semibold leading-6">/month</span>
            </p>
            <a href="#" aria-describedby="basic" class="mt-6 block rounded-md px-3 py-2 text-center text-sm font-semibold leading-6 bg-white text-indigo-600 shadow-sm">
              Buy plan
            </a>
            <ul role="list" class="mt-3 space-y-1 text-sm leading-6">
              <li class="flex gap-x-1">
                <svg class="h-6 w-5 flex-none" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                Feature 1
              </li>
              <li class="flex gap-x-1">
                <svg class="h-6 w-5 flex-none" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                Feature 2
              </li>
            </ul>
          </div>

          <div class="text-gray-900 rounded-3xl p-4 shadow-md shadow-gray-500/50 cursor-pointer">
            <h2 id="premium" class="text-lg font-semibold leading-8">Premium Plan</h2>
            <p class="mt-4 text-sm leading-6">This is the premium plan description.</p>
            <p class="mt-6 flex items-baseline gap-x-1">
              <span class="text-4xl font-bold tracking-tight">$30</span>
              <span class="text-sm font-semibold leading-6">/month</span>
            </p>
            <a href="#" aria-describedby="premium" class="mt-6 block rounded-md px-3 py-2 text-center text-sm font-semibold leading-6 text-indigo-600 ring-1 ring-inset ring-indigo-200 hover:ring-indigo-300">
              Buy plan
            </a>
            <ul role="list" class="mt-3 space-y-1 text-sm leading-6">
              <li class="flex gap-x-1">
                <svg class="h-6 w-5 flex-none" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                Feature A
              </li>
              <li class="flex gap-x-1">
                <svg class="h-6 w-5 flex-none" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                Feature B
              </li>
            </ul>
          </div>
        </div>
      </div>
    </main>
  </div>
                </div>
                </main>
            </div>
        </div>
    </div>

    
    </body>
</html>