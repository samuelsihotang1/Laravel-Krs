<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="/app.css" rel="stylesheet">
  <title>Document</title>
</head>

<body>
  <?php foreach ($posts as $post) : ?>
    
  <article>
    <?= $post; ?>
  </article>
  <?php endforeach ?>


</body>

</html><?php /**PATH D:\2. KULIAH IT DEL\LARAVEL\resources\views/posts.blade.php ENDPATH**/ ?>