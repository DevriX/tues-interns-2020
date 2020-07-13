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

const separator = document.createElement("span");
separator.className = "separator";
const loginLink = document.querySelectorAll(".login")[0];
if (loginLink) {
	loginLink.before(separator);
}

const faqFields = document.querySelectorAll(".faq-field");
faqFields.forEach((field) => {
	field.addEventListener("click", () => {
		field.querySelector(".field-heading").classList.toggle("opened");
		field.querySelector(".field-content").classList.toggle("opened");
	});
});

let selectedBrand = document.getElementById("brands");
const modelsNames = Object.keys(models);
modelsNames.forEach((model) => {
    let option = document.createElement("option");
    option.value = model;
    option.innerHTML = model;
    selectedBrand.appendChild(option);
});
const handleModels = () => {
    const brand = event.target.value;
    const modelsSelect = document.getElementById("models");
    modelsSelect.innerHTML = "";
    if(brand) {
        models[brand].forEach((model) => {
            let option = document.createElement("option");
            option.value = model;
            option.innerHTML = model;
            modelsSelect.appendChild(option);
        });
    } else {
        let option = document.createElement("option");
        option.value = "";
        option.innerHTML = "Model";
        modelsSelect.appendChild(option);
