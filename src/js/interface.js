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

// Used to enable / disable the hamburger menu depending on the items inside the header menu and the width of the viewport.
(function () {
    function getPropertyValue (node, property) {
        return getComputedStyle(node, null).getPropertyValue(property);
    }
    
    function getMenuItemsWidth () {
        const items = document.querySelectorAll(".header .nav .flex--semi .nav__item");
        let width = 0;
        
        for (const item of items) {
            width += parseInt(getPropertyValue(item, "width"));
            width += parseInt(getPropertyValue(item, "margin-left"));
            width += parseInt(getPropertyValue(item, "margin-right"));
        }
        
        return width;
    }
    
    function update () {
        const offset = 20;
        const layout = document.querySelector(".header .nav .flex--semi");
        
        if ((offset + getMenuItemsWidth()) >= parseInt(getPropertyValue(layout, "width"))) {
            // Enable hamburger menu.
        }
        else {
            // Disable hamburger menu.
        }
    }
    
    document.addEventListener("DOMContentLoaded", update);
    window.addEventListener("load", update);
    window.addEventListener("resize", update);
})();