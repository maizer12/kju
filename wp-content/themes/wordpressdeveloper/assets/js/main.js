//check sum priority
function check(a){
	const elemPluses = a.querySelectorAll('.popup-text__item')
	elemPluses.forEach(element => {
		if(element.innerHTML.trim().length >= 1){
			element.classList.add('popup-text__item-active')
		}
	});
}
// popup open

window.addEventListener('click', e => {
	if (e.target.closest('.cart-item__img') != null) {
		const element =
			e.target.closest('.cart-item__img').parentElement.parentElement
		element.querySelector('.popup').classList.add('popup-active')
		check(element.querySelector('.popup'))
	}
})
window.addEventListener('click', e => {
	if (e.target.closest('.popup-btn')) {
		const element = e.target.closest('.popup-btn')
		element.parentElement.parentElement.classList.remove('popup-active')
	}
})
// choice photo
window.addEventListener('click', e => {
	if (e.target.closest('.small-images__img')) {
		const active = document.querySelector('.small-image-active')
		const element = e.target.closest('.small-images__img')
		const newElement = element.parentElement.parentElement.parentElement
		const favoritePhoto = newElement.querySelector('.popup-item__img')
		if (active) {
			active.classList.toggle('small-image-active')
		}
		element.classList.add('small-image-active')
		favoritePhoto.src = element.src
	}
})
