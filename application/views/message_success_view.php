<?php $result = $this->session->flashdata('result');?>
<?php if(isset($result) && $result['success']):?>
<div class="alert bg-material alert-dismissible">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	<h4><i class="fa fa-check"></i> Berhasil!</h4>
	<?php echo isset($result['message']) ? $result['message'] : ''; ?>
</div>
<?php endif; ?>