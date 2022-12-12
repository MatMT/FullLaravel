import Dropzone from "dropzone";

Dropzone.autoDiscover = false;

const dropzone = new Dropzone('#dropzone', {
    dictDefaultMessage: 'Sube aquí tu imagen',
    acceptedFiles: ".png,.jpg,.jpeg,.gif",
    addRemoveLinks: true,
    dictRemoveFile: 'Borrar Archivo',
    maxFiles: 1,
    uploadMultiple: false,

    // Callback al ser inicializado
    init: function () {
        // En caso de haber subido la imagen anteriormente lo restablecerá
        if (document.querySelector('[name="imagen"]').value.trim()) {
            // Objeto - permite  asignar valores
            const imagenPublicada = {}
            imagenPublicada.size = 1234;
            imagenPublicada.name = document.querySelector('[name="imagen"]').value;

            // Opciones propias de dropzone - se asigna inmediatamente y se manda a llamar
            this.options.addedfile.call(this, imagenPublicada)
            // thumbnail = imagen pequeña
            this.options.thumbnail.call(this, imagenPublicada, `/uploads/${imagenPublicada.name}`);

            // Clase de Css propia de Dropzone
            imagenPublicada.previewElement.classList.add('dz-success', 'dz-complete');
        }
    }
})

dropzone.on('success', function (file, response) {
    document.querySelector('[name="imagen"]').value = response.imagen;
})

dropzone.on('removedfile', function () {
    document.querySelector('[name="imagen"]').value = '';
})
