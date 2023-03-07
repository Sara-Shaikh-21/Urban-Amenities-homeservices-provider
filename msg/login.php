<?php if (isset($_GET['msg'])): ?>
<div class="container" style="margin-top: 30px">
	<?php if ($_GET['msg'] == 'success'): ?>
    <div class="alert alert-success">
    	<h2>You have successfully logged in !<h2>
    </div>

    <?php elseif ($_GET['msg'] == 'failed'): ?>
    <div class="alert alert-danger">
        <h4>Login</h3>
            <p>Incorrect credentials! Please try again.</p>
    </div>
    <?php endif; ?>
</div>
<?php endif;