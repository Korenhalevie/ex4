$(document).ready(function() {
    $("#submit").click(function() {
        checked = $("input[type=checkbox]:checked").length + 1;

        if (checked <= 2) {
            alert("You must check at least two checkbox.");
            return false;
        }
    });
});