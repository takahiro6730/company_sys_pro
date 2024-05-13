const showDeleteConfirmModal = (id) => {
    $("#delete_id").val(id);
    $("#deleteConfirmModal").removeClass("hidden");
}

const deleteUser = () => {
    let delete_id = $("#delete_id").val();
    $.post("invoiceMana/destroy", {
        _token : $('meta[name="csrf-token"]').attr('content'),
        "id" : delete_id
    }, function(res){
        if(res == "OK") {
            $("#deleteConfirmModal").addClass("hidden");
            $("#successModal").removeClass("hidden");
        }

        if(res == "Unauthorized") {
            $("#deleteConfirmModal").addClass("hidden");
            toastr.warning('ユーザー認証に失敗しました。');
        }
    });
}