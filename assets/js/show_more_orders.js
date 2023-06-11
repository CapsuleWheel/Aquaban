const itemsToShow = 2; // количество элементов, которые нужно показывать за раз
let visibleItemCount = 0; // количество видимых элементов

function showMore() {
  const items = document.querySelectorAll('#orders__container .orders__block');
  for (let i = visibleItemCount; i < visibleItemCount + itemsToShow && i < items.length; i++) {
    items[i].classList.add('visible');
  }
  visibleItemCount += itemsToShow;
  if (visibleItemCount >= items.length) {
    document.querySelector('#showMoreBtn').style.display = 'none';
  }
}

function hideAll() {
  const items = document.querySelectorAll('#orders__container .orders__block.visible');
  items.forEach(item => item.classList.remove('visible'));
  visibleItemCount = 0;
  document.querySelector('#showMoreBtn').style.display = 'block';
}

document.querySelector('#showMoreBtn').addEventListener('click', showMore);
document.querySelector('#hideAllBtn').addEventListener('click', hideAll);
