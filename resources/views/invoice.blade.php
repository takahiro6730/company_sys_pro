<!doctype html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>請求書</title>
    <style>
        @font-face {
            font-family: yumin;
            src:url('{{ asset('assets/fonts/yumin.ttf')}}') format('truetype');
        }
    </style>
    <link rel="stylesheet" href="{{ asset('/assets/css/invoice.css') }}">
</head>

<body>
    @php
        $cnt = $invoice->id;
        $len = strlen($cnt);
        $prefix_len = 6 - $len;
        $prefix = '';
        for($i = 0; $i < $prefix_len; $i ++) {
            $prefix .= '0';
        }
        $no = $prefix . $cnt;
    @endphp
    <div class="no">
        <p>{{ $no }}</p>
    </div>
    <div class="top-title">
        <p><span>{{ $invoice->client_info }}様</span> 御請求書</p>
    </div>
    <div class="created-date">
        <p>請求日： {{ $invoice->created_at->format('Y') }}年 {{ $invoice->created_at->format('m') }}月 {{ $invoice->created_at->format('d') }}日</p>
    </div>
    <div class="main">
        <div class="left">
            <div class="desc">
                <p>平素は格別のお引き立てを賜り厚く御礼申し上げます。</p>
                <p>下記の通りご請求申し上げます。</p>
                <p>宜しくお願い申し上げます。</p>
            </div>
            <table class="table" id="table1">
                <tr>
                    <td style="width: 30%;">合計金額</td>
                    <td style="width: 70%; font-size: 16px;">¥{{ number_format($invoice->amount) }}</td>
                </tr>
                <tr>
                    <td>振込先</td>
                    <td>GMOあおぞらネット銀行 法人営業部 普通口座1765509 株式会社オヤテックジャパン</td>
                </tr>
                <tr>
                    <td>お振込期限</td>
                    <td>請求書発行後 10 営業日以内</td>
                </tr>
            </table>
            <table class="table" id="table2">
                <tr>
                    <td style="width: 7%;">番号</td>
                    <td style="width: 35%;">品名</td>
                    <td style="width: 7%;">数量</td>
                    <td style="width: 7%;">単位</td>
                    <td style="width: 10%;">単価</td>
                    <td style="width: 10%;">金額</td>
                    <td style="width: 24%;">備考</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>{{ $invoice->project_name }}</td>
                    <td>1</td>
                    <td>{{ number_format($invoice->amount) }}</td>
                    <td>式</td>
                    <td>{{ number_format($invoice->amount) }}</td>
                    <td></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>6</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>7</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>8</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>9</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>10</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
        </div>
        <div class="right">
            <p class="company-title">株式会社オヤテックジャパン</p>
            <p>〒080-0014</p>
            <p>北海道帯広市西四条南24丁目19番地2</p>
            <p>コーポモリタ103号</p>
            <p>E-mail：info@oyatech.co.jp</p>
            <p>担当：福田 拓矢</p>

            <table class="table" id="table3">
                <tr>
                    <td>特記事項</td>
                </tr>
                <tr>
                    <td>
                        <div style="height: 130px; width: 100%;"></div>
                    </td>
                </tr>
            </table>

            <table class="table" id="table4">
                <tr>
                    <td style="width: 40%;">小計</td>
                    <td>{{ number_format($invoice->amount) }}</td>
                </tr>
                <tr>
                    <td>消費税（内税）</td>
                    <td></td>
                </tr>
                <tr>
                    <td>合計</td>
                    <td>{{ number_format($invoice->amount) }}</td>
                </tr>
            </table>
        </div>
    </div>
</body>

</html>