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
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-06SJGFQCVN');
  </script>
  @vite('resources/css/app.css')
  @livewireStyles
</head>
<body>
  <div class="flex w-full">
    <div class="fixed inset-0 flex justify-center sm:px-8"><div class="flex w-full max-w-7xl lg:px-8"><div class="w-full bg-white ring-1 ring-zinc-100 dark:bg-zinc-900 dark:ring-zinc-300/20"></div></div></div>
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
                    <a aria-label="Home" class="block h-16 w-16 origin-left pointer-events-auto" style="transform:var(--avatar-image-transform)" href="/">
                      <img srcset="{{ '/storage/'.get_setting('logo') }}" alt="{{ get_setting('siteTitle') }}" fetchpriority="high" width="512" height="512" decoding="async" data-nimg="1" class="rounded-full bg-zinc-100 object-cover dark:bg-zinc-800 h-16 w-16" style="color:transparent" sizes="4rem">
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="top-0 z-10 h-16 pt-6" style="position:var(--header-position)">
          <div class="sm:px-8 top-[var(--header-top,theme(spacing.6))] w-full" style="position:var(--header-inner-position)">
            <div class="mx-auto w-full max-w-7xl lg:px-8">
              <div class="relative px-4 sm:px-8 lg:px-12">
                <div class="mx-auto max-w-2xl lg:max-w-5xl">
                  <div class="relative flex gap-4">
                    <div class="flex flex-1"></div>
                    <div class="flex flex-1 justify-end md:justify-center">
                      <div class="pointer-events-auto md:hidden" data-headlessui-state="">
                        <button class="group flex items-center rounded-full bg-white/90 px-4 py-2 text-sm font-medium text-zinc-800 shadow-lg shadow-zinc-800/5 ring-1 ring-zinc-900/5 backdrop-blur dark:bg-zinc-800/90 dark:text-zinc-200 dark:ring-white/10 dark:hover:ring-white/20" type="button" aria-expanded="false" data-headlessui-state="" id="headlessui-popover-button-:R5miqja:">
                          Menu
                          <svg viewBox="0 0 8 6" aria-hidden="true" class="ml-3 h-auto w-2 stroke-zinc-500 group-hover:stroke-zinc-700 dark:group-hover:stroke-zinc-400">
                            <path d="M1.75 1.75 4 4.25l2.25-2.5" fill="none" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </button>
                      </div>
                      <div hidden="" style="position:fixed;top:1px;left:1px;width:1px;height:0;padding:0;margin:-1px;overflow:hidden;clip:rect(0, 0, 0, 0);white-space:nowrap;border-width:0;display:none"></div>
                    </div>
                    <div class="flex justify-end md:flex-1">
                      <div class="pointer-events-auto">
                        <button type="button" aria-label="Switch to dark theme" class="hidden group rounded-full bg-white/90 px-3 py-2 shadow-lg shadow-zinc-800/5 ring-1 ring-zinc-900/5 backdrop-blur transition dark:bg-zinc-800/90 dark:ring-white/10 dark:hover:ring-white/20">
                          <svg viewBox="0 0 24 24" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" class="h-6 w-6 fill-zinc-100 stroke-zinc-500 transition group-hover:fill-zinc-200 group-hover:stroke-zinc-700 dark:hidden [@media(prefers-color-scheme:dark)]:fill-teal-50 [@media(prefers-color-scheme:dark)]:stroke-teal-500 [@media(prefers-color-scheme:dark)]:group-hover:fill-teal-50 [@media(prefers-color-scheme:dark)]:group-hover:stroke-teal-600">
                            <path d="M8 12.25A4.25 4.25 0 0 1 12.25 8v0a4.25 4.25 0 0 1 4.25 4.25v0a4.25 4.25 0 0 1-4.25 4.25v0A4.25 4.25 0 0 1 8 12.25v0Z"></path>
                            <path d="M12.25 3v1.5M21.5 12.25H20M18.791 18.791l-1.06-1.06M18.791 5.709l-1.06 1.06M12.25 20v1.5M4.5 12.25H3M6.77 6.77 5.709 5.709M6.77 17.73l-1.061 1.061" fill="none"></path>
                          </svg>
                          <svg viewBox="0 0 24 24" aria-hidden="true" class="hidden h-6 w-6 fill-zinc-700 stroke-zinc-500 transition dark:block [@media(prefers-color-scheme:dark)]:group-hover:stroke-zinc-400 [@media_not_(prefers-color-scheme:dark)]:fill-teal-400/10 [@media_not_(prefers-color-scheme:dark)]:stroke-teal-500">
                            <path d="M17.25 16.22a6.937 6.937 0 0 1-9.47-9.47 7.451 7.451 0 1 0 9.47 9.47ZM12.75 7C17 7 17 2.75 17 2.75S17 7 21.25 7C17 7 17 11.25 17 11.25S17 7 12.75 7Z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </button>
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
            <div class="border-t border-zinc-100 pb-16 pt-10 dark:border-zinc-700/40">
              <div class="relative px-4 sm:px-8 lg:px-12">
                <div class="mx-auto max-w-2xl lg:max-w-5xl">
                  <div class="flex flex-col items-center justify-between gap-6 sm:flex-row">
                    <p class="text-sm text-zinc-400 dark:text-zinc-500">© <!-- -->2025<!-- --> {{ get_setting('siteTitle') }}. All rights reserved.</p>
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
  <script>
    const form = document.getElementById('js-form')
    const submitBtn = document.getElementById('submit-button')
    const processing = false
    form.addEventListener('submit', (e) => {
      e.preventDefault()
      let formData = new FormData(e.target)
      const successMessage = document.getElementById('success-text-message')
      const errorMessage = document.getElementById('error-text-message')
      const errorTexts = document.querySelectorAll('.error-text')
      errorTexts.forEach(el => el.classList.add('hidden'))
      successMessage.classList.add('hidden')
      errorMessage.classList.add('hidden')
      submitBtn.textContent = 'Sending...'
      fetch('/contact', {
        method: `POST`,
        headers: {
          'Accept': 'application/json'
        },
        body: formData
      })
      .then(response => response.json())
      .then((response) => {
        if (! response.success && response.errors) {
          for (field in response.errors) {
            let input = document.getElementById(`error-${field}`)
            if (input) {
              input.textContent = response.errors[field]
              input.classList.remove('hidden')
            }
          }
        } else if (response.success) {
          successMessage.classList.remove('hidden')
          form.reset()
        } else {
          errorMessage.innerHTML = response.message
          errorMessage.classList.remove('hidden')
        }
        submitBtn.textContent = 'Submit'
      })
    })
  </script>
</body>
</html>
