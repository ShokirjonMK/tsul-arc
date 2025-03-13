
<?php if(Auth::user()->role == 777): ?>

	<li class="dropdown  show ">
		<a href="javascript:;" class="dropdown-toggle">
			<span class="micon dw dw-house-1"></span><span class="mtext">Asosiy </span>
		</a>
		<ul class="submenu">
			
			<li>
				<a href="<?php echo e(route('department.index')); ?>" class="<?php if( ( Request::is('backoffice/department') ) || ( Request::is('backoffice/department/*') )|| ( Request::is('backoffice/stdep/*') ) ): ?> active <?php endif; ?> active">Tashkiliy tuzilma</a>
			</li>
			<li>
				<a href="<?php echo e(route('staff.index')); ?>" class="<?php if( ( ( Request::is('backoffice/staff') ) || Request::is('backoffice/staff/*') ) ): ?> active <?php endif; ?> active">Xodimlar</a>
			</li>
			<li>
				<a href="<?php echo e(route('university.index')); ?>" class="<?php if( ( ( Request::is('backoffice/university') ) || Request::is('backoffice/university/*') ) ): ?> active <?php endif; ?> active">Ta'lim muassasalari</a>
			</li>
            <li>
				<a href="<?php echo e(route('academic-degree.index')); ?>" class="<?php if( ( ( Request::is('backoffice/university') ) || Request::is('backoffice/university/*') ) ): ?> active <?php endif; ?> active">Ilmiy darajalar</a>
			</li>
            <li>
				<a href="<?php echo e(route('command-type.index')); ?>" class="<?php if( ( ( Request::is('backoffice/command-type') ) || Request::is('backoffice/command-type/*') ) ): ?> active <?php endif; ?> active">Buyruq turlari</a>
			</li>
		</ul>
	</li>
<?php endif; ?>
<?php /**PATH /var/www/archive/resources/views/admin/includes/menu.blade.php ENDPATH**/ ?>