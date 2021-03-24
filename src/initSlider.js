function initSlider(container) {
  const slides = container.querySelectorAll(".gallery__item");
  const indexEl = container.querySelector(".gallery__index");
  let state = {
    currentSlide: 0,
    nextSlide: 0,
    prevSlide: 0,
  };
  if (slides.length === 1) {
    slides[state.currentSlide].classList.add("current");
    return;
  }

  slides[state.currentSlide].classList.add("current");
  indexEl.innerText = `${state.currentSlide + 1}/${slides.length}`;
  container.addEventListener("click", (e) => {
    if (e.clientX > window.innerWidth / 2) {
      advance(1);
    } else {
      advance(-1);
    }
  });

  function advance(increment) {
    slides[state.currentSlide].classList.remove("current");
    state.currentSlide += increment;
    if (state.currentSlide > slides.length - 1) {
      state.currentSlide = 0;
    }
    if (state.currentSlide < 0) {
      state.currentSlide = slides.length - 1;
    }
    container.setAttribute("data-slide", state.currentSlide);
    indexEl.innerText = `${state.currentSlide + 1}/${slides.length}`;
    slides[state.currentSlide].classList.add("current");
  }

  container.addEventListener("keyup", (e) => {
    if (e.key === "ArrowRight") {
      advance(1);
    }
    if (e.key === "ArrowLeft") {
      advance(-1);
    }
  });
  container.classList.add("ready")
}

export { initSlider };
