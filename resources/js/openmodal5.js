const button = document.querySelector('.modal-button5');
const modal = document.getElementById('my_modal_5');
const closeButton = modal.querySelector('.btn-close');

button.addEventListener('click', function() {
    modal.showModal();
});

closeButton.addEventListener('click', function() {
    modal.close();
});

document.addEventListener('keydown', function(event) {
    if (event.key === 'Escape' && modal.open) {
        modal.close();
    }
});