document.querySelector(".btn-plus2").addEventListener("click", function () {
  const form = document.querySelector(".form");
  if (form.style.display === "none") {
    form.style.display = "block";
  } else {
    form.style.display = "none";
  }
});
document.querySelector(".btn-plus1").addEventListener("click", function () {
  const form = document.querySelector(".form-auteur");
  if (form.style.display === "none") {
    form.style.display = "block";
  } else {
    form.style.display = "none";
  }
});
