
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

showPage(currentPage);
