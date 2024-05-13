const changeUserVerify = (user_id) => {
    $.post("userMana/changeVerify", {
        _token : $('meta[name="csrf-token"]').attr('content'),
        "id" : user_id
    }, function(res){

        if(res == "FAIL") {
            toastr.warning('ログイン権限を変更することはできません。');
            $("#checkbox_" + user_id).prop('checked', !$("#checkbox_" + user_id).prop('checked'));
        }

        if(res == "OK") {
            toastr.success('ログイン権限が変更されました。');
        }

        if(res == "Unauthorized") {
            toastr.warning('現在、あなたには権限がありません。');
            $("#checkbox_" + user_id).prop('checked', !$("#checkbox_" + user_id).prop('checked'));
        }
    });
}

const showDeleteConfirmModal = (user_id) => {
    $("#delete_user").val(user_id);
    $("#deleteUserConfirmModal").removeClass("hidden");
}

const deleteUser = () => {
    let user_id = $("#delete_user").val();
    $.post("userMana/destroy", {
        _token : $('meta[name="csrf-token"]').attr('content'),
        "id" : user_id
    }, function(res){
        if(res == "OK") {
            $("#deleteUserConfirmModal").addClass("hidden");
            $("#userDeletedModal").removeClass("hidden");
        } else if(res == "Unauthorized") {
            $("#deleteUserConfirmModal").addClass("hidden");
            toastr.warning("現在、あなたには削除権限がありません。");
        }
    });
}