<?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
  <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <article
      class="<?php echo e($loop->odd ? 'ganjil ' : ''); ?><?php echo e($loop->even ? 'genap ' : ''); ?><?php echo e($loop->first ? 'awal ' : ''); ?><?php echo e($loop->last ? 'akhir ' : ''); ?>">
      <h1>
        <a href="/posts/<?php echo e($post->slug); ?>">
          <?php echo e($post->title); ?>

        </a>
      </h1>

      <p>
        <a href="/categories/<?php echo e($post->category->slug); ?>"><?php echo e($post->category->name); ?></a>
      </p>

      <p>
        <?php echo e($post->body); ?>

      </p>
    </article>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
<?php /**PATH C:\Users\Acer\Documents\GitHub\Laravel-Practice\resources\views/category.blade.php ENDPATH**/ ?>