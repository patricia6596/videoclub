

<?php $__env->startSection('title', 'Ver película'); ?>
<?php $__env->startSection("content"); ?>

  <div class="row">
    <div class="col-sm-4">
     <img src="<?php echo e($pelicula->poster); ?>" style="height:350px"/>
    </div>
    <div class="col-sm-8">
    <h1><?php echo e($pelicula->title); ?></h1>
    <h3>Año: <?php echo e($pelicula->year); ?></h2>
    <h3>Director: <?php echo e($pelicula->director); ?></h2>

    <p>
      <h4>
        <span style="font-weight: bold;">Resumen:</span> <?php echo e($pelicula->synopsis); ?>

      </h4>
    </p>

    <p>
      <h4>
        <span style="font-weight: bold;">Estado:</span> <?php echo e($pelicula->rented ? 'Película actualmente alquilada' : 'Película disponible'); ?>

      </h4>
    </p>

    <p>
      <?php if( $pelicula->rented): ?>
       <button type="button" class="btn btn-danger">Devolver película</button>
      <?php else: ?>
        <button type="button" class="btn btn-info">Alquilar película</button>
      <?php endif; ?>
      <button type="button" class="btn btn-warning">Editar película</button>
      <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>Volver al listado</button>
    </p>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.master", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/proyectos_laravel/videoclub/resources/views/catalog/show.blade.php ENDPATH**/ ?>