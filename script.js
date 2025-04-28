const menuIcon = document.querySelector('.menu-icon');
const dropdownMenu = document.querySelector('.dropdown-menu');

menuIcon.addEventListener('click', () => {
  dropdownMenu.classList.toggle('active');
});

// Fecha o menu ao clicar fora
document.addEventListener('click', (event) => {
  if (!menuIcon.contains(event.target) && !dropdownMenu.contains(event.target)) {
    dropdownMenu.classList.remove('active');
  }
});
