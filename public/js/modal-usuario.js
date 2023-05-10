$(document).ready(function() {
    $(".btn-warning").click(function() {
        $("#modal-edit-user").css("display", "block");
    });

    $(".modal-close").click(function() {
        $("#modal-edit-user").css("display", "none");
    });

    $("form").submit(function(event) {
        event.preventDefault();
        $("#modal-edit-user").css("display", "none");
    });
});