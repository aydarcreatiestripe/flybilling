<?php echo HTML::includeJS('loginAdmin');?>

        <div class="top-promo">
            <div class="container">
                <div class="hero-unit">
                    <h1><?=$title?></h1>
                    <div class="promo-3angl-1" data-stellar-ratio="2" data-stellar-vertical-offset="80" data-stellar-horizontal-offset="100"></div>
                    <div class="promo-3angl-2" data-stellar-ratio="1.5"  data-stellar-vertical-offset="80" data-stellar-horizontal-offset="100"></div>
                </div>
            </div>
            <div class="promo-3angl-3" data-stellar-ratio="1.5"  data-stellar-vertical-offset="70"></div>
            <div class="promo-top-bottom"></div>
        </div>

        <div class="container content">
            <div class="polygon-2" data-stellar-ratio="0.3"  data-stellar-vertical-offset="250"></div>

            <div class="content-inner">
					<form id="logInForm" onSubmit="return logIn()" class="form-horizontal" style="margin-bottom:150px;">
						<div class="control-group">
							<label class="control-label" for="inputEmail">Логин</label>
							<div class="controls">
								<input required type="text" name="login" id="input-login" placeholder="Логин">
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="inputPassword">Пароль</label>
							<div class="controls">
								<input required minlength="6" type="password" name="password" id="input-password" placeholder="Пароль">
							</div>
						</div>
						<div class="control-group">
							<div class="controls">
								<button type="submit" class="btn">Войти</button>
							</div>
						</div>
					</form>
			</div>
		</div>