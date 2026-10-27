<?php if($response): ?>
<?php echo $response->body; ?>

<?php else: ?>
<script data-page="<?php echo e($id); ?>" type="application/json"><?php echo $pageJson; ?></script><div id="<?php echo e($id); ?>"></div>
<?php endif; ?><?php /**PATH C:\Users\Arvin\Herd\visit-city\storage\framework\views/db054589fd2b7eb0a8a4dc86089cfe92.blade.php ENDPATH**/ ?>