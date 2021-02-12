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
  	$('.gallery .img-left, .img-right').each(function(i) {
  		setTimeout(function() {
  			$('.gallery .img-left, .img-right').eq(i).addClass('imgGallery');
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

// ! ===== Gallery Effect =====
const contentGallery = document.querySelector('.contentGallery');
const megaImg = document.querySelector('.mega-img');
const thumbs = document.querySelectorAll('.thumb');

contentGallery.addEventListener('click',function(e) {
	// * ===== Click Thumbs =====
	if(e.target.className == 'thumb') {
		megaImg.src = e.target.src;
		megaImg.classList.add('fade');

		// * ===== Timing fucntion =====
		setTimeout(function() {
			megaImg.classList.remove('fade');
		}, 500);

		// * ===== New Class Active =====
		thumbs.forEach(function(thumb) {
			thumb.className = 'thumb';
		});
		e.target.classList.add('active3');
	}
});