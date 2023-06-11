let acc = document.getElementsByClassName("accordion");
let i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function (event) {
    if (!event.target.classList.contains('accordion__link')) { // Исключаем обработку клика при нажатии на ссылку
      this.classList.toggle("active");
      let panel = this.nextElementSibling;
      if (panel.style.maxHeight) {
        panel.style.maxHeight = null;
      } else {
        panel.style.maxHeight = panel.scrollHeight + "px";
      }
    }
  });
}

function handleLinkClick(event) {
  event.stopPropagation(); // Предотвращаем закрытие аккордиона при клике на ссылку
  // Обработка нажатия на ссылку...
}