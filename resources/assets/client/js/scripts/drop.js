const items = document.querySelectorAll('.viibes__drop')
const clickOnArrow = (willBeActive) => {
    items.forEach(item => item.classList.remove('viibes__drop_active'))
    willBeActive.classList.add('viibes__drop_active')
}
const closeAll = () => items.forEach(item => item.classList.remove('viibes__drop_active'))

items.forEach((item) => {
    item.addEventListener('click', (e) => {
        let path = e.composedPath();
        if (path[0].localName !== 'img' && path[0].localName !== 'h4') return
        if(path[2].classList.contains('viibes__drop_active')) {
            closeAll()
            return
        }
        clickOnArrow(path[2])
    })
})
