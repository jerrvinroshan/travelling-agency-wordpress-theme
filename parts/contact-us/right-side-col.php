<form class="contact-us__form_content_container">
    <div class="form__content_container">
        <!-- First row -->
        <div class="form__content">
            <div>
                <label for="firstName" class="form_label">Enter First Name</label>
                <input type="text" id="firstName" name="firstName" class="form_input" required />
            </div>
            <div>
                <label for="lastName" class="form_label">Enter Last Name</label>
                <input type="text" id="lastName" name="lastName" class="form_input" required />
            </div>
        </div>
        <!-- Second row -->
        <div class="form__content">
            <div>
                <label for="email" class="form_label">Enter Email</label>
                <input type="email" id="email" name="email" class="form_input" required />
            </div>
            <div>
                <label for="phoneNumber" class="form_label">Enter Phone Number</label>
                <input type="tel" id="phoneNumber" name="phoneNumber" class="form_input" required />
            </div>
        </div>
        <!-- Third row -->
        <div class="form__content">
            <div>
                <label for="jobOrEducation">Job/Education</label>
                <select id="jobOrEducation" name="jobOrEducation" required>
                    <option value="" disabled selected class="disabled">Job or Education</option>
                    <option value="Job">Job</option>
                    <option value="Education">Education</option>
                </select>
            </div>
        </div>
        <!-- Fourth row -->
        <div class="form__content">
            <div>
                <label for="message">What your looking for?</label>
                <textarea id="message" name="message" rows="5" cols="100" required></textarea>
            </div>
        </div>
    </div>
    <button type="submit" class="form__btn">Contact us</button>
</form>