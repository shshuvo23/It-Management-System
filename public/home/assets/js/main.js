"user strict";

// Preloader
$(window).on("load", function () {
	$(".preloader").fadeOut(1000);
});

//Menu Dropdown
$("ul>li>.sub-menu").parent("li").addClass("has-sub-menu");

$(".menu li a").on("click", function () {
	var element = $(this).parent("li");
	if (element.hasClass("open")) {
		element.removeClass("open");
		element.find("li").removeClass("open");
		element.find("ul").slideUp(300, "swing");
	} else {
		element.addClass("open");
		element.children("ul").slideDown(300, "swing");
		element.siblings("li").children("ul").slideUp(300, "swing");
		element.siblings("li").removeClass("open");
		element.siblings("li").find("li").removeClass("open");
		element.siblings("li").find("ul").slideUp(300, "swing");
	}
});

// Responsive Menu
var headerTrigger = $(".header-trigger");
headerTrigger.on("click", function () {
	$(".menu").toggleClass("active");
	$(".overlay").toggleClass("active");
});

// Overlay Event
var over = $(".overlay");
over.on("click", function () {
	$(".overlay").removeClass("overlay-color");
	$(".overlay").removeClass("active");
	$(".menu, .header-trigger").removeClass("active");
	$(".header-top").removeClass("active");
});

// $(document).on('click', function(e){
//     e.target.parents()
// })

// Sticky Menu
window.addEventListener("scroll", function () {
	var header = document.querySelector(".header-two, .header");
	if (header) {
		header.classList.toggle("sticky", window.scrollY > 0);
	}
});

// Scroll To Top
var scrollTop = $(".scrollToTop");
$(window).on("scroll", function () {
	if ($(this).scrollTop() < 500) {
		scrollTop.removeClass("active");
	} else {
		scrollTop.addClass("active");
	}
});

//Click event to scroll to top
$(".scrollToTop").on("click", function () {
	$("html, body").animate(
		{
			scrollTop: 0,
		},
		300
	);
	return false;
});

var swiper = new Swiper(".thumb-slider", {
	effect: "flip",
	grabCursor: true,
	flipEffect: {
		shadow: false,
		slideShadows: false,
		shadowOffset: 20,
		shadowScale: 0.94,
	},
	simulateTouch: false,
	loop: true,
	centeredSlides: true,
	slidesPerView: "1",
	spaceBetween: 30,
	speed: 1500,
	autoplay: {
		delay: 2500,
		disableOnInteraction: false,
	},

	// breakpoints: {
	// 	640: {
	// 		slidesPerView: 2,
	// 		spaceBetween: 20,
	// 	},
	// 	768: {
	// 		slidesPerView: 4,
	// 		spaceBetween: 40,
	// 	},
	// 	1024: {
	// 		slidesPerView: 5,
	// 		spaceBetween: 50,
	// 	},
	// },
	thumbs: {
		swiper: swiper,
	},
});

var swiper2 = new Swiper(".content-slider", {
	simulateTouch: false,
	loop: true,
	spaceBetween: 30,
	speed: 1500,
	autoplay: {
		delay: 2500,
		disableOnInteraction: false,
	},
	navigation: {
		nextEl: ".swiper-button-next",
		prevEl: ".swiper-button-prev",
	},
	thumbs: {
		swiper: swiper,
	},
	pagination: {
		el: ".swiper-pagination",
		clickable: true,
	},
});

var swiper2 = new Swiper(".testimonial-slider-two", {
	slidesPerView: 1,
	loop: true,
	spaceBetween: 35,
	speed: 1500,
	autoplay: {
		delay: 2500,
		disableOnInteraction: false,
	},
	breakpoints: {
		768: {
			slidesPerView: 2,
			spaceBetween: 20,
		},
	},
});

var swiper2 = new Swiper(".brand-slider", {
	slidesPerView: 2,
	loop: true,
	spaceBetween: 10,
	speed: 1500,
	autoplay: {
		delay: 2500,
		disableOnInteraction: false,
	},
	breakpoints: {
		768: {
			slidesPerView: 4,
			spaceBetween: 20,
		},
		576: {
			slidesPerView: 3,
		},
	},
});

// Odometer Counter
$(".statistic-item, .dashboard__card__item").each(function () {
	$(this).isInViewport(function (status) {
		if (status === "entered") {
			for (var i = 0; i < document.querySelectorAll(".odometer").length; i++) {
				var el = document.querySelectorAll(".odometer")[i];
				el.innerHTML = el.getAttribute("data-odometer-final");
			}
		}
	});
});

//Faq
$(".faq-item__title").on("click", function (e) {
	var element = $(this).parent(".faq-item");
	if (element.hasClass("open")) {
		element.removeClass("open");
		element.find(".faq-item__content").removeClass("open");
		element.find(".faq-item__content").slideUp(300, "swing");
	} else {
		element.addClass("open");
		element.children(".faq-item__content").slideDown(300, "swing");
		element.siblings(".faq-item").children(".faq-item__content").slideUp(300, "swing");
		element.siblings(".faq-item").removeClass("open");
		element.siblings(".faq-item").find(".faq-item__content").slideUp(300, "swing");
	}
});

$(".btn-close, .overlay").on("click", function () {
	$(".overlay").removeClass("active");
	$(".menu").removeClass("active");
});

$(".dashboard-toggler-wrapper .toggler").on("click", function () {
	$(".dashboard-sidebar").addClass("active");
	$(".overlay").addClass("active");
});
$(".sidebar-close, .overlay").on("click", function () {
	$(".dashboard-sidebar").removeClass("active");
	$(".overlay").removeClass("active");
});

$(".video-button").magnificPopup({
	type: "iframe",
	// other options
});

const toggleSwitch = document.querySelector('.theme-switch input[type="checkbox"]');
const currentTheme = localStorage.getItem("theme");

if (currentTheme) {
	document.documentElement.setAttribute("data-theme", currentTheme);

	if (currentTheme === "dark") {
		toggleSwitch.checked = true;
	}
}

function switchTheme(e) {
	if (e.target.checked) {
		document.documentElement.setAttribute("data-theme", "dark");
		localStorage.setItem("theme", "dark");
	} else {
		document.documentElement.setAttribute("data-theme", "light");
		localStorage.setItem("theme", "light");
	}
}

toggleSwitch.addEventListener("change", switchTheme, false);
