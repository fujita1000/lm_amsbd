//public/js/logic.js
document.addEventListener('DOMContentLoaded', function () {
    const openModalButton = document.getElementById('open-modal-button');
    const modal = document.getElementById('modal');

    openModalButton.addEventListener('click', function () {
        modal.classList.remove('hidden');
    });
});

document.addEventListener('DOMContentLoaded', function () {
    const openModalButton = document.getElementById('close-modal-button');
    const modal = document.getElementById('modal');

    openModalButton.addEventListener('click', function () {
        modal.classList.add('hidden');
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const toggleButton = document.querySelector('.hs-collapse-toggle');
    const menu = document.getElementById('navbar-collapse-with-animation');
  
    toggleButton.addEventListener('click', function () {
      menu.classList.toggle('hidden');
    });
  });