const menu = document.querySelector(".menu-img");
const mobileHeader = document.querySelector(".mobile-header");
const filterBtn = document.getElementById("filter");
const cancelFilterBtn = document.querySelector(".exit-filters");
const filtersTab = document.querySelector(".sidebar");
const mapButton = document.querySelector(".map-button");
const mapSection = document.querySelector(".map");
const mainContent = document.querySelector(".main-content");
const main = document.querySelector(".main");

filterBtn.addEventListener("click", toggleFilters);
cancelFilterBtn.addEventListener("click", toggleFilters);
window.addEventListener("resize", handleResize);

menu.addEventListener("click", () => {
  mobileHeader.classList.toggle("mobile-header-active");
});

mapButton.addEventListener("click", function () {
  mapSection.classList.toggle("show-map");
  mainContent.classList.toggle("blur-map");
  if (mapSection.classList.contains("show-map")) {
    mapButton.textContent = "Close Map";
  } else {
    mapButton.textContent = "Open Map";
  }
});

function toggleFilters() {
  main.classList.toggle("blur-filters");
  filtersTab.classList.toggle("sidebar-visibility");
  cancelFilterBtn.classList.toggle("exit-visibility");
}

function handleResize() {
  if (window.innerWidth > 768) {
    mobileHeader.classList.remove("mobile-header-active");
    main.classList.remove("blur-filters");
    filtersTab.classList.remove("sidebar-visibility");
    cancelFilterBtn.classList.remove("exit-visibility");
  }
  if (window.innerWidth > 1050) {
    mapSection.classList.remove("show-map");
    mainContent.classList.remove("blur-map");
    mapButton.textContent = "Open Map";
  }
}
