// Job Application
const jobPosts = document.querySelectorAll(".current-job__content");

jobPosts.forEach((post) => {
  const title = post.querySelector("h3")?.innerText.trim() || "";
  const content = post.querySelector("div")?.innerText.trim() || "";
  const whatsappNumber = "918438150717";
  const message = `Hi, I am interested to apply for this job\n \nJob: ${title}, Details: ${content}`;
  const whatsappURL = `https://wa.me/${whatsappNumber}?text=${encodeURIComponent(
    message
  )}`;

  const applyBtn = post.querySelector(".current-job__btn");
  if (applyBtn) {
    applyBtn.href = whatsappURL;
  }
});

// Carosuel
const slider = document.querySelector(".hero_container_slider");
const slides = document.querySelectorAll(".hero_container_image");
const indicators = document.querySelectorAll(".indicator");
const slideCount = slides.length;
let currentIndex = 0;
let interval = null;
const duration = 3000;

function goToSlide(index) {
  slider.style.transform = `translateY(-${index * 738}px)`;
  indicators.forEach((dot, i) => {
    dot.classList.toggle("active", i === index);
    slides[i].classList.toggle("active", i === index);
  });
  currentIndex = index;
}

function nextSlide() {
  let nextIndex = (currentIndex + 1) % slideCount;
  goToSlide(nextIndex);
}

interval = setInterval(nextSlide, duration);

indicators.forEach((dot, index) => {
  dot.addEventListener("click", () => {
    clearInterval(interval);
    goToSlide(index);
    interval = setInterval(nextSlide, duration);
  });
});

goToSlide(0);

// Pop up
const popContainer = document.querySelector(".pop-up_overlay");
const popUpCloseIcon = document.querySelector(".pop-up__form_close-icon");
const popFormContainer = document.querySelector(".pop-up__form_container");

popFormContainer.addEventListener("submit", function (e) {
  e.preventDefault();
  const fullName = document.getElementById("popUpFullName").value;
  const email = document.getElementById("popUpEmail").value;
  const phoneNumber = document.getElementById("popUpPhoneNumber").value;
  const yourself = document.getElementById("popUpYourself").value;
  const whatsappNumber = "918438150717";
  const message = `Hi, Here is my detail,\nName: ${fullName}\nEmail: ${email}\nPhone Number: ${phoneNumber}\nDescribe: ${yourself}`;
  const whatsAppMessageLink = `https://wa.me/${whatsappNumber}?text=${encodeURIComponent(
    message
  )}`;
  window.open(whatsAppMessageLink, "__blank");
});

// Pop up Timer
sessionStorage.setItem("popupClosed", "false");
if (sessionStorage.getItem("popupClosed") === "true") {
  popContainer.style.display = "none";
} else {
  popContainer.style.display = "flex";
}

popUpCloseIcon.addEventListener("click", (e) => {
  e.preventDefault();
  popContainer.style.display = "none";
  sessionStorage.setItem("popupClosed", "true");

  setTimeout(() => {
    sessionStorage.removeItem("popupClosed");
    popContainer.style.display = "flex";
  }, 1 *30 *60 * 1000);
});

// Recruiter Zone
function desktopRecruiter() {
  const recruiterBtn = document.querySelector(".navbar_link--black--btn");
  const recruiterContainer = document.querySelector(
    ".recruiter__pop-up__overlay"
  );
  const recruiterCloseIcon = document.querySelector(
    ".recruiter__pop-up__box >.form_close-icon"
  );
  const recruiterForm = document.querySelector(".recruiter__pop-up__form");
  recruiterForm.addEventListener("submit", function (e) {
    e.preventDefault();
    const whatsappNumber = "918438150717";
    const recruiterName = document.getElementById("recruiterName").value;
    const companyName = document.getElementById("companyName").value;
    const companyEmail = document.getElementById("companyEmail").value;
    const recruiterContact = document.getElementById("recruiterContact").value;
    const recruiterNeed = document.getElementById("recruiterNeed").value;
    const message = `Hi, My name is ${recruiterName}, We are contacting from ${companyName}.\nWe looking for ${recruiterNeed}.\nTo contact us Email : ${companyEmail} and Phone Number : ${recruiterContact}`;
    const whatsAppURL = `https://wa.me/${whatsappNumber}?text=${encodeURIComponent(
      message
    )}`;
    window.open(whatsAppURL, "__blank");
  });

  recruiterBtn.addEventListener("click", function (e) {
    e.preventDefault();
    recruiterContainer.style.display = "flex";
  });

  recruiterCloseIcon.addEventListener("click", function (e) {
    e.preventDefault();
    recruiterContainer.style.display = "none";
  });
}
desktopRecruiter();
// Post Resume
function desktopPostResume() {
  const postResumeBtn = document.querySelector(".navbar_call-btn");
  const postResumeContainer = document.querySelector(
    ".post-resume__pop-up__overlay"
  );
  const postResumeCloseIcon = document.querySelector(
    ".post-resume__pop-up__box >.form_close-icon"
  );
  const postResumeForm = document.querySelector(".post-resume__pop-up__form");

  postResumeBtn.addEventListener("click", function (e) {
    e.preventDefault();
    postResumeContainer.style.display = "flex";
    console.log("clicked");
  });

  postResumeCloseIcon.addEventListener("click", function (e) {
    e.preventDefault();
    postResumeContainer.style.display = "none";
  });

  postResumeForm.addEventListener("submit", function (e) {
    e.preventDefault();
    const fullName = document.getElementById("applicantFullName").value;
    const email = document.getElementById("applicantEmail").value;
    const phoneNumber = document.getElementById("applicantContact").value;
    const yourself = document.getElementById("applicantDescription").value;
    const whatsappNumber = "918438150717";
    const message = `Hi, Here is my detail,\nName: ${fullName}\nEmail: ${email}\nPhone Number: ${phoneNumber}\nDescribe: ${yourself}`;
    const whatsAppMessageLink = `https://wa.me/${whatsappNumber}?text=${encodeURIComponent(
      message
    )}`;
    window.open(whatsAppMessageLink, "__blank");
  });
}
desktopPostResume();
// Contact us

const contactUsForm = document.querySelector(
  ".contact-us__form_content_container"
);

contactUsForm.addEventListener("submit", function (e) {
  e.preventDefault();
  const firstName = document.getElementById("firstName").value;
  const lastName = document.getElementById("lastName").value;
  const email = document.getElementById("email").value;
  const phoneNumber = document.getElementById("phoneNumber").value;
  const selectJobOrEdu = document.getElementById("jobOrEducation").value;
  const yourself = document.getElementById("message").value;
  const whatsappNumber = "918438150717";
  const message = `Hi, Here is my detail,\nName: ${firstName} ${lastName}\nEmail: ${email}\nPhone Number: ${phoneNumber}\nLooking for: ${selectJobOrEdu}\nDescribe: ${yourself}`;
  const whatsAppMessageLink = `https://wa.me/${whatsappNumber}?text=${encodeURIComponent(
    message
  )}`;
  window.open(whatsAppMessageLink, "__blank");
});

// Mobile

const openMenu = document.querySelector(".navbar__container_menu > i");
const menuContent = document.querySelector(".navbar__content_container");

openMenu.addEventListener("click", function (e) {
  e.preventDefault();
  menuContent.classList.toggle("active");
  openMenu.classList.toggle("fa-bars");
  openMenu.classList.toggle("fa-close");
});

// Recruiter Zone
function mobileRecruiter() {
  const recruiterBtn = document.querySelector(
    ".navbar__content_container > .navbar_link--black--btn"
  );
  const recruiterContainer = document.querySelector(
    ".recruiter__pop-up__overlay"
  );
  const recruiterCloseIcon = document.querySelector(
    ".recruiter__pop-up__box >.form_close-icon"
  );
  const recruiterForm = document.querySelector(".recruiter__pop-up__form");
  recruiterForm.addEventListener("submit", function (e) {
    e.preventDefault();
    const whatsappNumber = "918438150717";
    const recruiterName = document.getElementById("recruiterName").value;
    const companyName = document.getElementById("companyName").value;
    const companyEmail = document.getElementById("companyEmail").value;
    const recruiterContact = document.getElementById("recruiterContact").value;
    const recruiterNeed = document.getElementById("recruiterNeed").value;
    const message = `Hi, My name is ${recruiterName}, We are contacting from ${companyName}.\nWe looking for ${recruiterNeed}.\nTo contact us Email : ${companyEmail} and Phone Number : ${recruiterContact}`;
    const whatsAppURL = `https://wa.me/${whatsappNumber}?text=${encodeURIComponent(
      message
    )}`;
    window.open(whatsAppURL, "__blank");
  });

  recruiterBtn.addEventListener("click", function (e) {
    e.preventDefault();
    recruiterContainer.style.display = "flex";
  });

  recruiterCloseIcon.addEventListener("click", function (e) {
    e.preventDefault();
    recruiterContainer.style.display = "none";
  });
}
mobileRecruiter();

// Post Resume
function MobilePostResume() {
  const postResumeBtn = document.querySelector(
    ".navbar__content_container > .navbar_call-btn"
  );
  const postResumeContainer = document.querySelector(
    ".post-resume__pop-up__overlay"
  );
  const postResumeCloseIcon = document.querySelector(
    ".post-resume__pop-up__box >.form_close-icon"
  );
  const postResumeForm = document.querySelector(".post-resume__pop-up__form");

  postResumeBtn.addEventListener("click", function (e) {
    e.preventDefault();
    postResumeContainer.style.display = "flex";
    console.log("clicked");
  });

  postResumeCloseIcon.addEventListener("click", function (e) {
    e.preventDefault();
    postResumeContainer.style.display = "none";
  });

  postResumeForm.addEventListener("submit", function (e) {
    e.preventDefault();
    const fullName = document.getElementById("applicantFullName").value;
    const email = document.getElementById("applicantEmail").value;
    const phoneNumber = document.getElementById("applicantContact").value;
    const yourself = document.getElementById("applicantDescription").value;
    const whatsappNumber = "918438150717";
    const message = `Hi, Here is my detail,\nName: ${fullName}\nEmail: ${email}\nPhone Number: ${phoneNumber}\nDescribe: ${yourself}`;
    const whatsAppMessageLink = `https://wa.me/${whatsappNumber}?text=${encodeURIComponent(
      message
    )}`;
    window.open(whatsAppMessageLink, "__blank");
  });
}
MobilePostResume();
