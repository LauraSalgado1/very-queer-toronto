document.addEventListener("DOMContentLoaded", function () {
  // matchmaking animated questions
  const isMatchmaking = document.querySelector(".matchmaking-modal");

  if (isMatchmaking) {
    const modalButton = document.querySelector(".mm-modal-button");
    const modalButtonClose = document.querySelector(".mm-modal-button-close");

    const form = document.querySelector(".mm-modal form");

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
        const selectedLabels = document.querySelectorAll(
          ".mm-modal label.selected"
        );
        selectedLabels.forEach((label) => {
          label.classList.remove("selected");
        });
        const openQuestion = document.querySelector(
          '.mm-question[aria-hidden="false"]'
        );
        openQuestion.setAttribute("aria-hidden", "true");
        q1.setAttribute("aria-hidden", "false");
        form.reset();
      });
    }

    if (overlay) {
      overlay.addEventListener("click", function () {
        mmModal.setAttribute("aria-hidden", "true");
        modalButton.setAttribute("aria-expanded", "false");
        introWrapper.classList.remove("modal-is-open");
        body.classList.remove("modal-active");
        const selectedLabels = document.querySelectorAll(
          ".mm-modal label.selected"
        );
        selectedLabels.forEach((label) => {
          label.classList.remove("selected");
        });
        const openQuestion = document.querySelector(
          '.mm-question[aria-hidden="false"]'
        );
        openQuestion.setAttribute("aria-hidden", "true");
        q1.setAttribute("aria-hidden", "false");
        form.reset();
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
  //dynamic email to prevent bot spam
  const email = document.querySelectorAll(".email-link a");

  email.forEach((link) => {
    link.setAttribute("href", "mailto:vqtevents@gmail.com");
  });

  /**
   * File navigation.js.
   *
   * Handles toggling the navigation menu for small screens and enables TAB key
   * navigation support for dropdown menus.
   */
  (function () {
    const siteNavigation = document.getElementById("site-navigation");

    // Return early if the navigation doesn't exist.
    if (!siteNavigation) {
      return;
    }

    const button = siteNavigation.getElementsByTagName("button")[0];

    // Return early if the button doesn't exist.
    if ("undefined" === typeof button) {
      return;
    }

    const menu = siteNavigation.getElementsByTagName("ul")[0];

    // Hide menu toggle button if menu is empty and return early.
    if ("undefined" === typeof menu) {
      button.style.display = "none";
      return;
    }

    if (!menu.classList.contains("nav-menu")) {
      menu.classList.add("nav-menu");
    }

    // Toggle the .toggled class and the aria-expanded value each time the button is clicked.
    button.addEventListener("click", function () {
      siteNavigation.classList.toggle("toggled");

      if (button.getAttribute("aria-expanded") === "true") {
        button.setAttribute("aria-expanded", "false");
      } else {
        button.setAttribute("aria-expanded", "true");
      }
    });

    // Remove the .toggled class and set aria-expanded to false when the user clicks outside the navigation.
    document.addEventListener("click", function (event) {
      const isClickInside = siteNavigation.contains(event.target);

      if (!isClickInside) {
        siteNavigation.classList.remove("toggled");
        button.setAttribute("aria-expanded", "false");
      }
    });

    // Get all the link elements within the menu.
    const links = menu.getElementsByTagName("a");

    // Get all the link elements with children within the menu.
    const linksWithChildren = menu.querySelectorAll(
      ".menu-item-has-children > a, .page_item_has_children > a"
    );

    // Toggle focus each time a menu link is focused or blurred.
    for (const link of links) {
      link.addEventListener("focus", toggleFocus, true);
      link.addEventListener("blur", toggleFocus, true);
    }

    // Toggle focus each time a menu link with children receive a touch event.
    for (const link of linksWithChildren) {
      link.addEventListener("touchstart", toggleFocus, false);
    }

    /**
     * Sets or removes .focus class on an element.
     */
    function toggleFocus() {
      if (event.type === "focus" || event.type === "blur") {
        let self = this;
        // Move up through the ancestors of the current link until we hit .nav-menu.
        while (!self.classList.contains("nav-menu")) {
          // On li elements toggle the class .focus.
          if ("li" === self.tagName.toLowerCase()) {
            self.classList.toggle("focus");
          }
          self = self.parentNode;
        }
      }

      if (event.type === "touchstart") {
        const menuItem = this.parentNode;
        event.preventDefault();
        for (const link of menuItem.parentNode.children) {
          if (menuItem !== link) {
            link.classList.remove("focus");
          }
        }
        menuItem.classList.toggle("focus");
      }
    }
  })();

  //splide Init
  const splideExists = document.querySelector(".desktop-scroll");

  if (splideExists) {
    const splide = new Splide(".desktop-scroll", {
      direction: "ttb",
      height: "743px",
      autoHeight: true,
      type: "loop",
      drag: "free",
      focus: "center",
      pagination: false,
      autoScroll: {
        speed: 0.4,
        useToggleButton: true,
      },
    });

    splide.mount(window.splide.Extensions);
  }

  const mobileCardsExists = document.querySelector(".mobile-cards");

  if (mobileCardsExists) {
    const mobileCards = new Splide(".mobile-cards", {
      gap: "20px",
      arrows: false,
      flickPower: 100,
    });

    mobileCards.mount(window.splide.Splide);
  }

  const testimonialExists = document.querySelector(".testimonials");

  if (testimonialExists) {
    const testimonials = new Splide(".testimonials", {
      gap: "20px",
      flickPower: 100,
    });

    testimonials.mount(window.splide.Splide);
  }
});
