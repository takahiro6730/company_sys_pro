if( $('#withdraw_store').val() == 1 ){
    $('#withdrawStoreModal').removeClass('hidden');
};

const showDeleteConfirmModal = (withdraw_id) => {
    $("#delete_withdraw").val(withdraw_id);
    $("#deleteWithdrawConfirmModal").removeClass("hidden");
}

const deleteWithdraw = () => {
    let withdraw_id = $("#delete_withdraw").val();
    $.post("withdrawMana/delete", {
        _token : $('meta[name="csrf-token"]').attr('content'),
        id : withdraw_id
    }, function(res){
        if(res == "OK") {
            $("#deleteWithdrawConfirmModal").addClass("hidden");
            $("#successModal").removeClass("hidden");
            $("#del_success").removeClass("hidden");
        }
    });
}

const showEditModal = (withdraw_id, withdrawal_date, send_to, amount, unit_id, purpose, other) => {
    $('#withdraw_id').val(withdraw_id);
    $('#withdrawal_date').val(withdrawal_date);
    $('#send_to').val(send_to);
    $('#amount').val(amount);
    $('#unit_id').val(unit_id);
    $('#purpose').val(purpose);
    $('#other').val(other);
    $("#editWithdrawModal").removeClass("hidden");
}

const updateWithdraw = () => {
    let withdraw_id = $("#withdraw_id").val();
    let withdrawal_date = $("#withdrawal_date").val();
    let send_to = $("#send_to").val();
    let amount = $("#amount").val();
    let unit_id = $("#unit_id").val();
    let purpose = $("#purpose").val();
    let other = $("#other").val();
    let invalid = 0;

    if ( withdrawal_date == '' ) {
        $('#withdrawal_date_invalid').removeClass('hidden');
        invalid = 1;
    } else {
        $('#withdrawal_date_invalid').addClass('hidden');
    }
    if ( send_to == '' ) {
        $('#send_to_invalid').removeClass('hidden');
        invalid = 1;
    } else {
        $('#send_to_invalid').addClass('hidden');
    }
    if ( amount == '' ) {
        $('#amount_invalid').removeClass('hidden');
        invalid = 1;
    } else {
        $('#amount_invalid').addClass('hidden');
    }
    if ( unit_id == '' ) {
        $('#unit_id_invalid').removeClass('hidden');
        invalid = 1;
    } else {
        $('#unit_id_invalid').addClass('hidden');
    }
    if ( purpose == '' ) {
        $('#purpose_invalid').removeClass('hidden');
        invalid = 1;
    } else {
        $('#purpose_invalid').addClass('hidden');
    }

    if (invalid == 1){
        return;
    } else {
        $.post("withdrawMana/update", {
            _token : $('meta[name="csrf-token"]').attr('content'),
            "id" : withdraw_id,
            "withdrawal_date" : withdrawal_date,
            "send_to" : send_to,
            "amount" : amount,
            "unit_id" : unit_id,
            "purpose" : purpose,
            "other":other
        }, function(res){
            if(res == "OK") {
                $("#editWithdrawModal").addClass("hidden");
                $("#successModal").removeClass("hidden");
                $("#edit_success").removeClass("hidden");
            }
        });

    }

}