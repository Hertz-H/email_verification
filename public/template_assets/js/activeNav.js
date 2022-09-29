// Get all buttons with class="btn" inside the container

var listItems = document.querySelectorAll(".side_item");
var links = document.querySelectorAll(".side_item a");

// Loop through the buttons and add the active class to the current/clicked link
for (var m = 0; m < listItems.length; m++) {
    console.log(listItems[m]);
    var current = list.getElementsByClassName("sel_side");
    current[0].className += current[0].className.replace("sel_side", "");
    if (links[m].href == window.location.href) {
        listItems[m].className += " sel_side";
    }
    // listItems[m].addEventListener("click", function() {
    // var current = list.getElementsByClassName("active");
    // if (current.length != 0) {
    // current[0].className = current[0].className.replace("active", "");
    // }

    //     // this.className += "active";
    //     if (this.href == document.URL) {
    //         this.className = 'active';
    //     }
    //     // window.location.href
    // });
}
