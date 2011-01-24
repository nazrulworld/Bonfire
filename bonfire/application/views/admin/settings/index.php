<?php if (validation_errors()) : ?>
<div class="notification error">
	<p><?php echo validation_errors(); ?></p>
</div>
<?php endif; ?>

<?php echo form_open($this->uri->uri_string(), 'class="constrained"'); ?>

	<div>
		<label>Site Name</label>
		<input type="text" name="title" value="<?php echo isset($settings['site.title']) ? $settings['site.title'] : set_value('site.title') ?>" />
	</div>
	
	<div>
		<label>Site Email</label>
		<input type="text" name="system_email" value="<?php echo isset($settings['site.system_email']) ? $settings['site.system_email'] : set_value('site.system_email') ?>" />
		<p class="small indent">The default email that system-generated emails are sent from.</p>
	</div>
	
	<div>
		<label>Site Status</label>
		<select name="status">
			<option value="1" <?php echo isset($settings) && $settings['site.status'] == 1 ? 'selected="selected"' : set_select('site.status', '1') ?>>Online</option>
			<option value="0" <?php echo isset($settings) && $settings['site.status'] == 0 ? 'selected="selected"' : set_select('site.status', '1') ?>>Offline</option>
		</select>
	</div>
	
	<div>
		<label>Top How Many?</label>
		<input type="text" name="list_limit" value="<?php echo isset($settings['site.list_limit']) ? $settings['site.list_limit'] : set_value('site.list_limit') ?>" class="tiny" />
		<p class="small indent">When viewing reports, how many items should be listed at a time?</p>
	</div>
	
	<div class="text-right">
		<input type="submit" name="submit" value="Save Settings" />
	</div>

<?php echo form_close(); ?>