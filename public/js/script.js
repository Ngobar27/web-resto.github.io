// ! ===== Navbar =====
window.addEventListener('scroll', function() {
	const nav = document.querySelector('nav');
	nav.classList.toggle('sticky', window.scrollY > 0);
});

// ! ===== Navbar Button CLick =====
$(document).on('click', 'ul li', function() {
  $(this).addClass('btn-active').siblings().removeClass('btn-active');
});

// ! ===== Navbar Button Toggle =====
const menuToggle = document.querySelector('.toggle');
const menu = document.querySelector('.menu');

function toggleMenu() {
	menuToggle.classList.toggle('active');
	menu.classList.toggle('active');
}
menuToggle.onclick = toggleMenu;
menu.onclick = toggleMenu;

// ! ===== Image Slider =====
let counter = 1;
setInterval(function() {
  document.getElementById('radio'+ counter).checked = true;
  counter++;
  if(counter > 4) {
    counter = 1;
  }
}, 4000);

// ! ===== Image Effect =====
$(window).scroll(function() {
  let landingScroll1 = $(this).scrollTop();
  let landingScroll2 = $(this).scrollTop();
  let aboutScroll = $(this).scrollTop();

  // * ===== Landing Image Dishes =====
  if(landingScroll1 > $('.dishes').offset().top - 400) {
		$('.dishes .thumbnail').each(function(i) {
			setTimeout(function() {
				$('.dishes .thumbnail').eq(i).addClass('drop');
			}, 300 * (i + 1));
		});
	}
  
  // * ===== Landing Image Gallery =====
  if(landingScroll2 > $('.gallery').offset().top - 400) {
		$('.gallery .thumbnail').each(function(i) {
			setTimeout(function() {
				$('.gallery .thumbnail').eq(i).addClass('drop');
			}, 300 * (i + 1));
		});
	}

  // * ===== Landing Image About =====
  if(aboutScroll > $('.about').offset().top - 400) {
		$('.about .slider-left, .slider-right').each(function(el) {
			setTimeout(function() {
				$('.about .slider-left, .slider-right').eq(el).addClass('sliders');
			}, 300 * (el + 1));
		});
	}
});

// ! ===== Gallery =====
let imgBx = document.querySelectorAll('.imgBx');
imgBx.forEach(popup => popup.addEventListener('click', () => {
	popup.classList.toggle('active2');
}));