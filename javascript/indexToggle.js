var isOut = false;

function closeIfNeeded(){
    if (isOut) {
        var modal_cover = document.getElementById('modal_cover');
        var bar_menu = document.getElementById('large-id-2');

        var bar_menu_state = document.getElementById('large-id-2').style.display;
        var modal_cover_state = document.getElementById('modal_cover').style.display;

        if (modal_cover_state == "block") {
            modal_cover.style.display = "none";
        }

        if (bar_menu_state == "block") {
            bar_menu.style.display = "none";
        }
        isOut = false;
        document.getElementById('menu_checkbox').checked = false;
    }
}
function toggleBarMenu(){
    var modal_cover = document.getElementById('modal_cover');
    var bar_menu = document.getElementById('large-id-2');

    var bar_menu_state = document.getElementById('large-id-2').style.display;
    var modal_cover_state = document.getElementById('modal_cover').style.display;

    if (!isOut) {
        if (modal_cover_state == "none") {
            modal_cover.style.display = "block";
        }

        if (bar_menu_state == "none") {
            bar_menu.style.display = "block";
        }

        isOut = true;
    } else {
        if (modal_cover_state == "block") {
            modal_cover.style.display = "none";
        }

        if (bar_menu_state == "block") {
            bar_menu.style.display = "none";
        }
        isOut = false;
    }

}

document.getElementById('modal_cover').addEventListener("click", closeIfNeeded, false);
document.getElementById('webapp_cover').addEventListener("change", toggleBarMenu,false);