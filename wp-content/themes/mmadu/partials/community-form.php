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
                <div class="form__item__label">Your Pronoun</div>

                <div class="form__radio__option">
                    <input type="radio" id="gender__female"name="gender" value="Female">
                    <label for="gender__female">Female</label>
                </div>
                <div class="form__radio__option">
                    <input type="radio" name="gender" id="gender__male" value="Male">
                    <label for="gender__male">Male</label>
                </div>
                <div class="form__radio__option">
                    <input type="radio" name="gender" id="gender__other" value="Other">
                    <label for="gender__other">Other</label>
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
