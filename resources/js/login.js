$("#loginButton").click(function (e) {
  e.preventDefault();

  $.ajax({
    url: "../engine/requests.php",
    method: "post",
    data: $("#loginForm").serialize() + "&f=logInAccount",
    success: function (data) {
      if (data.status == 200) {
        var expires = new Date(Date.now() + 86400 * 1000).toUTCString();

        if ($('input[name="remember"]').is(":checked")) {
          expires = new Date(Date.now() + 30 * 86400 * 1000).toUTCString();
        }

        document.cookie =
          "ucpAuthToken=" +
          data.message.authToken +
          "; expires=" +
          expires +
          ";";
        document.cookie =
          "ucpUserId=" + data.message.userID + "; expires=" + expires + ";";
        window.location.href = "../profile";
      } else alert(data.message);
    },
  });
});

function toggleHeaderMenu() {
  $(".header--links, .header--socials, .header--buttons").toggle("slideDown");
}

function pad(num, size) {
  num = num.toString();
  while (num.length < size) num = "0" + num;
  return num;
}

let prevSlideButton = document.getElementsByClassName("slider--left-link")[0];
let nextSlideButton = document.getElementsByClassName("slider--right-link")[0];
let slideCounterActive = document.getElementsByClassName(
  "slider--counter-active"
)[0];
let slideCounterMax = document.getElementsByClassName("slider--counter-max")[0];
let slideCounter = document.getElementsByClassName("slider--counter")[0];

let slideIndex = 1;
showSlides(slideIndex);

function nextSlide() {
  showSlides((slideIndex += 1));
}

function previousSlide() {
  showSlides((slideIndex -= 1));
}

function currentSlide(n) {
  showSlides((slideIndex = n));
}

function showSlides(n) {
  let slides = document.getElementsByClassName("slider--item");
  let images = document.getElementsByClassName("slider--image-content");

  if (n > slides.length) {
    slideIndex = 1;
  }
  if (n < 1) {
    slideIndex = slides.length;
  }

  for (let slide of slides) {
    slide.style.display = "none";
  }

  for (let image of images) {
    image.style.display = "none";
  }

  slideCounterActive.innerHTML = pad(slideIndex, 2);
  slideCounter.innerHTML = pad(slideIndex, 2);
  slideCounterMax.innerHTML = pad(slides.length, 2);

  slides[slideIndex - 1].style.display = "block";
  images[slideIndex - 1].style.display = "block";
}

prevSlideButton.addEventListener("click", (e) => {
  e.preventDefault();
  previousSlide();
  console.log("prev");
});

nextSlideButton.addEventListener("click", (e) => {
  e.preventDefault();
  nextSlide();
  console.log("next");
});
