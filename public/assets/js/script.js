
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




const modal4 = document.querySelector('.user-modal-list');

const showModal4 = document.querySelector('.open-modal-list');
const closeModal4 = document.querySelectorAll('.fechar-modal-list');

showModal4.addEventListener('click', function () {
      modal4.classList.remove('hidden')
});

closeModal4.forEach(close => {
      close.addEventListener('click', function () {
            modal4.classList.add('hidden')
      });
});


const modal6 = document.querySelector('.modal-categoria');

const showModal6 = document.querySelector('.open-modal-categoria');
const closeModal6 = document.querySelectorAll('.categoria-close');

showModal6.addEventListener('click', function () {
      modal6.classList.remove('hidden')
});

closeModal6.forEach(close => {
      close.addEventListener('click', function () {
            modal6.classList.add('hidden')
      });
});






$('#price').maskMoney({
      allowNegative: false,
      thousands: '.',
      decimal: ','
});

$('#telefone').mask('00 00000-0000');
$('#whatsapp').mask('00 00000-0000');


// Requires jQuery

