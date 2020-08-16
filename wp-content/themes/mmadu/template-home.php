<?php /* Template Name: Home Page Template */ get_header(); ?>

	<section class="landing">
		<div class="container">
			<div class="row justify-content-between">
				<div class="col-md-5">
					<div class="landing__copy">
						<h1 class="landing__copy__title">
							<span>A design</span>
							<span> community for</span>
							<span>humans by humans</span>
						</h1>

						<p class="landing__copy__story">
							We are a community of humans who are interested in building products that are both beautiful and functional.
						</p>
					</div>
					<div class="landing__action">
						<a href="#community" class="button">Join the Community</a>
					</div>

					<div class="landing__ticker" role="presentation" aria-hidden="true">
						<h6>Some topics we talk about</h6>

						<div class="landing__ticker__slot" role="presentation" aria-hidden="true"></div>

						<span id="landing__ticker__pool" class="d-none">
							<span>The business impact of design; </span>
							<span>How to design inclusive products; </span>
							<span>The adjacent UX career paths; </span>
							<span>User research; </span>
							<span>How to convince stakeholders in your organisation; </span>
							<span>How to get started as a UX designer; </span>
							<span>Design thinking; </span>
							<span>Copywriting: The design of copy.</span>
						</span>
					</div>

				</div>
				<div class="col-md-6 ml-auto" aria-hidden="true">
					<div class="landing__grid">
						<div class="grid__wrapper">
							<div class="grid__item grid__photo__p1"></div>
							<div class="grid__item grid__photo__p2"></div>
							<div class="grid__item grid__photo__p3"></div>
							<div class="grid__item grid__photo__p4"></div>
							<div class="grid__item grid__photo__p5"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php get_template_part('partials/block-community'); ?>
	<?php get_template_part('partials/community-update'); ?>


<?php get_footer(); ?>
