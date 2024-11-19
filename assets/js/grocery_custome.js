$(document).ready(function() {
    $(".flexigrid").css({
        //  "background-color": "#1F3AB3",
        "font-family": "sans-serif"
        //  "color": "#000000"
    });
    $(".flexigrid").addClass("table");
    $("#search_text").css({
        //  "box-sizing": "border-box",
        //  "border-radius": "4px"
    });
    $(".ftitle").css({
        "display": "none"
    });

    $("#cancel-button").addClass("btn btn-danger me-2");
    $("#save-and-go-back-button").addClass("btn btn-primary me-2");
    $("#form-button-save").addClass("btn btn-success me-2");
    $("#crud_search").addClass("btn btn-primary me-2");
    $("#search_clear").addClass("btn btn-danger me-2");
    $(".fbutton").addClass("btn btn-primary me-2");
});