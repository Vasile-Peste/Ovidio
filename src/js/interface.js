document.addEventListener("DOMContentLoaded", function () {
	const search = document.getElementsByClassName("search")[0];
	
	if (!search) {
		return;
	}

	search.addEventListener("mouseover", function () {
		this.focus();
	});

	search.addEventListener("mouseout", function () {
		this.blur();
	});
});