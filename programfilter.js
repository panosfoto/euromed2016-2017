var $speakerclass="speaker1";
function getval()
{

    $("."+$speakerclass).removeClass("selected");
    $speakerclass=$("select").val();
    $("."+$speakerclass).addClass("selected");
}
