<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>

<body>
    <header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">        
        <?php if(Route::has('login')): ?>
            <nav class="-mx-3 flex flex-1 justify-end">
                <?php if(auth()->guard()->check()): ?>
                    <a href="<?php echo e(url('/dashboard')); ?>"
                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                        Dashboard
                    </a>
                <?php else: ?>
                    <a href="<?php echo e(route('login')); ?>"
                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                        Log in
                    </a>

                    <?php if(Route::has('register')): ?>
                        <a href="<?php echo e(route('register')); ?>"
                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                            Register
                        </a>
                    <?php endif; ?>
                <?php endif; ?>
            </nav>
        <?php endif; ?>
    </header>
</body>

</html><?php /**PATH C:\Users\hp\Documents\GitHub\CD_EV3\resources\views/welcome.blade.php ENDPATH**/ ?>