const totop = document.getElementById("totop");
totop.addEventListener("click", () => window.scrollTo(0, 0));

window.addEventListener("scroll", () => {
  const cl = totop.classList;
  const name = "visible";
  if (window.scrollY > 200) {
    if (!cl.contains(name)) cl.add(name);
  } else cl.remove(name);
});
