<!DOCTYPE html>
<html lang="sp" dir="ltr">

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
                                        <h1 class="text-center text-white">Acuerdo de asociación comercial de agencia de almacenamiento.</h1>
                                        <p class="mt-4 text-white" style="font-size:18px">
                                        El cliente deberá aceptar los términos y condiciones y confiar el trabajo a la Compañía bajo las siguientes condiciones.</p>
                                        <h3 class="mt-4 text-white">
                                        Acerca de los términos de uso
                                        </h3>
                                        <ul class="px-8 py-4 text-white" style="font-size:16px">
                                            <li style="list-style-type: circle;">Asegúrese de aceptar estos términos de uso antes de utilizar el servicio.</li>
                                            <li style="list-style-type: circle;">
                                            La Compañía puede revisar el contenido de estos Términos sin obtener el consentimiento del Cliente, y el Cliente deberá dar su consentimiento a esto. Las condiciones para proporcionar este servicio después de que se revisen estos Términos se basarán en los términos de los Términos revisados.
                                            </li>
                                            <li style="list-style-type: circle;">
                                            Cuando la Compañía revise estos Términos, la Compañía notificará al cliente sobre el contenido mediante el método prescrito por la Compañía.</li>
                                            <li style="list-style-type: circle;">
                                            Las revisiones a estos Términos estipuladas en los dos párrafos anteriores entrarán en vigencia a partir del momento en que la Compañía notifique de conformidad con el párrafo anterior. Los clientes que no acepten las revisiones de los términos de este acuerdo no podrán utilizar este servicio. </li>
                                        </ul>
                                        <h3 class="mt-4 text-white">
                                        Artículo 1 Objeto
                                        </h3>
                                        <p class="mt-4 text-white" style="font-size:18px">
                                        Este acuerdo establece acuerdos para diversas alianzas comerciales de nuestra empresa con nuestros clientes, incluidos los detalles del trabajo subcontratado descrito en el artículo 2.
                                        <h3 class="mt-4 text-white">
                                        Artículo 2 Subcontratación empresarial
                                        </h3>
                                        <ul class="px-8 py-4 text-white" style="font-size:18px">
                                            <li style="list-style-type: number;">
                                            El cliente deberá proporcionar a la Compañía la administración (en adelante, "recibir dinero") de los pagos recibidos de los clientes por los servicios prestados por el cliente o un tercero designado por el cliente (en adelante, "clientes, etc.'') (denominadas "operaciones de almacenamiento"), y la Compañía subcontrata esto.
                                            </li>
                                            <li style="list-style-type: number;">
                                            Este negocio de cobranza se refiere al negocio estipulado en los siguientes puntos relativos al cobro de depósitos por parte de la Compañía.
                                                <ul class="px-8 py-4 text-white" style="font-size:16px">
                                                    <li style="list-style-type: circle;">
                                                    Cobro de los fondos recaudados por nuestra empresa y pago del monto equivalente a los fondos recaudados a una institución financiera designada por el cliente.</li>
                                                    <li style="list-style-type: circle;">
                                                    Recopilar información sobre los depósitos cobrados por nuestra empresa y compartirla con los clientes.</li>
                                                    <li style="list-style-type: circle;">Informes relacionados con operaciones de almacenamiento.</li>
                                                    <li style="list-style-type: circle;">Negocios relacionados con cada uno de los rubros anteriores que hayan sido pactados entre el cliente y nuestra empresa.</li>
                                                </ul>
                                            </li>
                                            <li style="list-style-type: number;">
                                            La fecha de cierre y el momento del pago de la Compañía al cliente son los siguientes.
                                                <ul class="px-8 py-4 text-white" style="font-size:16px">
                                                    <li style="list-style-type: circle;">fecha de cierre：  Determinado por separado por el cliente y nuestra empresa.</li>
                                                    <li style="list-style-type: circle;">Periodo de pago：  Determinado por separado por el cliente y nuestra empresa.</li>
                                                    <li style="list-style-type: circle;">Método de pago：  Si utiliza el método de transferencia bancaria, el dinero se transferirá a la cuenta especificada por el cliente en la moneda legal especificada por el cliente.  En el caso de envío de criptoactivos, se enviará a la dirección especificada por el cliente.</li>
                                                    <li style="list-style-type: circle;">Decidir el método de pago：  Determinado por separado por el cliente y nuestra empresa.</li>
                                                </ul>
                                            </li>
                                            <li style="list-style-type: number;">
                                            Los aspectos detallados de las operaciones de cobro que realizará la Compañía, incluido el método de informar las operaciones de cobro de la Compañía al cliente, se determinarán mediante consultas separadas entre el cliente y la Compañía.
                                            </li>
                                            <li style="list-style-type: number;">
                                            El Cliente y la Compañía confirman que este negocio de cobranza no incluye negocios de transferencia de fondos u otros negocios que requieran procedimientos como permiso administrativo y notificación.</li>
                                        </ul>

                                        <h3 class="mt-4 text-white">
                                        Artículo 3 Comisión
                                        </h3>
                                        <ul class="px-8 py-4 text-white" style="font-size:18px">
                                            <li style="list-style-type: number;">La comisión que pagará el cliente por este servicio de recogida será del 10% (IVA incluido) del importe cobrado.
                                            </li>
                                            <li style="list-style-type: number;">
                                            La Compañía deducirá la tarifa de envío de la Compañía y varios gastos relacionados con el pago del dinero recibido y luego realizará el Negocio de Cobro.</li>
                                        </ul>

                                        <h3 class="mt-4 text-white">
                                        Artículo 4 Elementos de confirmación
                                        </h3>
                                        <ul class="px-8 py-4 text-white" style="font-size:18px">
                                            <li style="list-style-type: number;">
                                            El cliente y la Compañía acuerdan que incluso si la Compañía paga el monto equivalente al depósito u otro dinero mediante el envío de criptoactivos, la Compañía intercambiará o pagará con los criptoactivos a su propia discreción y responsabilidad.</li>
                                            <li style="list-style-type: number;">
                                            El cliente y la Compañía confirman que la Compañía no se dedica al negocio de intercambiar criptoactivos, como el intercambio de criptoactivos de acuerdo con las instrucciones del cliente.</li>
                                            <li style="list-style-type: number;">
                                            El cliente y la Compañía confirman que después de enviar los criptoactivos a la dirección especificada por el cliente, revelar el ID de la transacción de envío al cliente y notificarle la información sobre la tarifa estándar, la Compañía no tiene responsabilidad alguna.
                                            </li>
                                            <li style="list-style-type: number;">
                                            El cliente y nuestra empresa acuerdan que las operaciones estipuladas en este acuerdo no incluyen servicios de transferencia de fondos u otras operaciones que requieran procedimientos como permiso administrativo y notificación, y que nuestra empresa opera como un operador comercial independiente. Confirmar que el trabajo especificado en el se lleva a cabo el contrato.
                                            </li>
                                        </ul>

                                        <h3 class="mt-4 text-white">
                                        Artículo 5 Relación con sus clientes, etc.
                                        </h3>
                                        <ul class="px-8 py-4 text-white" style="font-size:18px">
                                            <li style="list-style-type: number;">
                                            El cliente será responsable de manejar todas y cada una de las disputas entre el cliente y el cliente, como solicitudes de pago realizadas por el cliente, etc. con respecto a los servicios del cliente o un tercero designado por el cliente, etc. no asume ningún responsabilidad.
                                            </li>
                                            <li style="list-style-type: number;">
                                            El cliente será responsable de responder a las operaciones de reembolso que le sean imputables al cliente o al cliente, incluida la notificación de un monto incorrecto por parte del cliente, el pago doble por parte del cliente del cliente, etc., y la Compañía no estará involucrada de ninguna manera.
                                            </li>
                                            <li style="list-style-type: number;">
                                            El Cliente se compromete a responder de buena fe a cualquier disputa u obligación de reembolso con los Clientes, etc. La Compañía cooperará en la resolución de disputas, etc.  entre Clientes y Clientes, etc., incluidos los casos previstos en los dos párrafos anteriores.
                                            </li>
                                        </ul>

                                        <h3 class="mt-4 text-white">
                                        Artículo 6 Declaraciones, garantías, etc.
                                        </h3>
                                        <ul class="px-8 py-4 text-white" style="font-size:18px">
                                            <li style="list-style-type: number;">El cliente y la Compañía representan y garantizan los asuntos estipulados en cada uno de los siguientes puntos.
                                            <ul class="px-8 py-4 text-white" style="font-size:16px">
                                                    <li style="list-style-type: circle;">
                                                    No ha realizado ninguna declaración falsa a la otra parte con respecto a asuntos relacionados con este Acuerdo.</li>
                                                    <li style="list-style-type: circle;">
                                                    Si recibimos una queja o consulta sobre depósitos, etc. de un tercero, incluido un cliente, el cliente o el tercero designado por el cliente responderá de buena fe por su propia cuenta.
                                                    </li>
                                                    <li style="list-style-type: circle;">
                                                    La información de contacto proporcionada a la otra parte debe ser una que pueda ser contactada sin demora y, si hay algún cambio, se debe notificar a la otra parte de inmediato.
                                                    </li>
                                                </ul>
                                            </li>
                                            <li style="list-style-type: number;">
                                            Si la cuenta de la Compañía está congelada porque todo o parte del dinero recibido contiene fondos criminales, como fraudes que son desconocidos para el cliente o la Compañía, o fondos que son objeto de una investigación por parte de las autoridades encargadas de hacer cumplir la ley, u otros casos. Si resulta imposible pagar el depósito, la Compañía no tiene obligación de pagar el monto equivalente al depósito al cliente. Además, en este caso, el cliente cooperará para que sea posible pagar el depósito, incluida la descongelación de la cuenta de la empresa.
                                            </li>
                                        </ul>

                                        <h3 class="mt-4 text-white">
                                        Artículo 7　Agencia de cobranza
                                        </h3>
                                        <ul class="px-8 py-4 text-white" style="font-size:18px">
                                            <li style="list-style-type: number;">
                                            Este asunto se trata de la subcontratación de una agencia de cobranza, y tanto el cliente como nuestra empresa confirman que no entra en la categoría de "transacciones de divisas".  Además, se confirmará mutuamente que no se requiere registro legal (incluido el registro administrativo) para las empresas de transferencia de fondos.
                                            </li>
                                            <li style="list-style-type: number;">
                                            Cuando un cliente designado por el cliente envía dinero a la Compañía y la Compañía recibe la remesa, la deuda del cliente con el cliente se extinguirá. El cliente lo comprende y acepta.
                                            </li>
                                            <li style="list-style-type: number;">
                                            El cliente garantiza a la Compañía que su negocio no entra en conflicto ni viola ninguna ley o reglamento, y que el cliente cumple con el sistema de cumplimiento.
                                            </li>
                                        </ul>

                                        <h3 class="mt-4 text-white">
                                        Artículo 8 Restricciones a la subcontratación, etc.
                                        </h3>
                                        <ul class="px-8 py-4 text-white" style="font-size:18px">
                                            <li style="list-style-type: number;">
                                            La Compañía no subcontratará todo o parte de este negocio a un tercero sin el consentimiento previo por escrito del cliente (incluidos documentos electrónicos y registros electromagnéticos; lo mismo se aplicará en lo sucesivo).
                                            </li>
                                            <li style="list-style-type: number;">
                                            Si la Compañía subcontrata este trabajo a un tercero con el consentimiento previo del cliente, la Compañía se asegurará de que el tercero cumpla con las obligaciones de la Compañía en virtud de este Acuerdo y el contrato individual, y asumiremos toda la responsabilidad ante nuestros clientes por todos acciones relacionadas con la ejecución de nuestro negocio como si hubieran sido realizadas por nosotros.
                                            </li>
                                        </ul>

                                        <h3 class="mt-4 text-white">
                                        Artículo 9 Período de validez
                                        </h3>
                                        <p class="mt-4 text-white" style="font-size:18px">
                                        El período de vigencia de este Acuerdo será de un año a partir de la fecha de este Acuerdo, y si las partes de este Acuerdo no expresan su intención de rescindir este Acuerdo antes de la expiración del período de vigencia, este Acuerdo se renovará con el mismo contenido. y posteriormente Se aplicará lo mismo.
                                        </p>
                                        
                                        <h3 class="mt-4 text-white">
                                        Artículo 10 Cancelación
                                        </h3>
                                        <ul class="px-8 py-4 text-white" style="font-size:18px">
                                            <li style="list-style-type: number;">
                                            Si el cliente o la Compañía se encuentran bajo uno de los siguientes artículos, la otra parte puede cancelar este Acuerdo sin previo aviso ni notificación.
                                                <ul class="px-8 py-4 text-white" style="font-size:16px">
                                                    <li style="list-style-type: circle;">Cuando el pago de dinero, como la comisión, se retrasa aunque sea una vez.</li>
                                                    <li style="list-style-type: circle;">
                                                    Cuando un cheque o factura sea rechazado aunque sea una vez, o cuando de cualquier otra forma se suspenda el pago.</li>
                                                    <li style="list-style-type: circle;">
                                                    Al recibir embargo provisional, disposición provisional, ejecución forzosa, solicitud de subasta disposición por mora de impuestos y cuotas públicas, o embargo temporal.</li>
                                                    <li style="list-style-type: circle;">
                                                    Cuando se presente una petición de rehabilitación civil, quiebra, reorganización corporativa, liquidación especial u otros procedimientos similares.
                                                    </li>
                                                    <li style="list-style-type: circle;">
                                                    Cuando se haya tomado una resolución para abolir o disolver el negocio, o cuando una agencia gubernamental haya impuesto una disposición que imposibilite la continuación del negocio, como la suspensión del negocio.</li>
                                                    <li style="list-style-type: circle;">
                                                    Cuando la Sociedad considere que existe una reducción de capital, la transferencia de todo o una parte importante del negocio, o cualquier otro cambio significativo en el patrimonio, crédito o negocio, o se ha tomado la decisión de hacerlo, o existe un riesgo de deterioro de la gestión.</li>
                                                    <li style="list-style-type: circle;">
                                                    Cuando el Cliente no paga ni siquiera una obligación monetaria al Cliente distinta a la prevista en este Acuerdo.
                                                    </li>
                                                    <li style="list-style-type: circle;">
                                                    Cuando se viole cualquiera de las disposiciones de este acuerdo, otras disposiciones contractuales entre el cliente y nuestra empresa, o leyes y reglamentos.
                                                    </li>
                                                    <li style="list-style-type: circle;">
                                                    Cuando una persona incurra en actos injustos o que violen el orden y la moral públicos, tales como actos violentos, fraudes, palabras y hechos amenazantes, esquemas fraudulentos o actos de acoso empresarial utilizando la fuerza, ya sea por sí misma o mediante el uso de un tercero.
                                                    </li>
                                                    <li style="list-style-type: circle;">
                                                    En otros casos en los que el cliente determine que no es apropiado continuar con este acuerdo.
                                                    </li>
                                                </ul>
                                            </li>
                                            <li style="list-style-type: number;">
                                            Lo dispuesto en el párrafo anterior no impedirá que la parte que realizó la cancelación pueda reclamar una indemnización de daños y perjuicios contra la otra parte.</li>
                                        </ul>

                                        <h3 class="mt-4 text-white">
                                        Artículo 11 Obligación de mantener la confidencialidad
                                        </h3>
                                        <ul class="px-8 py-4 text-white" style="font-size:18px">
                                            <li style="list-style-type: number;">
                                            El cliente y la Compañía mantendrán confidencial toda la información obtenida en relación con este acuerdo, no la divulgarán a ningún tercero sin el consentimiento previo de la otra parte y no la utilizarán para ningún propósito que no sea el de cumplir con este acuerdo. No debe usarse. Sin embargo, la siguiente información no está sujeta a dicha obligación de confidencialidad.
                                                <ul class="px-8 py-4 text-white" style="font-size:16px">
                                                    <li style="list-style-type: circle;">
                                                    Información que ya se encuentra en posesión de uno antes de ser divulgada por la otra parte, o información que se ha obtenido de un tercero sin estar obligado a mantener la confidencialidad.
                                                    </li>
                                                    <li style="list-style-type: circle;">
                                                    Información que ya era de conocimiento público o de uso público antes de recibir la divulgación de la otra parte.
                                                    </li>
                                                    <li style="list-style-type: circle;">Información que se vuelve de conocimiento público sin culpa de la otra parte después de haber sido divulgada por la otra parte.
                                                    </li>
                                                    <li style="list-style-type: circle;">
                                                    Información obtenida de un tercero con autoridad legítima sin obligación de confidencialidad después de su divulgación por parte de la otra parte.</li>
                                                </ul>
                                            </li>
                                            <li style="list-style-type: number;">
                                            Sin perjuicio de las disposiciones del Párrafo 1 de este Artículo, el Cliente y la Compañía pueden revelar Información Confidencial en la medida mínima a sus abogados, contadores públicos certificados, contadores fiscales, asesores financieros y otros expertos externos.  Además, cuando se revele a persona distinta de un deber legal de confidencialidad, como un abogado, la divulgación se hará después de imponerle el mismo deber de confidencialidad que en este artículo.
                                            </li>
                                            <li style="list-style-type: number;">
                                            Sin perjuicio de lo dispuesto en el párrafo 1 de este artículo, en caso de que la ley exija la divulgación pública, o si una agencia judicial o administrativa solicita la divulgación o publicación de información confidencial, el cliente y la Compañía podrán divulgar información confidencial.  o hacerse pública en la medida requerida a discreción de la agencia administrativa. En este caso, el cliente será notificado con antelación de la persona que realiza la divulgación o publicación ysu contenido, salvo que sea contrario a leyes y reglamentos o al criterio de órganos judiciales o administrativos, y ambas partes discutirán el contenido, oportunidad, y método.  Si dicha notificación previa no puede darse por violación de leyes y reglamentos o sentencias de órganos judiciales o administrativos, la notificación se hará inmediatamente después del hecho.
                                            </li>
                                        </ul>

                                        <h3 class="mt-4 text-white">
                                        Artículo 12 Indemnización por daños y perjuicios
                                        </h3>
                                        <p class="mt-4 text-white" style="font-size:18px">
                                        El cliente y la Compañía compensarán a la otra parte por cualquier daño sufrido por la otra parte debido a o relacionado con la violación de las obligaciones bajo este acuerdo, de acuerdo con las disposiciones de la ley.</p>

                                        <h3 class="mt-4 text-white">
                                        Artículo 13 Prohibición de transferencia
                                        </h3>
                                        <ul class="px-8 py-4 text-white" style="font-size:18px">
                                            <li style="list-style-type: number;">
                                            El Cliente no transferirá, pignorará ni dispondrá de otro modo de este Acuerdo ni de ningún derecho u obligación en virtud del mismo, en su totalidad o en parte, sin obtener el consentimiento previo por escrito de la Compañía.
                                            </li>
                                            <li style="list-style-type: number;">
                                            La Compañía puede transferir, garantizar o disponer de otro modo de este Acuerdo y los derechos u obligaciones basados en el mismo, en su totalidad o en parte, notificando al Cliente con anticipación.
                                            </li>
                                        </ul>

                                        <h3 class="mt-4 text-white">
                                        Artículo 14 Eliminación de fuerzas antisociales.
                                        </h3>
                                        <ul class="px-8 py-4 text-white" style="font-size:18px">
                                            <li style="list-style-type: number;">
                                            El cliente y la Compañía deberán, en el presente o en el pasado, notificar a la otra parte que ellos, sus funcionarios y aquellos que tienen control sustancial sobre su gestión están organizados por grupos del crimen organizado, miembros de grupos del crimen organizado, cuasi-miembros de grupos del crimen organizado, empresas afiliadas a grupos del crimen organizado, o mafiosos corporativos, etc., expresan que no entran en la categoría de movimientos sociales, etc., grupos violentos de inteligencia especial, u otras personas similares (en adelante denominados "antisociales"). fuerzas"), y que no se incluyen en ninguno de los siguientes elementos, y prometemos que esto tampoco se aplicará en el futuro.
                                                <ul class="px-8 py-4 text-white" style="font-size:16px">
                                                    <li style="list-style-type: circle;">
                                                    Tener una relación en la que se reconoce que fuerzas antisociales controlan la gestión.
                                                    </li>
                                                    <li style="list-style-type: circle;">
                                                    Tener una relación en la que se considera que fuerzas antisociales están sustancialmente involucradas en la gestión.</li>
                                                    <li style="list-style-type: circle;">
                                                    Tener una relación que se considera que implica el uso injusto de fuerzas antisociales, como por ejemplo con el fin de obtener ganancias fraudulentas para uno mismo o un tercero, o con el fin de causar daño a un tercero.</li>
                                                    <li style="list-style-type: circle;">
                                                    Tener una relación que se considera involucrada en proporcionar fondos, etc., o brindar beneficios a fuerzas antisociales.</li>
                                                    <li style="list-style-type: circle;">Un funcionario o una persona sustancialmente involucrada en la gestión tiene una relación socialmente reprobable con fuerzas antisociales.</li>
                                                </ul>
                                            </li>
                                            <li style="list-style-type: number;">
                                            El cliente y la Compañía se comprometen a no participar en ninguno de los siguientes actos,  ya sea por sí mismos o mediante la utilización de un tercero.
                                                <ul class="px-8 py-4 text-white" style="font-size:16px">
                                                    <li style="list-style-type: circle;">Demandas violentas.</li>
                                                    <li style="list-style-type: circle;">Exigencias irrazonables que exceden la responsabilidad legal.</li>
                                                    <li style="list-style-type: circle;">Actos de comportamiento amenazante o uso de violencia en relación con transacciones.
                                                    </li>
                                                    <li style="list-style-type: circle;">
                                                    Actos que dañan la credibilidad de la otra parte o interfieren con los negocios de la otra parte mediante la difusión de rumores, el uso de medios fraudulentos o el uso de la fuerza.</li>
                                                    <li style="list-style-type: circle;">Otros actos similares a los artículos anteriores.</li>
                                                </ul>
                                            </li>
                                            <li style="list-style-type: number;">
                                            Si la otra parte viola cualquiera de los dos párrafos anteriores, el cliente o la Compañía pueden rescindir inmediatamente este Acuerdo sin previo aviso.</li>
                                            <li style="list-style-type: number;">
                                            En caso de cancelación conforme al párrafo anterior, ni el cliente ni la Compañía serán responsables de compensar cualquier daño causado a la otra parte.</li>
                                        </ul>

                                        <h3 class="mt-4 text-white">
                                        Artículo 15 Carga de costes
                                        </h3>
                                        <p class="mt-4 text-white" style="font-size:18px">
                                        A menos que se estipule lo contrario en este Acuerdo o que las partes lo acuerden de antemano, los costos asociados con la ejecución de este Acuerdo serán asumidos por ambas partes.
                                        </p>

                                        <h3 class="mt-4 text-white">
                                        Artículo 16 Aviso
                                        </h3>
                                        <ul class="px-8 py-4 text-white" style="font-size:18px">
                                            <li style="list-style-type: number;">
                                            El cliente y la Compañía acuerdan que al notificarse mutuamente (esto se refiere al caso de comunicarse con la otra parte, sin limitarse a la redacción de "notificación" en este acuerdo), puede hacerse no solo por escrito sino también por registros electromagnéticos.
                                            </li>
                                            <li style="list-style-type: number;">
                                            El Cliente y la Compañía notificarán de inmediato al Cliente sobre cualquier cambio en la dirección que figura al final de este Acuerdo. Además, si no se ha dado la misma notificación, al enviar un documento a la otra parte, bastará con enviarlo por correo a la dirección que figura al final de este acuerdo o a la dirección más reciente a la que se dio la notificación. La persona que no haya hecho la notificación será responsable de la no entrega de la misma.
                                            </li>
                                        </ul>

                                        <h3 class="mt-4 text-white">
                                        Artículo 17 Consulta de buena fe
                                        </h3>
                                        <p class="mt-4 text-white" style="font-size:18px">
                                        Si surge alguna duda con respecto a la interpretación de cada disposición de este Acuerdo o cualquier disposición no estipulada en este Acuerdo, cada parte deberá consultar de buena fe.
                                        </p>

                                        <h3 class="mt-4 text-white">
                                        Artículo 18 Jurisdicción
                                        </h3>
                                        <p class="mt-4 text-white" style="font-size:18px">
                                        Las partes de este Acuerdo acuerdan que el Tribunal de Distrito de Tokio tendrá la jurisdicción exclusiva de primera instancia para cualquier litigio relacionado con los derechos y obligaciones que surjan de este Acuerdo.
                                        </p>

                                        <h3 class="mt-4 text-white">
                                        Artículo 19 Fuerza mayor
                                        </h3>
                                        <p class="mt-4 text-white" style="font-size:18px">
                                        El cumplimiento de cualquier parte de este Acuerdo puede verse afectado por regulaciones gubernamentales, guerras, disturbios civiles, disturbios, huelgas, cierres patronales, falta de espacio para el transporte y otros eventos similares fuera del control de las partes, como tifones, inundaciones, incendios, etc. Si se impide el cumplimiento de este Acuerdo durante un período prolongado debido a un evento de fuerza mayor, ni usted ni la Compañía serán responsables de ningún retraso o falla en el cumplimiento de este Acuerdo durante dicho período. Además, si dichas circunstancias de interferencia continúan durante más de seis meses, cualquiera de las partes tendrá derecho a rescindir inmediatamente este Acuerdo mediante notificación por escrito a la otra parte.
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
                                <span class="">atrás</span>
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