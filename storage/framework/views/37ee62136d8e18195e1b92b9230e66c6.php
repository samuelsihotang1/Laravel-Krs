<?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
  <section class="px-6 py-8">

    <main class="mx-auto mt-10 max-w-6xl space-y-6 lg:mt-20">
      <article class="mx-auto max-w-4xl gap-x-10 lg:grid lg:grid-cols-12">
        <div class="col-span-4 mb-10 lg:pt-14 lg:text-center">
          <img src="/images/illustration-1.png" alt="" class="rounded-xl">

          <p class="mt-4 block text-xs text-gray-400">
            Published <time><?php echo e($post->created_at->diffForHumans()); ?></time>
          </p>

          <div class="mt-4 flex items-center text-sm lg:justify-center">
            <img src="/images/lary-avatar.svg" alt="Lary avatar">
            <div class="ml-3 text-left">
              <h5 class="font-bold"><?php echo e($post->author->name); ?></h5>
              <h6>Mascot at Laracasts</h6>
            </div>
          </div>
        </div>

        <div class="col-span-8">
          <div class="mb-6 hidden justify-between lg:flex">
            <a href="/"
              class="relative inline-flex items-center text-lg transition-colors duration-300 hover:text-blue-500">
              <svg width="22" height="22" viewBox="0 0 22 22" class="mr-2">
                <g fill="none" fill-rule="evenodd">
                  <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">
                  </path>
                  <path class="fill-current"
                    d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z">
                  </path>
                </g>
              </svg>

              Back to Posts
            </a>

            <div class="space-x-2">
              <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.category-button','data' => ['category' => $post->category]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('category-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['category' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($post->category)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
            </div>
          </div>

          <h1 class="mb-10 text-3xl font-bold lg:text-4xl">
            <?php echo e($post->title); ?>

          </h1>

          <div class="space-y-4 leading-loose lg:text-lg">
            <p><?php echo e($post->body); ?></p>
          </div>
        </div>
      </article>
    </main>
  </section>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
<?php /**PATH C:\Users\Acer\Documents\GitHub\Laravel-Practice\resources\views/post.blade.php ENDPATH**/ ?>