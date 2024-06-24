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
    $("#state_cancel").submit();
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
                $("#current_seq").val(seq)
                showProgressConfirmModal()
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
            location.reload()
        }
        else alert(res);
    });
}

const sendProjectAllow = () => {
    let project_id = $("#project_id").val();
    let auther_id = $("#auther_id").val();
    $.post("/projectManaAdmin/projectAllow", {
        _token: $('meta[name="csrf-token"]').attr('content'),
        "project_id": project_id,
        "auther_id": auther_id,
    }, function (res) {
        if (res == "OK") {
            location.reload()
        }
        else alert(res);
    });
}

const checkConfirmModal = () => {
    seq = $("#current_seq").val()
    if(seq == 3) sendProjectAllow();
    else alert("Do Nothing")
}

const clickUploadInvoice = () => {
    var input = document.createElement('input');
    input.type = 'file';
    input.onchange = e => {
        var file = e.target.files[0];
        var fd = new FormData();
        fd.append('file', file);
        fd.append('project_id', $("#project_id").val());
        fd.append('auther_id', $("#auther_id").val());

        postUrl = $("#uploadInvoice").val();
        alert(postUrl)

        $.ajax({
            url: postUrl,
            type: 'POST',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: fd,
            contentType: false,
            processData: false,
            cache: false,
            enctype: 'multipart/form-data',
            success: function (res) {
                if (res == "OK") {
                    location.reload();
                } else {
                    alert(res);
                }
            },
            error: function (xhr, status, error) {
                console.error("Error: " + error);
                alert("エラーが発生しました。請求書ファイルのサイズが5MB以上でなければなりません。");
            }
        });
    }
    input.click();
}