

function getSorted(selector, attrName) {
    return $($(selector).toArray().sort(function(a, b){
            var aVal = String(a.getAttribute(attrName)),
            bVal = String(b.getAttribute(attrName));
        return (aVal) < (bVal) ? 1 : -1;
   }));
}

var nmorder =0;

$.fn.order_speakers = function() {
    arr=getSorted('.conf_speaker','data-name');
    $(".conf_speaker").remove();
    $("#famousorderbutton").html("Publicity");
    if ( nmorder== 0 ) {
        nmorder=1;
        $("#nameorderbutton").html("Name &uarr;");
        arr=arr.get().reverse();
        var arrayLength = arr.length;
        for (var i = arrayLength-1;i >=0; i--) {
            $("#speakers").append(arr[i]);
        }
    } else {
        nmorder=0;
        $("#nameorderbutton").html("Name &darr;");
        arr=arr.get().reverse();
        var arrayLength = arr.length;
        for (var i = 0; i <arrayLength; i++) {
            $("#speakers").append(arr[i]);
        }
    }
};
var famorder=0;

$.fn.order_speakers_famous = function() {
    arr=getSorted('.conf_speaker','data-famous');
    $("#nameorderbutton").html("Name");
    $(".conf_speaker").remove();
    nmorder=0;
    if ( famorder== 0 ) {
        famorder=1;
        $("#famousorderbutton").html("Publicity &uarr;");
        arr=arr.get().reverse();
        var arrayLength = arr.length;
        for (var i = arrayLength-1;i >=0; i--) {
            $("#speakers").append(arr[i]);
        }
    } else {
        famorder=0;
        $("#famousorderbutton").html("Publicity &darr;");
        arr=arr.get().reverse();
        var arrayLength = arr.length;
        for (var i = 0; i <arrayLength; i++) {
            $("#speakers").append(arr[i]);
        }
    }
};

