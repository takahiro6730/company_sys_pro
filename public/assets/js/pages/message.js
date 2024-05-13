var current_user = 0;

$(document).ready(function () {
  $(".sel_user").click(function () {
    current_user = $(this).prop("id").replace("user_", "");
    var postUrl = hostUrl + "/message/get_chat";
    const csrfToken = document
      .querySelector('meta[name="csrf-token"]')
      .getAttribute("content");

    $.ajax({
      type: "POST",
      url: postUrl,
      contentType: "application/x-www-form-urlencoded; charset=UTF-8",
      enctype: "multipart/form-data",
      cache: false,
      processData: false,
      data: jQuery.param({
        current_user: current_user,
      }),
      headers: {
        "X-CSRF-TOKEN": csrfToken,
      },
      success: function (data, status) {
        $("#chat_input").css("display", "block");
        $("#chat_form").children().remove();
        data.forEach((chat_message) => {
          let $element =
            chat_message.direction == "left"
              ? $("#left_chat").clone()
              : $("#right_chat").clone();
          $element.find("img").each(function () {
            $(this).attr("src", chat_message.avatar_url);
          });
          $element.find("#chat_content").each(function () {
            $(this).text(chat_message.content);
          });
          $element.find("#chat_time").each(function () {
            $(this).text(chat_message.created_at);
          });
          $("#chat_form").append($element);
        });
      },
    });
  });
  $("#send_text").click(function () {
    let sending_message = $("#message_input").val();
    $("#message_input").val("");
    var postUrl = hostUrl + "/message/send";
    const csrfToken = document
      .querySelector('meta[name="csrf-token"]')
      .getAttribute("content");
    $.ajax({
      type: "POST",
      url: postUrl,
      contentType: "application/x-www-form-urlencoded; charset=UTF-8",
      enctype: "multipart/form-data",
      cache: false,
      processData: false,
      data: jQuery.param({
        sending_message: sending_message,
        current_user: current_user,
      }),
      headers: {
        "X-CSRF-TOKEN": csrfToken,
      },
      success: function (data, status) {
        console.log(data);
        let $element = $("#left_chat").clone();
        $element.find("img").each(function () {
          $(this).attr("src", data.avatar_url);
        });
        $element.find("#chat_content").each(function () {
          $(this).text(data.content);
        });
        $("#chat_form").append($element);
      },
    });
  });
  $(document).on("keyup", "#search_user", function () {
    var filter = $(this).val().toLowerCase();
    $(".sel_user").each(function () {
      var title = $(this).find(".user_name").text().toLowerCase();
      if (title.indexOf(filter) > -1) {
        $(this).addClass("flex");
        $(this).css("display", "flex");
      } else {
        console.log("stop");
        $(this).removeClass("flex");
        $(this).css("display", "none");
      }
    });
  });
});
