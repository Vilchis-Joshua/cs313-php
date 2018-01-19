function buttonAlert() {
    alert("Clicked");
}

function changeColor() {
    //document.getElementById('hover_alert').style.color = color;
    var div_to_change = document.getElementById('hover_alert');

    var color_change = document.getElementById('form1').elements.namedItem('change_color_button').value;
    div_to_change.style.backgroundColor = color_change;
}

$(document).ready(function () {
    $("#jquery_click_me_button").click(function () {
        $("#css_bold").css("background-color", "$(#jquery_input)");
    });
});

$(document).ready(function () {
    $("#fadeout").click(function () {
        $("#hover_alert").fadeOut(2000);
        $("#css_bold").fadeOut("fast");
        $("#change_color").fadeOut(4000);
    });
});

$(document).ready(function () {
    $("#fadein").click(function () {
        $("#hover_alert").fadeIn(2000);
        $("#css_bold").fadeIn("slow");
        $("#change_color").fadeIn(4000);
    });
});