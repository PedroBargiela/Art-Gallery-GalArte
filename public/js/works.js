document.addEventListener('DOMContentLoaded', (event)=> {
    let currentPage = 0;
    const itemsPerPage = 24;

    const artworkCards = document.querySelectorAll('.card');
    const loadMoreButton  = document.createElement('button');
    loadMoreButton.innerText = 'cargar más';
    loadMoreButton.className = 'load-more-button';
    document.body.appendChild(loadMoreButton);

    const arrow = document.createElement('div');
    arrow.className = 'down-arrow';
    document.body.appendChild(arrow);

    function showPage(page) {
        for (let i = 0; i < artworkCards.length; i++) {
            if (i < (page + 1) * itemsPerPage) {
                artworkCards[i].style.display = 'block';
            } else {
                artworkCards[i].style.display = 'none';
            }
        }

    }

    loadMoreButton.addEventListener('click', () => {
        currentPage++;
        showPage(currentPage);
    });

    document.getElementById('artist-select').addEventListener('change', filterArtworks);
    document.getElementById('type-select').addEventListener('change', filterArtworks);

    function filterArtworks() {
        const selectedArtist = document.getElementById('artist-select').value;
        const selectedType = document.getElementById('type-select').value;

        let count = 0;

        artworkCards.forEach(card => {
            const artist = card.getAttribute('data-artist');
            const type = card.getAttribute('data-type');

            if ((selectedArtist === 'All' || artist === selectedArtist) 
            && (selectedType === 'All' || type === selectedType)) {
                card.style.display = 'block';
            } else {
                card.style.display = 'none';
            }
        });

        if (count < artworkCards.length) {
            loadMoreButton.style.display = 'none';
        } else {
            loadMoreButton.style.display = 'block';
        }
    }


    showPage(currentPage);

});
