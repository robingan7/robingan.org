$(document).ready(function () {
    $("h1").hover(function () {
        $("h1").addClass("indexFolded");
    },
        function () {
            $("h1").removeClass("indexFolded");
        });

    $("h1").removeClass("indexFolded");

    $("#menu_checkbox").prop("checked", false);
});