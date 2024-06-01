<?php $__env->startSection('title'); ?>

<?php $__env->startSection('content'); ?>
<div style="font-family: Arial, sans-serif; max-width: 400px; margin: auto;">
    <h1 style="color: black; text-align: center;margin-top: 50px;font-weight: bold;">FishOn!</h1>
    <h2 style="color: grey;">Masuk Akun Anda</h2>
    
    <form method="POST" action="<?php echo e(route('login')); ?>">
        <?php echo csrf_field(); ?>
        <input type="email" name="email" placeholder="Masukkan Email Anda" style="width: 100%; padding: 10px; margin-bottom: 10px;">
        <input type="password" name="password" placeholder="Masukkan Password Anda" style="width: 100%; padding: 10px; margin-bottom: 20px;">
        <button type="submit" style="width: 100%; padding: 10px; background-color: lightblue; border:none;">Sign-In</button>
    </form>

    <p style="color:black; text-align: center;">- atau -</p>
    <div style="text-align: center;">
        <a href="/register" style="color:black;">Buat Sebuah Akun? Daftar</a>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\TUBES RPL\Tubes_RPL\resources\views/landing/login.blade.php ENDPATH**/ ?>