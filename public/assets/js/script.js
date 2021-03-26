
$(document).ready(function () {
      $('.products').slick({
            dots: false,
            infinite: true,
            slidesToShow: 2,
            adaptiveHeight: true,
            centerMode: true,
            arrows: false,

      });
});


const modal = document.querySelector('.main-modal');

const openModal = document.querySelector('.abrir-modal');
const closeButton = document.querySelectorAll('.modal-close');

openModal.addEventListener('click', function () {
      modal.classList.remove('hidden')
});

closeButton.forEach(close => {
      close.addEventListener('click', function () {
            modal.classList.add('hidden')
      });
});

//modal cadastrao de estabelecimento


const modal2 = document.querySelector('.modal');

const showModal = document.querySelector('.show-modal');
const closeModal = document.querySelectorAll('.close-modal');

showModal.addEventListener('click', function () {
      modal2.classList.remove('hidden')
});

closeModal.forEach(close => {
      close.addEventListener('click', function () {
            modal2.classList.add('hidden')
      });
});


const modal3 = document.querySelector('.user-modal');

const showModal3 = document.querySelector('.open-modal');
const closeModal3 = document.querySelectorAll('.fechar-modal');

showModal3.addEventListener('click', function () {
      modal3.classList.remove('hidden')
});

closeModal3.forEach(close => {
      close.addEventListener('click', function () {
            modal3.classList.add('hidden')
      });
});

$('#price').maskMoney({
      allowNegative: false,
      thousands: '.',
      decimal: ','
});