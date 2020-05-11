		<!-- footer -->
		<footer class="footer">

			<div class="container">
				<div class="row justify-content-center">
					<div id="contact" class="col-md-8">
						<div class="row no-gutters align-items-center footer__contact">
							<div class="col-md-8">
								<div class="footer__contact__copy">
									<span>Contact Us</span>
									Got an idea/question/feedback or want to sponsor our next community activity?
								</div>
							</div>
							<div class="col-md-4">
								<div class="footer__contact__method">
									<i class="las la-envelope"></i>
									<span>info</span><span>&lt;at&gt;</span><span>usable.ng</span>
								</div>
							</div>
						</div>


					</div>
				</div>
				<div class="row">
					<div class="col-6 col-md-4">
						<div class="footer__menu">
							<h3>Menu</h3>
							<ul>
								<?php html5blank_nav(); ?>
							</ul>
						</div>
					</div>
					<div class="col-6 col-md-4">
						<div class="footer__social">
							<h3>Connect on social</h3>
							<ul>
								<li class="footer__social__twitter">
									<a href="" target="_blank"><i class="lab la-twitter"></i></a>
								</li>
								<li class="footer__social__facebook">
									<a href="" target="_blank"><i class="lab la-facebook-square"></i></a>
								</li>
							</ul>
						</div>
					</div>

					<div class="col footer__support">
						<div class="footer__support__handmade">
							<span>&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?></span> Handmade with <i class="las la-heart"></i> in Lagos
						</div>


						<div class="footer__support__credit">
							Supported by your friends @ <a href="https://forhumansbyhumans.org?utm_source=usable&utm_medium=website" target="_blank">FHxH</a>
						</div>

					</div>
				</div>
			</div>
		</footer>

		<?php wp_footer(); ?>

		<?php if (is_front_page()){ ?>
			<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.11"></script>
			<!-- If homepage. Run Typed -->
			<script type="text/javascript">
				var options = {
					stringsElement: '#landing__ticker__pool',
					smartBackspace: true,
					typeSpeed: 80,
					showCursor: false,
					backSpeed: 40,
					backDelay: 1200,
					startDelay: 500,
					loop: true,
				};

				const el = document.querySelector('.landing__ticker__slot');
				if (el) {
				  new Typed('.landing__ticker__slot', options);
				}

			</script>
		<?php } ?>
		
		<!-- analytics -->
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-31913096-19', 'auto');
			ga('send', 'pageview');
		</script>

	</body>
</html>
