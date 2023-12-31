<!doctype html>

<title>Laravel From Scratch Blog</title>
<link href="/style.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">

<body style="font-family: Open Sans, sans-serif">
  <section class="px-6 py-8">
    <nav class="md:flex md:items-center md:justify-between">
      <div>
        <a href="/">
          <img src="/images/logo.svg" alt="Laracasts Logo" width="165" height="16">
        </a>
      </div>

      <div class="mt-8 md:mt-0">
        <a href="/" class="text-xs font-bold uppercase">Home Page</a>

        <a href="#" class="ml-3 rounded-full bg-blue-500 py-3 px-5 text-xs font-semibold uppercase text-white">
          Subscribe for Updates
        </a>
      </div>
    </nav>

    <?php echo e($slot); ?>


    <footer class="mt-16 rounded-xl border border-black border-opacity-5 bg-gray-100 py-16 px-10 text-center">
      <img src="/images/lary-newsletter-icon.svg" alt="" class="mx-auto -mb-6" style="width: 145px;">
      <h5 class="text-3xl">Stay in touch with the latest posts</h5>
      <p class="mt-3 text-sm">Promise to keep the inbox clean. No bugs.</p>

      <div class="mt-10">
        <div class="relative mx-auto inline-block rounded-full lg:bg-gray-200">

          <form method="POST" action="#" class="text-sm lg:flex">
            <div class="flex items-center lg:py-3 lg:px-5">
              <label for="email" class="hidden lg:inline-block">
                <img src="/images/mailbox-icon.svg" alt="mailbox letter">
              </label>

              <input id="email" type="text" placeholder="Your email address"
                class="py-2 pl-4 focus-within:outline-none lg:bg-transparent lg:py-0">
            </div>

            <button type="submit"
              class="mt-4 rounded-full bg-blue-500 py-3 px-8 text-xs font-semibold uppercase text-white transition-colors duration-300 hover:bg-blue-600 lg:mt-0 lg:ml-3">
              Subscribe
            </button>
          </form>
        </div>
      </div>
    </footer>
  </section>
</body>
<?php /**PATH C:\Users\Acer\Documents\GitHub\Laravel-Practice\resources\views/components/layout.blade.php ENDPATH**/ ?>