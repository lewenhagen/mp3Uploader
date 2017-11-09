

function populateSelect(data) {
    $('#assoc').append($('<option>').text("Välj i listan...").attr('value', null));
    $.each(data["assocs"], function(i, value) {
        $('#assoc').append($('<option>').text(value["name"]).attr('value', value["name"]));
    });
}

function listStarts(test) {
    // window.localStorage.set.assoc = test.value;
    console.log(test.value);
}

$.getJSON( "json/assoc.json", function( data ) {
    success: populateSelect(data);
});
