<div class="container">
	<div class="comments_block">
			<h2>Comments</h2>

			<?php if(!empty($this->data->result())) {?>

				<?php foreach($this->data->result() as $data) {?>
				<div class="comment">
					<p class="author"><b>
							<?php if($data->user_name == NULL) {
								echo strtok($data->user_email, '@');
							} else {
								echo $data->user_name;}?>
					</b></p>
					<p class="date"><?php echo strtok($data->date, ' ');?></p>
					<div class="message"><p><?php echo $data->user_message;?></p></div>
				</div>
				<?php } ?>

			<?php } else {?>
				<p>No comments!</p>
			<?php } ?>
				<?php echo $this->pagination->create_links(); ?>
	</div>
</div>
