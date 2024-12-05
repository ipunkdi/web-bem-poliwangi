<aside
class="fixed top-0 left-0 z-40 w-64 h-screen pt-14 transition-transform -translate-x-full bg-gray-50 border-r border-gray-200 md:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
aria-label="Sidenav"
id="drawer-navigation"
>
    <div class="overflow-y-auto py-5 px-3 h-full bg-gray-50 dark:bg-gray-800">
        <ul class="space-y-2">
        <li>
            <a
            href="/dashboard"
            class="flex items-center p-2 text-base font-medium {{ request()->is('dashboard') ? 'bg-primary-700 text-white hover:bg-primary-700 hover:text-white' : 'text-gray-900 hover:bg-gray-100' }} rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group"
            >
            <svg class="w-6 h-6 {{ request()->is('dashboard') ? 'text-white' : 'text-gray-800' }} text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v5m-3 0h6M4 11h16M5 15h14a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v9a1 1 0 0 0 1 1Z"/>
            </svg>
            <span class="ml-3">Dashboard</span>
            </a>
        </li>
        <li>
            <a
            href="/dashboard/kastrats"
            class="flex items-center p-2 text-base font-medium {{ request()->is('dashboard/kastrats*') ? 'bg-primary-700 text-white hover:bg-primary-700 hover:text-white' : 'text-gray-900 hover:bg-gray-100' }} text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group"
            >
            <svg class="w-6 h-6 {{ request()->is('dashboard/kastrats*') ? 'text-white' : 'text-gray-800' }} text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 3v4a1 1 0 0 1-1 1H5m4 8h6m-6-4h6m4-8v16a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V7.914a1 1 0 0 1 .293-.707l3.914-3.914A1 1 0 0 1 9.914 3H18a1 1 0 0 1 1 1Z"/>
            </svg>
            <span class="ml-3">Kastrat</span>
            </a>
        </li>
        <li>
            <a
            href="/dashboard/kementerians"
            class="flex items-center p-2 text-base font-medium {{ request()->is('dashboard/kementerians*') ? 'bg-primary-700 text-white hover:bg-primary-700 hover:text-white' : 'text-gray-900 hover:bg-gray-100' }} text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group"
            >
            <svg class="w-6 h-6 {{ request()->is('dashboard/kementerians*') ? 'text-white' : 'text-gray-800' }} text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M3 21h18M4 18h16M6 10v8m4-8v8m4-8v8m4-8v8M4 9.5v-.955a1 1 0 0 1 .458-.84l7-4.52a1 1 0 0 1 1.084 0l7 4.52a1 1 0 0 1 .458.84V9.5a.5.5 0 0 1-.5.5h-15a.5.5 0 0 1-.5-.5Z"/>
            </svg>
            <span class="ml-3">Kementerian</span>
            </a>
        </li>
        </ul>
    </div>
</aside>