<div class="post-resume__pop-up__overlay">
    <div class="post-resume__pop-up__box">
        <img src="<?php echo get_template_directory_uri() ?>/assets/images/icon/close.svg" alt="close icon" class="form_close-icon">
        <div class="post-resume__pop-up__container">
            <h2 class="post-resume_heading">Post Resume</h2>
            <form class="post-resume__pop-up__form">
                <div class="post-resume__pop-up__form_container">
                    <div>
                        <label for="applicantFullName">Enter Name </label>
                        <input type="text" id="applicantFullName" name="applicantFullName" required/>
                    </div>
                    <div>
                        <label for="applicantEmail">Enter Email</label>
                        <input type="email" id="applicantEmail" name="applicantEmail" required/>
                    </div>
                    <div>
                        <label for="applicantContact">Enter Phone Number</label>
                        <input type="tel" id="applicantContact" name="applicantContact" required/>
                    </div>
                    <div>
                        <label for="applicantDescription">Describe yourself</label>
                        <textarea rows="5" cols="50" id="applicantDescription" name="applicantDescription" required></textarea>
                    </div>
                </div>
                <button type="submit" class="post-resume__btn">Submit</button>
            </form>
        </div>
    </div>
</div>