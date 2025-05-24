@extends('layout')

@section('title', '')

@section('content')
<div class="sm:px-8 mt-16 sm:mt-32">
  <div class="mx-auto w-full max-w-7xl lg:px-8">
    <div class="relative px-4 sm:px-8 lg:px-12">
      <div class="mx-auto max-w-2xl lg:max-w-5xl">
        <header class="max-w-full">
          <h1 class="text-4xl font-bold tracking-tight text-zinc-800 sm:text-5xl dark:text-zinc-100">{{ get_setting('contactTitle') }}</h1>
          <p class="mt-6 text-base text-zinc-600 dark:text-zinc-400">{{ get_setting('contactDescription') }}</p>
        </header>
        <div class="mt-16 sm:mt-20">
          <div class="space-y-20">
            <form class="rounded-2xl border border-zinc-100 p-6 dark:border-zinc-700/40" action="/contact" method="POST" id="js-form">
              @csrf
              @honeypot
              
              <h2 class="flex text-sm font-semibold text-zinc-900 dark:text-zinc-100">
                <svg viewBox="0 0 24 24" fill="none" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" class="h-6 w-6 flex-none">
                  <path d="M2.75 7.75a3 3 0 0 1 3-3h12.5a3 3 0 0 1 3 3v8.5a3 3 0 0 1-3 3H5.75a3 3 0 0 1-3-3v-8.5Z" class="fill-zinc-100 stroke-zinc-400 dark:fill-zinc-100/10 dark:stroke-zinc-500"></path>
                  <path d="m4 6 6.024 5.479a2.915 2.915 0 0 0 3.952 0L20 6" class="stroke-zinc-400 dark:stroke-zinc-500"></path>
                </svg>
                <span class="ml-3">Message</span>
              </h2>
              
              <h3 id="success-text-message" class="hidden text-green-800 font-xl font-semibold mt-2">Message sent!</h3>
              <h3 id="error-text-message" class="hidden text-red-800 font-xl font-semibold mt-2"></h3>
              
              <div class="mt-6">
                <div class="mb-4">
                  <input type="text" name="name" placeholder="Name" aria-label="Name" class="min-w-0 w-full flex-auto appearance-none rounded-md border border-zinc-900/10 bg-white px-3 py-[calc(theme(spacing.2)-1px)] shadow-md shadow-zinc-800/5 placeholder:text-zinc-400 focus:border-teal-500 focus:outline-none focus:ring-4 focus:ring-teal-500/10 sm:text-sm dark:border-zinc-700 dark:bg-zinc-700/[0.15] dark:text-zinc-200 dark:placeholder:text-zinc-500 dark:focus:border-teal-400 dark:focus:ring-teal-400/10">
                  <p id="error-name" class="error-text hidden text-sm text-red-300 mt-1 mb-0"></p>
                </div>
                
                <div class="mb-4">
                  <input type="email" name="email" placeholder="Email address" aria-label="Email address" class="min-w-0 w-full flex-auto appearance-none rounded-md border border-zinc-900/10 bg-white px-3 py-[calc(theme(spacing.2)-1px)] shadow-md shadow-zinc-800/5 placeholder:text-zinc-400 focus:border-teal-500 focus:outline-none focus:ring-4 focus:ring-teal-500/10 sm:text-sm dark:border-zinc-700 dark:bg-zinc-700/[0.15] dark:text-zinc-200 dark:placeholder:text-zinc-500 dark:focus:border-teal-400 dark:focus:ring-teal-400/10">
                  <p id="error-email" class="error-text hidden text-sm text-red-300 mt-1 mb-0"></p>
                </div>
                
                <div class="mb-4">
                  <textarea placeholder="Message" name="message" cols="30" rows="10" aria-label="Email address" class="min-w-0 w-full flex-auto appearance-none rounded-md border border-zinc-900/10 bg-white px-3 py-[calc(theme(spacing.2)-1px)] shadow-md shadow-zinc-800/5 placeholder:text-zinc-400 focus:border-teal-500 focus:outline-none focus:ring-4 focus:ring-teal-500/10 sm:text-sm dark:border-zinc-700 dark:bg-zinc-700/[0.15] dark:text-zinc-200 dark:placeholder:text-zinc-500 dark:focus:border-teal-400 dark:focus:ring-teal-400/10"></textarea>
                  <p id="error-message" class="error-text hidden text-sm text-red-300 mt-1 mb-0"></p>
                </div>
                
                <div class="mb-4 text-right">
                  <button id="submit-button" class="inline-flex items-center gap-2 justify-center rounded-md py-2 px-3 text-sm outline-offset-2 transition active:transition-none bg-zinc-800 font-semibold text-zinc-100 hover:bg-zinc-700 active:bg-zinc-800 active:text-zinc-100/70 dark:bg-zinc-700 dark:hover:bg-zinc-600 dark:active:bg-zinc-700 dark:active:text-zinc-100/70 flex-none" type="submit">Submit</button>
                </div>
                <div data-lastpass-icon-root="" style="position: relative !important; height: 0px !important; width: 0px !important; float: left !important;"></div>
              </div>
            </form>
            
            <ul role="list">
              <li class="mt-4 flex">
                <a class="group flex text-sm font-medium text-zinc-800 transition hover:text-teal-500 dark:text-zinc-200 dark:hover:text-teal-500" href="{{ get_setting('githubUrl') }}">
                  <svg viewBox="0 0 24 24" aria-hidden="true" class="h-6 w-6 flex-none fill-zinc-500 transition group-hover:fill-teal-500">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C6.475 2 2 6.588 2 12.253c0 4.537 2.862 8.369 6.838 9.727.5.09.687-.218.687-.487 0-.243-.013-1.05-.013-1.91C7 20.059 6.35 18.957 6.15 18.38c-.113-.295-.6-1.205-1.025-1.448-.35-.192-.85-.667-.013-.68.788-.012 1.35.744 1.538 1.051.9 1.551 2.338 1.116 2.912.846.088-.666.35-1.115.638-1.371-2.225-.256-4.55-1.14-4.55-5.062 0-1.115.387-2.038 1.025-2.756-.1-.256-.45-1.307.1-2.717 0 0 .837-.269 2.75 1.051.8-.23 1.65-.346 2.5-.346.85 0 1.7.115 2.5.346 1.912-1.333 2.75-1.05 2.75-1.05.55 1.409.2 2.46.1 2.716.637.718 1.025 1.628 1.025 2.756 0 3.934-2.337 4.806-4.562 5.062.362.32.675.936.675 1.897 0 1.371-.013 2.473-.013 2.82 0 .268.188.589.688.486a10.039 10.039 0 0 0 4.932-3.74A10.447 10.447 0 0 0 22 12.253C22 6.588 17.525 2 12 2Z"></path>
                  </svg>
                  <span class="ml-4">Follow on GitHub</span>
                </a>
              </li>
              <li class="mt-4 flex">
                <a class="group flex text-sm font-medium text-zinc-800 transition hover:text-teal-500 dark:text-zinc-200 dark:hover:text-teal-500" href="{{ get_setting('linkedinUrl') }}">
                  <svg viewBox="0 0 24 24" aria-hidden="true" class="h-6 w-6 flex-none fill-zinc-500 transition group-hover:fill-teal-500">
                    <path d="M18.335 18.339H15.67v-4.177c0-.996-.02-2.278-1.39-2.278-1.389 0-1.601 1.084-1.601 2.205v4.25h-2.666V9.75h2.56v1.17h.035c.358-.674 1.228-1.387 2.528-1.387 2.7 0 3.2 1.778 3.2 4.091v4.715zM7.003 8.575a1.546 1.546 0 01-1.548-1.549 1.548 1.548 0 111.547 1.549zm1.336 9.764H5.666V9.75H8.34v8.589zM19.67 3H4.329C3.593 3 3 3.58 3 4.297v15.406C3 20.42 3.594 21 4.328 21h15.338C20.4 21 21 20.42 21 19.703V4.297C21 3.58 20.4 3 19.666 3h.003z"></path>
                  </svg>
                  <span class="ml-4">Follow on LinkedIn</span>
                </a>
              </li>
              <li class="mt-8 border-t border-zinc-100 pt-8 dark:border-zinc-700/40 flex">
                <a class="group flex text-sm font-medium text-zinc-800 transition hover:text-teal-500 dark:text-zinc-200 dark:hover:text-teal-500" href="mailto:{{ get_setting('email') }}">
                  <svg viewBox="0 0 24 24" aria-hidden="true" class="h-6 w-6 flex-none fill-zinc-500 transition group-hover:fill-teal-500">
                    <path fill-rule="evenodd" d="M6 5a3 3 0 0 0-3 3v8a3 3 0 0 0 3 3h12a3 3 0 0 0 3-3V8a3 3 0 0 0-3-3H6Zm.245 2.187a.75.75 0 0 0-.99 1.126l6.25 5.5a.75.75 0 0 0 .99 0l6.25-5.5a.75.75 0 0 0-.99-1.126L12 12.251 6.245 7.187Z"></path>
                  </svg>
                  <span class="ml-4">{{ get_setting('email') }}</span>
                </a>
              </li>
            </ul>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('script')
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
      method: `POST`
      , headers: {
        'Accept': 'application/json'
      }
      , body: formData
    })
    .then(response => response.json())
    .then((response) => {
      if (!response.success && response.errors) {
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
@endsection