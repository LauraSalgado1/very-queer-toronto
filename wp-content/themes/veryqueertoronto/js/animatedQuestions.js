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

    const q1 = document.getElementById("questionOne");
    const b1wrapper = document.querySelector(".b1-wrapper");
    const b1next = document.querySelector(".b1-wrapper .next-button");

    const q2 = document.getElementById("questionTwo");
    const b2wrapper = document.querySelector(".b2-wrapper");
    const b2next = document.querySelector(".b2-wrapper .next-button");
    const b2prev = document.querySelector(".b2-wrapper .prev-button");

    const q3 = document.getElementById("questionThree");
    const b3wrapper = document.querySelector(".b3-wrapper");
    const b3next = document.querySelector(".b3-wrapper .next-button");
    const b3prev = document.querySelector(".b3-wrapper .prev-button");

    const q4 = document.getElementById("questionFour");
    const b4wrapper = document.querySelector(".b4-wrapper");
    const b4next = document.querySelector(".b4-wrapper .next-button");
    const b4prev = document.querySelector(".b4-wrapper .prev-button");

    const submitWrapper = document.getElementById("submitWrapper");
    const submitButtonWrapper = document.querySelector(".b-submit-wrapper");
    const submitPrev = document.querySelector(".b-submit-wrapper .prev-button");

    const intro = document.querySelector(".mm-intro");

    const mmButtons = document.querySelectorAll(".mm-button");

    const nextButtons = document.querySelectorAll("#mmModal .next-button");
    const prevButtons = document.querySelectorAll("#mmModal .prev-button");

    if (modalButton) {
      modalButton.addEventListener("click", function () {
        mmModal.setAttribute("aria-hidden", "false");
        modalButton.setAttribute("aria-expanded", "true");
        intro.classList.add("modal-is-open");
      });
    }

    if (modalButtonClose) {
      modalButtonClose.addEventListener("click", function () {
        mmModal.setAttribute("aria-hidden", "true");
        modalButton.setAttribute("aria-expanded", "false");
        intro.classList.remove("modal-is-open");
      });
    }

    mmButtons.forEach((button) => {
      button.setAttribute("type", "button");
    });

    nextButtons.forEach((button) => {
      button.setAttribute("aria-controls", "mmTrack");
    });

    prevButtons.forEach((button) => {
      button.setAttribute("aria-controls", "mmTrack");
    });

    if (b1next) {
      b1next.addEventListener("click", function () {
        q1.setAttribute("aria-hidden", "true");
        q2.setAttribute("aria-hidden", "false");
        b1wrapper.classList.add("button-hidden");
        b2wrapper.classList.remove("button-hidden");
        // q2.setAttribute(
        //   "class",
        //   "mm-question q2 animate__animated animate__bounceInUp"
        // );
      });
    }

    if (b2next) {
      b2next.addEventListener("click", function () {
        q2.setAttribute("aria-hidden", "true");
        b2wrapper.classList.add("button-hidden");
        q3.setAttribute("aria-hidden", "false");
        b3wrapper.classList.remove("button-hidden");
        // q3.setAttribute(
        //   "class",
        //   "mm-question q3 animate__animated animate__bounceInUp"
        // );
      });
    }

    if (b2prev) {
      b2prev.addEventListener("click", function () {
        q2.setAttribute("aria-hidden", "true");
        b2wrapper.classList.add("button-hidden");
        q1.setAttribute("aria-hidden", "false");
        b1wrapper.classList.remove("button-hidden");
        // q1.setAttribute(
        //   "class",
        //   "mm-question q1 animate__animated animate__bounceInUp"
        // );
      });
    }

    if (b3next) {
      b3next.addEventListener("click", function () {
        q3.setAttribute("aria-hidden", "true");
        b3wrapper.classList.add("button-hidden");
        q4.setAttribute("aria-hidden", "false");
        b4wrapper.classList.remove("button-hidden");
        // q4.setAttribute(
        //   "class",
        //   "mm-question q4 animate__animated animate__bounceInUp"
        // );
      });
    }

    if (b3prev) {
      b3prev.addEventListener("click", function () {
        q3.setAttribute("aria-hidden", "true");
        b3wrapper.classList.add("button-hidden");
        q2.setAttribute("aria-hidden", "false");
        b2wrapper.classList.remove("button-hidden");
        // q2.setAttribute(
        //   "class",
        //   "mm-question q2 animate__animated animate__bounceInUp"
        // );
      });
    }

    if (b4next) {
      b4next.addEventListener("click", function () {
        q4.setAttribute("aria-hidden", "true");
        b4wrapper.classList.add("button-hidden");
        submitButtonWrapper.classList.remove("button-hidden");
        submitWrapper.setAttribute("aria-hidden", "false");
        // submitWrapper.setAttribute(
        //   "class",
        //   "mm-question qSubmit animate__animated animate__bounceInUp"
        // );
        // submitButtonWrapper.setAttribute(
        //   "class",
        //   "prev-button mm-button animate__animated animate__bounceInUp"
        // );
      });
    }

    if (b4prev) {
      b4prev.addEventListener("click", function () {
        q4.setAttribute("aria-hidden", "true");
        b4wrapper.classList.add("button-hidden");
        q3.setAttribute("aria-hidden", "false");
        b3wrapper.classList.remove("button-hidden");
        // q3.setAttribute(
        //   "class",
        //   "mm-question q3 animate__animated animate__bounceInUp"
        // );
      });
    }

    if (submitPrev) {
      submitPrev.addEventListener("click", function () {
        submitWrapper.setAttribute("aria-hidden", "true");
        submitButtonWrapper.classList.add("button-hidden");
        b4wrapper.classList.remove("button-hidden");
        q4.setAttribute("aria-hidden", "false");
        // q4.setAttribute(
        //   "class",
        //   "mm-question q4 animate__animated animate__bounceInUp"
        // );
      });
    }
  }
});
