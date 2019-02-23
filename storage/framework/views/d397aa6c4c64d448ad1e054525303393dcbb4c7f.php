<?php $__env->startSection('content'); ?>
	<h1>Departments</h1>
	<a href="http://localhost/enterprise/public/" class="btn btn-default">Go Back</a>
	<?php if(!Auth::guest()): ?>
	<a href="http://localhost/enterprise/public/departments/create" class="btn btn-primary">Create New</a> 
	<?php endif; ?>
	<?php if(count($departments) > 0): ?>
		<div class="well">
		<table class="table table-striped">
		<?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $department): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<tr>
				<td><?php echo e($department->first_name); ?></td>
 				<td><?php echo e($department->department); ?></td>
 				<td>
 					<a class="btn btn-success" href="http://localhost/enterprise/public/departments/<?php echo e($department->id); ?>">View</a>
 				</td>
 				<td>
 					<a class="btn btn-warning" href="http://localhost/enterprise/public/departments/<?php echo e($department->id); ?>/edit">Edit</a>
 				</td>
 				<td>
 					<a class="btn btn-danger"  href="http://localhost/enterprise/public/departments/destory">Delete</a>
 				</td>
			</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</table>
		</div>
		<?php echo e($departments -> links()); ?>


	<?php else: ?>
		<p> Nothing to Show </p>

	<?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>