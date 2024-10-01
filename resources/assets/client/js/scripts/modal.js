const modalFormActivator = document.querySelectorAll('.viibes__modal_form_activator');
const modalForm = document.getElementById('viibes__modal_form');
const modalFormClose = document.getElementById('viibes__modal_form_close');

//const viibesForm = document.getElementById('viibes__form');
//const modalLoader = document.getElementById('viibes__modal_loader');

modalFormActivator.forEach(item => {
    item.addEventListener('click', e => {
        modalForm.classList.add('viibes__modal_form_active');
    })
});
modalFormClose.addEventListener('click', () => {
    modalForm.classList.remove('viibes__modal_form_active');
});

//viibesForm.addEventListener('submit', () => {
//    modalLoader.style.display = 'flex';
//});
