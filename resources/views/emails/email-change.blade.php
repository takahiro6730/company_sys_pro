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
            background-color: #007BFF;
            border: none;
            border-radius: 15px;
            box-shadow: 0 5px #999;
        }

        .button:hover {
            background-color: #0065cc
        }

        .button:active {
            background-color: #0065cc;
            box-shadow: 0 3px #666;
            transform: translateY(2px);
        }
    </style>
</head>

<body>

    <p>以下のボタンをクリックして、メールの変更を確認してください：</p>

    <!-- Button Link -->
    <a href="{{ $url }}" class="button" target="_blank">メール変更</a>

</body>

</html>