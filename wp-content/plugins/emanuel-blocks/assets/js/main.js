document.addEventListener('DOMContentLoaded',  () => {
    const mediaFields = document.querySelectorAll('[data-component="media-field"]');
    mediaFields.forEach((mediaField) => {
        const input = mediaField.querySelector('[data-role="input"]');
        const openBtn = mediaField.querySelector('[data-role="open-btn"]');
        const removeBtn = mediaField.querySelector('[data-role="remove-btn"]');
        const name = mediaField.querySelector('[data-role="name"]');

        if (!input.value) {
            removeBtn.style.display = 'none';
        }

        const frame = wp.media({
            title: 'Select or Upload Media Of Your Chosen Persuasion',
            button: {
                text: 'Select'
            },
            multiple: false
        });

        frame.on( 'select', function() {
            const attachment = frame.state().get('selection').first().toJSON();
            if (!attachment) {
                name.innerText = '';
                input.value = '';
                removeBtn.style.display = 'none';
                return;
            }
            name.innerText = attachment.filename;
            input.value = attachment.id;
            removeBtn.style.display = '';
        });

        openBtn.addEventListener('click', (event) => {
            event.preventDefault();
            event.stopPropagation();

            frame.open();
        });

        removeBtn.addEventListener('click', (event) => {
            event.preventDefault();
            event.stopPropagation();

            input.value = '';
            name.innerText = '';
            removeBtn.style.display = 'none';
        });
    });

});