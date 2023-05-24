const button1 = document.getElementById('button1');
const button2 = document.getElementById('button2');
const button3 = document.getElementById('button3');

const popup1 = document.getElementById('popup1');
const popup2 = document.getElementById('popup2');
const popup3 = document.getElementById('popup3');

const closeButtons = document.querySelectorAll('.close-btn');

button1.addEventListener('click', function() {
  popup1.style.display = 'block';
});

button2.addEventListener('click', function() {
  popup2.style.display = 'block';
});

button3.addEventListener('click', function() {
  popup3.style.display = 'block';
});

closeButtons.forEach(function(button) {
  button.addEventListener('click', function() {
    const popup = button.closest('.popup');
    popup.style.display = 'none';
  });
});