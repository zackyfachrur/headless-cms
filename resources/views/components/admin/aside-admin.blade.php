<aside class="relative hidden w-64 h-screen bg-white shadow-xl bg-sidebar sm:block">
    <div class="flex items-center gap-2 px-6 pb-4 mt-4 border-b ">
        <img src="{{ asset('images/nusatechno-logo.png') }}" alt="Nusa Techno Logo" class="w-[40px]"/>
        <h2 class="font-bold uppercase">Admin</h2>
    </div>
    <nav class="flex flex-col pt-3 mt-2 text-base font-semibold text-white">
        <ul class="flex flex-col gap-4">
            <li>
                <a href="/admin/dashboard"
                   class="{{ Request::RouteIs('admin.dashboard') ? 'bg-white text-blue-500 rounded-r-2xl mr-4' : 'opacity-75 hover:opacity-100  text-black' }} flex items-center py-2 pl-6 hover:no-underline">
                    <i class="mr-3 fas fa-tachometer-alt"></i>
                    Dashboard
                </a>
            </li>
            <li>
                <a href="/admin/portfolio"
                   class="{{ Request::is('admin/portfolio') || Request::is('admin/portfolio/*/edit') ? 'bg-white text-blue-500 rounded-r-2xl mr-4' : 'opacity-75 hover:opacity-100  text-black' }} flex items-center py-2 pl-6 hover:no-underline">
                    <i class="mr-3 fas fa-pager"></i>
                    Portfolio
                </a>
            </li>
            <li>
                <a href="/admin/karir"
                  class="{{ Request::is('admin/karir') ? 'bg-white text-blue-500 rounded-r-2xl mr-4' : 'opacity-75 hover:opacity-100  text-black' }} flex items-center py-2 pl-6 hover:no-underline">
                    <i class="mr-3 fas fa-briefcase"></i>
                    Karir
                </a>
            </li>
            <li>
                <a href="/admin/forms"
                    class="{{ Request::is('admin') ? 'bg-white text-blue-500 rounded-r-2xl mr-4' : 'opacity-75 hover:opacity-100  text-black' }} flex items-center py-2 pl-6 hover:no-underline">
                    <i class="mr-3 fas fa-person"></i>
                    Client
                </a>
            </li>
            <li>
                <a href="/admin/calendar"
                   class="{{ Request::RouteIs('admin.calendar') ? 'bg-white text-blue-500 rounded-r-2xl mr-4' : 'opacity-75 hover:opacity-100  text-black' }} flex items-center py-2 pl-6 hover:no-underline">
                    <i class="mr-3 fas fa-calendar"></i>
                    Calendar
                </a>
            </li>
        </ul>
    </nav>
</aside>
