ClassicEditor
    .create(document.querySelector('#description_editor'))
    .catch(error => {
        console.error(error);
    });

ClassicEditor
    .create(document.querySelector('#description_editor_update'))
    .catch(error => {
        console.error(error);
    });