class Carousel {
	constructor(forward, backward, images, counter, smallImages) {
		this.forward = forward;
		this.backward = backward;
		this.images = images;
		this.counter = counter;
		this.smallImages = smallImages;
		this.init();
	}
	init() {
		this.imageNum = 0;
		this.counter.textContent = `1/${this.images.length}`;
		this.forward.addEventListener("click", this.forwardHandler.bind(this));
		this.backward.addEventListener(
			"click",
			this.backwardHandler.bind(this)
		);
		this.smallImages.forEach((i, index) => {
			i.addEventListener("click", () => {
				this.imageNum = index;
				this.onSlideHandler();
			});
		});
	}
	onSlideHandler() {
		this.counter.textContent = `${this.imageNum + 1}/${images.length}`;

		this.smallImages.forEach((i) => {
			i.style.transform = `translate(${
				-this.imageNum * (i.clientWidth + 16)
			}px)`;
		});

		this.images.forEach((i) => {
			i.style.transform = `translate(${
				-this.imageNum * i.clientWidth
			}px)`;
		});
	}
	backwardHandler() {
		this.imageNum = !this.imageNum
			? this.images.length - 1
			: this.imageNum - 1;
		this.onSlideHandler();
	}
	forwardHandler() {
		this.imageNum =
			this.imageNum === this.images.length - 1 ? 0 : this.imageNum + 1;
		this.onSlideHandler();
	}
}

const carosel = document.querySelector(".carousel");
const forward = document.querySelector(".forward");
const backward = document.querySelector(".backward");
const images = carosel?.querySelectorAll(".carousel-image");
const counter = carosel?.querySelector(".image-num");
const wraper = document.querySelector(".all-images");
const smallImages = wraper?.querySelectorAll("img");

if (carosel) {
	new Carousel(forward, backward, images, counter, smallImages);
}
