<div class="recruiter__pop-up__overlay">
    <div class="recruiter__pop-up__box">
        <img src="<?php echo get_template_directory_uri() ?>/assets/images/icon/close.svg" alt="close icon" class="form_close-icon">
        <div class="recruiter__pop-up__container">
            <h2 class="recruiter_heading">Recruiter Zone</h2>
            <form class="recruiter__pop-up__form">
                <div class="recruiter__pop-up__form_container">
                    <div>
                        <label for="recruiterName"> Name </label>
                        <input type="text" id="recruiterName" name="recruiterName" required/>
                    </div>
                    <div>
                        <label for="companyName">Company</label>
                        <input type="text" id="companyName" name="companyName" required/>
                    </div>
                    <div>
                        <label for="companyEmail">Email</label>
                        <input type="email" id="companyEmail" name="companyEmail" required/>
                    </div>
                    <div>
                        <label for="recruiterContact">Phone Number</label>
                        <input type="tel" id="recruiterContact" name="recruiterContact" required/>
                    </div>
                    <div>
                        <label for="recruiterNeed">Describe your needs</label>
                        <textarea rows="5" cols="50" id="recruiterNeed" name="recruiterNeed" required></textarea>
                    </div>
                </div>
                <button type="submit" class="recruiter__btn">Submit</button>
            </form>
        </div>
    </div>
</div>