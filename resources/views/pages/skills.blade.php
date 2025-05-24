@php

use App\Models\Category;

$categories = Category::with('skills')->orderBy('id')->get();

@endphp

@extends('layout')

@section('title', '')

@section('content')
<div class="sm:px-8 mt-16 sm:mt-32">
  <div class="mx-auto w-full max-w-7xl lg:px-8">
    <div class="relative px-4 sm:px-8 lg:px-12">
      <div class="mx-auto max-w-2xl lg:max-w-5xl">
        <header class="max-w-full">
          <h1 class="text-4xl font-bold tracking-tight text-zinc-800 sm:text-5xl dark:text-zinc-100">{{ get_setting('skillsTitle') }}</h1>
          <p class="mt-6 text-base text-zinc-600 dark:text-zinc-400">{{ get_setting('skillsDescription') }}</p>
        </header>
        <div class="mt-16 sm:mt-20">
          <div class="space-y-20">
            @forelse ($categories as $category)
              <section aria-labelledby=":S1:" class="md:border-l md:border-zinc-100 md:pl-6 md:dark:border-zinc-700/40">
                <div class="grid max-w-3xl grid-cols-1 items-baseline gap-y-8 md:grid-cols-4">
                  <h2 id=":S1:" class="text-sm font-semibold text-zinc-800 dark:text-zinc-100">{{ $category->name }}</h2>
                  <div class="md:col-span-3">
                    <ul role="list" class="grid grid-cols-1 gap-y-10 gap-x-8 sm:grid-cols-2">
                      @forelse ($category->skills as $skill)
                        <li class="group relative flex flex-col items-start">
                          <h3 class="text-base font-semibold tracking-tight text-zinc-800 dark:text-zinc-100">
                            {{ $skill->name }}
                          </h3>
                          <p class="relative z-10 mt-2 text-sm text-zinc-600 dark:text-zinc-400">
                            {{ $skill->description }}
                          </p>
                        </li>
                      @empty
                        <li>No Data Available</li>
                      @endforelse
                    </ul>
                  </div>
                </div>
              </section>
            @empty
              No Data Available
            @endforelse
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
