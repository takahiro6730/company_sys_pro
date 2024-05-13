if( $('#deposit_store').val() == 1 ){
    $('#depositStoreModal').removeClass('hidden');
};

const showDeleteConfirmModal = (deposit_id) => {
    $("#delete_deposit").val(deposit_id);
    $("#deleteDepositConfirmModal").removeClass("hidden");
}

const deleteDeposit = () => {
    let deposit_id = $("#delete_deposit").val();
    $.post("depositMana/delete", {
        _token : $('meta[name="csrf-token"]').attr('content'),
        id : deposit_id
    }, function(res){
        if(res == "OK") {
            $("#deleteDepositConfirmModal").addClass("hidden");
            $("#successModal").removeClass("hidden");
            $("#del_success").removeClass("hidden");
        }
    });
}

const showEditModal = (deposit_id, deposited_date, client_info, amount, unit_id, payment_id, other) => {
    $('#deposit_id').val(deposit_id);
    $('#deposited_date').val(deposited_date);
    $('#client_info').val(client_info);
    $('#amount').val(amount);
    $('#unit_id').val(unit_id);
    $('#payment_id').val(payment_id);
    $('#other').val(other);
    $("#editDepositModal").removeClass("hidden");
}

const updateDeposit = () => {
    let deposit_id = $("#deposit_id").val();
    let deposited_date = $("#deposited_date").val();
    let client_info = $("#client_info").val();
    let amount = $("#amount").val();
    let unit_id = $("#unit_id").val();
    let payment_id = $("#payment_id").val();
    let other = $("#other").val();
    let invalid = 0;

    if ( deposited_date == '' ) {
        $('#deposited_date_invalid').removeClass('hidden');
        invalid = 1;
    } else {
        $('#deposited_date_invalid').addClass('hidden');
    }
    if ( client_info == '' ) {
        $('#client_info_invalid').removeClass('hidden');
        invalid = 1;
    } else {
        $('#client_info_invalid').addClass('hidden');
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
    if ( payment_id == '' ) {
        $('#payment_id_invalid').removeClass('hidden');
        invalid = 1;
    } else {
        $('#payment_id_invalid').addClass('hidden');
    }

    if (invalid == 1){
        return;
    } else {
        $.post("depositMana/update", {
            _token : $('meta[name="csrf-token"]').attr('content'),
            "id" : deposit_id,
            "deposited_date" : deposited_date,
            "client_info" : client_info,
            "amount" : amount,
            "unit_id" : unit_id,
            "payment_id" : payment_id,
            "other":other
        }, function(res){
            if(res == "OK") {
                $("#editDepositModal").addClass("hidden");
                $("#successModal").removeClass("hidden");
                $("#edit_success").removeClass("hidden");
            }
        });

    }

}