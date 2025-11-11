<div>
  <aside
    id="drawer-navigation"
    aria-label="Sidenav"
    class="fixed top-0 left-0 z-40 w-64 h-screen pt-14 transition-transform
    -translate-x-full bg-white border-r border-gray-200 md:translate-x-0
    dark:bg-gray-800 dark:border-gray-700"
  >
    <div class="overflow-y-auto py-5 px-3 h-full bg-white dark:bg-gray-800">
      <ul class="space-y-2">

        <li>
          <x-admin.side-link href="/admin/dashboard" label="Dashboard" :active="request()->is('admin/dashboard*')">
            <svg
              aria-hidden="true"
              class="w-6 h-6"
              fill="currentColor"
              viewBox="0 0 20 20"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
              <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
            </svg>
          </x-admin.side-link>
        </li>

        {{-- Menu Students --}}
        <li>
          <x-admin.side-link href="/admin/student" label="Students" :active="request()->is('admin/student*')">
            <svg
              aria-hidden="true"
              class="w-6 h-6"
              fill="currentColor"
              viewBox="0 0 20 20"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
              <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
            </svg>
          </x-admin.side-link>
        </li>

        {{-- Menu Classroom --}}
        <li>
          <x-admin.side-link href="/admin/classroom" label="Classroom" :active="request()->is('admin/classroom*')">
            <svg
              aria-hidden="true"
              class="w-6 h-6"
              fill="currentColor"
              viewBox="0 0 20 20"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path d="M10 2a8 8 0 100 16V2z"></path>
            </svg>
          </x-admin.side-link>
        </li>

      </ul>
    </div>
  </aside>
</div>
