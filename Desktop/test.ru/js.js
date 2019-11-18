let arrs = document.getElementsByClassName('del');

for (var i = 0; i < arrs.length; i++) {
	arrs[i].onclick = function(){
		//console.log(this);
		let child = this.parentNode.parentNode
		let name = child.children[1].innerHTML;
		let last_name = child.children[2].innerHTML;
		let email = child.children[3].innerHTML;
		document.querySelector('#fname').value = name;
		document.querySelector('#lname').value = last_name;
		document.querySelector('#InputEmail').value = email;
	}
}


	

