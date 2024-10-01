import './bootstrap';

let allEditors = document.querySelectorAll('.ckeditor-field');
allEditors.forEach(function (editorItem) {
    CKEDITOR.replace(editorItem.id, {
        filebrowserUploadUrl: '/admin/upload',
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
        },
        autoParagraph: false,
        enterMode: CKEDITOR.ENTER_BR,
        allowedContent: true,
    })
})
