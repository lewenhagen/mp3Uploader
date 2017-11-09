var dbx = new Dropbox({ accessToken: '3Ft6zMrDcIAAAAAAAAAAC7HvwLGDk-kZtRwpG3GJttLqXa3-oBNi6IYWCxX4Jqoh' });

dbx.filesListFolder({path: ''})
    .then(function(response) {
        console.log("tjoho");
        console.log(response);
    })
    .catch(function(error) {
        console.log(error);
    });

// dbx.usersGetCurrentAccount()
//     .then(function(resonse) {
//         console.log("Response:", resonse);
//     })
//     .catch(function(error) {
//         console.log("Error: " + error);
//     })

function uploadFile() {
    dbx.filesListFolder({path: '/'})
        .then(function(response) {
            // console.log("tjoho");
            console.log(response);
        })
        .catch(function(error) {
            console.log(error);
        });
    // var ACCESS_TOKEN = document.getElementById('access-token').value;
    // var dbx = new Dropbox({ accessToken: ACCESS_TOKEN });
    var fileInput = document.getElementById('file-upload');
    var file = fileInput.files[0];
    dbx.filesUpload({path: '/' + "lallal", contents: file})
        .then(function(response) {
            var results = document.getElementById('results');
            results.appendChild(document.createTextNode('File uploaded!'));
            console.log(response);
        })
        .catch(function(error) {
            console.error(error);
        });
    return false;
}
// var crypted = $.crypt({
//                     method: "md5",
//                     source: "banan321"
//                 });
// console.log( CryptoJS.MD5("banan321") );
