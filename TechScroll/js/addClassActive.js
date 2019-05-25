// Remove every other active class and apply to the clicked link
    var navContainer = document.getElementById("primaryNav");
    var navitems = navContainer.getElementByClassName("nav-item");
    for (var i = 0; i < navitems.length; i++) {
      navitems[i].addEventListener("click",function () {
        var current = document.getElementByClassName("active");
        if (current.length > 0) {
          current[0].className=current[0].className.replace("active","");
        }
        this.className += "active";
      });
    }