$(document).ready(function () {
  // click 1x
  $("#tombol").click(function () {
    $(".box").hide(1000);
  });

  $(".tombol").click(function () {
    $(".box").show(3000);
  });
  // click 2x
  $("#tombol1").dblclick(function () {
    $(".box").hide(1000);
  });
  // ketika ngetik keyboard di input ada alert
  $("#teks").keypress(function () {
    alert("anda menekan keyboard");
  });
  // kalo di input di ganti kata2 nya maka show
  $("#teks1").change(function () {
    $(".box").show(1000);
  });

  $("#tombol_fadeIn").click(function () {
    $(".box1").fadeIn(1000);
  });

  $("#tombol6").click(function () {
    $(".p").html("selamet datang, <b>IT</b> Programmer");
  });

  $(document).ready(function () {
    function animateNumber(element) {
      const $element = $(element);
      const endValue = parseInt($element.data("value1"), 10); // Target value
      const duration = parseInt($element.data("animation-duration1"), 10); // Animation duration in milliseconds
      const increment = endValue / (duration / 50); // Increment per step

      let currentValue = 0;
      const interval = setInterval(() => {
        currentValue += increment;
        if (currentValue >= endValue) {
          currentValue = endValue;
          clearInterval(interval);
        }
        $element.text(Math.floor(currentValue)); // Update text
      }, 50); // Update every 50ms
    }

    function checkAnimation() {
      $("#tombol21").each(function () {
        const $this = $(this);
        if (isInViewport(this) && !$this.hasClass("animated")) {
          $this.addClass("animated"); // Add a class to prevent re-animating
          animateNumber(this);
        }
      });
    }

    // Check on page load and scroll
    $(window).on("scroll", checkAnimation);
    checkAnimation(); // Initial check on page load
  });

  // Helper function to check if an element is in viewport
  function isInViewport(element) {
    const rect = element.getBoundingClientRect();
    return (
      rect.top <=
        (window.innerHeight || document.documentElement.clientHeight) &&
      rect.bottom >= 0
    );
  }
  // asd
  $(document).ready(function () {
    function animateNumber(element) {
      const $element = $(element);
      const endValue = parseInt($element.data("value2"), 10); // Target value
      const duration = parseInt($element.data("animation-duration2"), 10); // Animation duration in milliseconds
      const increment = endValue / (duration / 50); // Increment per step

      let currentValue = 0;
      const interval = setInterval(() => {
        currentValue += increment;
        if (currentValue >= endValue) {
          currentValue = endValue;
          clearInterval(interval);
        }
        $element.text(Math.floor(currentValue)); // Update text
      }, 50); // Update every 50ms
    }

    function checkAnimation() {
      $("#tombol23").each(function () {
        const $this = $(this);
        if (isInViewport(this) && !$this.hasClass("animated")) {
          $this.addClass("animated"); // Add a class to prevent re-animating
          animateNumber(this);
        }
      });
    }

    // Check on page load and scroll
    $(window).on("scroll", checkAnimation);
    checkAnimation(); // Initial check on page load
  });

  // Helper function to check if an element is in viewport
  function isInViewport(element) {
    const rect = element.getBoundingClientRect();
    return (
      rect.top <=
        (window.innerHeight || document.documentElement.clientHeight) &&
      rect.bottom >= 0
    );
  }
  $(document).ready(function () {
    function animateNumber(element) {
      const $element = $(element);
      const endValue = parseInt($element.data("value"), 10); // Target value
      const duration = parseInt($element.data("animation-duration"), 10); // Animation duration in milliseconds
      const increment = endValue / (duration / 50); // Increment per step

      let currentValue = 0;
      const interval = setInterval(() => {
        currentValue += increment;
        if (currentValue >= endValue) {
          currentValue = endValue;
          clearInterval(interval);
        }
        $element.text(Math.floor(currentValue)); // Update text
      }, 50); // Update every 50ms
    }

    function checkAnimation() {
      $("#tombol22").each(function () {
        const $this = $(this);
        if (isInViewport(this) && !$this.hasClass("animated")) {
          $this.addClass("animated"); // Add a class to prevent re-animating
          animateNumber(this);
        }
      });
    }

    // Check on page load and scroll
    $(window).on("scroll", checkAnimation);
    checkAnimation(); // Initial check on page load
  });

  // Helper function to check if an element is in viewport
  function isInViewport(element) {
    const rect = element.getBoundingClientRect();
    return (
      rect.top <=
        (window.innerHeight || document.documentElement.clientHeight) &&
      rect.bottom >= 0
    );
  }

  // $(document).ready(function () {
  //   function animateNumber(element) {
  //     const $element = $(element);
  //     const endValue = parseInt($element.data("value"), 10); // Target value
  //     const duration = parseInt($element.data("animation-duration"), 10); // Animation duration in milliseconds
  //     const increment = endValue / (duration / 50); // Increment per step

  //     let currentValue = 0;
  //     const interval = setInterval(() => {
  //       currentValue += increment;
  //       if (currentValue >= endValue) {
  //         currentValue = endValue;
  //         clearInterval(interval);
  //       }
  //       $element.text(Math.floor(currentValue)); // Update text
  //     }, 50); // Update every 50ms
  //   }

  //   // Apply animation to all elements with the class "text-primary"
  //   $("#tombol22").each(function () {
  //     animateNumber(this);
  //   });
  // });
});
