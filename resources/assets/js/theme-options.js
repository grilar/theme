$(document).ready(() => {
    if ($(document).find('.colorpicker-input').length > 0) {
        $(document).find('.colorpicker-input').colorpicker()
    }

    if ($(document).find('.iconpicker-input').length > 0) {
        $(document).find('.iconpicker-input').iconpicker({
            selected: true,
            hideOnSelect: true,
        })
    }

    $(document).ready(function () {
        $(document).on('click', '.button-save-theme-options', (event) => {
            event.preventDefault()
            let _self = $(event.currentTarget)
            _self.addClass('button-loading')

            if (typeof tinymce != 'undefined') {
                for (let instance in tinymce.editors) {
                    if (tinymce.editors[instance].getContent) {
                        $('#' + instance).html(tinymce.editors[instance].getContent())
                    }
                }
            }

            let $form = _self.closest('form')

            $.ajax({
                url: $form.prop('action'),
                type: 'POST',
                data: $form.serialize(),
                success: (data) => {
                    _self.removeClass('button-loading')

                    if (data.error) {
                        Grilar.showError(data.message)
                    } else {
                        Grilar.showSuccess(data.message)
                        $form.removeClass('dirty')
                    }
                },
                error: (data) => {
                    _self.removeClass('button-loading')
                    Grilar.handleError(data)
                },
            })
        })

        $('.theme-option-sidebar a[data-bs-toggle="tab"]').on('click', () => {
            Grilar.initResources()

            if (typeof EditorManagement != 'undefined') {
                window.EDITOR = new EditorManagement().init()
                window.EditorManagement = window.EditorManagement || EditorManagement
            }
        })
    })
})
