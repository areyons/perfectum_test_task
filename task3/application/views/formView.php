<div class="container">
	<form class="form" method="post" action="<?php echo index_page();?>">

		<h2>Leave a Comment</h2>
		<div class="first_input">
			<input type="text" name="name" placeholder="Name" />
		</div>
		<div class="second_input">
			<input type="email" name="email" placeholder="Email*" required/>
		</div>
		<div class="textarea">
			<textarea name="message" placeholder="Message*" rows="6" required></textarea>
		</div>

		<div>
			<button type="submit">Send</button>
		</div>
		<p class="notice"><?php echo $this->session->userdata('notice'); ?></p>
		<?php echo validation_errors(); ?>
	</form>
</div>
