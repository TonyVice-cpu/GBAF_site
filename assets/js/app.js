const totop = document.getElementById("totop");
totop.addEventListener("click", () => window.scrollTo(0, 0));

window.addEventListener("scroll", () => {
  if (window.scrollY > 200) {
    if (totop.style.display === "none" || totop.style.display === "")
      totop.style.display = "block";
  } else {
    if (totop.style.display === "block") totop.style.display = "none";
  }
});
