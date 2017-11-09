

// function populateSelect(data) {
//     $('#assoc').append($('<option>').text("Välj i listan...").attr('value', null));
//     $.each(data["assocs"], function(i, value) {
//         $('#assoc').append($('<option>').text(value["name"]).attr('value', value["name"]));
//     });
// }

function populateSelectAssoc(data) {
    var assocs = [];
    $.each($.parseJSON(data), function(key,value) {
        if (assocs.indexOf(value.Förening) == -1) {
            assocs.push(value.Förening);
        }
    });
    $('#assoc').append($('<option>').text("Välj i listan...").attr('value', null));
    $.each(assocs, function(i, value) {
        $('#assoc').append($('<option>').text(value).attr('value', value));
    });
    console.log(assocs);

}

function listStarts(test) {

    // window.localStorage.set.assoc = test.value;
    console.log(test.value);
}

function fillTable(assoc) {
    console.log(assoc);
}

// $.getJSON( "json/assoc.json", function( data ) {
//     success: populateSelect(data);
// });
var json = {};
$.get( "../data.csv", function( data ) {
    var lines=data.split("\n");
    var result = [];
    var headers=lines[0].split(",");

    for(var i=1;i<lines.length;i++){
        var obj = {};
        var currentline=lines[i].split(",");

        for(var j=0;j<headers.length;j++){
            obj[headers[j]] = currentline[j];
        }

        result.push(obj);
    }
    json = JSON.stringify(result); //JSON
    populateSelectAssoc(json);
    console.log( "Load was performed." );
});


// var csv = $.get("../data.csv");
// function csvJSON(csv){
//     console.log(csv);
//
//
//   }
//
//   //return result; //JavaScript object
// }

// var json2 = csvJSON(csv);
// console.log("tjho");
// console.log(json2);
