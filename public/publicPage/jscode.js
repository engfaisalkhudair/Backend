var divs = document.getElementById('welcome');
divs = divs.getElementsByTagName('div');

for (var i = 0; i < divs.length; i++) {
	divs[i].onclick = splitScreen;
}

function splitScreen() {
	document.getElementById('welcome').style.visibility = 'hidden';
	var split = document.getElementById('Of');
	if (true) {
		split.className = 'On';
		divs[0].className = 'Of';
		divs[1].className = 'Of';
	}
}
