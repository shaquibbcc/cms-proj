// #region Navbar Toggle Button
const toggler = document.querySelector('.navbar-toggler');
const barsIcon = toggler.querySelector('.fa-bars');
const xIcon = toggler.querySelector('.fa-xmark');
// Toggle icons on click
toggler.addEventListener('click', () => {
  barsIcon.classList.toggle('d-none');
  xIcon.classList.toggle('d-none');
});
// #endregion

// #region Smooth Scroll Active State
const navLinks = document.querySelectorAll(".nav-link");

window.addEventListener("scroll", () => {
  const fromTop = window.scrollY + 100;

  navLinks.forEach(link => {
    const section = document.querySelector(link.hash);

    if (
      section &&
      section.offsetTop <= fromTop &&
      section.offsetTop + section.offsetHeight > fromTop
    ) {
      link.classList.add("active");
    } else {
      link.classList.remove("active");
    }
  });
});
// #endregion

// #region Typing Effect Hero section
const texts = ["CALLUM SMITH", "Web Developer", "Freelancer"];
const typingElement = document.getElementById("typing");
const cursor = document.querySelector(".cursor");

let textIndex = 0;
let charIndex = 0;

const typeEffect = () => {
  if (charIndex < texts[textIndex].length) {
    typingElement.innerHTML += texts[textIndex].charAt(charIndex);
    charIndex++;
    setTimeout(() => typeEffect(), 150);
  } else {
    setTimeout(() => eraseEffect(), 1500);
  }
};

const eraseEffect = () => {
  if (charIndex > 0) {
    typingElement.innerHTML = texts[textIndex].substring(0, charIndex - 1);
    charIndex--;
    setTimeout(() => eraseEffect(), 100);
  } else {
    textIndex = (textIndex + 1) % texts.length;
    setTimeout(() => typeEffect(), 500);
  }
};

document.addEventListener("DOMContentLoaded", () => typeEffect());
// #endregion

// #region Skills Progress Animation Resume Section
document.addEventListener("DOMContentLoaded", () => {
  const progressBars = document.querySelectorAll(".progress-bar");

  progressBars.forEach(bar => {
    const value = parseInt(bar.getAttribute("data-progress")) || 0;
    let width = 0;
    const span = bar.querySelector(".progress-value");

    const interval = setInterval(() => {
      if (width >= value) {
        clearInterval(interval);
      } else {
        width++;
        bar.style.width = `${width}%`;
        if (span) span.textContent = `${width}%`;
      }
    }, 15);
  });
});
// #endregion

// #region Portfolio Filter Script
document.addEventListener("DOMContentLoaded", () => {
  const filterButtons = document.querySelectorAll(".filter-btn");
  const projects = document.querySelectorAll(".project-item");

  filterButtons.forEach(btn => {
    btn.addEventListener("click", () => {
      // Active button style
      filterButtons.forEach(b => b.classList.remove("active"));
      btn.classList.add("active");

      const filter = btn.getAttribute("data-filter");

      projects.forEach(item => {
        if (filter === "all" || item.classList.contains(filter)) {
          item.classList.remove("d-none");
          item.classList.add("d-block");
        } else {
          item.classList.add("d-none");
        }
      });
    });
  });
});
// #endregion

