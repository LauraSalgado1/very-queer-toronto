/**
 * File animatedQuestions.js.
 *
 */

document.addEventListener("DOMContentLoaded", function () {
  const isMatchmaking = document.querySelector(".matchmaking-container");

  if (isMatchmaking) {
    const form = document.querySelector("acfe-form.matchmaking");

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

    const submitWrapper = document.getElementById("submitWrapper");
    const submitPrev = document.querySelector(".b-submit-wrapper .prev-button");

    const intro = document.querySelector(".mm-intro");

    const mmButtons = document.querySelectorAll(".mm-button");

    mmButtons.forEach((button) => {
      button.setAttribute("type", "");
    });

    if (b1next) {
      b1next.setAttribute("aria-controls", "questionOne");

      b1next.addEventListener("click", function () {
        q1.setAttribute("aria-hidden", "true");
        b1next.setAttribute("aria-expanded", "false");

        b1next.classList.add("button-hidden");
        intro.classList.add("button-hidden");

        q2.setAttribute("aria-hidden", "false");
        b2next.setAttribute("aria-expanded", "true");
        b2next.classList.remove("button-hidden");
        b2prev.classList.remove("button-hidden");
        q2.setAttribute(
          "class",
          "mm-question q2 animate__animated animate__bounceInUp"
        );
      });
    }

    if (b2next) {
      b2next.setAttribute("aria-controls", "questionTwo");

      b2next.addEventListener("click", function () {
        q2.setAttribute("aria-hidden", "true");
        b2next.setAttribute("aria-expanded", "false");
        b2next.classList.add("button-hidden");
        b2prev.classList.add("button-hidden");

        q3.setAttribute("aria-hidden", "false");
        b3next.setAttribute("aria-expanded", "true");
        b3next.classList.remove("button-hidden");
        b3prev.classList.remove("button-hidden");
        q3.setAttribute(
          "class",
          "mm-question q3 animate__animated animate__bounceInUp"
        );
      });
    }

    if (b2prev) {
      //   b2prev.setAttribute("aria-controls", "questionTwo");

      b2prev.addEventListener("click", function () {
        q2.setAttribute("aria-hidden", "true");
        b2next.setAttribute("aria-expanded", "false");
        b2prev.classList.add("button-hidden");
        b2next.classList.add("button-hidden");

        q1.setAttribute("aria-hidden", "false");
        b1next.setAttribute("aria-expanded", "true");
        b1next.classList.remove("button-hidden");
        q1.setAttribute(
          "class",
          "mm-question q1 animate__animated animate__bounceInUp"
        );
      });
    }

    if (b3next) {
      b3next.setAttribute("aria-controls", "questionThree");

      b3next.addEventListener("click", function () {
        q3.setAttribute("aria-hidden", "true");
        b3next.setAttribute("aria-expanded", "false");
        b3next.classList.add("button-hidden");
        b3prev.classList.add("button-hidden");

        q4.setAttribute("aria-hidden", "false");
        b4next.setAttribute("aria-expanded", "true");
        b4next.classList.remove("button-hidden");
        b4prev.classList.remove("button-hidden");
        q4.setAttribute(
          "class",
          "mm-question q4 animate__animated animate__bounceInUp"
        );
      });
    }

    if (b3prev) {
      //   b3prev.setAttribute("aria-controls", "questionThree");

      b3prev.addEventListener("click", function () {
        q3.setAttribute("aria-hidden", "true");
        b3next.setAttribute("aria-expanded", "false");

        b3prev.classList.add("button-hidden");
        b3next.classList.add("button-hidden");

        q2.setAttribute("aria-hidden", "false");
        b2next.setAttribute("aria-expanded", "true");
        b2next.classList.remove("button-hidden");
        b2prev.classList.remove("button-hidden");
        q2.setAttribute(
          "class",
          "mm-question q2 animate__animated animate__bounceInUp"
        );
      });
    }

    if (b4next) {
      b4next.setAttribute("aria-controls", "questionFour");

      b4next.addEventListener("click", function () {
        q4.setAttribute("aria-hidden", "true");
        b4next.setAttribute("aria-expanded", "false");

        b4next.classList.add("button-hidden");
        b4prev.classList.add("button-hidden");

        submitWrapper.setAttribute("aria-hidden", "false");
        submitWrapper.setAttribute(
          "class",
          "mm-question qSubmit animate__animated animate__bounceInUp"
        );

        submitPrev.setAttribute(
          "class",
          "prev-button mm-button animate__animated animate__bounceInUp"
        );
      });
    }

    if (b4prev) {
      //   b4prev.setAttribute("aria-controls", "questionFour");

      b4prev.addEventListener("click", function () {
        q4.setAttribute("aria-hidden", "true");
        b4next.setAttribute("aria-expanded", "false");

        b4prev.classList.add("button-hidden");
        b4next.classList.add("button-hidden");

        q3.setAttribute("aria-hidden", "false");
        b3next.setAttribute("aria-expanded", "true");
        b3next.classList.remove("button-hidden");
        b3prev.classList.remove("button-hidden");
        q3.setAttribute(
          "class",
          "mm-question q3 animate__animated animate__bounceInUp"
        );
      });
    }

    if (submitPrev) {
      //   submitPrev.setAttribute("aria-controls", "submitWrapper");

      submitPrev.addEventListener("click", function () {
        submitWrapper.setAttribute("aria-hidden", "true");
        submitPrev.classList.add("button-hidden");

        b4prev.setAttribute("aria-expanded", "true");
        b4prev.classList.remove("button-hidden");
        b4next.classList.remove("button-hidden");

        q4.setAttribute("aria-hidden", "false");
        b4next.setAttribute("aria-expanded", "true");
        b4next.classList.remove("button-hidden");
        b4prev.classList.remove("button-hidden");
        q4.setAttribute(
          "class",
          "mm-question q4 animate__animated animate__bounceInUp"
        );
      });
    }
  }
});
