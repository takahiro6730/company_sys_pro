// With controls

var swiper = new Swiper(".login-slider", {
    spaceBetween: 30,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    loop:true,
});

const langSelect = (curLang) => {
    let langDrop = document.getElementById("language-dropdown");
    langDrop.value = curLang;
}

const curLang = document.getElementById("curLang").value;
langSelect(curLang);

document.getElementById("language-dropdown").addEventListener("change", function() {
    var selectedLanguage = this.value;
    switch (selectedLanguage) {
      case "ja":
        window.location.href = "./ja";
        break;
      case "en":
        window.location.href = "./en";
        break;
      case "sp":
        window.location.href = "./sp";
        break;
      case "ru":
        window.location.href = "./ru";
        break;
      case "ch":
        window.location.href = "./ch";
        break;
      default:
        window.location.href = "./ja";
    }
  });
