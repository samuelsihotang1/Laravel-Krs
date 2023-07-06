<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['category']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['category']); ?>
<?php foreach (array_filter((['category']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<a href="/categories/<?php echo e($category->slug); ?>"
  class="rounded-full border border-blue-300 px-3 py-1 text-xs font-semibold uppercase text-blue-300"
  style="font-size: 10px"><?php echo e($category->name); ?></a>
<?php /**PATH C:\Users\Acer\Documents\GitHub\Laravel-Practice\resources\views/components/category-button.blade.php ENDPATH**/ ?>