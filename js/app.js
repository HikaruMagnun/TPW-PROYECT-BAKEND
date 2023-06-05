//los mas buscados (carrusel 1 a la vez)
window.addEventListener("load", function () {
  new Glider(document.querySelector(".inicio_mrsearch_content"), {
    slidesToShow: 1,

    dots: ".inicio_mrsearch_indicador",
  });

  new Glider(document.querySelector(".inicio_mrsell_content"), {
    slidesToShow: 1,
    slidesToScroll: 1,

    arrows: {
      prev: ".inicio_mrsell_botonA",
      next: ".inicio_mrsell_botonS",
    },
    responsive: [
      {
        // screens greater than >= 775px
        breakpoint: 450,
        settings: {
          // Set to `auto` and provide item width to adjust to viewport
          slidesToShow: 2,
          slidesToScroll: 2,
        },
      },
      {
        // screens greater than >= 1024px
        breakpoint: 800,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 4,
        },
      },
    ],
  });
  new Glider(document.querySelector(".inicio_ofer_content"), {
    slidesToShow: 1,
    slidesToScroll: 1,

    arrows: {
      prev: ".inicio_ofer_botonA",
      next: ".inicio_ofer_botonS",
    },
    responsive: [
      {
        // screens greater than >= 775px
        breakpoint: 450,
        settings: {
          // Set to `auto` and provide item width to adjust to viewport
          slidesToShow: 2,
          slidesToScroll: 2,
        },
      },
      {
        // screens greater than >= 1024px
        breakpoint: 800,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 4,
        },
      },
    ],
  });
});
