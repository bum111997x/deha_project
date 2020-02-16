$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    // $(".per-select-all").click(function () {
    //     $(".per-select-one").prop("checked", $(this).prop("checked"));
    // });

    // DataRaw of Role

    // function dataRaw(response) {
    //     return `<tr id="role_${response.data.id}">
    //                 <td>${response.data.role_name}</td>
    //                 <td>${response.data.role_label}</td>
    //                 <td>${response.data.role_status == 1 ? '<span class="badge badge-success">Actived</span>' : '<span class="badge badge-pill badge-primary">Locked</span>'}</td>
    //                 <td>${response.data.created_at}</td>
    //                 <td>
    //                     <button type="button" class="btn btn-danger" id="buttonDelete" data-id="${response.data.id}">Delete</button>
    //                     <button type="button" class="btn btn-warning" id="buttonEdit" data-id="${response.data.id}" >Edit</button>
    //                     <button type="button" class="btn btn-success" id="buttonSetting" data-id="${response.data.id}">Setting</button>
    //                 </td>
    //             </tr>`;
    // }

    //Search

    $(document).on('click', '#button', function () {
        let query = $('#search').val();
        if (query == '') {
            alert('Please enter your text!');
            window.location.reload();
        } else {
            $.ajax({
                url: 'roles/search/' + query,
                type: 'GET',
            })
                .done(response => {
                    $('#data-role').html(response);
                })
                .fail(error => {
                    console.log(error);
                });
        }
    });

    //Create Product

    $(document).on("click", '#buttonSave', function (e) {
        e.preventDefault();
        let dataResource = $('#roleForm').serialize();
        $.ajax({
            url: 'roles/store',
            type: 'POST',
            data: dataResource,
        })
            .done(response => {
                $('#data-role').html(response);
                $('#roleForm').trigger('reset');
                $('#createRoleModalForm').modal('hide');
                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: 'Your work has been saved',
                    showConfirmButton: false,
                    timer: 1500
                })
            })
            .fail(error => {
                console.log(error);
            });
    });

    // Delete Role

    // $(document).on('click', '#buttonDelete', function (e) {
    //     e.preventDefault();
    //     let id = $(this).data('id');
    //     $.ajax({
    //         url: 'roles/delete/' + id,
    //         type: 'DELETE',
    //     })
    //         .done(response => {
    //             $('#role_' + id).remove();
    //             $('#data-role').html(response);
    //             Swal.fire({
    //                 position: 'top-end',
    //                 icon: 'success',
    //                 title: 'Your work has been saved',
    //                 showConfirmButton: false,
    //                 timer: 1500
    //             })
    //         })
    //         .fail(error => {
    //             console.log(error)
    //
    //         })
    // })
    // ;

    //Show Modal

    $('#createRoleModalForm').on('show.bs.modal', function (event) {
        let button = $(event.relatedTarget);
        let recipient = button.data('whatever');
        let modal = $(this);
        modal.find('.modal-title').text('New message to ' + recipient);
        modal.find('.modal-body input').val(recipient)
    });


    //Show form Edit

    // $(document).on("click", "#buttonEdit", function (e) {
    //     e.preventDefault();
    //     let id = $(this).data('id');
    //     let urlResource = '/roles/' + id + '/edit';
    //     $.ajax({
    //         url: urlResource,
    //         type: 'GET',
    //     })
    //         .done(response => {
    //             $('#editRoleModalForm').modal('show');
    //             $('#role_name').val(response.data.role_name);
    //             $('#role_label').val(response.data.role_label);
    //             $('#role_status').val(response.data.role_status);
    //             $('#buttonUpdate').attr("data-id", id);
    //
    //         })
    //         .fail(error => {
    //             console.log(error);
    //         });
    // });

    // // Show form Setting Permission
    //
    // $(document).on("click", "#buttonSetting", function (e) {
    //     e.preventDefault();
    //     let roleId = $(this).data('id');
    //     let urlResource = '/roles/' + roleId + '/permissions';
    //     $.ajax({
    //         url: urlResource,
    //         type: 'GET'
    //     })
    //         .done(response => {
    //             $('#largeModal').modal('show');
    //             $('#permission').html(response);
    //             $('#btn-setting').attr("data-id", roleId);
    //         })
    //         .fail(error => {
    //             console.log(error);
    //         });
    // });

    // $(document).on("click", "#btn-setting", function (e) {
    //     e.preventDefault();
    //     let ids = [];
    //     let roleId = $(this).data('id');
    //     $('.per-select-one:checked').each(function (i) {
    //         ids.push($(this).attr('data-ids'));
    //     });
    //     if (ids.length == 0) {
    //         Swal.fire({
    //             position: 'top-end',
    //             icon: 'error',
    //             title: 'Your work has been saved',
    //             showConfirmButton: false,
    //             timer: 1500
    //         });
    //     } else {
    //         $.ajax({
    //             url: '/roles/' + roleId + '/setting/permissions/' + ids,
    //             type: 'POST',
    //         })
    //             .done(response => {
    //                 Swal.fire({
    //                     position: 'top-end',
    //                     icon: 'success',
    //                     title: 'Your work has been saved',
    //                     showConfirmButton: false,
    //                     timer: 1500
    //                 });
    //                 window.location.reload();
    //                 $(".per-select-all").prop("checked", true);
    //                 $('#largeModal').modal('hide');
    //             })
    //             .fail(error => {
    //                 console.log(error);
    //             });
    //     }
    // });

    // Update Role

    // $(document).on("click", '#buttonUpdate', function (e) {
    //     e.preventDefault();
    //     let id = $('#buttonUpdate').data('id');
    //     let urlResource = "/roles/update/" + id;
    //     let dataResource = $('#roleFormEdit').serialize();
    //     $.ajax({
    //         url: urlResource,
    //         type: 'POST',
    //         data: dataResource
    //     })
    //         .done(response => {
    //             $("#role_" + id).replaceWith(dataRaw(response));
    //             $('#roleForm').trigger('reset');
    //             $('#editRoleModalForm').modal('hide');
    //             Swal.fire({
    //                 position: 'top-end',
    //                 icon: 'success',
    //                 title: 'Your work has been saved',
    //                 showConfirmButton: false,
    //                 timer: 1500
    //             })
    //         })
    //         .fail(error => {
    //             console.log(error);
    //         });
    // })
});

