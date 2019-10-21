$(document).ready(function() {
    fetchUsers();

    function fetchUsers() {
        var action = "Load";

        $.ajax({
            url: "action.php",
            method: "POST",
            data: {action:action},
            success: function(data) {
                $("#result").html(data);
            }
        });
    }

});