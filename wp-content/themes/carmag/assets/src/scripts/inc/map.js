const { ADDRESS } = CONF_OBJECT;
const mapPlace = document.getElementById("map");
const displayMap = (address) => {
	const urlAddress = encodeURI(address);
	const googleMapsAPI = CONF_OBJECT.MAPS_API_KEY;

	fetch(
		`https://maps.googleapis.com/maps/api/geocode/json?address=${urlAddress}&key=${googleMapsAPI}`
	)
		.then((res) => res.json())
		.then((json) => {
			console.log(json);
			const coordinates = json.results[0].geometry.location;
			const map = new google.maps.Map(mapPlace, {
				center: coordinates,
				zoom: 12,
			});
			new google.maps.Marker({
				position: coordinates,
				map,
			});
		})
		.catch((err) => {
			console.log(err);
		});
};
if (mapPlace) {
	displayMap(ADDRESS);
}
