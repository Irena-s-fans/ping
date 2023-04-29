$(document).ready(function() {
    $('.project-delete').on('click', function(e) {
        e.preventDefault();
        const projectID = Number($(this).attr('data-project-id'));
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            },
            url: '/admin/projects/delete',
            method: 'POST',
            dataType: 'json',
            data: {
                projectID,
            },
            success: () => {
                location.reload();
            },
            error: () => {
                alert('Произошла ошибка при удалении записи.');
            }
        })
    });
});
