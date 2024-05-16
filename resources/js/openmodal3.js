
const button3 = document.querySelector('.modal-button3');
const modal3 = document.getElementById('my_modal_3');
const closeButton3 = modal3.querySelector('.btn-close');

button3.addEventListener('click', function() {
    modal3.showModal();
});

closeButton3.addEventListener('click', function() {
    modal3.close();
});

document.addEventListener('keydown', function(event) {
    if (event.key === 'Escape' && modal3.open) {
        modal3.close();
    }
});