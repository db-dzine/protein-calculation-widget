<p>
	<label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title', 'protein-calculation-widget'); ?>:</label><br/>
	<input id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr(strip_tags($instance['title'])); ?>" />
</p>