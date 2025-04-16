document.addEventListener("DOMContentLoaded", function () {
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
      },
    });

    splide.mount(window.splide.Extensions);
  }

  const mobileCardsExists = document.querySelector(".mobile-cards");

  if (mobileCardsExists) {
    const mobileCards = new Splide(".mobile-cards", {
      gap: "20px",
      arrows: false,
    });

    mobileCards.mount(window.splide.Splide);
  }

  const testimonialExists = document.querySelector(".testimonials");

  if (testimonialExists) {
    const testimonials = new Splide(".testimonials", {
      gap: "20px",
      //perPage: 1,
    });

    testimonials.mount(window.splide.Splide);
  }
});
