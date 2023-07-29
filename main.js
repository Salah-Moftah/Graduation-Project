
window.addEventListener("scroll", reveal);

function reveal() {
  let reveals = document.querySelectorAll(".reveal");
  console.log(reveals);

  for (let i = 0; i < reveals.length; i++) {
    let windowHeight = window.innerHeight;
    let revealTop = reveals[i].getBoundingClientRect().top;
    let revealPoint = 150;

    if (revealTop < windowHeight - revealPoint) {
      reveals[i].classList.add("active");
    } else {
      reveals[i].classList.remove("active");
    }
  }
}

let wrapper = document.querySelector(".wrapper"),
  signupHeader = document.querySelector(".signup h3"),
  loginHeader = document.querySelector(".login h3");

loginHeader.addEventListener("click", function () {
  wrapper.classList.add("active");
});
signupHeader.addEventListener("click", function () {
  wrapper.classList.remove("active");
});
window.onload = function () {
  wrapper.classList.add("active");
};
