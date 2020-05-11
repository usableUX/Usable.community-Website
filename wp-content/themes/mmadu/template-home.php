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

	<section id="community" class="community">
		<div class="container">
			<div class="row">
				<div class="col-md-5">
					<div class="community__program__wrapper">
						<div class="group__title">
							<h1>Our community</h1>
							<p>Become one of 2000+ humans to join our community and get access to member events.   Connect in-person, uncover insights, share stories, discuss trends and find opportunities. </p>
							<p>By signing up, you will: </p>
						</div>


						<div class="community__program">
							<div class="community__program__item">
								<div class="community__program__item__icon">
									<i class="las la-check-circle"></i>
								</div>
								<div class="community__program__item__copy">
									<h5>Access online & offline community</h5>
									<p>Get invited to the online community. Join other designers, teach, learn, share stories, discuss trends and find opportunities. You'll also get notified about our next physical event in your city. </p>
								</div>
							</div>
							<div class="community__program__item">
								<div class="community__program__item__icon">
									<i class="las la-check-circle"></i>
								</div>
								<div class="community__program__item__copy">
									<h5>Learn, network and grow</h5>
									<p>Access to our member events and other support programs aimed at helping to accelerate your design career. You'll also find new such as mentorship program.....<< designed to support the careers of UX talents, to help them build connections and skills for growth. >>> </p>
									<a href="#">Learn More <i class="las la-arrow-right"></i></a>
								</div>
							</div>
							<div class="community__program__item">
								<div class="community__program__item__icon">
									<i class="las la-check-circle"></i>
								</div>
								<div class="community__program__item__copy">
									<h5>Access to opportunities</h5>
									<p>Priority access to design workshops and be the first to know about opportunities to stay ahead and advance your career when you become part of the human community. </p>
									<a href="#">Learn More <i class="las la-arrow-right"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 ml-auto">
					<div class="community__signup">
						<div class="community__signup__title">
							<h4>Join our community</h4>
						</div>

						<div class="form community__signup__form">
							<form class="" action="index.html" method="post">
								<div class="form__group">
									<div class="form__item">
										<label class="form__item__label" for="first_name">First Name <sup>*</sup></label>
										<input type="text" name="first_name" placeholder="" required value="">
									</div>
									<div class="form__item">
										<label class="form__item__label" for="last_name">Last Name <sup>*</sup></label>
										<input type="text" name="last_name" placeholder="" required value="">
									</div>
								</div>
								<div class="form__item">
									<label class="form__item__label" for="email_address">Your e-mail Address <sup>*</sup></label>
									<input type="email" name="email_address" placeholder="" value="" required>
									<span class="form__item__description">We try to keep our email notifications to a minimun. We only need this to reach out to you when there's an important update</span>
								</div>

								<div class="form__item form__radio">
									<div class="form__item__label">Your gender</div>

									<div class="form__radio__option">
										<input type="radio" id="gender__female"name="gender" value="Female">
										<label for="gender__female">Female</label>
									</div>
									<div class="form__radio__option">
										<input type="radio" name="gender" id="gender__male" value="Male">
										<label for="gender__male">Male</label>
									</div>
									<div class="form__radio__option">
										<input type="radio" id="gender__anonymous"
										 name="gender" value="Anon">
										<label for="gender__anonymous">Prefer not to say</label>
									</div>



								</div>


								<div class="form__item">
									<label class="form__item__label" for="member__type">Which of these best describes you?</label>
									<div class="form__dropdown">
										<select class="" name="" id="">
											<option value=""></option>
											<option value="">I am a UX or interface designer</option>
											<option value="">I lead or manager a design team</option>
											<option value="saab">I am a developer (frontend, backend, fullstack)</option>
											<option value="mercedes">I'm new to UX and want to be a better designer</option>
											<option value="mercedes">I am a copywriter</option>
											<option value="mercedes">I am student and still figuring shit out</option>
											<option value="audi">I am a design enthusiast</option>
										</select>
									</div>
								</div>
								<div class="form__submit">
									<input type="submit" name="" class="form__submit__button" value="Join the Community">

									<div class="form__submit__disclaimer">
										By signing up, you agree to our <a href="codeofconduct.html" target="_blank">code of conduct</a>. Likewise, we commit to maintain your privacy and not share your data with a third party.
									</div>
								</div>
							</form>

						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="updates">
		<div class="container">
			<div class="row">
				<div class="col-12 snippet__header">
					<h2 class="snippet__header__title">Community Updates</h2>
					<p class="snippet__header__subtitle">Showcase of our upcoming and past events. <a href="#">See all events</a></p>
				</div>


				<div class="w-100"></div>

				<div class="col-md-4">
					<a href="update-type-event.html" class="updates__item">
						<div class="updates__item__title updates__type__event">
							<span class="updates__item__type">Event (Workshop)</span>
							<h3>A Design Matters illustrated talk for your organisation</h3>
							<span class="updates__item__source">Andrey Haimershmuck</span>
						</div>
						<div class="updates__item__meta event__date">
							<span class="event__date__day">19</span>
							<span class="event__date__month">December</span>
						</div>

						<i class="las la-long-arrow-alt-right"></i>

					</a>
				</div>
				<div class="col-md-4">
					<a href="update-type-post.html" class="updates__item">
						<div class="updates__item__title updates__type__post">
							<span class="updates__item__type">Blog Post</span>
							<h3>Hope is not a strategy.</h3>
							<span class="updates__item__source">Jumaima Gerhart</span>
						</div>

						<i class="las la-long-arrow-alt-right"></i>
					</a>
				</div>
				<div class="col-md-4">
					<a href="update-type-event.html" class="updates__item">
						<div class="updates__item__title updates__type__event">
							<span class="updates__item__type">Meetup</span>
							<h3>Connecting with your inner zen and opportunities to kick ass</h3>
							<span class="updates__item__source">Dayot Upenmecano & Celeste Agroa</span>
						</div>
						<div class="updates__item__meta event__date">
							<span class="event__date__day">31</span>
							<span class="event__date__month">January</span>
						</div>
						<i class="las la-long-arrow-alt-right"></i>
					</a>
				</div>
				<div class="w-100"></div>

			</div>
		</div>
	</section>


<?php get_footer(); ?>
