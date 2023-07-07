const openBtn = document.getElementById('open_cart_btn');
const cart = document.getElementById('side_cart');
const closeBtn = document.getElementById('close_btn');
const backdrop = document.querySelector('.backdrop');

openBtn.addEventListener('click', openCart);
closeBtn.addEventListener('click', closeCart);

function openCart() {
  cart.classList.add('open');
  backdrop.classList.add('visible');
}

function closeCart() {
  cart.classList.remove('open');
  backdrop.classList.remove('visible');
}