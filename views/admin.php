<p>
	<label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title', 'dometic-division-links-id'); ?>:</label><br/>
	<input id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr(strip_tags($instance['title'])); ?>" />
</p>