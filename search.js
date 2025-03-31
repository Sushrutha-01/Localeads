const placeData = [
    { id: '0', name: 'charminar' },
    { id: '1', name: 'rachakonda fort' },
    { id: '2', name: 'kuntala waterfalls' },
    { id: '3', name: 'bansilal stepwell' },
    { id: '4', name: 'Horsely Hills' },
    { id: '5', name: 'belum caves' },
    { id: '6', name: 'araku valley' },
    { id: '7', name: 'lepakshi temple' },
    { id: '8', name: 'berijam lake' },
    { id: '9', name: 'thanjavur' },
    { id: '10', name: 'thiruvalluvar statue' },
    { id: '11', name: 'pichavaram mangrove forest' },
    { id: '12', name: 'commercial street' },
    { id: '13', name: 'hampi' },
    { id: '14', name: 'mg road' },
    { id: '15', name: 'dandeli' },
    { id: '16', name: 'connemara market' },
    { id: '17', name: 'Edakkal Caves' },
    { id: '18', name: 'Triveni Floating Market' },
    { id: '19', name: 'Neeliyar Kottam' },
];

const searchButton = document.getElementById('searchButton');

searchButton.addEventListener('click', function() {
    const searchTerm = document.getElementById('searchInput').value.toLowerCase();
    const place = placeData.find(item => item.name.toLowerCase() === searchTerm);

    if (place) {
        const placeElement = document.getElementById(place.id);

        if (placeElement) {
            placeElement.scrollIntoView({ behavior: 'smooth' });
        } else {
            alert('Place element not found. Please try again.');
        }
    } else {
        alert('Place not found. Please try again.');
    }
});