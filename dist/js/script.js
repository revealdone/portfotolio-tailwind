$(document).ready(function () {
  $("#tombol34").click(function () {
    let timerInterval;
    Swal.fire({
      title: "Auto close alert!",
      html: "I will close in <b></b> milliseconds.",
      timer: 2000,
      timerProgressBar: true,
      didOpen: () => {
        Swal.showLoading();
        const timer = Swal.getPopup().querySelector("b");
        timerInterval = setInterval(() => {
          timer.textContent = `${Swal.getTimerLeft()}`;
        }, 100);
      },
      willClose: () => {
        clearInterval(timerInterval);
      },
    }).then((result) => {
      /* Read more about handling dismissals below */
      if (result.dismiss === Swal.DismissReason.timer) {
        console.log("I was closed by the timer");
      }
    });
  });
});

$(document).ready(function () {
  $(window).on("scroll", function () {
    $(".fade-in").each(function () {
      const windowHeight = $(window).height();
      const scrollTop = $(window).scrollTop();
      const elementOffsetTop = $(this).offset().top;
      const elementHeight = $(this).outerHeight();

      // Cek apakah elemen masuk ke viewport
      if (scrollTop + windowHeight > elementOffsetTop && scrollTop < elementOffsetTop + elementHeight) {
        $(this)
          .removeClass("opacity-0 translate-y-10")
          .addClass("opacity-100 translate-y-0");
      } else {
        // Reset ke posisi awal jika elemen keluar dari viewport
        $(this)
          .removeClass("opacity-100 translate-y-0")
          .addClass("opacity-0 translate-y-10");
      }
    });
  });

  const DATA_COUNT = 7;
    const labels = ['Css', 'Js', 'Html', 'Php', 'tailwind', 'VisualBasic', 'Laravel/CI4'];
    const dataFirstSkip = [1, 1, 1, 1, 23, 20, 1];
    const dataMiddleSkip = [1, 1, 1, 25, 1, 1, 30];
    const dataLastSkip = [35, 32, 40, 40, 1, 1, 1];

    const data = {
      labels: labels,
      datasets: [
        {
          label: 'Entry Level',
          data: dataFirstSkip,
          borderColor: 'rgba(255, 99, 132, 1)',
          backgroundColor: 'rgba(255, 99, 132, 0.2)',
        },
        {
          label: 'Mediun Level',
          data: dataMiddleSkip,
          borderColor: 'rgba(54, 162, 235, 1)',
          backgroundColor: 'rgba(54, 162, 235, 0.2)',
        },
        {
          label: 'Advance Level',
          data: dataLastSkip,
          borderColor: 'rgba(75, 192, 192, 1)',
          backgroundColor: 'rgba(75, 192, 192, 0.2)',
        },
      ],
    };

    const ctx = document.getElementById('radarChart');
    new Chart(ctx, {
      type: 'radar',
      data: data,
      options: {
        scales: {
          r: {
            beginAtZero: true,
          },
        },
      },
    });


});

//navbar fixed
window.onscroll = function () {
  const header = document.querySelector("header");
  const fixedNav = header.offsetTop;
  const toTop = document.querySelector('#to-top');

  if (window.pageYOffset > fixedNav) {
    header.classList.add("navbar-fixed");
    toTop.classList.remove('hidden');
    toTop.classList.add('flex');
  } else {
    header.classList.remove("navbar-fixed");
    toTop.classList.remove('flex');
    toTop.classList.add('hidden');
  }
};

//hamburger
const hamburger = document.querySelector("#hamburger");
const navMenu = document.querySelector("#nav-menu");

hamburger.addEventListener("click", function () {
  hamburger.classList.toggle("hamburger-active");
  navMenu.classList.toggle("hidden");
});

// klik di luar hamburger
window.addEventListener('click', function (e) {
  if (e.target != hamburger && e.target != navMenu) {
    hamburger.classList.remove("hamburger-active");
  navMenu.classList.add("hidden");
  }
});

var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  myIndex++;
  if (myIndex > x.length) {
    myIndex = 1;
  }
  x[myIndex - 1].style.display = "block";
  setTimeout(carousel, 2000); // Change image every 2 seconds
}

var myIndex1 = 0;
carousel1();

function carousel1() {
  var i;
  var x = document.getElementsByClassName("mySlides1");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  myIndex1++;
  if (myIndex1 > x.length) {
    myIndex1 = 1;
  }
  x[myIndex1 - 1].style.display = "block";
  setTimeout(carousel1, 2000); // Change image every 2 seconds
}

var myIndex8 = 0;
carousel8();

function carousel8() {
  var i;
  var x = document.getElementsByClassName("mySlides8");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  myIndex8++;
  if (myIndex8 > x.length) {
    myIndex8 = 1;
  }
  x[myIndex8 - 1].style.display = "block";
  setTimeout(carousel8, 3000); // Change image every 2 seconds
}

// slideer

// slide 2
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs((slideIndex += n));
}

function currentDiv(n) {
  showDivs((slideIndex = n));
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides4");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {
    slideIndex = 1;
  }
  if (n < 1) {
    slideIndex = x.length;
  }
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" w3-white", "");
  }
  x[slideIndex - 1].style.display = "block";
  dots[slideIndex - 1].className += " w3-white";
}

// baru 
// text-base text-dark py-2 mx-8 flex group-hover:text-primary
document.addEventListener("DOMContentLoaded", function () {
  const sections = document.querySelectorAll("section");
  const navLinks = document.querySelectorAll("#nav-menu .nav-link");

  const activateNavLink = () => {
    let scrollPosition = window.scrollY + 200; // Adjust posisi scroll

    sections.forEach((section) => {
      const sectionTop = section.offsetTop;
      const sectionHeight = section.offsetHeight;
      const sectionId = section.getAttribute("id");

      if (scrollPosition >= sectionTop && scrollPosition <= sectionTop + sectionHeight) {
        navLinks.forEach((link) => {
          link.classList.remove("bg-primary", "text-white", "font-bold", "h-screen"); // Reset semua gaya navbar
          link.classList.add("text-gray-800", "font-semibold"); // Gaya default
          if (link.getAttribute("href").includes(sectionId)) {
            link.classList.add("bg-primary", "text-white", "font-bold", "h-screen"); // Tambahkan gaya aktif
          }
        });
      }
    });
  };

  // Attach scroll dan load events
  window.addEventListener("scroll", activateNavLink);
  window.addEventListener("load", activateNavLink);
});


// ini swiper
// const swiper = new Swiper('.swiper', {
//   direction: 'horizontal',
//   loop: true,
//   on: {
//     slideChangeTransitionStart: function () {
//       const slides = document.querySelectorAll('.swiper-slide');
//       slides.forEach(slide => slide.style.animation = 'none'); // Reset animasi
//     },
//     slideChangeTransitionEnd: function () {
//       const activeSlide = document.querySelector('.swiper-slide-active');
//       activeSlide.style.animation = 'slideInFromTop 0.5s ease-out';
//     },
//   },
// });


// 
// document.addEventListener("DOMContentLoaded", function () {
// var i = 0;
// var txt = 'Programmer ✔'; /* The text */
// var speed = 50; /* The speed/duration of the effect in milliseconds */

// function typeWriter() {
//   if (i < txt.length) {
//     document.getElementById("demo").innerHTML += txt.charAt(i);
//     i++;
//     setTimeout(typeWriter, speed);
//   }
// }
// });

// 
$(document).ready(function () {
  var txt = 'Programmer ✔  Web Developer';  // Teks yang akan diketik
  var speed = 100; // Kecepatan ketikan (ms)
  var i = 0;
  
  function typeWriter() {
    if (i < txt.length) {
      $('#demo').append(txt.charAt(i));
      i++;
      setTimeout(typeWriter, speed); // Menunggu sesuai kecepatan sebelum mengetik karakter berikutnya
    } else {
      setTimeout(function() {
        $('#demo').text('');  // Menghapus teks setelah selesai
        i = 0; // Reset ke indeks awal
        typeWriter(); // Mulai ulang efek
      }, 1000); // Delay 1 detik sebelum memulai ulang
    }
  }

  typeWriter(); // Panggil fungsi untuk pertama kali
});


// new
$(document).ready(function () {
  // Get elements
  const modal = $("#myModal");
  const modalImg = $("#img01");
  const captionText = $("#caption");

  // Open modal on image click
  $("#myImg").on("click", function () {
    modal.removeClass("hidden").addClass("flex");
    modalImg.attr("src", $(this).attr("src"));
    captionText.text($(this).attr("alt"));
  });

  // Close modal when clicking on close button
  $(".close").on("click", function () {
    modal.removeClass("flex").addClass("hidden");
  });

  // Close modal when clicking outside the image
  modal.on("click", function (e) {
    if ($(e.target).is("#myModal")) {
      modal.removeClass("flex").addClass("hidden");
    }
  });
});


document.addEventListener("DOMContentLoaded", function () {
  
  var modal = document.getElementById("myModal");

  // Get the image and insert it inside the modal - use its "alt" text as a caption
  var img = document.getElementById("myImg");
  var modalImg = document.getElementById("img01");
  var captionText = document.getElementById("caption");
  img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
  }
  
  // Get the <span> element that closes the modal
  var span = document.getElementsByClassName("close")[0];
  
  // When the user clicks on <span> (x), close the modal
  span.onclick = function() {
    modal.style.display = "none";
  } 


  var modal = document.getElementById("myModal1");

  // Get the image and insert it inside the modal - use its "alt" text as a caption
  var img = document.getElementById("myImg1");
  var modalImg = document.getElementById("img01");
  var captionText = document.getElementById("caption");
  img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
  }
  
  // Get the <span> element that closes the modal
  var span = document.getElementsByClassName("close")[0];
  
  // When the user clicks on <span> (x), close the modal
  span.onclick = function() {
    modal.style.display = "none";
  } 


  var modal = document.getElementById("myModal2");

  // Get the image and insert it inside the modal - use its "alt" text as a caption
  var img = document.getElementById("myImg2");
  var modalImg = document.getElementById("img01");
  var captionText = document.getElementById("caption");
  img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
  }
  
  // Get the <span> element that closes the modal
  var span = document.getElementsByClassName("close")[0];
  
  // When the user clicks on <span> (x), close the modal
  span.onclick = function() {
    modal.style.display = "none";
  } 


  var modal = document.getElementById("myModal3");

  // Get the image and insert it inside the modal - use its "alt" text as a caption
  var img = document.getElementById("myImg3");
  var modalImg = document.getElementById("img01");
  var captionText = document.getElementById("caption");
  img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
  }
  
  // Get the <span> element that closes the modal
  var span = document.getElementsByClassName("close")[0];
  
  // When the user clicks on <span> (x), close the modal
  span.onclick = function() {
    modal.style.display = "none";
  } 


  var modal = document.getElementById("myModal4");

  // Get the image and insert it inside the modal - use its "alt" text as a caption
  var img = document.getElementById("myImg4");
  var modalImg = document.getElementById("img01");
  var captionText = document.getElementById("caption");
  img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
  }
  
  // Get the <span> element that closes the modal
  var span = document.getElementsByClassName("close")[0];
  
  // When the user clicks on <span> (x), close the modal
  span.onclick = function() {
    modal.style.display = "none";
  } 


  var modal = document.getElementById("myModal5");

  // Get the image and insert it inside the modal - use its "alt" text as a caption
  var img = document.getElementById("myImg5");
  var modalImg = document.getElementById("img01");
  var captionText = document.getElementById("caption");
  img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
  }
  
  // Get the <span> element that closes the modal
  var span = document.getElementsByClassName("close")[0];
  
  // When the user clicks on <span> (x), close the modal
  span.onclick = function() {
    modal.style.display = "none";
  } 
  });
  