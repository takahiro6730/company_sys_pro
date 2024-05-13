<!DOCTYPE html>
<html lang="ja" dir="ltr">

<head>
    <meta charset="utf-8" />
    <title>トップページ | オヤテックジャパン</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta content="オヤテックジャパン" name="description" />
    <meta content="" name="Themesbrand" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" />

    <link rel="stylesheet" href="{{ asset('assets/libs/swiper/swiper-bundle.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/icons.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/tailwind.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/pages/userTerm.css') }}" />
    <style>
        .term_scroll {
            grid-template-columns: repeat(12, 1fr);
            place-items: center;
            height: 100vh;
            overflow-auto;
        }

        .term_scroll::-webkit-scrollbar {
            display: none;
            /* Hide scrollbar */
        }
    </style>
    
</head>

<body data-mode="light" data-sidebar-size="lg">
    <input type="hidden" value="{{$local}}" id="curLang">
    <div class="container-fluid">
        <div class="h-screen md:overflow-hidden">
            <div class="grid grid-cols-1 md:grid-cols-12 ">
                <div class="col-span-12 md:col-span-12 lg:col-span-12 xl:col-span-12">
                    <div class="h-screen bg-cover relative p-5 bg-[url('../images/auth-bg.jpg')]">
                        <div class="absolute inset-0 bg-violet-500/90"></div>

                        <ul class="bg-bubbles absolute top-0 left-0 w-full h-full overflow-hidden animate-square">
                            <li class="h-10 w-10 rounded-3xl bg-white/10 absolute left-[10%] "></li>
                            <li class="h-28 w-28 rounded-3xl bg-white/10 absolute left-[20%]"></li>
                            <li class="h-10 w-10 rounded-3xl bg-white/10 absolute left-[25%]"></li>
                            <li class="h-20 w-20 rounded-3xl bg-white/10 absolute left-[40%]"></li>
                            <li class="h-24 w-24 rounded-3xl bg-white/10 absolute left-[70%]"></li>
                            <li class="h-32 w-32 rounded-3xl bg-white/10 absolute left-[70%]"></li>
                            <li class="h-36 w-36 rounded-3xl bg-white/10 absolute left-[32%]"></li>
                            <li class="h-20 w-20 rounded-3xl bg-white/10 absolute left-[55%]"></li>
                            <li class="h-12 w-12 rounded-3xl bg-white/10 absolute left-[25%]"></li>
                            <li class="h-36 w-36 rounded-3xl bg-white/10 absolute left-[90%]"></li>
                        </ul>

                        <div class="grid grid-cols-12 content-center h-screen overflow-auto term_scroll">
                            <div class="col-span-8 col-start-3">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide" style="height: 900px">
                                        <h1 class="text-center text-white">収納代行業務提携契約書</h1>
                                        <p class="mt-4 text-white" style="font-size:18px">
                                            お客様は、以下の条件のもと、本規約に同意した上で当社に対して業務を委託するものとします。</p>
                                        <h3 class="mt-4 text-white">
                                            利用規約について
                                        </h3>
                                        <ul class="px-8 py-4 text-white" style="font-size:15px">
                                            <li style="list-style-type: circle;">お客様は、本利用規約に必ず同意頂き、ご利用ください。</li>
                                            <li style="list-style-type: circle;">
                                                当社は、お客様の承諾を得ることなく、本規約の内容を改定することができるものとし、お客様はこれを承諾するものとします。本規約が改定された後の本サービスの提供条件は、改定後の本規約の条件によるものとします。
                                            </li>
                                            <li style="list-style-type: circle;">
                                                当社は、本規約を改定するときは、その内容について当社所定の方法によりお客様に通知します。</li>
                                            <li style="list-style-type: circle;">
                                                前２項に定める本規約の改定の効力は、当社が前項により通知を行った時点から生じるものとします。本規約の内容の改定を承諾しないお客様については、本サービスを利用できないものとします。
                                            </li>
                                        </ul>
                                        <h3 class="mt-4 text-white">
                                            第１条　目的
                                        </h3>
                                        <p class="mt-4 text-white" style="font-size:18px">
                                            本契約は、当社からお客様に対し第２条の委託業務内容をはじめとする各種業務提携に関する取り決めを定めるものである。</p>
                                        <h3 class="mt-4 text-white">
                                            第２条　委託業務
                                        </h3>
                                        <ul class="px-8 py-4 text-white" style="font-size:18px">
                                            <li style="list-style-type: number;">
                                                お客様は、当社に対し、お客様又はお客様の指定する第三者が行うサービスの顧客（以下「顧客等」という。）から受け取る代金等（以下「収納金」という。）の収納事務（以下「本収納業務」という。）を委託し、当社はこれを受託する。
                                            </li>
                                            <li style="list-style-type: number;">
                                                本収納業務とは、当社が、収納金の収納を行うことに関して、以下の各号に規定する業務のことをいう。
                                                <ul class="px-8 py-4 text-white" style="font-size:14px">
                                                    <li style="list-style-type: circle;">
                                                        当社において収納された収納金の取りまとめ及び収納金相当額のお客様の指定する金融機関への払込み。</li>
                                                    <li style="list-style-type: circle;">
                                                        当社において収納された収納金に関する情報の取りまとめ及びお客様への共有。</li>
                                                    <li style="list-style-type: circle;">収納事務にかかる報告。</li>
                                                    <li style="list-style-type: circle;">前各号に付随する業務で、お客様と当社とが合意した業務。
                                                    </li>
                                                </ul>
                                            </li>
                                            <li style="list-style-type: number;">
                                                当社からお客様に対する収納金の締日及び払込みの時期は以下のとおりとする。
                                                <ul class="px-8 py-4 text-white" style="font-size:14px">
                                                    <li style="list-style-type: circle;">締日：お客様及び当社が別途定める。</li>
                                                    <li style="list-style-type: circle;">払込時期：お客様及び当社が別途定める。</li>
                                                    <li style="list-style-type: circle;">
                                                        払込方法：銀行振込の方法による場合にはお客様が指定する口座にお客様が指定する法定通貨で振込む。暗号資産の送信による場合にはお客様が指定するアドレスに送信する。
                                                    </li>
                                                    <li style="list-style-type: circle;">払込方法の決定：お客様及び当社が別途定める。</li>
                                                </ul>
                                            </li>
                                            <li style="list-style-type: number;">
                                                当社からお客様に対する収納事務にかかる報告の方法をはじめとする、当社が履行する本収納業務の詳細な態様については、別途お客様当社協議の上で確定するものとする。
                                            </li>
                                            <li style="list-style-type: number;">
                                                お客様及び当社は、本収納業務には資金移動業並びにその他行政上の許可及び届出等の手続が必要となる業務は含まれないことを確認する。</li>
                                        </ul>

                                        <h3 class="mt-4 text-white">
                                            第３条　委託料
                                        </h3>
                                        <ul class="px-8 py-4 text-white" style="font-size:18px">
                                            <li style="list-style-type: number;">お客様が本収納業務に対して支払う委託料は、収納金の10％（税込）とする。
                                            </li>
                                            <li style="list-style-type: number;">
                                                当社は、振り込まれる収納金から当社の委託料及び払込にかかる諸経費を差し引いた後、本収納業務を行うものとする。</li>
                                        </ul>

                                        <h3 class="mt-4 text-white">
                                            第４条　確認事項
                                        </h3>
                                        <ul class="px-8 py-4 text-white" style="font-size:18px">
                                            <li style="list-style-type: number;">
                                                お客様及び当社は、当社が収納金相当額その他金銭を暗号資産の送信によって支払う場合であっても、当社が自らの判断と責任で暗号資産に交換し、又は暗号資産で支払うものであることを確認する。
                                            </li>
                                            <li style="list-style-type: number;">
                                                お客様及び当社は、当社がお客様の指示に従って暗号資産に交換するなど、暗号資産交換業を行うものではないことを確認する。</li>
                                            <li style="list-style-type: number;">
                                                お客様及び当社は、暗号資産をお客様の指定するアドレスに送信後、お客様に送信トランザクションIDを開示し、基準としたレートに関する情報を通知した後は、当社の責務は一切ないことを確認する。
                                            </li>
                                            <li style="list-style-type: number;">
                                                お客様及び当社は、本契約に規定される業務には、資金移動業並びにその他行政上の許可及び届出等の手続が必要となる業務は含まれないこと、及び、当社は独立の事業者として本契約に規定される業務を実行するものであることを確認する。
                                            </li>
                                        </ul>

                                        <h3 class="mt-4 text-white">
                                            第５条　お客様の顧客等との関係
                                        </h3>
                                        <ul class="px-8 py-4 text-white" style="font-size:18px">
                                            <li style="list-style-type: number;">
                                                顧客等に対する代金支払請求、顧客等からのお客様又はお客様の指定する第三者のサービスに関する請求その他お客様と顧客等との間の一切の紛争は、お客様が自らの責任をもって対応するものとし、当社はなんらの責任も負わない。
                                            </li>
                                            <li style="list-style-type: number;">
                                                お客様による誤った金額の通知、お客様の顧客による二重払いをはじめとする、お客様又は顧客等の責めに帰すべき返金業務等については、お客様が自らの責任をもって対応するものとし、当社は一切関与しない。
                                            </li>
                                            <li style="list-style-type: number;">
                                                お客様は、顧客等との間の紛争又は返金義務に関して誠実に対応することを約する。当社は、前２項に規定される場合をはじめとするお客様と顧客等との間の紛争等の解決に協力するものとする。
                                            </li>
                                        </ul>

                                        <h3 class="mt-4 text-white">
                                            第６条　表明保証等
                                        </h3>
                                        <ul class="px-8 py-4 text-white" style="font-size:18px">
                                            <li style="list-style-type: number;">お客様及び当社は、以下の各号に規定する事項を表明し、保証する。
                                                <ul class="px-8 py-4 text-white" style="font-size:14px">
                                                    <li style="list-style-type: circle;">
                                                        本契約に関連する事項について、相手方に対して虚偽の事実を申告していないこと。</li>
                                                    <li style="list-style-type: circle;">
                                                        顧客等をはじめとする第三者から、収納金等に関する苦情又は照会を受けた場合には、お客様又はお客様の指定する第三者が、その負担において誠実に対応すること。
                                                    </li>
                                                    <li style="list-style-type: circle;">
                                                        相手方に対して知らせる連絡先が、遅滞なく連絡を取ることができるものであり、変更があった場合には速やかに相手方に対して通知すること。
                                                    </li>
                                                </ul>
                                            </li>

                                            <li style="list-style-type: number;">
                                                収納金の全部または一部に、お客様及び当社が把握し得ない詐欺等の犯罪性資金または捜査当局の捜査対象となる資金が含まれていたことにより、当社の口座が凍結された場合やその他収納金の払出しが不能となった場合、当社はお客様に対して収納金相当額を払い込む義務を負わない。また、この場合にお客様は、当社の口座の凍結解除をはじめとして収納金の払出しが可能になるための協力をおこなう。
                                            </li>
                                        </ul>

                                        <h3 class="mt-4 text-white">
                                            第７条　収納代行
                                        </h3>
                                        <ul class="px-8 py-4 text-white" style="font-size:18px">
                                            <li style="list-style-type: number;">
                                                本件は、収納代行を委託するものであり、お客様及び当社とも「為替取引」に該当しないことを確認する。また、資金移動業などの法律上の登録（行政上の登録も含む）が必要ないことを相互に確認する。
                                            </li>
                                            <li style="list-style-type: number;">
                                                お客様が指定する顧客が、当社に対して送金し、当社がこれを受領した時点で、当該顧客のお客様に対する債務は消滅するものとする。お客様は理解した上で、これを同意する。
                                            </li>
                                            <li style="list-style-type: number;">
                                                お客様は当社に対して、お客様の業務は法令上に抵触、違反するものはないこと、コンプライアンス体制を遵守していることを保証する。</li>
                                        </ul>

                                        <h3 class="mt-4 text-white">
                                            第８条　再委託等の制限
                                        </h3>
                                        <ul class="px-8 py-4 text-white" style="font-size:18px">
                                            <li style="list-style-type: number;">
                                                当社は、お客様の事前の書面（電子書面電磁的記録を含む。以下同じ）による承諾がない限り、本業務の全部又は一部を第三者に委託してはならない。
                                            </li>
                                            <li style="list-style-type: number;">
                                                当社がお客様の事前承諾を得て本業務を第三者に再委託する場合、当社は、本契約及び個別契約に基づく当社の義務を当該第三者に遵守させるとともに、当該第三者による本業務の遂行に係る一切の行為に関して、当社が為したものとして、お客様に対し、一切の責任を負う。
                                            </li>
                                        </ul>

                                        <h3 class="mt-4 text-white">
                                        第９条　有効期間
                                        </h3>
                                        <p class="mt-4 text-white" style="font-size:18px">
                                        本契約の有効期間は本締結日から１年間とし、本契約当事者が有効期間満了までに本契約を終了させる旨の意思表示を行わない場合には、本契約は同内容にて更新され、その後も同様とする。</p>
                                        
                                        <h3 class="mt-4 text-white">
                                        第１０条　解除
                                        </h3>
                                        <ul class="px-8 py-4 text-white" style="font-size:18px">
                                            <li style="list-style-type: number;">
                                                お客様又は当社が次の各号の一つに該当した場合、相手方は催告及び通知を要しないで本契約を解除することができる。
                                                <ul class="px-8 py-4 text-white" style="font-size:14px">
                                                    <li style="list-style-type: circle;">委託料等金銭の支払を１回でも遅滞したとき。</li>
                                                    <li style="list-style-type: circle;">
                                                        小切手若しくは手形の不渡りを１回でも発生させたとき、その他支払を停止したとき。</li>
                                                    <li style="list-style-type: circle;">
                                                        仮差押、仮処分、強制執行、競売の申立若しくは公租公課の滞納処分や保全差押を受けたとき。</li>
                                                    <li style="list-style-type: circle;">
                                                        民事再生、倒産、会社更生若しくは特別清算、その他類似の手続の申し立てがあったとき。</li>
                                                    <li style="list-style-type: circle;">
                                                        事業の廃止若しくは解散の決議をし、又は官公庁からの業務停止等業務継続不能の処分を受けたとき。</li>
                                                    <li style="list-style-type: circle;">
                                                        資本の減少、事業の全部若しくは重要な一部の譲渡、その他資産、信用若しくは事業に重大な変更を生じ、又はその決議をし、あるいは経営が悪化し、又はその恐れがあると当社が認めるとき。
                                                    </li>
                                                    <li style="list-style-type: circle;">
                                                        本契約以外のお客様に対する金銭債務の支払いを１回でも怠ったとき。</li>
                                                    <li style="list-style-type: circle;">
                                                        本契約の各条項、お客様・当社間のその他の契約条項又は法令等の一つにでも違反したとき。</li>
                                                    <li style="list-style-type: circle;">
                                                        自ら又は第三者を利用して、暴力的行為、詐欺、脅迫的言動、偽計又は威力を用いた業務望海行為等の不当な行為又は公序良俗に反する行為をしたとき。
                                                    </li>
                                                    <li style="list-style-type: circle;">その他本契約の継続が適切ではないとお客様が判断したとき。
                                                    </li>
                                                </ul>
                                            </li>
                                            <li style="list-style-type: number;">
                                                前項の規定は、解除をした当事者から相手方に対する損害賠償請求を妨げるものではない。</li>
                                        </ul>

                                        <h3 class="mt-4 text-white">
                                            第１１条　秘密保持義務
                                        </h3>
                                        <ul class="px-8 py-4 text-white" style="font-size:18px">
                                            <li style="list-style-type: number;">
                                                お客様及び当社は、本契約に関連して取得した一切情報を、機密として保持し、相手方の事前の同意なく第三者に開示してはならず、また本契約を履行する目的以外の目的に使用してはならない。但し、以下の情報は、かかる機密保持義務の対象外とする。
                                                <ul class="px-8 py-4 text-white" style="font-size:14px">
                                                    <li style="list-style-type: circle;">
                                                        相手方から開示を受ける前に既に自ら保有し、又は第三者から秘密保持の義務を負うことなく入手していた情報。</li>
                                                    <li style="list-style-type: circle;">相手方から開示を受ける前に既に公知又は公用となっていた情報。
                                                    </li>
                                                    <li style="list-style-type: circle;">相手方から開示を受けた後に自らの責によらず公知となった情報。
                                                    </li>
                                                    <li style="list-style-type: circle;">
                                                        相手方から開示を受けた後に、正当な権限を有する第三者から、秘密保持の義務を負うことなく入手した情報。</li>
                                                </ul>
                                            </li>
                                            <li style="list-style-type: number;">
                                                本条第１項の規定にかかわらず、お客様及び当社は、その弁護士、公認会計士、税理士、ファイナンシャル・アドバイザーその他の外部専門家に対して、最小限の範囲で機密情報を開示することができる。なお、弁護士等、法律上の守秘義務を負っている者以外に開示する場合には、本条と同様の守秘義務を課した上で開示するものとする。
                                            </li>
                                            <li style="list-style-type: number;">
                                                本条第１項の規定にかかわらず、お客様及び当社は、法令による公表が義務づけられる場合又は司法・行政機関の判断により機密情報の開示又は公表が請求された場合には、当該法令又は司法・行政機関の判断において要求される範囲で機密情報を開示又は公表することができるものとする。この場合、当該開示又は公表を行う者及びその内容を、法令又は司法・行政機関の判断に反しない限り、お客様に対して事前に通知し、両当事者間でその内容、時期及び方法について協議するものとし、法令又は司法・行政機関の判断に反するためにかかる事前の通知を行えなかった場合には、事後速やかに通知するものとする。
                                            </li>
                                        </ul>

                                        <h3 class="mt-4 text-white">
                                            第１２条　損害賠償
                                        </h3>
                                        <p class="mt-4 text-white" style="font-size:18px">
                                            お客様及び当社は、本契約に基づく義務の違反に起因又は関連して相手方が被った損害について、法律の定めに従って賠償する。</p>

                                        <h3 class="mt-4 text-white">
                                            第１３条　譲渡禁止
                                        </h3>
                                        <ul class="px-8 py-4 text-white" style="font-size:18px">
                                            <li style="list-style-type: number;">
                                                お客様は、当社の事前の書面による同意を取得した場合を除き、本契約及び本契約に基づく権利又は義務の全部又は一部について、譲渡、担保設定その他の処分を行ってはならない。
                                            </li>
                                            <li style="list-style-type: number;">
                                                当社は、お客様に事前に通知することにより、本契約及び本契約に基づく権利又は義務の全部又は一部を譲渡、担保設定その他の処分を行うことができる。
                                            </li>
                                        </ul>

                                        <h3 class="mt-4 text-white">
                                            第１４条　反社会的勢力の排除
                                        </h3>
                                        <ul class="px-8 py-4 text-white" style="font-size:18px">
                                            <li style="list-style-type: number;">
                                                お客様及び当社は、相手方に対し、現在又は過去において、自己並びに自己の役員及び自己の経営を実質的に支配している者が、暴力団、暴力団員、暴力団準構成員、暴力団関係企業、総会屋
                                                等、社会運動等標ぼうゴロ、特殊知能暴力集団その他これらに準ずる者（以下「反社会的勢
                                                力」という。）に該当しないこと、及び次の各号のいずれにも該当しないことを表明し、かつ将来にわたっても該当しないことを確約する。
                                                <ul class="px-8 py-4 text-white" style="font-size:14px">
                                                    <li style="list-style-type: circle;">反社会的勢力が経営を支配していると認められる関係を有すること。
                                                    </li>
                                                    <li style="list-style-type: circle;">
                                                        反社会的勢力が経営に実質的に関与していると認められる関係を有すること。</li>
                                                    <li style="list-style-type: circle;">
                                                        自己若しくは第三者の不正の利益を図る目的又は第三者に損害を加える目的をもってするなど、不当に反社会的勢力を利用していると認められる関係を有すること。
                                                    </li>
                                                    <li style="list-style-type: circle;">
                                                        反社会的勢力に対して資金等を提供し、又は便宜を供与するなどの関与をしていると認められる関係を有すること。</li>
                                                    <li style="list-style-type: circle;">
                                                        役員又は経営に実質的に関与している者が反社会的勢力と社会的に非難されるべき関係を有すること。</li>
                                                </ul>
                                            </li>
                                            <li style="list-style-type: number;">
                                                お客様及び当社は、自ら又は第三者を利用して、次の各号のいずれか一に該当する行為を行わないことを確約する。
                                                <ul class="px-8 py-4 text-white" style="font-size:14px">
                                                    <li style="list-style-type: circle;">暴力的な要求行為。</li>
                                                    <li style="list-style-type: circle;">法的な責任を超えた不当な要求行為。</li>
                                                    <li style="list-style-type: circle;">取引に関して、脅迫的な言動をし、又は暴力を用いる行為。
                                                    </li>
                                                    <li style="list-style-type: circle;">
                                                        風説を流布し、偽計を用い又は威力を用いて、相手方の信用を毀損し、又は相手方の業務を妨害する行為。</li>
                                                    <li style="list-style-type: circle;">その他前各号に準ずる行為。</li>
                                                </ul>
                                            </li>
                                            <li style="list-style-type: number;">
                                                お客様又は当社は、相手方が前２項のいずれか一に違反した場合、何等の催告を要することなく、直ちに本契約を解除することができるものとする。</li>
                                            <li style="list-style-type: number;">
                                                お客様又は当社は、前項に基づく解除の場合、解除された相手方に損害が生じても、これを賠償する一切の責任を負わない。</li>
                                        </ul>

                                        <h3 class="mt-4 text-white">
                                            第１５条　費用負担
                                        </h3>
                                        <p class="mt-4 text-white" style="font-size:18px">
                                            本契約において別段の定めがある場合又は事前に当事者間で同意した場合を除き、本契約の履行にかかる費用については、当事者双方が負担する。
                                        </p>

                                        <h3 class="mt-4 text-white">
                                            第１６条　通知
                                        </h3>
                                        <ul class="px-8 py-4 text-white" style="font-size:18px">
                                            <li style="list-style-type: number;">
                                                お客様及び当社は、相互に通知（本契約における「通知」の文言に限ることなく相手方に連絡を行う場合をいう。）をする場合には、書面に限らず電磁的記録によって行うことを承諾する。
                                            </li>
                                            <li style="list-style-type: number;">
                                                お客様及び当社は、本契約末尾に記載された住所を変更した場合には速やかに通知するものとする。また、同通知が行われることがなかった場合には、相手方に書面の郵送を行うときには、本契約末尾に記載された住所又はその直近で通知が行われた住所宛てに郵送することで足りるものとし、それが不着になったことの責任は、通知を行わなかったものが負うものとする。
                                            </li>
                                        </ul>

                                        <h3 class="mt-4 text-white">
                                            第１７条　誠実協議
                                        </h3>
                                        <p class="mt-4 text-white" style="font-size:18px">
                                            本契約の各条項の解釈又は本契約に定めのない条項について疑義が生じたときは、各当事者は、誠意をもって協議するものとする。
                                        </p>

                                        <h3 class="mt-4 text-white">
                                            第１８条　裁判管轄
                                        </h3>
                                        <p class="mt-4 text-white" style="font-size:18px">
                                            本契約の当事者は、本契約から生ずる権利義務に関する訴訟については、東京地方裁判所を第一審の専属的管轄裁判所とすることに合意する。
                                        </p>

                                        <h3 class="mt-4 text-white">
                                            第１９条　不可抗力
                                        </h3>
                                        <p class="mt-4 text-white" style="font-size:18px">
                                            本契約のいずれかの部分の履行が、政府の規制、戦争、市民の騒動、暴動、ストライキ、ロックアウト、輸送スペースの不足、及び台風、洪水、火災などの当事者の制御が及ばないその他の同様の不可抗力事由によって、長期間にわたって妨害される場合、お客様及び当社は、かかる期間における本契約の履行の遅延又は失敗について責任を負わないものとする。また、そのような妨害状況が6か月を超えて続く場合、そのいずれかの当事者は、他方の当事者に書面で通知することにより、本契約を直ちに終了する権利を有するものとする。
                                        </p>
                                        <h3 class="mt-4 text-white">
                                            　
                                        </h3>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="fixed z-40 right-0 m-4 flex flex-col bottom-10 animate-bounce">
                            <a href="/" id=""
                                class="px-3.5 py-4 z-40 text-16 transition-all duration-300 ease-linear text-[#000] bg-white hover:bg-white-600 rounded-full font-medium">
                                <span class="">戻る</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="language-selector">
        <select id="language-dropdown">
            <option value="ja">日本語</option>
            <option value="en">English</option>
            <option value="sp">Español</option>
            <option value="ru">Русский</option>
            <option value="ch">中文</option>
        </select>
    </div>
    <script src="{{ asset('assets/libs/@popperjs/core/umd/popper.min.js') }}"></script>
    <script src="{{ asset('assets/libs/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('assets/libs/metismenujs/metismenujs.min.js') }}"></script>
    <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/libs/feather-icons/feather.min.js') }}"></script>

    <script src="{{ asset('assets/libs/swiper/swiper-bundle.min.js') }}"></script>

    <script src="{{ asset('assets/js/pages/useTerm.js') }}"></script>

    <script src="{{ asset('assets/js/app.js') }}"></script>
</body>

</html>