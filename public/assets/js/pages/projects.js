const showDeleteConfirmModal = (project_id) => {
    $("#delete_project").val(project_id);
    $("#deleteprojectConfirmModal").removeClass("hidden");
}

const deleteproject = () => {
    let project_id = $("#delete_project").val();
    $.post("projectMana/destroy", {
        _token : $('meta[name="csrf-token"]').attr('content'),
        "id" : project_id
    }, function(res){
        if(res == "OK") {
            $("#deleteprojectConfirmModal").addClass("hidden");
            $("#projectDeletedModal").removeClass("hidden");
        }
    });
}


const showEditModal = (project_id, worker, deadline, progress, other) => {
    $("#edit_project").val(project_id);
    $("#edit_worker").val(worker);
    $("#edit_deadline").val(deadline);
    $("#edit_progress").val(progress);
    $("#edit_other").val(other);
    $("#editprojectModal").removeClass("hidden");
}

const updateproject = () => {
    let project_id = $("#edit_project").val();
    let worker = $("#edit_worker").val();
    let deadline = $("#edit_deadline").val();
    let progress = $("#edit_progress").val();
    let other = $("#edit_other").val();
    $.post("projectMana/update", {
        _token : $('meta[name="csrf-token"]').attr('content'),
        "id" : project_id,
        "worker" : worker,
        "deadline" : deadline,
        "progress" : progress,
        "other":other
    }, function(res){
        if(res == "OK") {
            $("#editprojectModal").addClass("hidden");
            $("#projectChangedModal").removeClass("hidden");
        }
    });
}