<div class="pop-up_overlay">
    <div class="pop-up_box">
        <img src="<?php echo get_template_directory_uri() ?>/assets/images/icon/close.svg" alt="close icon" class="pop-up__form_close-icon">
        <div class="pop-up__container">
            <form class="pop-up__form_container">
                <div class="pop-up__form">
                    <div class="pop-up__input">
                        <label for="popUpFullName">Enter Name</label>
                        <input type="text" name="popUpFullName" id="popUpFullName" required />
                    </div>
                    <div class="pop-up__input">
                        <label for="popUpEmail">Enter Email</label>
                        <input type="email" name="popUpEmail" id="popUpEmail" required />
                    </div>
                    <div class="pop-up__input">
                        <label for="popUpPhoneNumber">Enter Phone Number</label>
                        <input type="tel" name="popUpPhoneNumber" id="popUpPhoneNumber" required />
                    </div>
                    <div class="pop-up__input">
                        <label for="popUpYourself">Describe Yourself</label>
                        <textarea type="tel" name="popUpYourself" id="popUpYourself" rows="5" cols="50" required></textarea>
                    </div>
                </div>
                <button type="submit" class="pop-up__btn">To know more detail</button>
            </form>
        </div>
    </div>
</div>