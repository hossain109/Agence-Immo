let spinner = '<div class="spinner-border text-white" role="status"><span class="sr-only"></span></div>';

function uploadFile() {

    let alt = document.getElementById('alt').value;

    if (alt.trim() !== '') {

        let myFile = document.getElementById('path').files[0];
        let fileName = myFile.name;

        let fileSize = myFile.size;
        let fileType = myFile.type.split('/').pop();

        if (fileType !== 'jpg' && fileType !== 'jpeg' && fileType !== 'png') {
            document.getElementById("error").innerHTML = 'Image type doit etre jpeg/png'
            setTimeout(() => {
                document.getElementById("error").innerHTML = ''
            }, 500);
        } else {
            if (fileSize > 200000) {
                document.getElementById('error').innerHTML = 'Image size doit etre moin de 200000'
                setTimeout(() => {
                    document.getElementById('error').innerHTML = ''
                }, 500);
            } else {

                let fileData = new FormData();
                fileData.append("fileKey", myFile);
                fileData.append('Alt', alt);


                $("#btnSubmit").html(spinner);
                let config = {
                    headers: { 'content-type': 'multipart/form-data' },
                    onUploadProgress: function (progrressEvent) {
                        //let percentageProg = Math.round(progrressEvent.loaded * 100 / progrressEvent.total);
                        let uploadMB = progrressEvent.loaded / 1024 * 1024;
                        let totalMB = progrressEvent.total / 1024 * 1024;
                        $("#onUploadProgress").html("uploaded Size(bits): " + uploadMB.toFixed(2) + " Rest of Size(bits): " + totalMB.toFixed(2));
                    }
                }

                let url = '/admin/upload';
                axios.post(url, fileData, config)
                    .then((response) => {
                        if (response.status == 200) {
                            if (response.data === 'success') {
                                $("#btnSubmit").html('uploaded');
                                document.querySelector("#onUploadProgress").innerHTML = 'uploaded avec success';
                                document.querySelector("#onUploadProgress").classList.add('text-success');
                                setTimeout(() => {
                                    document.querySelector("#onUploadProgress").classList.remove('text-success')
                                    document.querySelector("#onUploadProgress").innerHTML = '';
                                    $("#btnSubmit").html('Ajouter Image');

                                }, 1000);
                            } else if (response.data === 'exist') {

                                failed();
                                document.querySelector("#onUploadProgress").innerHTML = 'image deja existe';
                            }

                            else {
                                failed();
                            }

                        } else {
                            failed();

                        }
                    }
                    )
                    .catch((error) => {
                        failed();
                    })
            }
        }
    } else {
        document.getElementById("error").innerHTML = "Nom d'image ne peut etre vide"
    }
}

function failed() {
    document.querySelector("#onUploadProgress").innerHTML = 'uploaded failed';
    document.querySelector("#onUploadProgress").classList.add('text-danger')
    setTimeout(() => {
        document.querySelector("#onUploadProgress").innerHTML = '';
        document.querySelector("#onUploadProgress").classList.remove('text-danger')
        $("#btnSubmit").html('Ajouter Image');
    }, 1000);
}