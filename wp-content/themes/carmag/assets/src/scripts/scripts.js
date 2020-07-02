jQuery(document).ready(function ($) {
	"use strict";
	/*
	|--------------------------------------------------------------------------
	| Developer mode
	|--------------------------------------------------------------------------
	|
	| Set to true - it will allow printing in the console. Alsways check for this
	| variables when running tests so you dont forget about certain console.logs.
	| Id needed for development testing this variable should be used.
	|
	*/
	const devMode = function () {
		return true;
	};

	// Disable console.log for production site.
	if (!devMode()) {
		console.log = function () {};
	}
});

const toggleDrawer = () => {
	const drawerClassList = event.target.classList;
	const navClassList = document.querySelectorAll(".menu-primary-container")[0]
		.classList;
	drawerClassList.toggle("opened");
	navClassList.toggle("opened");
};

const navbarLinks = document.querySelectorAll(".menu-item");
const separator = document.createElement("span");
separator.className = "separator";
navbarLinks[2].after(separator);
navbarLinks[navbarLinks.length - 1].firstElementChild.className +=
	" button primary register";
