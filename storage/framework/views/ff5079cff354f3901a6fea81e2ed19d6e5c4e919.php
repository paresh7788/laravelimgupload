<?php $__env->startSection('title', 'home'); ?>

<?php $__env->startSection('content'); ?>

<div class="container mx-auto mt-8">
        <div class="bg-gray-200 p-6 rounded-lg">
            <h1 class="text-3xl font-bold mb-4">Welcome to Your Laravel Home Page</h1>
            <p class="text-gray-700">This is a sample paragraph for your home page.</p>
        </div>
    </div>



<?php $__env->stopSection(); ?>
   

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/nte-826-vm/lrvl2/resources/views/home.blade.php ENDPATH**/ ?>