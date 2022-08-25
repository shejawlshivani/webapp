
<?php $__env->startSection('content'); ?>
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
      
      <form action="<?php echo e(url('contact/' .$contacts->id)); ?>" method="post">
        <?php echo csrf_field(); ?>

        <?php echo method_field("PATCH"); ?>
        <input type="hidden" name="id" id="id" value="<?php echo e($contacts->id); ?>" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="<?php echo e($contacts->name); ?>" class="form-control"></br>
        <label>Lastname</label></br>
        <input type="text" name="lastname" id="lastname" value="<?php echo e($contacts->lastname); ?>" class="form-control"></br>
        <label>Email</label></br>
        <input type="text" name="email" id="email" value="<?php echo e($contacts->email); ?>" class="form-control"></br>
        <label>Mobile</label></br>
        <input type="text" name="mobile" id="mobile" value="<?php echo e($contacts->mobile); ?>" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('contacts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Larvel\webapplication1\resources\views/contacts/edit.blade.php ENDPATH**/ ?>