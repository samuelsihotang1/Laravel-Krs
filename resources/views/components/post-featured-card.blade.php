@props(['post'])
<article
  class="rounded-xl border border-black border-opacity-0 transition-colors duration-300 hover:border-opacity-5 hover:bg-gray-100">
  <div class="py-6 px-5 lg:flex">
    <div class="flex-1 lg:mr-8">
      <img src="/images/illustration-1.png" alt="Blog Post illustration" class="rounded-xl">
    </div>

    <div class="flex flex-1 flex-col justify-between">
      <header class="mt-8 lg:mt-0">
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

      <div class="mt-2 text-sm">
        <p>
          {{ $post->body }}
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

    <div class="hidden lg:block">
      <a href="/posts/{{ $post->slug }}"
        class="rounded-full bg-gray-200 py-2 px-8 text-xs font-semibold transition-colors duration-300 hover:bg-gray-300">Read
        More</a>
    </div>
    </footer>
  </div>
  </div>
</article>
