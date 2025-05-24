<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') {{ get_setting('siteTitle') }}</title>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-06SJGFQCVN"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-06SJGFQCVN');

    </script>
    @vite('resources/css/app.css')
    @livewireStyles
</head>
<body>
    <div class="flex w-full">
        <div class="fixed inset-0 flex justify-center sm:px-8">
            <div class="flex w-full max-w-7xl lg:px-8">
                <div class="w-full bg-white ring-1 ring-zinc-100 dark:bg-zinc-900 dark:ring-zinc-300/20"></div>
            </div>
        </div>
        <div class="relative flex w-full flex-col">
            <header class="pointer-events-none relative z-50 flex flex-none flex-col" style="height:var(--header-height);margin-bottom:var(--header-mb)">
                <div class="order-last mt-[calc(theme(spacing.16)-theme(spacing.3))]"></div>
                <div class="sm:px-8 top-0 order-last -mb-3 pt-3" style="position:var(--header-position)">
                    <div class="mx-auto w-full max-w-7xl lg:px-8">
                        <div class="relative px-4 sm:px-8 lg:px-12">
                            <div class="mx-auto max-w-2xl lg:max-w-5xl">
                                <div class="top-[var(--avatar-top,theme(spacing.3))] w-full" style="position:var(--header-inner-position)">
                                    <div class="relative">
                                        <div class="absolute left-0 top-3 origin-left transition-opacity h-10 w-10 rounded-full bg-white/90 p-0.5 shadow-lg shadow-zinc-800/5 ring-1 ring-zinc-900/5 backdrop-blur dark:bg-zinc-800/90 dark:ring-white/10" style="opacity:var(--avatar-border-opacity, 0);transform:var(--avatar-border-transform)"></div>
                                        {{-- <a aria-label="Home" class="block h-16 w-16 origin-left pointer-events-auto" style="transform:var(--avatar-image-transform)" href="/">
                                            <img srcset="{{ '/storage/'.get_setting('logo') }}" alt="{{ get_setting('siteTitle') }}" fetchpriority="high" width="512" height="512" decoding="async" data-nimg="1" class="rounded-full bg-zinc-100 object-cover dark:bg-zinc-800 h-16 w-16" style="color:transparent" sizes="4rem">
                                        </a> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="top-0 z-10 h-16 pt-6" style="position:var(--header-position)">
                    <div class="sm:px-8 top-(--header-top,--spacing(6)) w-full" style="position:var(--header-inner-position)">
                        <div class="mx-auto w-full max-w-7xl lg:px-8">
                            <div class="relative px-4 sm:px-8 lg:px-12">
                                <div class="mx-auto max-w-2xl lg:max-w-5xl">
                                    <div class="relative flex gap-4">
                                        <div class="flex flex-1"><div class="h-10 w-10 rounded-full bg-white/90 p-0.5 shadow-lg ring-1 shadow-zinc-800/5 ring-zinc-900/5 backdrop-blur-sm dark:bg-zinc-800/90 dark:ring-white/10"><a aria-label="Home" class="pointer-events-auto" href="/"><img alt="" fetchpriority="high" width="512" height="512" decoding="async" data-nimg="1" class="rounded-full bg-zinc-100 object-cover dark:bg-zinc-800 h-9 w-9" sizes="2.25rem" srcset="{{ '/storage/'.get_setting('logo') }}" src="{{ '/storage/'.get_setting('logo') }}" style="color: transparent;"></a></div></div>
                                        <div class="flex flex-1 justify-end md:justify-center">
                                            <div class="pointer-events-auto md:hidden" data-headlessui-state=""><button class="group flex items-center rounded-full bg-white/90 px-4 py-2 text-sm font-medium text-zinc-800 shadow-lg ring-1 shadow-zinc-800/5 ring-zinc-900/5 backdrop-blur-sm dark:bg-zinc-800/90 dark:text-zinc-200 dark:ring-white/10 dark:hover:ring-white/20" type="button" aria-expanded="false" data-headlessui-state="" id="headlessui-popover-button-:Rbmiqja:">Menu<svg viewBox="0 0 8 6" aria-hidden="true" class="ml-3 h-auto w-2 stroke-zinc-500 group-hover:stroke-zinc-700 dark:group-hover:stroke-zinc-400">
                                                        <path d="M1.75 1.75 4 4.25l2.25-2.5" fill="none" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg></button></div>
                                            <div hidden="" style="position:fixed;top:1px;left:1px;width:1px;height:0;padding:0;margin:-1px;overflow:hidden;clip:rect(0, 0, 0, 0);white-space:nowrap;border-width:0;display:none"></div>
                                            <nav class="pointer-events-auto hidden md:block">
                                                <ul class="flex rounded-full bg-white/90 px-3 text-sm font-medium text-zinc-800 shadow-lg ring-1 shadow-zinc-800/5 ring-zinc-900/5 backdrop-blur-sm dark:bg-zinc-800/90 dark:text-zinc-200 dark:ring-white/10">
                                                    <li><a class="relative block px-3 py-2 transition hover:text-teal-500 dark:hover:text-teal-400 {{ request()->path() === '/' ? 'text-teal-500' : '' }}" href="/">Home</a></li>
                                                    <li><a class="relative block px-3 py-2 transition hover:text-teal-500 dark:hover:text-teal-400 {{ request()->path() === 'about' ? 'text-teal-500' : '' }}" href="/about">About</a></li>
                                                    <li><a class="relative block px-3 py-2 transition hover:text-teal-500 dark:hover:text-teal-400 {{ request()->path() === 'projects' ? 'text-teal-500' : '' }}" href="/projects">Projects</a></li>
                                                    <li><a class="relative block px-3 py-2 transition hover:text-teal-500 dark:hover:text-teal-400 {{ request()->path() === 'skills' ? 'text-teal-500' : '' }}" href="/skills">Skills</a></li>
                                                    <li><a class="relative block px-3 py-2 transition hover:text-teal-500 dark:hover:text-teal-400 {{ request()->path() === 'contact' ? 'text-teal-500' : '' }}" href="/contact">Contact</a></li>
                                                </ul>
                                            </nav>
                                        </div>
                                        <div class="flex justify-end md:flex-1">
                                            <div class="pointer-events-auto">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <div class="flex-none" style="height:var(--content-offset)"></div>
            <main class="flex-auto">
                @yield('content')
            </main>
            <footer class="mt-32 flex-none">
                <div class="sm:px-8">
                    <div class="mx-auto w-full max-w-7xl lg:px-8">
                        <div class="border-t border-zinc-100 pt-10 pb-16 dark:border-zinc-700/40">
                            <div class="relative px-4 sm:px-8 lg:px-12">
                                <div class="mx-auto max-w-2xl lg:max-w-5xl">
                                    <div class="flex flex-col items-center justify-between gap-6 md:flex-row">
                                        <div class="flex flex-wrap justify-center gap-x-6 gap-y-1 text-sm font-medium text-zinc-800 dark:text-zinc-200">
                                          <a class="transition hover:text-teal-500 dark:hover:text-teal-400" href="/">Home</a>
                                          <a class="transition hover:text-teal-500 dark:hover:text-teal-400" href="/about">About</a>
                                          <a class="transition hover:text-teal-500 dark:hover:text-teal-400" href="/projects">Projects</a>
                                          <a class="transition hover:text-teal-500 dark:hover:text-teal-400" href="/skills">Skills</a>
                                          <a class="transition hover:text-teal-500 dark:hover:text-teal-400" href="/contact">Contact</a>
                                        </div>
                                        <p class="text-sm text-zinc-400 dark:text-zinc-500">©
                                            <!-- -->2025
                                            <!-- --> {{ get_setting('siteTitle') }}. All rights reserved.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    @livewireScripts
    @yield('script')
</body>
</html>
