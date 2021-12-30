<aside
    x-data="{}"
    x-cloak
    x-bind:class="$store.sidebar.isOpen ? 'translate-x-0' : '-translate-x-full'"
    class="fixed inset-y-0 left-0 rtl:left-auto rtl:right-0 z-20 flex flex-col h-screen overflow-hidden shadow-2xl duration-300 bg-white lg:border-r w-80 lg:z-0 lg:translate-x-0"
>
    <header class="border-b h-[4rem] shrink-0 px-6 flex items-center">
        <a href="#">
            <div class="text-xl font-bold tracking-tight">
                {{ config('app.name') }}
            </div>
        </a>
    </header>

    <nav class="flex-1 overflow-y-auto py-6">
        <ul class="space-y-6 px-6">
            <li>
                <ul class="text-sm space-y-1 -mx-3">
                    @foreach($links as $link)
                        <li>
                            <a
                                href="{{ $link[2] }}"
                                class="flex items-center gap-3 px-3 py-2 rounded-lg font-medium transition bg-primary-500 text-white"
                            >
                                @svg("heroicon-s-{$link[1]}", 'w-5 h-5')
                                <span>
                                    {{ $link[0] }}
                                </span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </li>

        </ul>
    </nav>

    <footer class="border-t px-6 py-3 flex shrink-0 items-center gap-3">
        <x-user-avatar name="User Name" />

        <div>
            <p class="text-sm font-bold">
                User Name
            </p>

            <p class="text-xs text-gray-500 hover:text-gray-700 focus:text-gray-700">
                <a href="#">
                    Sign out
                </a>
            </p>
        </div>
    </footer>
</aside>
