<?php if(Auth::user()->role == 777 || Auth::user()->role == 333): ?>
    
    
    <li class="<?php if(Request::is('mk/student')): ?> show <?php endif; ?>">
        <a href="<?php echo e(route('student.index')); ?>" class="dropdown-toggle">
            <span class="micon dw dw-house-1"></span><span class="mtext">Talabalar </span>
        </a>
    </li>
    <li class="<?php if(Request::is('mk/user')): ?> show <?php endif; ?>">
        <a href="<?php echo e(route('user.index')); ?>" class="dropdown-toggle">
            <span class="micon dw dw-user"></span><span class="mtext">Foydalanuvchilar </span>
        </a>
    </li>
<?php endif; ?>
<?php if(Auth::user()->role == 555): ?>
    
    

<?php endif; ?>

<?php /**PATH D:\tsul\tsul-archive\tsul-archive\resources\views/mk/includes/menu.blade.php ENDPATH**/ ?>