const ADDRESS = "Sofia";
const mapPlace = document.getElementById("map");
const displayMap = (address) => {
const urlAddress = encodeURI(address);
const googleMapsAPI = MAPS_API_KEY;

// TO DO: get user location from db

	fetch(
		`https://maps.googleapis.com/maps/api/geocode/json?address=${urlAddress}&key=${googleMapsAPI}`
	)
		.then((res) => res.json())
		.then((json) => {
			
			const map = new google.maps.Map(mapPlace, {
				center: coordinates,
				zoom: 12,
			});
			new google.maps.Marker({
				position: coordinates,
				map,
			});
		});
};
if (mapPlace) {
	displayMap(ADDRESS);
}
