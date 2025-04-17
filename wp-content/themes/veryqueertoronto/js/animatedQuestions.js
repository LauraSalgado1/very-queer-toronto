/**
 * File animatedQuestions.js.
 *
 */

document.addEventListener("DOMContentLoaded", function () {
  const isMatchmaking = document.querySelector(".matchmaking-modal");

  if (isMatchmaking) {
    const modalButton = document.querySelector(".mm-modal-button");
    const modalButtonClose = document.querySelector(".mm-modal-button-close");

    const mmModal = document.getElementById("mmModal");
    const overlay = document.getElementById("mmOverlay");
    const body = document.body;

    const q1 = document.getElementById("questionOne");
    const b1next = document.querySelector(".b1-wrapper .next-button");

    const q2 = document.getElementById("questionTwo");
    const b2next = document.querySelector(".b2-wrapper .next-button");
    const b2prev = document.querySelector(".b2-wrapper .prev-button");

    const q3 = document.getElementById("questionThree");
    const b3next = document.querySelector(".b3-wrapper .next-button");
    const b3prev = document.querySelector(".b3-wrapper .prev-button");

    const q4 = document.getElementById("questionFour");
    const b4next = document.querySelector(".b4-wrapper .next-button");
    const b4prev = document.querySelector(".b4-wrapper .prev-button");

    const q5 = document.getElementById("questionFive");
    const b5next = document.querySelector(".q5 .next-button");
    const b5prev = document.querySelector(".q5 .prev-button");

    const submitWrapper = document.getElementById("submitWrapper");
    const submitPrev = document.querySelector(".qSubmit .prev-button");

    const introWrapper = document.querySelector(".mm-modal-button-wrapper");
    const mmButtons = document.querySelectorAll(".mm-button");

    if (modalButton) {
      modalButton.addEventListener("click", function () {
        mmModal.setAttribute("aria-hidden", "false");
        modalButton.setAttribute("aria-expanded", "true");
        introWrapper.classList.add("modal-is-open");
        body.classList.add("modal-active");
      });
    }

    if (modalButtonClose) {
      modalButtonClose.addEventListener("click", function () {
        modalButtonClose.blur();
        mmModal.setAttribute("aria-hidden", "true");
        modalButton.setAttribute("aria-expanded", "false");
        introWrapper.classList.remove("modal-is-open");
        body.classList.remove("modal-active");
      });
    }

    if (overlay) {
      overlay.addEventListener("click", function () {
        mmModal.setAttribute("aria-hidden", "true");
        modalButton.setAttribute("aria-expanded", "false");
        introWrapper.classList.remove("modal-is-open");
        body.classList.remove("modal-active");
      });
    }

    mmButtons.forEach((button) => {
      button.setAttribute("type", "button");
    });

    if (b1next) {
      b1next.addEventListener("click", function () {
        b1next.blur();
        q1.setAttribute("aria-hidden", "true");
        q2.setAttribute("aria-hidden", "false");
        window.scrollTo({
          top: 0,
          behavior: "smooth",
        });
      });
    }

    if (b2next) {
      b2next.addEventListener("click", function () {
        b2next.blur();
        q2.setAttribute("aria-hidden", "true");
        q3.setAttribute("aria-hidden", "false");
        window.scrollTo({
          top: 0,
          behavior: "smooth",
        });
      });
    }

    if (b3next) {
      b3next.addEventListener("click", function () {
        b3next.blur();
        q3.setAttribute("aria-hidden", "true");
        q4.setAttribute("aria-hidden", "false");
        window.scrollTo({
          top: 0,
          behavior: "smooth",
        });
      });
    }

    if (b4next) {
      b4next.addEventListener("click", function () {
        b4next.blur();
        q4.setAttribute("aria-hidden", "true");
        q5.setAttribute("aria-hidden", "false");
        window.scrollTo({
          top: 0,
          behavior: "smooth",
        });
      });
    }

    if (b5next) {
      b5next.addEventListener("click", function () {
        b5next.blur();
        q5.setAttribute("aria-hidden", "true");
        submitWrapper.setAttribute("aria-hidden", "false");
        window.scrollTo({
          top: 0,
          behavior: "smooth",
        });
      });
    }

    if (b2prev) {
      b2prev.addEventListener("click", function () {
        b2prev.blur();
        q2.setAttribute("aria-hidden", "true");
        q1.setAttribute("aria-hidden", "false");
        window.scrollTo({
          top: 0,
          behavior: "smooth",
        });
      });
    }

    if (b3prev) {
      b3prev.addEventListener("click", function () {
        b3prev.blur();
        q3.setAttribute("aria-hidden", "true");
        q2.setAttribute("aria-hidden", "false");
        window.scrollTo({
          top: 0,
          behavior: "smooth",
        });
      });
    }

    if (b4prev) {
      b4prev.addEventListener("click", function () {
        b4prev.blur();
        q4.setAttribute("aria-hidden", "true");
        q3.setAttribute("aria-hidden", "false");
        window.scrollTo({
          top: 0,
          behavior: "smooth",
        });
      });
    }

    if (b5prev) {
      b5prev.addEventListener("click", function () {
        b5prev.blur();
        q5.setAttribute("aria-hidden", "true");
        q4.setAttribute("aria-hidden", "false");
        window.scrollTo({
          top: 0,
          behavior: "smooth",
        });
      });
    }

    if (submitPrev) {
      submitPrev.addEventListener("click", function () {
        submitPrev.blur();
        submitWrapper.setAttribute("aria-hidden", "true");
        q5.setAttribute("aria-hidden", "false");
        window.scrollTo({
          top: 0,
          behavior: "smooth",
        });
      });
    }
  }
});
