// Used to auto focus (oh hover) and auto blur (on pointer leave) the search bar in the header.
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

// Used to auto update the animation in the header and in the footer.
document.addEventListener("DOMContentLoaded", function () {
	
});