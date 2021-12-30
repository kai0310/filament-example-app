<x-admin-layout>
    <x-slot name="title">
        List
    </x-slot>

        <div class="grid grid-cols-1 gap-4 lg:grid-cols-2 lg:gap-8 mb-6">
            <div class="p-2 space-y-2 bg-white shadow rounded-xl">

                <div class="space-y-2">
                    <div class="px-4 py-2 space-y-4">
                        <div class="h-12 flex items-center space-x-4 rtl:space-x-reverse">

                            <x-user-avatar name="User Name" />

                            <div>
                                <h2 class="text-lg sm:text-xl font-bold tracking-tight">
                                    Welcome, User Name
                                </h2>

                                <p class="text-sm">
                                    <a href="#" class="text-gray-600 hover:text-primary-500 focus:outline-none focus:underline">
                                        Sign out
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
