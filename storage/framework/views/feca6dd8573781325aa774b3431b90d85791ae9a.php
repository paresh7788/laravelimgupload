<?php $__env->startSection('title', 'Show Students'); ?>

<?php $__env->startSection('content'); ?>

<div class="bg-white p-6 rounded-lg shadow-md">
    <h1 class="text-2xl font-bold mb-4">Show Students</h1>

    <table class="table-auto w-full">
        <tr>
            <th class="border px-4 py-2">id</th>
            <th class="border px-4 py-2">Name</th>
            <th class="border px-4 py-2">Email</th>
            <th class="border px-4 py-2">Profile Picture</th>
        </tr>

        <?php $__currentLoopData = $uploads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $upload): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td class="border px-4 py-2"><?php echo e($upload->id); ?></td>
                <td class="border px-4 py-2"><?php echo e($upload->name); ?></td>
                <td class="border px-4 py-2"><?php echo e($upload->email); ?></td>
                <td class="border px-4 py-2">
                    <img src="<?php echo e(asset('storage/'.$upload->profile_pic)); ?>" alt="Profile Picture" class="w-40 h-35">
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/nte-826-vm/lrvl2/resources/views/display.blade.php ENDPATH**/ ?>