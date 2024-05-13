<!DOCTYPE html>
<html lang="ch" dir="ltr">

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
                                        <h1 class="text-center text-white">支付收款代理业务合作合约书</h1>
                                        <p class="mt-4 text-white" style="font-size:18px">
                                        用户在以下条件下，同意本规定的前提下委托公司进行业务。</p>
                                        <h3 class="mt-4 text-white">
                                        关于使用条款
                                        </h3>
                                        <ul class="px-8 py-4 text-white" style="font-size:16px">
                                            <li style="list-style-type: circle;">用户必须同意并遵守本使用条款。</li>
                                            <li style="list-style-type: circle;">
                                            本公司有权在未经用户同意的情况下修改本合约内容，用户同意接受修改后的合约内容。 本条款修订后提供本服务的条件以修订后的条款为准。
                                            </li>
                                            <li style="list-style-type: circle;">
                                            本公司在修改本合约时，将通过公司规定的方式通知用户。</li>
                                            <li style="list-style-type: circle;">
                                            前两款规定的条款的修改自公司根据前款规定发出通知之日起生效。 不同意本协议条款修改的用户将无法使用本服务。
                                            </li>
                                        </ul>
                                        <h3 class="mt-4 text-white">
                                        第一条　目的
                                        </h3>
                                        <p class="mt-4 text-white" style="font-size:18px">
                                        本合约规定了我公司与用户之间有关各种业务联盟的安排，包括第 2 条中所述的外包工作的细节。
                                        <h3 class="mt-4 text-white">
                                        第二条   委托业务
                                        </h3>
                                        <ul class="px-8 py-4 text-white" style="font-size:18px">
                                            <li style="list-style-type: number;">
                                            用户委托本公司代理收款业务，包括由客户或用户指定的第三方提供的服务的客户（以下简称为「客户等」）支付的款项等（以下简称为「收款款项」）的收款业务（以下简称为「本收款业务」），本公司将接受该委托。
                                            </li>
                                            <li style="list-style-type: number;">
                                            本收款业务是指本公司就收取款项进行收款工作而进行的业务，具体包括以下各项规定的事务。
                                                <ul class="px-8 py-4 text-white" style="font-size:16px">
                                                    <li style="list-style-type: circle;">
                                                    将本公司收取的款项进行汇总，并按照用户指定将相应金额支付给金融机构。</li>
                                                    <li style="list-style-type: circle;">
                                                    汇总与本公司收取的款项相关的信息，并与用户共享。</li>
                                                    <li style="list-style-type: circle;">提交有关收款业务的报告。</li>
                                                    <li style="list-style-type: circle;">根据前述各项，执行由用户与本公司共同商定的附带业务。
                                                    </li>
                                                </ul>
                                            </li>
                                            <li style="list-style-type: number;">
                                            公司向用户报告收款的截止日期和付款日期如下：
                                                <ul class="px-8 py-4 text-white" style="font-size:16px">
                                                    <li style="list-style-type: circle;">截止日期：  由用户和公司另行规定。</li>
                                                    <li style="list-style-type: circle;">付款日期：  由用户和公司另行规定。</li>
                                                    <li style="list-style-type: circle;">付款方式：  如果用户选择使用银行转账方式进行支付，我们公司将按照用户指定的账户和法定货币进行转账，确保款项安全快速到达目标账户。对于用户选择使用加密货币进行支付的情况，我们将发送款项至用户指定的钱包地址。</li>
                                                    <li style="list-style-type: circle;">付款方式的决定：  由用户和公司另行规定。</li>
                                                </ul>
                                            </li>
                                            <li style="list-style-type: number;">
                                            关于与向用户进行收款事务相关的报告方式等本公司履行收款业务的详细方式，应在与用户进行双方协商后确定。
                                            </li>
                                            <li style="list-style-type: number;">
                                            用户和本公司确认，本收款业务不涉及资金移动业务以及其他行政许可和申报手续的业务事项。</li>
                                        </ul>

                                        <h3 class="mt-4 text-white">
                                        第３条    委托费用
                                        </h3>
                                        <ul class="px-8 py-4 text-white" style="font-size:18px">
                                            <li style="list-style-type: number;">用户应支付给本公司的受托费用为收款金额的10％（含税）。
                                            </li>
                                            <li style="list-style-type: number;">
                                            本公司将从收到的收款金额中扣除委托费用和相关支付费用后进行本收款业务的处理。</li>
                                        </ul>

                                        <h3 class="mt-4 text-white">
                                        第４条    确认事项
                                        </h3>
                                        <ul class="px-8 py-4 text-white" style="font-size:18px">
                                            <li style="list-style-type: number;">
                                            用户和本公司确认，即使本公司通过加密货币的发送支付相应金额或其他货币，该支付是由本公司根据自己的判断和责任进行加密货币的兑换或支付。
                                            </li>
                                            <li style="list-style-type: number;">
                                            用户和本公司确认，本公司不从事根据用户指示进行的加密货币交换等操作，即不进行暗号资产交换业务。</li>
                                            <li style="list-style-type: number;">
                                            用户和本公司确认，在将加密资产发送到用户指定的地址后，本公司将披露发送的交易ID并通知有关基准汇率的信息，之后本公司不承担任何责任。
                                            </li>
                                            <li style="list-style-type: number;">
                                            用户和本公司确认，本合约规定的业务不包括资金移动业务以及其他行政许可和申报手续的业务。同时，本公司作为独立运营者执行本协议规定的业务。
                                            </li>
                                        </ul>

                                        <h3 class="mt-4 text-white">
                                        第５条    用户与客户等的关系
                                        </h3>
                                        <ul class="px-8 py-4 text-white" style="font-size:18px">
                                            <li style="list-style-type: number;">
                                            关于向客户等提出的代金支付要求、来自客户等的与客户或用户指定第三方服务相关的索赔，以及用户与顾客等之间的所有纠纷，用户应自行负责处理，本公司不承担任何责任。
                                            </li>
                                            <li style="list-style-type: number;">
                                            关于客户错误金额通知、客户或客户等责任的退款事务等，客户应自负责任予以处理，公司不参与其中。
                                            </li>
                                            <li style="list-style-type: number;">
                                            用户承诺诚实处理与客户等之间的纠纷或退款义务。公司将协助解决用户与客户等之间的争议等，包括前两款规定的情况。
                                            </li>
                                        </ul>

                                        <h3 class="mt-4 text-white">
                                        第６条    表明保证等
                                        </h3>
                                        <ul class="px-8 py-4 text-white" style="font-size:18px">
                                            <li style="list-style-type: number;">用户和本公司声明并保证以下各项事项：
                                            <ul class="px-8 py-4 text-white" style="font-size:16px">
                                                    <li style="list-style-type: circle;">
                                                    在涉及本合约事项时，未向对方虚假陈述任何事实。</li>
                                                    <li style="list-style-type: circle;">
                                                    若收到与收款等相关的投诉或查询，包括来自客户等第三方的投诉或查询，客户或用户指定的第三方应以自己的责任诚实地进行处理。
                                                    </li>
                                                    <li style="list-style-type: circle;">
                                                    提供给对方的联系方式能够及时联系，并在发生变更时立即通知对方。
                                                    </li>
                                                </ul>
                                            </li>
                                            <li style="list-style-type: number;">
                                            若因收款中包含用户和本公司无法察觉的涉及欺诈等犯罪性资金或正在被调查机关调查的资金，导致本公司账户被冻结或其他无法支付收款的情况，本公司不承担向用户支付相应收款金额的义务。同时，在此情况下，用户应协助解冻本公司账户以及使收款可支付的协作措施。
                                            </li>
                                        </ul>

                                        <h3 class="mt-4 text-white">
                                        第７条    收款代行
                                        </h3>
                                        <ul class="px-8 py-4 text-white" style="font-size:18px">
                                            <li style="list-style-type: number;">
                                            本合约旨在委托公司进行收款代理。用户和公司均确认此事项不属于"為替取引"（外汇交易）。双方相互确认无需进行法律上的注册（包括行政注册）以从事资金移动业务等活动。
                                            </li>
                                            <li style="list-style-type: number;">
                                            当用户指定的顾客向本公司汇款并且本公司接收到款项时，该顾客对用户的债务将会被解除。用户在理解的基础上同意此事项。
                                            </li>
                                            <li style="list-style-type: number;">
                                            用户保证其业务符合法律规定，不存在违反法律的行为，并且承诺遵守合规体系。
                                            </li>
                                        </ul>

                                        <h3 class="mt-4 text-white">
                                        第８条    再委托等的限制
                                        </h3>
                                        <ul class="px-8 py-4 text-white" style="font-size:18px">
                                            <li style="list-style-type: number;">
                                            除非经过用户事先书面同意（包括电子书面和电子记录），否则本公司不得将本业务的全部或部分委托给第三方进行。
                                            </li>
                                            <li style="list-style-type: number;">
                                            在获得用户事先同意并将本业务再委托给第三方时，公司将确保第三方遵守本合约和基于个别合约的公司义务，并将第三方的一切行为视为公司自行执行的行为，公司将对用户承担一切责任。
                                            </li>
                                        </ul>

                                        <h3 class="mt-4 text-white">
                                        第９条    有效期限
                                        </h3>
                                        <p class="mt-4 text-white" style="font-size:18px">
                                        本合约的有效期限自签署之日起为一年，若在有效期满之前，本合约当事方未进行终止本合约的意思表示，则本合约将以相同内容进行更新，并继续适用。
                                        </p>
                                        
                                        <h3 class="mt-4 text-white">
                                        第１０条    解 除
                                        </h3>
                                        <ul class="px-8 py-4 text-white" style="font-size:18px">
                                            <li style="list-style-type: number;">
                                            如果用户或公司符合以下任一情况，对方可在不需要提前通知的情况下解除本合约：
                                                <ul class="px-8 py-4 text-white" style="font-size:16px">
                                                    <li style="list-style-type: circle;">未按时支付委托费等款项。</li>
                                                    <li style="list-style-type: circle;">
                                                    当发生一次以上支票或汇票不兑现的情况，或者停止支付其他款项时。</li>
                                                    <li style="list-style-type: circle;">
                                                    发生临时扣押、临时处分、强制执行、拍卖的申请，或者发生对财产的扣押处分、滞纳税款处理。</li>
                                                    <li style="list-style-type: circle;">
                                                    提出民事再生、破产、公司更生或特别清算等类似申请。
                                                    </li>
                                                    <li style="list-style-type: circle;">
                                                    决定停止业务或解散，或者受到政府机关的停业等无法继续业务的处理。</li>
                                                    <li style="list-style-type: circle;">
                                                    公司资本减少，业务全部或重要部分转让，或者资产、信用或业务发生重大变化，或公司认为存在经营恶化或可能恶化的情况。</li>
                                                    <li style="list-style-type: circle;">
                                                    未能按时支付除本合约外对其他客户的金钱债务。
                                                    </li>
                                                    <li style="list-style-type: circle;">
                                                    违反本合约的任何条款，用户和公司之间的其他合约条款或法律法规。
                                                    </li>
                                                    <li style="list-style-type: circle;">
                                                    进行不当行为或违反公序良俗，包括使用暴力、欺诈、威胁言行、欺骗或利用权力进行业务的不当行为等。
                                                    </li>
                                                    <li style="list-style-type: circle;">
                                                    用户判断本合约的继续不适当的其他情况。
                                                    </li>
                                                </ul>
                                            </li>
                                            <li style="list-style-type: number;">
                                            前款的规定不妨碍解除一方向对方提出损害赔偿要求。</li>
                                        </ul>

                                        <h3 class="mt-4 text-white">
                                        第１１条    秘密保持義務
                                        </h3>
                                        <ul class="px-8 py-4 text-white" style="font-size:18px">
                                            <li style="list-style-type: number;">
                                            用户和本公司应将与本协议相关的所有信息视为机密，并在未经对方事先同意的情况下，不得向第三方披露或将其用于除履行本协议目的以外的任何目的。但以下信息不适用于此保密义务：
                                                <ul class="px-8 py-4 text-white" style="font-size:16px">
                                                    <li style="list-style-type: circle;">
                                                    在接收对方披露之前，已经自行持有或未承担秘密保密义务地从第三方获取的信息。</li>
                                                    <li style="list-style-type: circle;">在接收对方披露之前，已经成为公众知晓或公共领域的信息。
                                                    </li>
                                                    <li style="list-style-type: circle;">在接收对方披露之后，未经用户自身过失而成为公众知晓的信息。
                                                    </li>
                                                    <li style="list-style-type: circle;">
                                                    在接收对方披露之后，通过拥有合法授权的第三方而无需承担秘密保密义务地获取的信息。</li>
                                                </ul>
                                            </li>
                                            <li style="list-style-type: number;">
                                            尽管前款的规定，用户和本公司可以在最小范围内向其律师、注册会计师、税务顾问、金融顾问或其他外部专家披露机密信息。然而，对于非承担法律保密义务的律师等人员的披露，应在施加与本条相同的保密义务的前提下进行披露。
                                            </li>
                                            <li style="list-style-type: number;">
                                            尽管前款的规定，如果根据法律规定或司法行政机关的判断，需要披露或公开机密信息，用户和本公司可以在符合法律规定或司法行政机关要求的范围内披露或公开机密信息。在这种情况下，除非违反法律规定或司法行政机关的判断，应事先通知用户并在双方之间协商披露或公开的内容、时间和方式。如果由于违反法律规定或司法行政机关的判断而无法进行此类事前通知，则应尽快事后通知。
                                            </li>
                                        </ul>

                                        <h3 class="mt-4 text-white">
                                        第１２条 损害赔偿
                                        </h3>
                                        <p class="mt-4 text-white" style="font-size:18px">
                                        用户和本公司应根据法律规定承担与违反本协议义务有关的、对对方造成的损害进行赔偿。</p>

                                        <h3 class="mt-4 text-white">
                                        第１３条    禁止转让
                                        </h3>
                                        <ul class="px-8 py-4 text-white" style="font-size:18px">
                                            <li style="list-style-type: number;">
                                            除非经当社事先书面同意，否则用户不得转让、设定担保或以其他方式处分本合约及其基于本合约产生的全部或部分权利或义务。
                                            </li>
                                            <li style="list-style-type: number;">
                                            公司可以通过提前通知用户的方式，转让、设定担保或以其他方式处置本合约及其基于本合约产生的全部或部分权利或义务。
                                            </li>
                                        </ul>

                                        <h3 class="mt-4 text-white">
                                        第１４条    排除反社会势力
                                        </h3>
                                        <ul class="px-8 py-4 text-white" style="font-size:18px">
                                            <li style="list-style-type: number;">
                                            用户和本公司向对方声明并保证，用户本人及其董事和高层管理人员在现在或过去没有与暴力团体、暴力团成员、暴力团候补成员、暴力团关联企业、社会运动等表面社会团体、特殊智能暴力集团或类似组织（以下简称"反社会势力"）有任何关联，也确保将来也不会有任何关联。用户和本公司还声明，他们不符合以下各项条件，并承诺将来也不会符合：
                                                <ul class="px-8 py-4 text-white" style="font-size:16px">
                                                    <li style="list-style-type: circle;">
                                                    存在与反社会势力实质支配经营的关系。
                                                    </li>
                                                    <li style="list-style-type: circle;">
                                                    存在与反社会势力实质参与经营的关系。</li>
                                                    <li style="list-style-type: circle;">
                                                    存在不当利用反社会势力谋取自己或第三方非法利益或对第三方造成损害的关系。</li>
                                                    <li style="list-style-type: circle;">
                                                    存在向反社会势力提供资金等，或与其有便利供给等参与关系。</li>
                                                    <li style="list-style-type: circle;">其他类似于上述行为的行为。</li>
                                                </ul>
                                            </li>
                                            <li style="list-style-type: number;">
                                            用户和本公司承诺不会通过自身或利用第三方进行以下任何一项行为：
                                                <ul class="px-8 py-4 text-white" style="font-size:16px">
                                                    <li style="list-style-type: circle;">暴力要求行为。</li>
                                                    <li style="list-style-type: circle;">超越法律责任的不当要求行为。</li>
                                                    <li style="list-style-type: circle;">在交易中使用威胁性言行或使用暴力的行为。
                                                    </li>
                                                    <li style="list-style-type: circle;">
                                                    散布谣言，使用欺骗手段或威胁力量，损害对方的信誉或干扰对方的业务。</li>
                                                    <li style="list-style-type: circle;">其他与前述各项类似的行为。</li>
                                                </ul>
                                            </li>
                                            <li style="list-style-type: number;">
                                            如果用户或本公司违反前述第2款的任何一项规定，对方可以立即解除本合约，无需任何催告。</li>
                                            <li style="list-style-type: number;">
                                            如果根据前款解除本合约，解除一方对被解除方造成损害，不承担任何赔偿责任。</li>
                                        </ul>

                                        <h3 class="mt-4 text-white">
                                        第１５条    费用负担 
                                        </h3>
                                        <p class="mt-4 text-white" style="font-size:18px">
                                        除非本合约另有规定或事先达成当事方同意，否则与本合约履行相关的费用由双方共同承担。
                                        </p>

                                        <h3 class="mt-4 text-white">
                                        第１６条    通 知
                                        </h3>
                                        <ul class="px-8 py-4 text-white" style="font-size:18px">
                                            <li style="list-style-type: number;">
                                            用户和本公司同意，在彼此之间进行通知（指向对方进行联系，不限于本合约中的"通知"一词）时，可以采用电子记录方式，而不仅限于书面形式。
                                            </li>
                                            <li style="list-style-type: number;">
                                            用户和本公司同意，如果他们更改了本合约末尾所列明的地址，应立即通知对方。此外，如果未进行此类通知，则在向对方发送书面邮件时，可将其寄至本合约末尾所列明的地址或最近一次通知所用地址，而无需另行通知。对于邮件未能送达的情况，由未进行通知的一方承担责任。
                                            </li>
                                        </ul>

                                        <h3 class="mt-4 text-white">
                                        第１７条   诚实协商
                                        </h3>
                                        <p class="mt-4 text-white" style="font-size:18px">
                                        如果对本合约的任何条款的解释或对于本合约中未规定的条款存在疑义，各当事方将诚意进行协商。
                                        </p>

                                        <h3 class="mt-4 text-white">
                                        第１８条    裁判管辖
                                        </h3>
                                        <p class="mt-4 text-white" style="font-size:18px">
                                        本合约当事方同意，对于与本合约所产生的权利义务相关的诉讼，将东京地方法院作为第一审专属管辖法院。
                                        </p>

                                        <h3 class="mt-4 text-white">
                                        第１９条    不可抗力
                                        </h3>
                                        <p class="mt-4 text-white" style="font-size:18px">
                                        如果本合约的任何部分因政府规制、战争、公民骚乱、暴动、罢工、工人封锁、交通空间短缺、台风、洪水、火灾等当事方无法控制的其他类似不可抗力事件长期受到干扰，导致本合约的履行在较长时间内延迟或失败，用户和本公司对于该期间的履行延迟或失败不承担责任。此外，如果此类干扰情况持续超过6个月，任何一方都有权以书面形式通知对方，立即终止本合约。
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
                                <span class="">后退</span>
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