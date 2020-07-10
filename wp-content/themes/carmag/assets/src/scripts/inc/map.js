const { ADDRESS, MAPS_API_KEY } = CONF_OBJECT;
const mapPlace = document.getElementById("map");

const displayMap = (address) => {
	const urlAddress = encodeURI(address);

	fetch(
		`https://maps.googleapis.com/maps/api/geocode/json?address=${urlAddress}&key=${MAPS_API_KEY}`
	)
		.then((res) => res.json())
		.then((json) => {
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
			throw new Error(err);
		});
};
if (mapPlace) {
	displayMap(ADDRESS);
}
