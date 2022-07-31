var ToggleBar = document.querySelector('.toggle-bar');
var Main = document.querySelector('.main');
var Sidebar = document.querySelector('.sidebar');

ToggleBar.addEventListener('click', function() {
	Main.classList.toggle('main-active');
	Sidebar.classList.toggle('sidebar-active');
});

// var loadFile = function(event) {
//     var output = document.getElementById('output');
//     output.src = URL.createObjectURL(event.target.files[0]);
//     output.onload = function() {
//       URL.revokeObjectURL(output.src)
//     }
// };

const source = document.getElementById('source');
const result = document.getElementById('result');

const inputHandler = function(e) {
	var panjang = e.target.value.length;
  result.innerHTML = panjang;
}

source.addEventListener('input', inputHandler);
source.addEventListener('propertychange', inputHandler);

function removeImg(img,input) {
	document.getElementById(img).removeAttribute('src');
	document.getElementById(input).value = null;
	
}

function preview(e,img) {
	document.getElementById(img).src = window.URL.createObjectURL(e.files[0]);
}

// var string = document.querySelector('.title-truncate');
// var limit = 12;

// function truncate(string, limit) {
// 	if (string.length <= limit) {
// 		return string;
// 	}

// 	return string.slice(0, limit) + ". . .";
// }