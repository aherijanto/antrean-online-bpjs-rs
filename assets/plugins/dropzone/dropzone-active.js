$(document).ready(function () {
    "use strict"; // Start of use strict
    Dropzone.options.dropzoneForm = {
        paramName: "file", // The name that will be used to transfer the file
        maxFilesize: 2, // MB
        dictDefaultMessage: "<i class='pe-7s-cloud-upload upload-icon'></i><strong>Drop files here or click to upload. </strong></br> (This is just a demo dropzone. Selected files are not actually uploaded.)"
    };
});