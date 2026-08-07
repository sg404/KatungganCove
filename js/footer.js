// Footer interactions
(function () {
  // Smooth link hover behaviors (additive no-op for consistency)
  document.querySelectorAll(".footer-links a").forEach((link) => {
    link.addEventListener("mouseenter", () => {
      link.style.transitionDuration = "0.25s";
    });
  });
})();
