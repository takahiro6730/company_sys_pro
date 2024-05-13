<style>

    .invoice-box {
        border: 1px solid #ddd;
        border-radius: 5px;
        padding: 50px 30px;
        position: relative;
    }

    .date {
        position: absolute;
        top: 60px;
        right: 30px;
    }

    .title h1 {
        font-size: 26px;
        text-align: center;
        margin-right: 40px;
    }

    .title h1 span {
        font-size: 16px;
    }

    .main {
        margin-top: 40px;
        width: 100%;
        display: flex;
        justify-content: space-between;
        align-items: flex-end;
    }

    .main .left {
        width: 70%;
    }

    .main .right {
        width: 28%;
    }

    .main .left p {
        line-height: 2;
        width: fit-content;
    }

    table {
        border: 1px solid #888;
        width: 100%;
    }

    td {
        border: 1px solid #888;
        text-align: center;
        padding: 10px;
        word-break: break-all;
    }

    #table1 {
        margin-top: 10px;
    }

    #table2 {
        margin-top: 20px;
    }

    #table4 {
        margin-top: 50px;
    }

    .main .right h4 {
        margin-bottom: 10px;
    }
</style>

<body oncontextmenu="false">
    <div class="invoice-box">

        <div class="no">
            {{ $no }}
        </div>

        <div class="date">
            <p>請求日： {{ $today->format('Y') }}年 {{ $today->format('m') }}月 {{ $today->format('d') }}日</p>
        </div>
        
        <div class="title">
            <h1><span>{{ $client_info }}様</span> 御請求書</h1>
        </div>
    
        <div class="main">
            <div class="left">
                <!-- <p>平素は格別のお引き立てを賜り厚く御礼申し上げます。</p>
                <p>下記の通りご請求申し上げます。</p>
                <p>宜しくお願い申し上げます。</p> -->
                <table id="table1">
                    <tr>
                        <td style="tai">合計金額</td>
                        <td>￥{{ number_format($amount) }}</td>
                    </tr>
                    <tr>
                        <td>振込先</td>
                        <td>GMOあおぞらネット銀行 法人営業部 普通口座1765509 株式会社オヤテックジャパン</td>
                    </tr>
                    <tr>
                        <td>お振込期限</td>
                        <td>請求書発行後10営業日以内</td>
                    </tr>
                </table>
                <table id="table2">
                    <tr>
                        <td style="max-width: 6%; width: 100%;">番号</td>
                        <td style="max-width: 27%; width: 100%;">品名</td>
                        <td style="max-width: 6%; width: 100%;">数量</td>
                        <td style="max-width: 6%; width: 100%;">単位</td>
                        <td style="max-width: 8%; width: 100%;">単価</td>
                        <td style="max-width: 8%; width: 100%;">金額</td>
                        <td style="max-width: 8%; width: 100%;">備考</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>{{ $project_name }}</td>
                        <td>1</td>
                        <td>式</td>
                        <td>{{ number_format($amount) }}</td>
                        <td>{{ number_format($amount) }}</td>
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
                </table>
            </div>
            <div class="right">
                <h4>株式会社オヤテックジャパン</h4>
                <p>〒080-0014</p>
                <p>北海道帯広市西四条南 24 丁目 19 番地 2</p>
                <p>コーポモリタ 103 号</p>
                <p>E-mail：info@oyatech.co.jp</p>
                <p>担当：福田 拓矢</p>
                <table id="table3">
                    <tr>
                        <td>特 記 事 項</td>
                    </tr>
                    <tr>
                        <td align="left">
                            <div style="min-height: 150px; text-align: left;">
                                {!! $other !!}
                            </div>
                        </td>
                    </tr>
                </table>

                <table id="table4">
                    <tr>
                        <td style="width: 42%;">小計</td>
                        <td style="width: 58%;">{{ number_format($amount) }}</td>
                    </tr>
                    <tr>
                        <td>消費税（内税）</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>合計</td>
                        <td>{{ number_format($amount) }}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>