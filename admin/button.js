var btn = document.getElementById('btn')

function leftClick() {
	btn.style.left = '0'
}

function rightClick() {
	btn.style.left = '110px'
}

let switch_button = document.getElementById('switch-button');
switch_button.addEventListener('click',function()
{
	this.classList.toggle('switch-active');
}
)