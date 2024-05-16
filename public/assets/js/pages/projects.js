const showDeleteConfirmModal = (project_id) => {
    $("#delete_project").val(project_id);
    $("#deleteprojectConfirmModal").removeClass("hidden");
}

const showRegisterConfirmModal = (e) => {
    e = e || window.event;
    e.preventDefault();
    $("#showRegisterConfirmModal").removeClass("hidden");
}

const sendform = () => {
    $("#create_form").submit();
}

const closeRegisterConfirmModal = () => {
    $("#showRegisterConfirmModal").addClass("hidden");
}

const deleteproject = () => {
    let project_id = $("#delete_project").val();
    $.post("projectMana/destroy", {
        _token: $('meta[name="csrf-token"]').attr('content'),
        "id": project_id
    }, function (res) {
        if (res == "OK") {
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
        _token: $('meta[name="csrf-token"]').attr('content'),
        "id": project_id,
        "worker": worker,
        "deadline": deadline,
        "progress": progress,
        "other": other
    }, function (res) {
        if (res == "OK") {
            $("#editprojectModal").addClass("hidden");
            $("#projectChangedModal").removeClass("hidden");
        }
    });
}

const progress_update = (seq) => {
    if ($("#progress_state" + seq).find("#click_target").attr('allowed') === "done") showCannotModal("操作はすでに完了しています。")
    else if ($("#progress_state" + seq).find("#click_target").attr('allowed') === "yet") showCannotModal("前のステップの操作を完了してください。")
    else if ($("#progress_state" + seq).find("#click_target").attr('allowed') === "ready") {
        switch (seq) {
            case 1:
                // code block
                break;
            case 2:
                showManagerModal()
                break;
            case 3:
                // code block
                break;
            case 4:
                // code block
                break;
            case 5:
                // code block
                break;
            case 6:
                // code block
                break;
            case 7:
                // code block
                break;
            default:
                alert("cannot confirm!")
        }
        // showProgressConfirmModal(seq);
    }
    else alert("unknown")
    return;
}

const showProgressConfirmModal = (seq) => {
    $("#progressConfirmModal").removeClass("hidden");
}

const closeProgressConfirmModal = () => {
    $("#progressConfirmModal").addClass("hidden");
}

const showCannotModal = (caption) => {
    $("#cannotModal").find("#caption").text(caption)
    $("#cannotModal").removeClass("hidden");
}

const closeCannotModal = () => {
    $("#cannotModal").addClass("hidden");
}

const showManagerModal = () => {
    // $("#managerModal").find("#caption").text()
    $("#managerModal").removeClass("hidden");
}

const closeManagerModal = () => {
    $("#managerModal").addClass("hidden");
}

const selectManager = () => {
    let project_id = $("#project_id").val();
    let auther_id = $("#auther_id").val();
    let manager_id = $("#manager_select").val();
    $.post("/projectManaAdmin/managerSelect", {
        _token: $('meta[name="csrf-token"]').attr('content'),
        "project_id": project_id,
        "auther_id": auther_id,
        "manager_id": manager_id,
    }, function (res) {
        if (res == "OK") {
            // $("#editprojectModal").addClass("hidden");
            // $("#projectChangedModal").removeClass("hidden");
            location.reload()
        }
        else alert(res);
    });
}