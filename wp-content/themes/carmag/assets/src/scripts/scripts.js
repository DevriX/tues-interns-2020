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
	const navClassList = document.querySelectorAll(".menu-container")[0]
		.classList;
	drawerClassList.toggle("opened");
	navClassList.toggle("opened");
};

const separator = document.createElement("span");
separator.className = "separator";
const loginLink = document.querySelectorAll(".login")[0];
const profileDropdown = document.querySelectorAll(".profile")[0];
if (loginLink) {
	loginLink.before(separator);
}
if (profileDropdown) {
	profileDropdown.before(separator);
}

const faqFields = document.querySelectorAll(".faq-field");
faqFields.forEach((field) => {
	field.addEventListener("click", () => {
		field.querySelector(".field-heading").classList.toggle("opened");
		field.querySelector(".field-content").classList.toggle("opened");
	});
});

let selectedBrand = document.getElementById("brands");
let modelsNames = Object.keys(carModels);
modelsNames.forEach((model) => {
	let option = document.createElement("option");
	option.value = model;
	option.innerHTML = model;
	selectedBrand.appendChild(option);
});
const handleModels = () => {
	const brand = event.target.value;
	const modelsSelect = document.getElementById("models");
	const defaultOption = modelsSelect.firstElementChild;
	modelsSelect.innerHTML = "";
	modelsSelect.append(defaultOption);
	let models;
	if (selectedType.value === "car") {
		models = carModels;
	} else if (selectedType.value === "truck") {
		models = truckModels;
	} else if (selectedType.value === "motorcycle") {
		models = motorcycleModels;
	} else if (selectedType.value === "tractor") {
		models = agriculturalBrands;
	} else if (selectedType.value === "bus") {
		models = busModels;
	}
	if (brand) {
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
	}
};
let selectedType = document.getElementById("category");
let types = document.querySelectorAll(".type");
types.forEach((type) => {
	type.addEventListener("click", () => {
		event.stopPropagation();
		types.forEach((type) => {
			type.classList.remove("selected");
		});
		event.target.classList.add("selected");
		selectedType.value = event.target.id;
		let models;
		if (selectedType.value === "car") {
			models = carModels;
		} else if (selectedType.value === "truck") {
			models = truckModels;
		} else if (selectedType.value === "motorcycle") {
			models = motorcycleModels;
		} else if (selectedType.value === "tractor") {
			models = agriculturalBrands;
		} else if (selectedType.value === "bus") {
			models = busModels;
		}
		modelsNames = Object.keys(models);
		const defaultOption = selectedBrand.firstElementChild;
		selectedBrand.innerHTML = "";
		selectedBrand.append(defaultOption);
		modelsNames.forEach((model) => {
			let option = document.createElement("option");
			option.value = model;
			option.innerHTML = model;
			selectedBrand.appendChild(option);
		});
	});
});

const switcher = document.querySelectorAll(".switcher")[0];
if (switcher) {
	switcher.addEventListener("click", () => {
		event.stopPropagation();
		const firstPrice = document.querySelectorAll(".price-first")[0];
		const secondPrice = document.querySelectorAll(".price-second")[0];
		[firstPrice.value, secondPrice.value] = [
			secondPrice.value,
			firstPrice.value,
		];
	});
}
var password = document.getElementById("password"),
	confirm_password = document.getElementById("confirm_password");

function validatePassword() {
	if (password.value != confirm_password.value) {
		confirm_password.setCustomValidity("Passwords don't match");
	} else {
		confirm_password.setCustomValidity("");
	}
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
