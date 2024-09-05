$(document).ready(function() {
    $('#add-experience').click(function() {
        const experienceTemplate = `
            <div class="experience-group mt-3">
                <div class="form-group">
                    <label>Cargo:</label>
                    <input type="text" name="experience[position][]" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Empresa:</label>
                    <input type="text" name="experience[company][]" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Duração:</label>
                    <input type="text" name="experience[duration][]" class="form-control" required>
                </div>
                <button type="button" class="btn btn-danger remove-experience">Remover</button>
                <hr>
            </div>
        `;
        $('#experiences-container').append(experienceTemplate);
    });

    $(document).on('click', '.remove-experience', function() {
        $(this).closest('.experience-group').remove();
    });
});
