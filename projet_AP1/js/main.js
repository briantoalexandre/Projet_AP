// console.log("Hello, World!");

// Affiche chaque section lorsque l'utilisateur fait défiler la page
document.addEventListener("DOMContentLoaded", function () {
  const sections = document.querySelectorAll("section");

  function handleScroll() {
    sections.forEach((section) => {
      const rect = section.getBoundingClientRect();
      if (rect.top < window.innerHeight && rect.bottom > 0) {
        section.classList.add("fade-in");
      }
    });
  }

  window.addEventListener("scroll", handleScroll);
  handleScroll();
});
