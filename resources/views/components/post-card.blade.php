@props(['post'])
<article
  {{ $attributes->merge(['class' => 'rounded-xl border border-black border-opacity-0 transition-colors duration-300 hover:border-opacity-5 hover:bg-gray-100']) }}>
  <div class="py-6 px-5">
    <div>
      <img src="/images/illustration-3.png" alt="Blog Post illustration" class="rounded-xl">
    </div>

    <div class="mt-8 flex flex-col justify-between">
      <header>
        <div class="space-x-2">
          <x-category-button :category="$post->category" />
        </div>

        <div class="mt-4">
          <h1 class="text-3xl">
            <a href="/posts/{{ $post->slug }}">
              {{ $post->title }}</a>
          </h1>

          <span class="mt-2 block text-xs text-gray-400">
            Published <time>{{ $post->created_at->diffForHumans() }}</time>
          </span>
        </div>
      </header>

      <div class="mt-4 text-sm">
        <p>
          {{ $post->body }}
        </p>

        <p class="mt-4">
          Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
        </p>
      </div>

      <footer class="mt-8 flex items-center justify-between">
        <div class="flex items-center text-sm">
          <a href="/author/{{ $post->author->username }}">
            <img src="/images/lary-avatar.svg" alt="Lary avatar">
            <div class="ml-3">
              <h5 class="font-bold">{{ $post->author->name }}</h5>
              <h6>Mascot at Laracasts</h6>
          </a>
        </div>
    </div>

    <div>
      <a href="/posts/{{ $post->slug }}"
        class="rounded-full bg-gray-200 py-2 px-8 text-xs font-semibold transition-colors duration-300 hover:bg-gray-300">Read
        More</a>
    </div>
    </footer>
  </div>
  </div>
</article>
