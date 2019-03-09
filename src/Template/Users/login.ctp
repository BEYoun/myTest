<!-- Home -->

<style type="text/css">
	.home {
		background-color: #e6e6e6;
	}
	.login {
		background-color: #edf4f6;
		width: 80%;
		margin: 20px auto;
		padding: 20px 40px;
	}
	input, select {
		height: 30px;
		background-color: white;
		border: none;
		margin: 5px;
		padding: 5px;
	}
</style>

	<div class="home">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/Login.jpg" data-speed="0.8"></div>
		<div class="home_container">
			<div class="home_content">
				<div class="home_title">Login</div>
				<div class="breadcrumbs">
					<ul class="d-flex flex-row align-items-center justify-content-start">
						<li><?= $this->Html->link('Home', '/pages') ?></li>
						<li><?= $this->Html->link('Login', '/users/login') ?></li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<!-- Login -->

	<div class="login">
		<div class="section_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="Login_container d-flex flex-xxl-row flex-column align-items-start justify-content-start">
							
							<?= $this->Form->create() ?>
								<table>
									<tr>
										<td><label>Email</label></td>
										<td><input type="text" name="email" class="email"></td>
									</tr>
									<tr>
										<td><label>Password</label></td>
										<td><input type="password" name="password"></td>
									</tr>
									
									<tr>
										<td></td>
										<td><input type="submit" name="submit" value="Login" class="btn btn-success"></td>
										<td></td>
									</tr>
								</table>
							<?= $this->Form->end() ?>

						</div>
										<button onclick="window.location.href='<?= $this->request->base ?>/clients/add'">signUp</button>
					</div>
				</div>
			</div>
		</div>
	</div>
