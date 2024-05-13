<!DOCTYPE html>
<html>
  <head>
    <title>メール変更確認</title>
    <style>
      .button {
        display: inline-block;
        padding: 12px 24px;
        font-size: 16px;
        cursor: pointer;
        text-align: center;
        text-decoration: none;
        outline: none;
        color: #fff;
        background-color: #007bff;
        border: none;
        border-radius: 15px;
        box-shadow: 0 5px #999;
      }

      .button:hover {
        background-color: #0065cc;
      }

      .button:active {
        background-color: #0065cc;
        box-shadow: 0 3px #666;
        transform: translateY(2px);
      }
    </style>
  </head>

  <body>
    <p>メッセージを確認してください</p>

    <!-- Button Link -->

    <div id=":j9" class="a3s aiL msg3072303958861305518">
      <div lang="en-us">
        <div style="color: #65735b; margin: 20px 0"></div>

        <div style="background-color: #f2f7f2; padding: 30px">
          <div style="background-color: #14a800; padding: 30px">
            <img
              height="30"
              src="{{ asset('assets/images/logo-sm1.png') }}"
              alt="オヤテックジャパン"
            />
          </div>

          <div style="background-color: #ffffff; padding: 30px; color: #001e00;">
            <p dir="ltr" style=" font-size: 20px;">{{ $receive_user->nickname }}様、こんにちは！
            {{ $origin_user->nickname }}様からメッセージが届きました。</p>
            <div style="margin-top: 25px">
              <p
                dir="ltr"
                style="color: #2b2e2f; line-height: 22px; margin: 15px 0; font-size: 16px;"
              >
                {{ $newMessage->content }}
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div style="text-align: center; margin-top: 10px;">
      <a href="{{ $url }}" class="button" target="_blank">メッセージ確認</a>
    </div>
  </body>
</html>
