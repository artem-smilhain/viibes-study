const video = document.querySelectorAll('.viibes__video')
const modal = document.querySelector('.viibes__modal')
const modalClose = document.querySelector('.viibes__modal_close')

video.forEach(item => {
    item.addEventListener('click', e => {
        let path = e.composedPath();
        if (path[0].classList[0] !== 'viibes__play_button' && path[1].classList[0] !== 'viibes__play_button') return
        const modalInner = document.querySelector('.viibes__modal_inner')
        modal.classList.add('viibes__modal_active')
        const srcToOriginal = item.querySelector('video').getAttribute('original')
        modalInner.innerHTML=`<video src="${srcToOriginal}" loop autoplay controls></video>`
    })
})

modalClose.addEventListener('click', () => {
    modal.classList.remove('viibes__modal_active')
    modal.querySelector('video').pause()
})
