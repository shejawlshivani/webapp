
<?php $__env->startSection('content'); ?>
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Name : <?php echo e($contacts->name); ?></h5>
        <p class="card-text">lastname : <?php echo e($contacts->lastname); ?></p>
        <p class="card-text">email : <?php echo e($contacts->email); ?></p>
        <p class="card-text">Phone : <?php echo e($contacts->mobile); ?></p>
  </div>
      
    </hr>
  
  </div>
</div>
<?php echo $__env->make('contacts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Larvel\webapplication1\resources\views/contacts/show.blade.php ENDPATH**/ ?>