<div class='mainInfo'>
 <h3>Member</h3>
 <p>Welcome back, <b><?php echo $user->first_name;?>!</b></p>

 <p><a href="<?php echo base_url() . $user->username ?>">View Your Profile</a></p>
 <p><a href="<?php echo site_url('auth/change_password'); ?>">Change Your Password</a></p>
 <p><a href="<?php echo site_url('auth/logout'); ?>">Logout</a></p>
</div>