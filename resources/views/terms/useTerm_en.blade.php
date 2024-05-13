<!DOCTYPE html>
<html lang="en" dir="ltr">

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
                                        <h1 class="text-center text-white">Payment Collection Agency Service Partnership Agreement</h1>
                                        <p class="mt-4 text-white" style="font-size:18px">
                                        The customer agrees to these terms and conditions and entrusts the work to us in accordance with the following conditions.</p>
                                        <h3 class="mt-4 text-white">
                                        About terms of use
                                        </h3>
                                        <ul class="px-8 py-4 text-white" style="font-size:16px">
                                            <li style="list-style-type: circle;">Customers must agree to these Terms of Use before use.</li>
                                            <li style="list-style-type: circle;">
                                            The company may revise the contents of these terms and conditions without the customer's consent, and the customer consents to this. After these Terms and Conditions are revised, the conditions for providing this service will be governed by the terms and conditions of these Terms and Conditions after revision.
                                            </li>
                                            <li style="list-style-type: circle;">
                                            When revising these terms and conditions, our company will notify customers of the contents through a method specified by our company.</li>
                                            <li style="list-style-type: circle;">
                                            The revision of these Terms and Conditions as set forth in the preceding two paragraphs shall take effect from the time our Company provides notification in accordance with the preceding paragraph. Customers who do not accept the revision of these Terms and Conditions will not be able to use this service.
                                            </li>
                                        </ul>
                                        <h3 class="mt-4 text-white">
                                        Article 1 Purpose
                                        </h3>
                                        <p class="mt-4 text-white" style="font-size:18px">
                                        This contract establishes agreements regarding various business partnerships between our company and the customer, including the details of the entrusted business in Article 2.</p>
                                        <h3 class="mt-4 text-white">
                                        Article 2 Entrusted tasks
                                        </h3>
                                        <ul class="px-8 py-4 text-white" style="font-size:18px">
                                            <li style="list-style-type: number;">
                                            Customers delegate to the company the task (hereinafter referred to as "payment collection service") of collecting payments (hereinafter referred to as "collectable payments")  from their clients or designated third parties (hereinafter referred to as "clients, etc."), and the company accepts this delegation.
                                            </li>
                                            <li style="list-style-type: number;">
                                            This payment collection service refers to the business stipulated in the following items regarding the collection of deposits by the Company.
                                                <ul class="px-8 py-4 text-white" style="font-size:16px">
                                                    <li style="list-style-type: circle;">
                                                    Organizing payments received from our company and paying an amount equivalent to the payments to a financial institution designated by the customer.</li>
                                                    <li style="list-style-type: circle;">
                                                    Organizing of information regarding the collected payments to our company and sharing with the customers.</li>
                                                    <li style="list-style-type: circle;">Reports related to payment collection service.</li>
                                                    <li style="list-style-type: circle;">The business accompanying the preceding items, which are agreed upon by the customer and our company.
                                                    </li>
                                                </ul>
                                            </li>
                                            <li style="list-style-type: number;">
                                            The closing date and timing of payment from the Company to the customer will be as follows.
                                                <ul class="px-8 py-4 text-white" style="font-size:16px">
                                                    <li style="list-style-type: circle;">Closing date:  Separately determined by the customer and our company.</li>
                                                    <li style="list-style-type: circle;">Payment period:  Separately determined by the customer and our company. </li>
                                                    <li style="list-style-type: circle;">Payment method:  If using the bank transfer method, the money will be transferred to the account specified by the customer in the legal currency specified by the customer.  In the case of sending crypto assets, it will be sent to the address specified by the customer.</li>
                                                    <li style="list-style-type: circle;">Deciding payment method:  Separately determined by the customer and our company.</li>
                                                </ul>
                                            </li>
                                            <li style="list-style-type: number;">
                                            The detailed aspects of the payment collection service performed by the Company, including the method of reporting from the Company to the customer regarding the payment collection service, will be determined through separate consultation between the customer and the Company.
                                            </li>
                                            <li style="list-style-type: number;">
                                            The customer and our company confirm that this payment collection service does not include <fund transfer business> or other tasks that require procedures such as administrative permission and reporting.</li>
                                        </ul>

                                        <h3 class="mt-4 text-white">
                                        Article 3 Consignment Fee
                                        </h3>
                                        <ul class="px-8 py-4 text-white" style="font-size:18px">
                                            <li style="list-style-type: number;">The consignment fee paid by the customer for this payment collection service is 10% (tax included) of the collected payment amount.
                                            </li>
                                            <li style="list-style-type: number;">
                                            Our company carries out this payment collection service after deducting our consignment fee and other expenses incurred in remittance from the collected payment amount.</li>
                                        </ul>

                                        <h3 class="mt-4 text-white">
                                        Article 4 Confirmation items
                                        </h3>
                                        <ul class="px-8 py-4 text-white" style="font-size:18px">
                                            <li style="list-style-type: number;">
                                            The customer and the company confirm that even if the company pays the amount equivalent to the income or other money by sending crypto assets, the company exchanges or pays with crypto assets at its own discretion and responsibility.
                                            </li>
                                            <li style="list-style-type: number;">
                                            The customer and the Company confirm that the Company does not engage in the business of exchanging crypto assets, such as exchanging crypto assets according to the customer's instructions.</li>
                                            <li style="list-style-type: number;">
                                            The customer and the Company confirm that after sending the crypto assets to the address specified by the customer, disclosing the sending transaction ID to the customer, and notifying the customer of information regarding the standard rate, the Company will not be responsible for the transaction.
                                            </li>
                                            <li style="list-style-type: number;">
                                            The customer and our company agree that the operations stipulated in this contract do not include <funds transfer services> or other operations that require procedures such as administrative permission and reporting, and that our company is an independent business operator. The Company confirms that it will carry out the work stipulated in this Contract.
                                            </li>
                                        </ul>

                                        <h3 class="mt-4 text-white">
                                        Article 5 Relationships between customers and their clients, etc.
                                        </h3>
                                        <ul class="px-8 py-4 text-white" style="font-size:18px">
                                            <li style="list-style-type: number;">
                                            The customer shall be solely responsible for any payment requests to clients or designated third parties related to services provided by the customer or designated third parties. Additionally, any disputes between the customer and clients or designated third parties shall be the sole responsibility of the customer, and our company shall bear no liability.
                                            </li>
                                            <li style="list-style-type: number;">
                                            In the case of notification of an incorrect amount by the customer, double payment by the customer's clients, refunds that must be returned to the customer or the clients, etc., the customer responds at his own responsibility, and our company does not participate in any way.
                                            </li>
                                            <li style="list-style-type: number;">
                                            The customer promises to respond faithfully to any disputes or refund obligations with the clients, etc. Our company will cooperate in resolving disputes, etc. with clients, etc., including the cases stipulated in the preceding two items.
                                            </li>
                                        </ul>

                                        <h3 class="mt-4 text-white">
                                        Article 6 Representations, warranties, etc.
                                        </h3>
                                        <ul class="px-8 py-4 text-white" style="font-size:18px">
                                            <li style="list-style-type: number;">The customer and our company represent and warrant the matters stipulated in the following items.
                                            <ul class="px-8 py-4 text-white" style="font-size:16px">
                                                    <li style="list-style-type: circle;">
                                                    You have not made any false reports to the other party regarding matters related to this contract.</li>
                                                    <li style="list-style-type: circle;">
                                                    If we receive a complaint or inquiry regarding collected payment etc. from a third party such as a clients, the customer or the third party designated by the customer will respond in good faith at their own expense.
                                                    </li>
                                                    <li style="list-style-type: circle;">
                                                    The contact information provided to the other party must be one that can be contacted without delay, and if there is any change, the other party must be notified promptly.
                                                    </li>
                                                </ul>
                                            </li>
                                            <li style="list-style-type: number;">
                                            If the Company's account is frozen because all or part of the received money contains criminal funds such as fraud that are unknown to the customer or the Company, or funds that are the subject of an investigation by law enforcement authorities, and in the event that it becomes impossible to pay out the deposit, the Company will not be obligated to pay the amount equivalent to the deposit to the customer. In addition, in this case, the customer will cooperate in order to make it possible to pay out the deposit, including unfreezing the company's account.
                                            </li>
                                        </ul>

                                        <h3 class="mt-4 text-white">
                                        Article 7 Payment Collection agency
                                        </h3>
                                        <ul class="px-8 py-4 text-white" style="font-size:18px">
                                            <li style="list-style-type: number;">
                                            This service is a service of outsourcing a payment collection agency, and both the customer and our company confirm that it does not fall under the category of "foreign exchange transactions." Additionally, mutual confirmation will be made that legal registration (including administrative registration) is not required for funds transfer businesses.
                                            </li>
                                            <li style="list-style-type: number;">
                                            When the clients designated by the customer sends money to the Company and the Company receives it, the debt of the clients to the customer shall be extinguished. The customer understands and agrees to this.
                                            </li>
                                            <li style="list-style-type: number;">
                                            The customer guarantees to the Company that the customer's business does not conflict with or violate any laws and regulations, and that the customer is in compliance with the compliance system.
                                            </li>
                                        </ul>

                                        <h3 class="mt-4 text-white">
                                        Article 8 Restrictions on subcontracting, etc.
                                        </h3>
                                        <ul class="px-8 py-4 text-white" style="font-size:18px">
                                            <li style="list-style-type: number;">
                                            The Company will not outsource all or part of this business to a third party without the customer's prior written consent (including electronic documents and electromagnetic records; the same shall apply hereinafter).
                                            </li>
                                            <li style="list-style-type: number;">
                                            If the Company subcontracts this work to a third party with the prior consent of the customer, the Company shall ensure that the third party complies with the Company's obligations under this Contract and the individual contract, and We assume all responsibility to the customer for all actions related to the execution of this business as if they were done by us.
                                            </li>
                                        </ul>

                                        <h3 class="mt-4 text-white">
                                        Article 9 Validity period
                                        </h3>
                                        <p class="mt-4 text-white" style="font-size:18px">
                                        The effective period of this Contract will be one year from the date of this Contract, and if the parties to this Contract do not express their intention to terminate this Contract by the expiration of the effective period, this Contract shall be renewed with the same content and thereafter. The same shall apply.
                                        </p>
                                        
                                        <h3 class="mt-4 text-white">
                                        Article 10 Cancellation
                                        </h3>
                                        <ul class="px-8 py-4 text-white" style="font-size:18px">
                                            <li style="list-style-type: number;">
                                            If either the customer or the company falls under any of the following cases, the other party may cancel this contract without warning or notification.
                                                <ul class="px-8 py-4 text-white" style="font-size:16px">
                                                    <li style="list-style-type: circle;">When payment of money, such as a consignment fee, is delayed even once.</li>
                                                    <li style="list-style-type: circle;">When a check or draft is dishonored even once, or when payment is suspended. </li>
                                                    <li style="list-style-type: circle;">
                                                    When receiving a provisional seizure, provisional disposition, compulsory execution, application for auction, disposition of delinquency of taxes and public dues, or temporary seizure.</li>
                                                    <li style="list-style-type: circle;">
                                                    When there is a petition for civil rehabilitation, bankruptcy, corporate reorganization, special liquidation, or other similar procedures.</li>
                                                    <li style="list-style-type: circle;">
                                                    When a resolution has been made to abolish or dissolve the business, or when a government agency has imposed a disposition that makes it impossible to continue business, such as suspension of business.
                                                    </li>
                                                    <li style="list-style-type: circle;">
                                                    When the Company deems that there is a reduction in capital, transfer of all or a significant part of the business, or any other significant change to assets, credit, or business, or a decision has been made to do so, or that the company's management has deteriorated or is likely to do so.</li>
                                                    <li style="list-style-type: circle;">
                                                    When the Customer fails to pay even one monetary obligation to the clients other than under this Contract.</li>
                                                    <li style="list-style-type: circle;">
                                                    When any of the provisions of this Contract, other contract provisions between the customer and the Company, or laws and regulations are violated.
                                                    </li>
                                                    <li style="list-style-type: circle;">
                                                    When a person engages in unjust acts or acts that violate public order and morals, such as violent acts, fraud, threatening behavior, deception, or use of force to steal business, either by himself or by using a third party.
                                                    </li>
                                                    <li style="list-style-type: circle;">
                                                    In other cases where the customer determines that it is inappropriate to continue this Contract.
                                                    </li>
                                                </ul>
                                            </li>
                                            <li style="list-style-type: number;">
                                            The provisions of the preceding paragraph shall not prevent the party who made the cancellation from claiming compensation for damages against the other party.</li>
                                        </ul>

                                        <h3 class="mt-4 text-white">
                                        Article11 Duty to maintain confidentiality
                                        </h3>
                                        <ul class="px-8 py-4 text-white" style="font-size:18px">
                                            <li style="list-style-type: number;">
                                            The customer and the company shall keep all information acquired in connection with this contract confidential, shall not disclose it to any third party without the prior consent of the other party, and shall not use it for any purpose other than the purpose of performing this contract. However, the following information is not subject to such confidentiality obligation.
                                                <ul class="px-8 py-4 text-white" style="font-size:16px">
                                                    <li style="list-style-type: circle;">
                                                    Information that was already in one's possession or obtained from a third party without obligation of confidentiality before receiving disclosure from the other party.</li>
                                                    <li style="list-style-type: circle;">Information that was already publicly known or in public use before receiving disclosure from the other party.
                                                    </li>
                                                    <li style="list-style-type: circle;">Information that became public knowledge through no fault of the other party after it was disclosed by the other party.
                                                    </li>
                                                    <li style="list-style-type: circle;">
                                                    Information obtained from a third party with legitimate authority without obligation of confidentiality after disclosure from the other party.</li>
                                                </ul>
                                            </li>
                                            <li style="list-style-type: number;">
                                            Notwithstanding the provisions of Paragraph 1 of this article, the customer and the Company may disclose confidential information to the minimum extent to their lawyers, certified public accountants, tax accountants, financial advisors, and other external experts. In addition, when disclosing to a person other than a legal duty of confidentiality, such as a lawyer, disclosure shall be made after imposing the same duty of confidentiality as in this article.
                                            </li>
                                            <li style="list-style-type: number;">
                                            Notwithstanding the provisions of Paragraph 1 of this Article, in the event that public disclosure is required by law, or if the disclosure or publication of confidential information is requested by a judicial or administrative agency, the customer and the Company shall comply with such law or judicial authority. ・Confidential information may be disclosed or made public to the extent required at the discretion of administrative agencies. In this case, the customer will be notified in advance of the person making the disclosure or publication and its content, unless it is contrary to laws and regulations or the judgment of judicial or administrative agencies, and both parties will discuss the content, timing, and method. If such prior notice cannot be given due to violation of laws and regulations or judgments of judicial or administrative organs, notification shall be given promptly after the fact.
                                            </li>
                                        </ul>

                                        <h3 class="mt-4 text-white">
                                        Article12 Compensation for damages
                                        </h3>
                                        <p class="mt-4 text-white" style="font-size:18px">
                                        The customer and the Company will compensate the other party for any damage suffered by the other party due to or related to the violation of obligations under this contract, in accordance with the provisions of law.</p>

                                        <h3 class="mt-4 text-white">
                                        Article13 Prohibition of Assignment
                                        </h3>
                                        <ul class="px-8 py-4 text-white" style="font-size:18px">
                                            <li style="list-style-type: number;">
                                            The Customer shall not transfer, set collateral, or otherwise dispose of this Contract or any rights or obligations hereunder, in whole or in part, without obtaining the prior written consent of the Company.
                                            </li>
                                            <li style="list-style-type: number;">
                                            The Company may transfer, collateralize, or otherwise dispose of this Contract and any rights or obligations based on this Content, in whole or in part, by notifying the Customer in advance.
                                            </li>
                                        </ul>

                                        <h3 class="mt-4 text-white">
                                        Article14 Exclusion of anti-social forces
                                        </h3>
                                        <ul class="px-8 py-4 text-white" style="font-size:18px">
                                            <li style="list-style-type: number;">
                                            The customer and the company represent and warrant to the other party that neither the customer nor any of its officers or persons substantially controlling its management, currently or in the past, are or have been engaged with anti-social forces, including but not limited to organized crime groups, members of organized crime groups, quasi-members of organized crime groups, companies affiliated with organized crime groups, extortionists, socially disruptive organizations, special intelligence violent groups, or similar entities (hereinafter referred to as "anti-social forces"), and further represent and warrant that they will not fall under any of the following categories in the future:
                                                <ul class="px-8 py-4 text-white" style="font-size:16px">
                                                    <li style="list-style-type: circle;">
                                                    Having a relationship where anti-social forces are recognized to be controlling management.
                                                    </li>
                                                    <li style="list-style-type: circle;">
                                                    Having a relationship with anti-social forces that is deemed to be substantially involved in management.</li>
                                                    <li style="list-style-type: circle;">
                                                    Having a relationship that is deemed to involve unfair use of anti-social forces, such as for the purpose of gaining fraudulent profits for oneself or a third party, or for the purpose of causing damage to a third party.</li>
                                                    <li style="list-style-type: circle;">
                                                    Having a relationship that is deemed to involve involvement in anti-social forces, such as providing funds, etc., or providing benefits.</li>
                                                    <li style="list-style-type: circle;">Having officers or persons substantially involved in management who have socially reprehensible relationships with anti-social forces.
                                                    </li>
                                                </ul>
                                            </li>
                                            <li style="list-style-type: number;">
                                            The customer and the Company promise not to engage in any of the following acts, either by themselves or by using a third party.
                                                <ul class="px-8 py-4 text-white" style="font-size:16px">
                                                    <li style="list-style-type: circle;">Violent demands.</li>
                                                    <li style="list-style-type: circle;">Unreasonable demands that exceed legal responsibility.</li>
                                                    <li style="list-style-type: circle;">Acts of using threatening words or behavior, or violence in transactions.
                                                    </li>
                                                    <li style="list-style-type: circle;">
                                                    Acts that damage the credibility of the other party or interfere with the other party's business by spreading rumors, using fraudulent means or using force.</li>
                                                    <li style="list-style-type: circle;">Other acts similar to the preceding items.</li>
                                                </ul>
                                            </li>
                                            <li style="list-style-type: number;">
                                            The customer or the company may terminate this Contract immediately without any notice if the other party violates any of the provisions of the preceding two paragraphs.</li>
                                            <li style="list-style-type: number;">
                                            In the case of cancellation pursuant to the preceding paragraph, neither the customer nor the Company shall be responsible for compensating any damage caused to the other party.</li>
                                        </ul>

                                        <h3 class="mt-4 text-white">
                                        Article 15: Cost Sharing 
                                        </h3>
                                        <p class="mt-4 text-white" style="font-size:18px">
                                        Unless otherwise stipulated in this Contract or agreed upon in advance between the parties, the expenses related to the performance of this contract shall be borne by both parties.
                                        </p>

                                        <h3 class="mt-4 text-white">
                                        Article 16: Notification 
                                        </h3>
                                        <ul class="px-8 py-4 text-white" style="font-size:18px">
                                            <li style="list-style-type: number;">
                                            When notifying each other (referring to contacting the other party without limitation to the term "notification" in this contract), both the customer and the Company agree to do so by electronic record, not limited to written communication. 
                                            </li>
                                            <li style="list-style-type: number;">
                                            The customer and the Company shall promptly notify each other if there is a change in the address listed at the end of this contract. If such notification is not made, when sending written correspondence to the other party, it shall be sufficient to send it to the address listed at the end of this contract the most recent address to which notification was sent, and the responsibility for non-delivery shall lie with the party that failed to give notice.
                                            </li>
                                        </ul>

                                        <h3 class="mt-4 text-white">
                                        Article 17: Good Faith Consultation 
                                        </h3>
                                        <p class="mt-4 text-white" style="font-size:18px">
                                        If any doubts arise regarding the interpretation of each provision of this contract or regarding provisions not specified in this contract, the parties shall consult in good faith.
                                        </p>

                                        <h3 class="mt-4 text-white">
                                        Article 18: Jurisdiction 
                                        </h3>
                                        <p class="mt-4 text-white" style="font-size:18px">
                                        The parties to this contract agree that the Tokyo District Court shall have exclusive jurisdiction as the court of first instance for litigation related to the rights and obligations arising from this contract.
                                        </p>

                                        <h3 class="mt-4 text-white">
                                        Article 19: Force Majeure
                                        </h3>
                                        <p class="mt-4 text-white" style="font-size:18px">
                                        Performance of any part of this Contract may be affected by governmental regulations, war, civil unrest, riots, strikes, lockouts, lack of transportation space, and other similar events beyond the control of the parties, such as typhoons, floods, fires, etc. If the performance of this Contract is prevented for an extended period of time due to a force manure event, neither you nor the Company shall be liable for any delay or failure in performance of this Contract during such period. Additionally, if such interfering circumstances continue for more than six months, either party shall have the right to immediately terminate this Contract by giving written notice to the other party.
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
                                <span class="">Back</span>
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