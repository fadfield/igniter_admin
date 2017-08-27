<?php $result = $this->session->flashdata('result');?>
<?php if(validation_errors() || (isset($result) && !$result['success']) ):?>
<div class="alert alert-danger alert-dismissible">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	<h4><i class="fa fa-warning"></i> Error!</h4>
	<?php echo validation_errors(); ?>
	<?php echo isset($result['message']) ? $result['message'] : ''; ?>
</div>
<?php endif; ?>