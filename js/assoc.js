(function() {

    // function initJSON() {
    //     var json = {};
    //     $.get( "../data.csv", function( data ) {
    //         var lines=data.split("\n");
    //         var result = [];
    //         var headers=lines[0].split(",");
    //
    //         for(var i=1;i<lines.length;i++){
    //             var obj = {};
    //             var currentline=lines[i].split(",");
    //
    //             for(var j=0;j<headers.length;j++){
    //                 obj[headers[j]] = currentline[j];
    //             }
    //
    //             result.push(obj);
    //         }
    //         json = JSON.stringify(result); //JSON
    //         window.localStorage.setItem("data", json);
    //         populateSelectAssoc(json);
    //         console.log( "Load was performed." );
    //     });
    //
    // }

    // function populateSelectAssoc(data) {
    //     var assocs = [];
    //     $.each($.parseJSON(data), function(key,value) {
    //         if (assocs.indexOf(value.Förening) == -1) {
    //             assocs.push(value.Förening);
    //         }
    //     });
    //     $('#assoc').append($('<option>').text("Välj i listan...").attr('value', null));
    //     $.each(assocs, function(i, value) {
    //         $('#assoc').append($('<option>').text(value).attr('value', value));
    //     });
    //     console.log(assocs);
    //
    // }

    function listStarts(test) {

        // window.localStorage.set.assoc = test.value;
        console.log(test.value);
    }

    // function getCSVasJSON() {
    //     var json = {};
    //     $.get( "../data.csv", function( data ) {
    //         var lines=data.split("\n");
    //         var result = [];
    //         var headers=lines[0].split(",");
    //
    //         for(var i=1;i<lines.length;i++){
    //             var obj = {};
    //             var currentline=lines[i].split(",");
    //
    //             for(var j=0;j<headers.length;j++){
    //                 obj[headers[j]] = currentline[j];
    //             }
    //
    //             result.push(obj);
    //         }
    //         json = JSON.stringify(result); //JSON
    //         console.log( "Load was performed via function." );
    //         return json;
    //     });
    // }

    // function fillTable(assoc) {
    //     var counter = 0;
    //     var table = "<table class='table table-hover table-bordered'>";
    //     table += "<thead class='thead-dark'><tr>";
    //     table += "<th>Tävling / klass</th><th>#</th><th>Start</th><th>Diciplin</th><th></th></tr></thead>";
    //     table += "<tbody>";
    //
    //     $.each($.parseJSON(json), function(key, value) {
    //         if (value.Förening == assoc) {
    //             table += "<tr id='" + counter + "'>";
    //             table += "<td>" + value['Tävling / klass'] + "</td>";
    //             table += "<td>" + value['#'] + "</td>";
    //             table += "<td>" + value['Start'] + "</td>";
    //             table += "<td>" + value['Disciplin'] + "</td>";
    //             table += "<td><input class='form-control-file file-upload' aria-describedby='fileHelp' type='file'></td>";
    //             table += "</tr>";
    //         }
    //         counter++;
    //     });
    //
    //     table += "</tbody></table>";
    //
    //     $('#table').append(table);
    // }

    // $.getJSON( "json/assoc.json", function( data ) {
    //     success: populateSelect(data);
    // });

    // $.get( "../data.csv", function( data ) {
    //     var lines=data.split("\n");
    //     var result = [];
    //     var headers=lines[0].split(",");
    //
    //     for(var i=1;i<lines.length;i++){
    //         var obj = {};
    //         var currentline=lines[i].split(",");
    //
    //         for(var j=0;j<headers.length;j++){
    //             obj[headers[j]] = currentline[j];
    //         }
    //
    //         result.push(obj);
    //     }
    //     json = JSON.stringify(result); //JSON
    //     populateSelectAssoc(json);
    //     console.log( "Load was performed." );
    // });

    // function uploadFile() {
    //     var dbx = new Dropbox({ accessToken: '3Ft6zMrDcIAAAAAAAAAAC7HvwLGDk-kZtRwpG3GJttLqXa3-oBNi6IYWCxX4Jqoh' });
    //     dbx.filesListFolder({path: ''})
    //         .then(function(response) {
    //             console.log(response);
    //         })
    //         .catch(function(error) {
    //             console.log(error);
    //         });
    //
    //     var fileInputs = document.getElementsByClassName('file-upload');
    //
    //     for (var i = 0; i < fileInputs.length; i++) {
    //
    //         if (fileInputs[i].files.length > 0) {
    //
    //             var file = null;
    //
    //             file = fileInputs[i].files[0];
    //
    //             dbx.filesUpload({path: '/' + file.name, contents: file})
    //                 .then(function(response) {
    //                     var results = document.getElementById('results');
    //                     results.innerHTML += "<h4>File: " + response.name + " uploaded!<br></h4>";
    //                     console.log(response);
    //                 })
    //                 .catch(function(error) {
    //                     console.error(error);
    //                 });
    //             }
    //         }
    //     return false;
    // }
})();
// function populateSelect(data) {
//     $('#assoc').append($('<option>').text("Välj i listan...").attr('value', null));
//     $.each(data["assocs"], function(i, value) {
//         $('#assoc').append($('<option>').text(value["name"]).attr('value', value["name"]));
//     });
// }
