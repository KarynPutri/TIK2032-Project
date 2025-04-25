// Efek Ketik Otomatis di Heading Utama (Hanya di index.html misalnya)
document.addEventListener("DOMContentLoaded", () => {
  const title = document.querySelector("h1");
  const text = title.textContent;
  title.textContent = "";

  let i = 0;
  const speed = 100;

  function typeWriter() {
      if (i < text.length) {
          title.textContent += text.charAt(i);
          i++;
          setTimeout(typeWriter, speed);
      }
  }

  typeWriter();
});

// Efek scroll: Fade in saat elemen muncul
const faders = document.querySelectorAll(".blog-post, .gallery img, p, h2");

const appearOptions = {
  threshold: 0.1,
  rootMargin: "0px 0px -50px 0px"
};

const appearOnScroll = new IntersectionObserver(function(entries, observer) {
  entries.forEach(entry => {
      if (!entry.isIntersecting) return;
      entry.target.classList.add("appear");
      observer.unobserve(entry.target);
  });
}, appearOptions);

faders.forEach(fader => {
  fader.classList.add("fade-in");
  appearOnScroll.observe(fader);
});

// Efek hover interaktif pada tombol navigasi
const navLinks = document.querySelectorAll(".nav-links a");

navLinks.forEach(link => {
  link.addEventListener("mouseenter", () => {
      link.style.transform = "scale(1.1)";
  });
  link.addEventListener("mouseleave", () => {
      link.style.transform = "scale(1)";
  });
});
