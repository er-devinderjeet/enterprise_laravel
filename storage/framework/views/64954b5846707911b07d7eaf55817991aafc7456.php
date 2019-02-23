<?php $__env->startSection('content'); ?>
	<h1>Shares </h1>
	<a href="http://localhost/enterprise/public/" class="btn btn-default">Go Back</a>
	<a href="http://localhost/enterprise/public/shares/create" class="btn btn-primary">Create Shares</a> 
	<?php if(count($shares) > 0): ?>
		<div class="well">
		<table>
		<?php $__currentLoopData = $shares; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $share): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<tr>
				<td><?php echo e($share->share_name); ?></td>
 				<td><chechbox><?php echo e($share->duration); ?></chechbox></td>
 				<td>
 					<a class="btn btn-success" href="http://localhost/enterprise/public/shares/show">View</a>
 				</td>
 				<td>
 					<a class="btn btn-warning" href="http://localhost/enterprise/public/shares/edit">Edit</a>
 				</td>
 				<td>
 					<a class="btn btn-danger"  href="http://localhost/enterprise/public/shares/destory">Delete</a>
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