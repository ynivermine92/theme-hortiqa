<?php

/**
 * Login / Register Form (custom UI safe WooCommerce template)
 */

if (! defined('ABSPATH')) {
	exit;
}

do_action('woocommerce_before_customer_login_form');

$registration_enabled = 'yes' === get_option('woocommerce_enable_myaccount_registration');
?>

<section class="account profile">
	<div class="wrapper">

		<div class="auth-wrapper">
			<?php if (function_exists('wc_print_notices')) : ?>
				<?php wc_print_notices(); ?>
			<?php endif; ?>

			<!-- LOGIN -->
			<div class="auth-block auth-login active">

				<h2 class="title fw700 ts-40">Увійдіть у свій обліковий запис</h2>

				<form class="woocommerce-form woocommerce-form-login login" method="post">

					<?php do_action('woocommerce_login_form_start'); ?>

					<p class="form-row">
						<input
							type="text"
							name="username"
							id="username"
							placeholder="Вкажіть ваш логін"
							autocomplete="ім'я"
							required />
					</p>

					<p class="form-row password-wrapper">
						<input
							type="password"
							name="password"
							id="password"
							placeholder="Ваш пароль"
							autocomplete="current-password"
							required />
						<button type="button" class="toggle-password" aria-label="Показать пароль">
							<!-- Глаз открытый -->
							<svg class="eye-open" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
								<path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
								<circle cx="12" cy="12" r="3"></circle>
							</svg>
							<!-- Глаз закрытый -->
							<svg class="eye-closed" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="display:none;">
								<path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24"></path>
								<line x1="1" y1="1" x2="23" y2="23"></line>
							</svg>
						</button>
					</p>
					<?php do_action('woocommerce_login_form'); ?>

					<p class="lost-password">
						<a href="<?php echo esc_url(wp_lostpassword_url()); ?>">
							Забули пароль?
						</a>
					</p>

					<?php wp_nonce_field('woocommerce-login', 'woocommerce-login-nonce'); ?>

					<button type="submit" name="login" class="button">
						Логін
					</button>

					<?php do_action('woocommerce_login_form_end'); ?>

				</form>

				<?php if ($registration_enabled) : ?>
					<div class="switch">
						Немає облікового запису ?
						<a href="#" class="js-show-register">Створіть</a>
					</div>
				<?php endif; ?>



			</div>

			<!-- REGISTER -->
			<?php if ($registration_enabled) : ?>

				<div class="auth-block auth-register">

					<h2 class="title fw700 ts-40">Створіть обліковий запис</h2>

					<form method="post" class="woocommerce-form woocommerce-form-register register">

						<?php do_action('woocommerce_register_form_start'); ?>




						<!-- EMAIL (ВСЕГДА) -->
						<p class="form-row">
							<input
								type="email"
								name="email"
								id="reg_email"
								placeholder="Пошта"
								required />
						</p>


						<!-- USERNAME (ВСЕГДА) -->
						<p class="form-row">
							<input
								type="text"
								name="username"
								id="reg_username"
								placeholder="ім'я"
								required />
						</p>

						<!-- PASSWORD (ВСЕГДА) -->
						<p class="form-row password-wrapper">
							<input
								type="password"
								name="password"
								id="reg_password"
								placeholder="Ваш пароль"
								required />
							<button type="button" class="toggle-password" aria-label="Показать пароль">
								<svg class="eye-open" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
									<path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
									<circle cx="12" cy="12" r="3"></circle>
								</svg>
								<svg class="eye-closed" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="display:none;">
									<path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24"></path>
									<line x1="1" y1="1" x2="23" y2="23"></line>
								</svg>
							</button>
						</p>

						<?php do_action('woocommerce_register_form'); ?>

						<!-- CHECKBOX -->
						<p class="checkbox">
							<label>
								<input type="checkbox" name="receive" value="1">
							</label>
						</p>

						<?php wp_nonce_field('woocommerce-register', 'woocommerce-register-nonce'); ?>

						<button type="submit" name="register" class="button">
							Реєстрація
						</button>

						<?php do_action('woocommerce_register_form_end'); ?>

					</form>

					<div class="switch">
						Вже маєте обліковий запис ?
						<a href="#" class="js-show-login">авторизуватися</a>
					</div>

				</div>

			<?php endif; ?>

		</div>
	</div>
</section>

<?php do_action('woocommerce_after_customer_login_form'); ?>