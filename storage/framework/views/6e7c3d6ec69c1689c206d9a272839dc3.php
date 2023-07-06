<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['post']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['post']); ?>
<?php foreach (array_filter((['post']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<article
  <?php echo e($attributes->merge(['class' => 'rounded-xl border border-black border-opacity-0 transition-colors duration-300 hover:border-opacity-5 hover:bg-gray-100'])); ?>>
  <div class="py-6 px-5">
    <div>
      <img src="/images/illustration-3.png" alt="Blog Post illustration" class="rounded-xl">
    </div>

    <div class="mt-8 flex flex-col justify-between">
      <header>
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

        <div class="mt-4">
          <h1 class="text-3xl">
            <a href="/posts/<?php echo e($post->slug); ?>">
              <?php echo e($post->title); ?></a>
          </h1>

          <span class="mt-2 block text-xs text-gray-400">
            Published <time><?php echo e($post->created_at->diffForHumans()); ?></time>
          </span>
        </div>
      </header>

      <div class="mt-4 text-sm">
        <p>
          <?php echo e($post->body); ?>

        </p>

        <p class="mt-4">
          Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
        </p>
      </div>

      <footer class="mt-8 flex items-center justify-between">
        <div class="flex items-center text-sm">
          <a href="/author/<?php echo e($post->author->username); ?>">
            <img src="/images/lary-avatar.svg" alt="Lary avatar">
            <div class="ml-3">
              <h5 class="font-bold"><?php echo e($post->author->name); ?></h5>
              <h6>Mascot at Laracasts</h6>
          </a>
        </div>
    </div>

    <div>
      <a href="/posts/<?php echo e($post->slug); ?>"
        class="rounded-full bg-gray-200 py-2 px-8 text-xs font-semibold transition-colors duration-300 hover:bg-gray-300">Read
        More</a>
    </div>
    </footer>
  </div>
  </div>
</article>
<?php /**PATH C:\Users\Acer\Documents\GitHub\Laravel-Practice\resources\views/components/post-card.blade.php ENDPATH**/ ?>