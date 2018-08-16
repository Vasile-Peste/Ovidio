// Used to auto focus (on hover) and auto blur (on pointer leave) the search bar in the header.
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

// Used to adapt the header menu items to mobile resolution.
(function () {
    function getPropertyValue (node, property) {
        return getComputedStyle(node, null).getPropertyValue(property);
    }
    
    function getItemsWidth () {
        const menu = document.querySelector(".header .nav .flex--semi");
        const items = menu.querySelectorAll(".nav__item");
        let width = 0;
        
        for (const item of items) {
            width += parseInt(getPropertyValue(item, "width"));
        }
        
        return width;
    }
})();