const input = document.getElementById("profile-picture");
const button = document.getElementById("profile-picture-button");
const form = document.querySelector(".account-form");
const offersList = document.querySelector(".offers-list");
const offers = offersList?.querySelectorAll("li");
const message = document.querySelector(".no-offers");

if (offers?.length === 0) {
	console.log("no offers");
	offersList.remove();
	message.classList.add("show");
}

button?.addEventListener("click", () => {
	input.click();
});

form?.addEventListener("submit", (event) => {
	event.preventDefault();
	console.log("submit");
	// fetch("our strange url", {
	// 	method: "PUT",
	// 	headers: {
	// 		"Content-Type": "application/json",
	//     },
	//     body{
	//         name,
	//         number,
	//         email,
	//         location,
	//     }
	// });
});
