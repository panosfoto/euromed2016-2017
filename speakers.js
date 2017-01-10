

function getSorted(selector, attrName) {
    return $($(selector).toArray().sort(function(a, b){
        return $(a).text().toUpperCase().localeCompare($(b).text().toUpperCase());
   }));
}

$.fn.order_speakers = function() {
    arr=getSorted('.conf_speaker','name');
    $(".conf_speaker").remove();
    $.each( arr, function( index, value ){
        $("#speakers").append(value);
    });
};

