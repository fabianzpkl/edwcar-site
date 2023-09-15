<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, maximum-scale=1">
    <title>Edwcar #VidaEnLaVía. Escuela de Conducción, Academia de Conducción</title>
    <meta name="description" content="Mejoramos la calidad de vida en la vía, con cursos de conducción, seminarios, certificación de conductores y campañas de seguridad vial y cultura ciudadana">
    <meta name="keywords" content="Escuela de conduccion, Academia de conduccion, Escuela de automovilismo, Academia de conducción Bogotá, Escuela de conducción Bogotá, CEA autorizado, curso conducción carro, curso conducción moto, Centro de Enseñanza Automovilística aprobado, Licencia de Conducción, Pase Conductor, Edwcar">
    <meta name="author" content="Edwcar">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Instrument+Sans:wght@400;600;700&family=Poppins:ital,wght@0,300;0,400;0,700;1,300;1,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="assets/css/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/d70fe1760d.js" crossorigin="anonymous"></script>
    <script src="assets/js/materialize.min.js"></script>
    <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
    <script src="assets/js/main-min.js"></script>

</head>


<body>
    <?php
    include 'includes/header.php';
    ?>
    <main class="ficha">
        <section class="bg-gris">
            <div class="container">
                <h1>Finaliza tu compra</h1>
                <br>
                <div class="row">
                    <div class="col xl7 l7 m7 s12">
                        <div class="box-shadow">
                            <h5>¿Para quién es el curso?</h5>
                            <br>
                            <ul class="tabs">
                                <li class="tab col s6"><a class="active" href="#test1">Para mí</a></li>
                                <li class="tab col s6"><a href="#test2">Para otra persona</a></li>
                            </ul>
                            <div id="test1">
                                <br>
                                <h5>Datos del comprador</h5>
                                <br>
                                <form action="">
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="nombres" type="text" class="validate">
                                            <label for="nombres">Nombres</label>
                                        </div>
                                        <div class="input-field col s12">
                                            <input id="apellidos" type="text" class="validate">
                                            <label for="apellidos">Apellidos</label>
                                        </div>
                                        <div class="input-field col s12">
                                            <select>
                                                <option value="" disabled selected>Tipo de documento</option>
                                                <option value="1">Cédula de ciudadanóa</option>
                                                <option value="2">Cédula de extranjería</option>
                                                <option value="2">Tarjeta de identidad</option>
                                                <option value="2">Otros</option>


                                            </select>
                                        </div>
                                        <div class="input-field col s12">
                                            <input id="id" type="number" class="validate">
                                            <label for="id">Número de indentidad</label>
                                        </div>
                                        <div class="input-field col s12">
                                            <input id="tel" type="tel" class="validate">
                                            <label for="tel">Teléfono</label>
                                        </div>
                                        <div class="input-field col s12">
                                            <a href="#">
                                                <div class="banner-combo">
                                                    <div class="row">
                                                        <div class="col xl3 l3 m3 s12 center-align">
                                                            <img src="assets/images/profesores.svg" alt="">
                                                        </div>
                                                        <div class="col xl7 l7 m7 s9">
                                                            <div class="chip chip-azul">
                                                                Ayuda
                                                            </div>
                                                            <h5>¿No estás listo?</h5>
                                                            <p>Déjanos acompañarte en el proceso de compra de tu curso</p>
                                                        </div>
                                                        <div class="col xl2 l2 m2 s3 center-align">
                                                            <i class="fa-solid fa-circle-arrow-right"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                    </div>
                                </form>
                            </div>
                            <div id="test2">
                                <br>
                                <h5>Datos del beneficiario</h5>
                                <br>
                                <form action="">
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="nombresben" type="text" class="validate">
                                            <label for="nombresben">Nombres del beneficiario</label>
                                        </div>
                                        <div class="input-field col s12">
                                            <input id="apellidosben" type="text" class="validate">
                                            <label for="apellidosben">Apellidos del beneficiario</label>
                                        </div>
                                        <div class="input-field col s12">
                                            <select>
                                                <option value="" disabled selected>Tipo de documento del beneficiario</option>
                                                <option value="1">Cédula de ciudadanóa</option>
                                                <option value="2">Cédula de extranjería</option>
                                                <option value="2">Tarjeta de identidad</option>
                                                <option value="2">Otros</option>


                                            </select>
                                        </div>
                                        <div class="input-field col s12">
                                            <input id="idben" type="number" class="validate">
                                            <label for="idben">Número de indentidad de beneficiario</label>
                                        </div>
                                        <div class="input-field col s12">
                                            <input id="tel" type="tel" class="validate">
                                            <label for="tel">Teléfono</label>
                                        </div>
                                        <div class="input-field col s12">
                                            <input id="mailben" type="email" class="validate">
                                            <label for="mailben">Correo eléctronico</label>
                                        </div>

                                        <br>
                                        <div class="input-field col s12">
                                            <h5>Datos del comprador</h5>
                                        </div>
                                        <br>

                                        <div class="input-field col s12">
                                            <input id="nombresben" type="text" class="validate">
                                            <label for="nombresben">Nombres del comprador</label>
                                        </div>
                                        <div class="input-field col s12">
                                            <input id="apellidosben" type="text" class="validate">
                                            <label for="apellidosben">Apellidos del comprador</label>
                                        </div>
                                        <div class="input-field col s12">
                                            <select>
                                                <option value="" disabled selected>Tipo de documento del comprador</option>
                                                <option value="1">Cédula de ciudadanóa</option>
                                                <option value="2">Cédula de extranjería</option>
                                                <option value="2">Tarjeta de identidad</option>
                                                <option value="2">Otros</option>


                                            </select>
                                        </div>
                                        <div class="input-field col s12">
                                            <input id="idben" type="number" class="validate">
                                            <label for="idben">Número de indentidad del comprador</label>
                                        </div>
                                        <div class="input-field col s12">
                                            <input id="tel" type="tel" class="validate">
                                            <label for="tel">Teléfono</label>
                                        </div>
                                        <div class="input-field col s12">
                                            <input id="mailben" type="email" class="validate">
                                            <label for="mailben">Correo eléctronico</label>
                                        </div>

                                        <div class="input-field col s12">
                                            <a href="#">
                                                <div class="banner-combo">
                                                    <div class="row">
                                                        <div class="col xl3 l3 m3 s12 center-align">
                                                            <img src="assets/images/profesores.svg" alt="">
                                                        </div>
                                                        <div class="col xl7 l7 m7 s9">
                                                            <div class="chip chip-azul">
                                                                Ayuda
                                                            </div>
                                                            <h5>¿No estás listo?</h5>
                                                            <p>Déjanos acompañarte en el proceso de compra de tu curso</p>
                                                        </div>
                                                        <div class="col xl2 l2 m2 s3 center-align">
                                                            <i class="fa-solid fa-circle-arrow-right"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col xl5 l5 m5 s12">
                        <div class="box-shadow">
                            <h5>Resumen de compra</h5>
                            <hr>
                            <ul class="sumary">
                                <li>
                                    <div class="row">
                                        <div class="col xl3 l3 m4 s4">
                                            <img src="assets/images/vehiculo.png" alt="">
                                        </div>
                                        <div class="col xl9 l9 m8 s8">
                                            <h6>Curso automovil - B1</h6>
                                            <h6 class="price">$1,300.000</h6>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="row">
                                        <div class="col xl3 l3 m4 s4">
                                            <div class="switch">
                                                <label>

                                                    <input type="checkbox">
                                                    <span class="lever"></span>

                                                </label>
                                            </div>
                                        </div>
                                        <div class="col xl9 l9 m8 s8">
                                            <h6><i class="fa-solid fa-stethoscope"></i> Examenes medicos</h6>
                                            <p>Lorem ipsum dolor sit amet<br><a href="#">Conoce más</a></p>
                                            <h6 class="price">$200.000</h6>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="row">
                                        <div class="col xl3 l3 m4 s4">
                                            <div class="switch">
                                                <label>

                                                    <input type="checkbox">
                                                    <span class="lever"></span>

                                                </label>
                                            </div>
                                        </div>
                                        <div class="col xl9 l9 m8 s8">
                                            <h6><i class="fa-solid fa-car"></i> Vehículos exclusivos</h6>
                                            <p>Lorem ipsum dolor sit amet<br><a href="#">Conoce más</a></p>
                                            <h6 class="price">$450.000</h6>
                                        </div>
                                    </div>
                                </li>


                            </ul>

                            <hr>


                            <h5>Total</h5>
                            <h3 class="price">$2.300.000</h3>
                            <div class="row">
                                <div class="input-field col s12">
                                    <label>
                                        <input type="checkbox" />
                                        <span>Acepto <a href="">Política de Tratamiento de Protección de Datos</a></span>
                                    </label>
                                </div>
                                <br><br>
                                <div class="input-field col s12">
                                    <label>
                                        <input type="checkbox" />
                                        <span>Acepto <a class="modal-trigger" href="#modalcontrato">Manual de convivencia - Normas esenciales</a></span>
                                    </label>
                                </div>
                            </div>
                            <br><br>
                            <button class="btn">Comprar ahora</button>
                            <br><br>
                            <img src="assets/images/medios-de-pagos.png" alt="" width="100%">
                            <p>*En la formalización de tu matrícula tendrás que realizar el pago de las tarifas extra establecidas por el Estado <a href="#">Conoce más</a></p>
                        </div>
                    </div>
                </div>


            </div>
        </section>
    </main>


    <div id="modalcontrato" class="modal modal-middle">
        <div class="modal-header">
            <a href="#!" class="modal-close"><i class="fa-solid fa-xmark"></i></a>
        </div>
        <div class="modal-content">

            <div class="content_text_normas_edwcar">
                <p>
                </p>
                <h3 style="color: red; text-align: center;">Lee hasta el final para aceptar</h3>
                <span>Al hacer clic en el botón "Acepto" declaro que leí y estoy de acuerdo en las normas educativas de Edwcar para sus cursos de formación al igual que su contrato y alcance</span>

                <p></p>

                <div>
                    <p class="c95">
                        <span style="overflow: hidden; display: inline-block; margin: 0px 0px; border: 0px solid #000000; transform: rotate(0rad) translateZ(0px); -webkit-transform: rotate(0rad) translateZ(0px); width: 752.16px; height: 0.64px;">
                            <img alt="" src="https://edwcar.com/assets/img/image1.png" style="width: 752.16px; height: 0.64px; margin-left: 0px; margin-top: 0px; transform: rotate(0rad) translateZ(0px); -webkit-transform: rotate(0rad) translateZ(0px);" title="">
                        </span>
                    </p>
                    <p class="c24 c32"><span class="c4"></span></p>
                </div>
                <p class="c24">
                    <span>
                        Entre los suscritos a saber ___________________________________________________________ identificado con C.C. _____ C.E. _____ Pasaporte _____ T.I. _____ No ______________________ quien para efectos del presente contrato se
                        denominará el
                    </span>
                    <span class="c2">ESTUDIANTE</span><span>&nbsp;y </span><span class="c2">EDWCAR S.A.S</span><span>&nbsp;con </span><span class="c2">Nit 900.595.473–8</span>
                    <span>&nbsp;quien para efectos del presente contrato se denominará EDWCAR, celebramos el presente </span><span class="c2">Contrato de Cooperación Educativa</span>
                    <span>, que se regirá por las siguientes cláusulas: </span><span class="c2">Primera:</span><span>&nbsp;</span><span class="c2">Objeto:</span>
                    <span>&nbsp;El objeto del presente contrato es de conseguir la recíproca complementación de esfuerzos entre EDWCAR y el </span><span class="c2">ESTUDIANTE</span>
                    <span>
                        &nbsp;con el fin de formarlo con actitudes, habilidades, destrezas y fundamentar los conocimientos requeridos para la conducción de un vehículo automotor sin poner en riesgo su vida y la de los demás. En
                        documento anexo que hace parte integral de este contrato se fijan los alcances de la prestación del servicio relacionados con el cronograma dentro del cual el
                    </span>
                    <span class="c2">ESTUDIANTE</span><span>&nbsp;tomará las horas. </span><span class="c2">Segunda:</span><span>&nbsp;</span><span class="c2">Obligaciones Esenciales del Contrato: Por parte de EDWCAR:</span>
                    <span>&nbsp;1. Impartir la enseñanza contratada. 2. Las demás establecidas en la normatividad legal vigente aplicable </span><span class="c2">Por parte del ESTUDIANTE:</span><span>&nbsp;1.</span>
                    <span class="c48">&nbsp;</span>
                    <span>
                        El pago total del servicio educativo al momento de suscribir la matrícula. 2. La cooperación en la formación misma. 3. El cumplimiento de los requisitos establecidos en la normatividad legal vigente
                        aplicable y alcances de la prestación del servicio relacionado con el cronograma dentro del cual el
                    </span>
                    <span class="c2">ESTUDIANTE</span>
                    <span>
                        &nbsp;tomará las horas que hacen parte del curso de formación 4. El cumplimiento de la intensidad horaria, los contenidos básicos, la aprobación de la evaluación teórica y
                        práctica para el programa de formación al cual se matricula
                    </span>
                    <span class="c2">Tercera:</span><span>&nbsp;</span><span class="c2">Vigencia:</span><span>&nbsp;</span><span class="c36">El contrato tendrá una vigencia de CIENTO OCHENTA (180) días calendario </span>
                    <span>contados a partir de la fecha del Contrato de Cooperación Educativa (Resolución 3245 de 2009 MT).</span><span class="c36">&nbsp;</span>
                    <span>para garantizar la efectividad en el proceso de capacitación</span><span class="c36 c89">&nbsp;</span><span class="c36">, evaluación y certificación por parte de EL ESTUDIANTE y</span>
                    <span class="c5">&nbsp;EDWCAR</span><span class="c36">&nbsp;</span><span class="c2">PARÁGRAFO PRIMERO:</span><span>&nbsp;</span>
                    <span class="c22">En ningún caso el mínimo de horas prácticas podrá abarcarse en un lapso mayor a noventa (90) días </span><span>contados a partir &nbsp;de su PRIMERA clase practica, </span>
                    <span class="c22">conforme al Artículo 2.3.1.1.6 del Decreto 1079 de 2015, si un aspirante no termina el proceso de formación práctica </span>
                    <span>por las razones personales o de otra índole, justificadas o no, no pueda cumplir su curso de formación durante esta vigencia </span>
                    <span class="c22">y evaluación práctico y no se certifica antes de cumplirse los noventa (90) días definidos por decreto, el curso de conducción quedará </span>
                    <span class="c22 c2">inconsistente o anulado</span><span class="c22">, </span><span>el sistema de control y vigilancia (SICOV) deshabilitará automáticamente al </span>
                    <span class="c2">ESTUDIANTE. PARÁGRAFO SEGUNDO. &nbsp;</span>
                    <span class="c22">
                        Si después del vencimiento del contrato o del SICOV el aspirante quiere realizar el proceso de formación y certificación; deberá realizar el curso desde el inicio, incluyendo la compra de un nuevo
                        PIN (valor del curso + pagos a terceros), enrolamiento en SISEC® CEA y toda la formación que aplique para la categoría en la que se quiera certificar (horas teóricas, horas prácticas, horas
                        taller, examen teórico y examen práctico).
                    </span>
                    <span class="c2">Cuarta:</span><span>&nbsp;Valor: El valor del presente contrato es de </span><span class="c2">$ _____________________ </span>
                    <span>
                        (valor en letras) ____________________________________________ que incluye: MODULO DE TEORÍA _____., MODULO PRÀCTICA _____ horas (_____ área segura _____ vía urbana _____ evaluación y _____
                        Carretera o refuerzo); Evaluación teórica y práctica realizado por EDWCAR., derechos a favor del registro único nacional de tránsito (RUNT) en categoría _____ conforme a la
                        cláusula novena de este contrato.
                    </span>
                    <span class="c2">PARÁGRAFO PRIMERO:</span><span>&nbsp;Este valor no es reembolsable, ni transferible, si el </span><span class="c2">ESTUDIANTE</span>
                    <span>&nbsp;desiste o suspende unilateralmente la enseñanza contratada durante la vigencia de este contrato. </span><span class="c2">PARÁGRAFO SEGUNDO:</span>
                    <span>
                        &nbsp;El valor del curso de conducción esta dado dentro del rango de precios autorizado por el Ministerio de Transporte (Resolución 0001208 del 05 de mayo de 2017), al rango de precios aquí definido se
                        le adicionará el valor que por las condiciones y características de seguridad se adopten y los demás valores de terceros que por ley se constituyen en obligaciones (
                    </span>
                    <span class="c2">Agencia Nacional de Seguridad Vial</span><span>-</span><span class="c2">ANSV </span><span>de </span><span class="c2">$ _____________________</span><span>, </span><span class="c2">Recaudo más IVA</span>
                    <span>, de </span><span class="c2">$ _____________________ Sistema de Control y Vigilancia SICOV</span><span>&nbsp;de </span><span class="c2">$ _____________________</span><span>&nbsp;.</span><span class="c2">NOTA:</span>
                    <span>&nbsp;Los valores asociados a la </span><span class="c2">ANSV</span>
                    <span>
                        &nbsp;serán calculados de acuerdo al Género, Rango de Edad y Categoría solicitada. Este valor no incluye exámenes de evaluación médica para conductores, derechos en el organismo de
                        tránsito y otros que la ley exija o reglamente para la obtención de la licencia de conducción.
                    </span>
                    <span class="c2">Quinta.</span><span>&nbsp;Disposiciones Legales y Reglamentarias: </span><span class="c2">El ESTUDIANTE</span>
                    <span>&nbsp;acepta de manera incondicional cualquier cambio o modificación en las disposiciones, decretos, normas, reglamentaciones etc., establecidas por los </span><span class="c2">ORGANISMOS DE CONTROL</span>
                    <span>&nbsp;a </span><span class="c2">EDWCAR</span><span>&nbsp;por cuanto dichas modificaciones no son de su autoría o competencia. </span><span class="c2">Sexta.</span><span>&nbsp;</span>
                    <span class="c2">Obligaciones de EDWCAR</span><span>. Constituirán obligaciones de EDWCAR correlativas al cumplimiento de las obligaciones del </span><span class="c2">ESTUDIANTE</span>
                    <span>, las de prestar en forma regular el servicio educativo contratado dentro de las prescripciones legales y exigencias de las autoridades competentes. </span><span class="c2">Séptima</span><span>. </span>
                    <span class="c2">Obligaciones del ESTUDIANTE:</span><span>&nbsp;En concordancia con el objeto del presente contrato, el </span><span class="c2">ESTUDIANTE</span>
                    <span>&nbsp;por el hecho de solicitar la matrícula se obliga a: </span><span class="c2">1</span><span>. Declarar que toda información suministrada está en apego total a la verdad. </span>
                    <span class="c2">2</span><span>. Velar por el progreso educativo de acuerdo al servicio contratado, asistiendo a todas y cada una de las horas, tanto teóricas como prácticas. </span><span class="c2">3</span>
                    <span>. Acatar las disposiciones y observaciones consagradas en el Manual de Convivencia que hace parte integral de este contrato. </span><span class="c2">Octava</span><span>. Derechos del </span>
                    <span class="c2">ESTUDIANTE</span><span>: Constituyen derechos del </span><span class="c2">ESTUDIANTE</span>
                    <span>&nbsp;entre otros, exigir la regular prestación de los servicios contratados y que dicho servicio se ajuste a los programas educativos, además de los establecidos en el Manual de Convivencia. </span>
                    <span class="c2">Novena. </span><span>Certificación: EDWCAR con base en las destrezas alcanzadas por el </span><span class="c2">ESTUDIANTE</span>
                    <span>, el cumplimiento del presente contrato y el lleno de los requisitos, verificará si los resultados obtenidos por el </span><span class="c2">ESTUDIANTE </span>
                    <span>se encuentran dentro de los parámetros requeridos para obtener y/o re categorizar la certificación de conducción; dará derecho a que </span><span class="c2">EDWCAR </span>
                    <span>proceda a reportar los datos del </span><span class="c2">ESTUDIANTE</span><span>&nbsp;ante el </span><span class="c2">RUNT </span>
                    <span>
                        &nbsp;y este a su vez genere el número de identificación nacional del certificado en la categoría que corresponda en un tiempo de cinco (5) a diez (10) días hábiles y una vez completados
                        todos los requisitos ante el organismo de tránsito correspondiente el
                    </span>
                    <span class="c2">ESTUDIANTE</span><span>&nbsp;pueda acceder a la obtención de una licencia de conducción. </span><span class="c2">Décima.</span><span>&nbsp;</span>
                    <span class="c2">CONSENTIMIENTO INFORMADO Y AUTORIZACIÓN PARA EL TRATAMIENTO DE DATOS PERSONALES</span><span>&nbsp;autorizo a la empresa </span><span class="c2">EDWCAR SAS</span><span>, identificada con </span>
                    <span class="c2">Nit. 900.595.473 – 8</span>
                    <span>
                        , para cesión, transferencia y transmitir datos e información, recolectar, almacenar, depurar, usar, analizar, circular, actualizar y cruzar con información propia o de terceros, mis datos personales,
                        con la finalidad de: Recibir información publicitaria, contactarme a través de mi correo o número celular, para desarrollar las actividades propias de su objeto social. El tratamiento de mis datos
                        personales debe estar sujeto a la protección establecida en la Ley 1581 de 2012, y su Decreto reglamentario 1377 de 2013, así como a la
                    </span>
                    <span class="c2">Política de Tratamiento de Datos Personales</span><span>&nbsp;publicada en la página web </span><span class="c2">www.edwcar.com</span>
                    <span>
                        . En cualquier momento podré ejercer los derechos establecidos en estas normas y particularmente revocar la autorización otorgada o solicitar la supresión de mis datos personales. Dicha solicitud la
                        podré realizar mediante el envío de una comunicación al correo electrónico.
                    </span>
                    <span class="c18 c17 c2">servicioalcliente@edwcar.com</span><span class="c18 c2">.</span><span class="c2">&nbsp;Décima Primera CONFIDENCIALIDAD.</span>
                    <span>
                        &nbsp;a) Las partes se abstendrán de divulgar, publicar o comunicar a terceros, información o documentos relacionados con las actividades que conozcan por virtud de la ejecución del presente contrato o
                        por cualquier otra causa. b) El estudiante es el responsable del uso adecuado de la información confidencial que haya sido puesta en su conocimiento por
                    </span>
                    <span class="c2">EDWCAR</span><span>&nbsp;en desarrollo del presente contrato, por lo tanto se compromete a no revelar dicha información, así como a darle el uso y la destilación indicada por </span>
                    <span class="c2">EDWCAR</span>
                    <span>
                        &nbsp;c) La obligación de la confidencialidad es permanente y subsistirá más allá de la expiración del contrato, tan solo cesará por el consentimiento expreso y escrito del
                        representante legal de la parte titular de la información , o con excepción que la información se haya hecho pública por medio diferente a la acción u omisión de las partes, por
                        mandato de autoridad judicial o administrativa competente, o por ministerio de la ley. d) La información se seguirá considerando confidencial por el término de vida o exigencia de las partes y no se
                        limitará al término establecido por el presente contrato e) Toda la información que maneje
                    </span>
                    <span class="c2">EDWCAR</span>
                    <span>
                        , sea de carácter jurídico, comercial, financiero, administrativo, operativo o tecnológico, es información confidencial. f) Le queda expresamente prohibido a las partes: revelar, divulgar,
                        comunicar, compartir, anunciar y/o discutir, con cualquier persona natural o jurídica la existencia, contenido y ubicación de la información confidencial, con un fin distinto al establecido en el objeto
                        del presente contrato, salvo que medie autorización expresa y escrita de la otra. g) Le queda absolutamente prohibido a las partes copiar, reproducir o usar la información confidencial para cualquier fin
                        distinto al establecido en el objeto del presente contrato, salvo que medie autorización expresa y escrita de la otra parte.
                    </span>
                    <span class="c2">Decima Segunda SOLUCIÓN DE CONFLICTOS.</span><span>&nbsp;</span><span class="c2">LAS PARTES</span>
                    <span>&nbsp;convienen que todas las controversias relacionadas con el presente contrato, se resolverán en primera instancia mediante arreglo directo entre </span><span class="c2">LAS PARTES</span>
                    <span>, llegando a una acuerdo amigable y conciliador, para lo cual se deberá registrar en el mail </span><span class="c13"><a class="c34" href="mailto:servicioalcliente@edwcar.com">servicioalcliente@edwcar.com</a></span>
                    <span>&nbsp;y </span><span class="c2">EDWCAR</span><span>&nbsp;tendrá hasta quince (15) días hábiles desde que se tuvo conocimiento de la controversia para brindar respuesta a la solicitud.</span>
                    <span class="c2">&nbsp;Décima Tercera</span><span>&nbsp;</span><span class="c2">FUERZA MAYOR O CASO FORTUITO.</span><span>&nbsp;</span><span class="c2">EDWCAR</span>
                    <span>
                        &nbsp;queda exonerado de responsabilidad por el incumplimiento de cualquiera de sus obligaciones o por la demora en la satisfacción de cualquiera de las prestaciones a su cargo derivadas del presente Contrato, cuando
                        el incumplimiento sea resultado o consecuencia de la ocurrencia de un evento de fuerza mayor y caso fortuito debidamente invocadas y constatadas. Si el término supera los 60 días, se dará la
                        suspensión del contrato, el cual se reanudará una vez se haya superado el hecho originario.
                    </span>
                    <span class="c2">Décima Cuarta</span><span>&nbsp;</span><span class="c2">ORIGEN DE INGRESOS</span><span class="c2 c62">. </span><span class="c2">EL ESTUDIANTE</span>
                    <span>&nbsp;declara bajo la gravedad del juramento que tanto los recursos utilizados en la ejecución del presente contrato, como sus ingresos, provienen de actividades lícitas, así mismo </span>
                    <span class="c2">EDWCAR</span>
                    <span>
                        , manifiesta que ni él, sus socios, directivos, administradores, empleados y estudiantes utilizados para el desarrollo del contrato, se encuentran con registros negativos en listados de prevención de lavado de
                        activos o financiación del terrorismo, nacionales o internacionales. En consecuencia,
                    </span>
                    <span class="c2">EL ESTUDIANTE</span><span>&nbsp;se obliga a responder frente a </span><span class="c2">EDWCAR</span>
                    <span>&nbsp;por todos los perjuicios que se llegaren a causar como consecuencia de la falsedad de la anterior afirmación, la cual puede estar sujeta a verificación en cualquier momento. Declara igualmente </span>
                    <span class="c2">EL ESTUDIANTE</span>
                    <span>
                        , que sus conductas se ajustan a la ley y a la ética, y en consecuencia se obliga a implementar las medidas tendientes a evitar que sus operaciones puedan ser utilizadas con o sin su consentimiento y conocimiento como
                        instrumentos para el ocultamiento, manejo, inversión o aprovechamiento en cualquier forma de dinero u otros bienes provenientes de actividades delictivas, o para dar apariencia de legalidad a estas actividades.
                    </span>
                    <span class="c2">EL ESTUDIANTE</span><span>&nbsp;se compromete a entregar toda la información que le sea solicitada por </span><span class="c2">EDWCAR</span>
                    <span>&nbsp;para dar cumplimiento a la normas nacionales o internacionales, sobre prevención del lavado de activos y financiación del terrorismo. En el evento en que </span><span class="c2">EL ESTUDIANTE</span>
                    <span>&nbsp;no cumpla con algunas de las obligaciones establecidas en la presente cláusula o con la veracidad de las declaraciones realizadas, </span><span class="c2">EDWCAR</span>
                    <span>&nbsp;podrá dar por terminado de manera inmediata el presente Contrato sin lugar al pago de indemnización o suma alguna. </span><span class="c2">PARÁGRAFO QUINTO-</span>
                    <span>
                        Las partes declaran que el buen nombre y la reputación son elementos claves en la celebración y ejecución del presente contrato, razón por la cual pactan que será motivo suficiente para que
                    </span>
                    <span class="c2">EDWCAR</span><span>&nbsp;de por terminado el presente contrato sin que esto genere ningún tipo de indemnización a favor de </span><span class="c2">EL ESTUDIANTE</span>
                    <span>
                        &nbsp;el hecho de que éste, sus representantes legales, accionistas, socios y/o directivos sean incluidos en una investigación, informe, reporte o listado policial y/o judicial nacional o de autoridad
                        extranjera por sospechas de estar involucrado en lavado de activos, tráfico de estupefacientes, trata de blancas, proxenetismo, pornografía infantil, peculado, concusión, secuestro, extorsión,
                        pertenencia y/o tratos con organizaciones armadas ilegales o con organizaciones criminales de cualquier índole, tráfico de armas, terrorismo, delitos de lesa humanidad o delitos contra la libertad, integridad y
                        formación sexuales.
                    </span>
                    <span class="c2">Décima quinta. ACTUALIZACIÓN DATOS</span><span>: </span><span class="c2">EL ESTUDIANTE</span><span>&nbsp;se compromete a actualizar ante </span><span class="c2">EDWCAR</span>
                    <span>
                        , por medio de correo electrónico, los datos referentes a su domicilio, correo electrónico, teléfono, y demás que se requieran para el objeto del presente contrato, en caso de que los mismos sean
                        modificados.
                    </span>
                </p>
                <p class="c66"><span class="c2">&nbsp;</span></p>
                <p class="c52"><span class="c2">Para constancia se firma en Bogotá a los ( &nbsp; &nbsp; &nbsp;) días del ( &nbsp; &nbsp; &nbsp;) del año ( &nbsp; &nbsp; &nbsp;). </span></p>
                <p class="c6"><span class="c2">&nbsp;</span></p>
                <p class="c6"><span class="c2">&nbsp;</span></p>
                <p class="c96"><span class="c2">&nbsp;</span></p>
                <p class="c8"><span class="c2">&nbsp;</span></p>
                <p class="c82 c32"><span class="c2 c73"></span></p>
                <p class="c82"><span class="c2">ALCANCES DE LA PRESTACIÓN DEL SERVICIO RELACIONADOS CON EL CRONOGRAMA DENTRO DEL CUAL EL ESTUDIANTE TOMARÁ LAS HORAS. </span></p>
                <p class="c87"><span class="c2">&nbsp;</span></p>
                <p class="c24"><span class="c4">Estimado estudiante; </span></p>
                <p class="c6"><span class="c4">&nbsp;</span></p>
                <p class="c24">
                    <span class="c4">
                        Le damos una cordial bienvenida al Centro de Enseñanza Automovilística Edwcar SAS, nos complace saber que nos ha elegido para aprender sobre los factores propios de la conducción, normatividad,
                        vía y del vehículo a operar.
                    </span>
                </p>
                <p class="c6"><span class="c4">&nbsp;</span></p>
                <p class="c24"><span class="c4">A continuación, encontrará los alcances de la prestación del servicio </span></p>
                <p class="c6"><span class="c4">&nbsp;</span></p>
                <p class="c52"><span class="c2">REQUISITOS PARA LA CAPACITACIÓN COMO CONDUCTOR </span></p>
                <p class="c24">
                    <span>1.</span><span class="c39">&nbsp;</span><span>Para acceder al proceso de capacitación y de formación como conductor, el aspirante deberá acreditar los siguientes requisitos: </span>
                    <span class="c17">Decreto 1079/15 Capítulo 5, Articulo 2.3.1.5.1 (Decreto 1500 de 2009 Artículo 15). MinTransporte.</span><span class="c4">&nbsp;</span>
                </p>
                <ul class="c61 lst-kix_list_1-0 start">
                    <li class="c3"><span class="c4">Saber leer y escribir. </span></li>
                    <li class="c3"><span class="c4">Tener 16 años cumplidos para el servicio diferente al público. </span></li>
                    <li class="c3"><span class="c4">Tener 18 años para vehículos de servicio público. </span></li>
                    <li class="c3"><span class="c4">Para categoría C2 es indispensable tener licencia categoría C1 </span></li>
                    <li class="c54"><span>Inscripción en el RUNT. </span><span class="c17">Artículo 2 de la Resolución 0012379 del 28 de diciembre de 2012 del Ministerio de Transporte</span><span class="c4">. &nbsp;</span></li>
                    <li class="c54">
                        <span>Obtener el Certificado de aptitud física, mental y de coordinación motriz por un </span><span class="c17">CRC</span><span>&nbsp;habilitado </span><span class="c17">Numeral 12.</span><span>&nbsp;</span>
                        <span class="c17">Circular 090 del 21 de diciembre de 2016</span><span>&nbsp;</span><span class="c17">Expedido por la Superintendencia de Puertos y Transporte.</span><span class="c2">&nbsp;Nota: </span>
                        <span>Tenga en cuenta que este documento tiene una </span><span class="c2">fecha de vencimiento máxima de 6 meses. </span><span class="c17">Resolución 0001298 del 27 de abril de 2018 </span>
                    </li>
                    <li class="c3">
                        <span class="c17">Decreto 1079/15 Capítulo 1 Artículo 2.3.1.1.6. </span>
                        <span class="c4">
                            Para obtener su licencia de conducción es indispensable que haya culminado su curso de conducción en un lapso no mayor a los 90 días calendario y que su Certificado de aptitud física, mental y
                            de coordinación motriz se encuentre vigente.
                        </span>
                    </li>
                    <li class="c3"><span class="c4">Copia del documento de identidad </span></li>
                    <li class="c3"><span class="c4">2 Fotografías tamaño 3X4 &nbsp;</span></li>
                    <li class="c3"><span class="c4">Paz y salvo pagos a terceros (ANSV, Recaudo, SICOV, otros que la ley ordene) </span></li>
                    <li class="c3"><span class="c4">Enrolamiento plataforma SICOV </span></li>
                    <li class="c25">
                        <span>Identificación biométrica de la huella dactilar ante el RUNT en EDWCAR donde adelantará el curso de formación y capacitación. </span>
                        <span class="c17">Decreto 1079/15 Capítulo 5 2.3.1.5.3 Artículo 17. Decreto 1500 de 2009 MinTransporte</span><span class="c4">. </span>
                    </li>
                </ul>
                <ol class="c61 lst-kix_list_2-0 start" start="2">
                    <li class="c10">
                        <span>Asistir a la sede correspondiente de </span><span class="c2">EDWCAR</span>
                        <span class="c4">
                            &nbsp;para legalizar el trámite de la matrícula y agendar las horas teóricas y prácticas, tenga en cuenta que en la sede donde legalice su matrícula deberá asistir a la
                            formación teórica, evaluación, práctica y certificación, por temas de la plataforma SICOV no se podrán hacer cambios una vez realizada la legalización de curso.
                        </span>
                    </li>
                    <li class="c10">
                        <span>Aceptar y entender que para obtener el dominio idóneo del vehículo </span><span class="c2">EDWCAR</span>
                        <span>&nbsp;cuenta con un área segura para las horas de inducción, aprestamiento, reversa y parqueo, las cuales podrán ser hasta un mínimo del </span><span class="c2">25%</span>
                        <span>&nbsp;del total de horas prácticas según el curso de formación escogido por el </span><span class="c2">ESTUDIANTE</span><span>. El porcentaje restante </span><span class="c2">75% </span>
                        <span>será en vía pública para medir la destreza y habilidad en el manejo de los mecanismos de control y en la conducción del vehículo en las vías. </span>
                        <span class="c17 c80">Decreto 1079/15 Capítulo 1 Artículo 2.3.1.1.6</span>
                    </li>
                    <li class="c10">
                        <span>Acoger los </span><span class="c2">horarios administrativos</span>
                        <span class="c4">&nbsp;EDWCAR para efectos de documentación, programación o en su defecto cancelación de horas, (estipuladas al final de este documento). </span>
                    </li>
                    <li class="c10">
                        <span>Asistir al punto de encuentro (estipuladas al final de este documento y convenido previamente con el estudiante) de las horas prácticas dando un compás de espera de </span><span class="c2">10</span>
                        <span>
                            &nbsp;minutos si el vehículo no llegaré a la clase práctica; reservándose el derecho de no dictar la clase en casos de fuerza mayor, tales como congestión vehicular, cierre de
                            vías, desórdenes públicos, motines, asonada o fallas mecánicas imprevistas caso en el cual
                        </span>
                        <span class="c2">EDWCAR</span><span>&nbsp;reprogramará el vehículo, fecha y hora. El </span><span class="c2">ESTUDIANTE </span><span>deberá informar a </span><span class="c2">EDWCAR</span>
                        <span class="c4">&nbsp;inmediatamente para reprogramar la clase. </span>
                    </li>
                    <li class="c10">
                        <span>En caso de no llegar el </span><span class="c2">ESTUDIANTE</span><span>&nbsp;oportunamente al punto de encuentro, aun cuando </span><span class="c2">EDWCAR </span>
                        <span>también ha tenido un compás de espera de </span><span class="c2">10</span><span>&nbsp;minutos, el vehículo se retirará y dará la clase como no asistida, caso en el cual el </span>
                        <span class="c2">ESTUDIANTE</span><span>&nbsp;deberá asumir el valor de la clase. de </span><span class="c2">$ 40.000, </span><span class="c4">por cada clase (2 horas) de inasistencia</span>
                    </li>
                    <li class="c10">
                        <span class="c2">EDWCAR</span><span>&nbsp;recogerá al </span><span class="c2">ESTUDIANTE</span>
                        <span>&nbsp;en un punto de encuentro (estipuladas al final de este documento y convenido previamente con el estudiante) acordado para las horas prácticas y al finalizar ésta, </span>
                        <span class="c2">EDWCAR</span><span class="c4">&nbsp;puede o no dejarlo en el mismo punto por cuanto el servicio contratado es para la instrucción en conducción. &nbsp;</span>
                    </li>
                    <li class="c10">
                        <span>Si el </span><span class="c2">ESTUDIANTE</span><span>&nbsp;por alguna razón desea cancelar la </span><span class="c2">clase teórica</span><span>&nbsp;debe Informar a </span><span class="c2">EDWCAR</span>
                        <span>&nbsp;mínimo con </span><span class="c2">24 horas</span><span>&nbsp;de antelación a la misma, en el horario administrativo establecido (estipulado al final de este documento). </span>
                        <span class="c2">ÚNICAMENTE </span><span>mediante </span><span class="c2">evidencia</span><span>&nbsp;</span><span class="c2">objetiva</span><span>&nbsp;enviada al correo: sede calle 63 &nbsp;</span>
                        <span class="c7 c2"><a class="c34" href="mailto:programacion@edwcar.com">programacion@edwcar.com</a></span><span class="c18 c17 c2">, sede Norte </span>
                        <span class="c7 c2"><a class="c34" href="mailto:programacion@edwcar.com">programacionsedenorte@edwcar.com</a></span><span class="c17 c2 c18">,</span><span class="c2">. </span>
                        <span>De no ser así deberá asumir el valor de la misma de </span><span class="c2">$ 20.000 </span>
                    </li>
                    <li class="c10">
                        <span>Si el </span><span class="c2">ESTUDIANTE</span><span>&nbsp;por alguna razón desea cancelar la </span><span class="c2">clase práctica</span><span>&nbsp;debe Informar a </span><span class="c2">EDWCAR</span>
                        <span>&nbsp;mínimo con </span><span class="c2">24 horas</span><span>&nbsp;de antelación a la misma, en el horario administrativo establecido (estipulado al final de este documento). </span>
                        <span class="c2">ÚNICAMENTE </span><span>mediante </span><span class="c2">evidencia</span><span>&nbsp;</span><span class="c2">objetiva</span><span>&nbsp;enviada al correo: </span>
                        <span class="c7 c2"><a class="c34" href="mailto:programacion@edwcar.com">programacion@edwcar.com</a></span><span class="c18 c17 c2">, sede Norte </span>
                        <span class="c2 c7"><a class="c34" href="mailto:programacion@edwcar.com">programacionsedenorte@edwcar.com</a></span><span class="c18 c17 c2">,</span><span class="c2">. </span>
                        <span>De no ser así deberá asumir el valor de la misma de </span><span class="c2">$ 40.000 </span><span class="c4">por cada clase (2 horas).</span>
                    </li>
                    <li class="c10">
                        <span>Asistir a las horas con plena lucidez, es decir sin haber consumido alcohol o sustancias psicoactivas </span><span class="c2">24</span>
                        <span>
                            &nbsp;horas previas a la clase de conducción y así lo declarará expresamente bajo juramento, so pena de incurrir en las sanciones previstas en la ley 1696 de 2013 y asumiendo los perjuicios
                            económicos que se puedan ocasionar a
                        </span>
                        <span class="c2">EDWCAR </span><span>y a terceros afectados por estas circunstancias, además de volver a pagar el valor de la clase programada. </span><span class="c2">PARÁGRAFO</span><span>. El </span>
                        <span class="c2">ESTUDIANTE</span><span>&nbsp;autoriza al </span><span class="c2">EDWCAR</span><span>&nbsp;para la realización de pruebas de alcoholimetría cuando este lo considere pertinente. &nbsp;</span>
                        <span class="c2">PARÁGRAFO SEGUNDO</span>
                        <span class="c4">
                            . En caso que se evidencia tufo, o si se realiza la prueba de alcohol y esta es positiva el ESTUDIANTE , no recibirá las clases programadas y por el contrario deberá cancelar el valor de cada hora de clase
                            programada.
                        </span>
                    </li>
                    <li class="c10">
                        <span>El </span><span class="c2">ESTUDIANTE</span><span>&nbsp;reconocerá, respetará y acatará la autonomía de los </span><span class="c2">FORMADORES</span>
                        <span class="c4">&nbsp;y sus decisiones en cuanto a: distribución de horas, recorridos, recomendaciones académicas, solicitud de horas adicionales y resultados de evaluación. </span>
                    </li>
                    <li class="c10">
                        <span>El </span><span class="c2">ESTUDIANTE</span>
                        <span>
                            &nbsp;Informará y programara oportunamente las horas en carretera previa aprobación por parte de el instructor, &nbsp;incluidas en los cursos de categoría B1 (2 Horas) punto de encuentro EDWCAR calle
                            63 Y C1 (4 Horas) punto de encuentro, puente de guadua y makro autopista norte de acuerdo a la recomendación del
                        </span>
                        <span class="c2">FORMADOR</span><span>., entendiendo que el punto de encuentro y disponibilidad de horarios para estas horas serán asignadas a discreción de </span><span class="c2">EDWCAR </span>
                        <span class="c4">
                            (estipulado al final de este documento). y asumirá el pago de peajes si los hubiera. &nbsp;Los Estudiantes de categoría B1 que deseen tener una carretera de cuatro (4) horas podrán cancelar el valor
                            de dos horas adicionales. &nbsp;
                        </span>
                    </li>
                    <li class="c10">
                        <span>En caso de ser necesario tomar horas adicionales, el </span><span class="c2">ESTUDIANTE</span>
                        <span class="c4">&nbsp;deberá cancelar el valor correspondiente de $ 40.000 Hora A1, A2, B1 O C1 Y C2 $ 60.000. </span>
                    </li>
                    <li class="c44">
                        <span>El </span><span class="c2">ESTUDIANTE</span>
                        <span>&nbsp;no deberá presentarse a las horas con personas acompañantes y/o mascotas, en tal caso no podrá tomar la clase y deberá ser reprogramada asumiendo el costo de la misma. </span>
                        <span class="c17">Decreto 1079/15 Capítulo 1 Artículo 2.3.1.1.6</span><span class="c39">&nbsp;(</span><span class="c17">Decreto 1500 Art 7)</span>
                        <span class="c4">. “Cuando se esté impartiendo enseñanza práctica sólo podrán ir en el vehículo el instructor debidamente acreditado y el aprendiz”. </span>
                    </li>
                    <li class="c10">
                        <span>El </span><span class="c2">ESTUDIANTE</span>
                        <span class="c4">
                            &nbsp;cuidará y velará por los objetos personales y de valor que lleve consigo durante las horas, ya que EDWCAR no se hace responsable por objetos perdidos, olvidados o hurtados durante las mismas.
                        </span>
                    </li>
                    <li class="c10">
                        <span class="c4">
                            Aceptar que la programación de clases prácticas, teóricas y evaluaciones estarán sujeto a disponibilidad de horarios así como el tiempo que se requiera en el cargue de la
                            información ya que no depende únicamente de EDWCAR.
                        </span>
                    </li>
                    <li class="c10">
                        <span class="c4">
                            Aceptar que las Clases prácticas son personalizadas y que los tiempos de programación estarán sujetos a disponibilidad, EDWCAR velara para que sean programas secuencial y consecutivas antes de los
                            tiempos de vencimiento.
                        </span>
                    </li>
                    <li class="c10">
                        <span class="c4">
                            La programación de clases teóricas, prácticas y evaluaciones se programaran por parte de EDWCAR y el ESTUDIANTE, en caso que un estudiante por las razones justificadas o no, no pueda asistir o
                            cancele previamente, deberá tener en cuenta la fecha de vencimiento de su curso , así como las fechas con las que EDWCAR cuenta para el reagendamiento de la misma, EDWCAR no se hace responsable por
                            vencimientos de curso.
                        </span>
                    </li>
                    <li class="c10"><span class="c4">El estudiante deberá portar para todas sus horas de clase documento de identidad original (Tarjeta de identidad, cedula de ciudadanía, extranjería), carnet eps. </span></li>
                    <li class="c10">
                        <span>Haber leído y aceptado los </span><span class="c17">deberes, derechos y obligaciones</span><span class="c4">&nbsp;publicados en la sede; así como el contrato de cooperación educativa. </span>
                    </li>
                    <li class="c10">
                        <span class="c2">Horas teóricas y prácticas </span><span>Para efectos de la aplicación de lo establecido en el </span><span class="c2">SICOV</span>
                        <span>&nbsp;los estudiantes deberán presentarse a sus clases como mínimo con </span><span class="c2">10</span>
                        <span class="c4">
                            &nbsp;minutos de antelación a la presentación de la misma y estar presentes durante toda la clase, ya que el estudiante deberá colocar su huella o identificación del rostro tanto al inicio de
                            la clase como al final de la misma. En caso en que el estudiante no tome la clase completa, deberá agendarse nuevamente y tomar las clases faltantes, incurriendo en costos adicionales.
                        </span>
                    </li>
                    <li class="c10">
                        <span class="c4">
                            El estudiante deberá tomar primero todas las horas teóricas estipuladas en el curso de formación adquirido, posterior a ello deberá presentar la evaluación teórica y aprobada la
                            misma procederá al agendamiento de sus horas prácticas
                        </span>
                    </li>
                    <li class="c10">
                        <span>Las clases tendrán una duración de </span><span class="c2">2</span>
                        <span class="c4">&nbsp;horas, que incluirán el procedimiento de reconocimiento del SICOV del estudiante y el instructor (autenticación biométrica). </span>
                    </li>
                    <li class="c10">
                        <span class="c2">Evaluación del examen teórico </span>
                        <span>El examen teórico se presentará ante la plataforma o ante el organismo que por ley se designe, aprobándose con el puntaje 80% y criterios por ellos establecidos. </span>
                        <span class="c2">Condiciones previas a la presentación del examen teórico</span>
                        <span>. Una vez terminada la intensidad de horas teóricas contratadas, el aspirante a presentar el examen teórico de conducción deberá, solicitar a </span><span class="c2">EDWCAR</span>
                        <span>
                            &nbsp;la asignación de un turno, el cual indicará la fecha y hora para la prueba. Quien no se presente al examen o se retire del mismo una vez iniciado, perderá el turno y deberá solicitar
                            nuevamente la asignación de acuerdo a disponibilidad de horarios. Presente el aspirante, se verificará la identidad, a través de su cédula de ciudadanía, tarjeta de identidad o
                            contraseña y la autenticación biométrica de su huella dactilar. Superado el proceso de registro, el aspirante pasará al área de examen. El aspirante no podrá portar ni examinar
                            textos, teléfonos celulares, cámaras, radios, audífonos no terapéuticos u otros medios de comunicación. El Sistema seleccionará aleatoriamente las preguntas basadas en los
                            contenidos de los programas de
                        </span>
                        <span class="c2">EDWCAR</span><span>. </span><span class="c2">Evaluación del examen teórico</span>
                        <span>
                            . Al diligenciarse la última pregunta, el aspirante autenticará con su huella la culminación de su prueba, el sistema acumulará los puntajes obtenidos y automáticamente generará
                            los resultados finales y comunicará al aspirante el resultado (Aprobado o no Aprobado). Una vez concluido el examen con resultado aprobatorio, la plataforma, registrará en línea el resultado,
                        </span>
                        <span class="c2">Parágrafo</span>
                        <span class="c4">
                            . En caso de no ser aprobado el examen teórico, el aspirante podrá presentarlo nuevamente, dentro de los cinco (5) días calendarios siguientes a la fecha en que se reprobó, sin tener que
                            cancelar los derechos de presentación del mismo. En caso de reprobarlo por segunda vez el aspirante podrá presentarlo dentro de los cinco (5) días calendarios siguientes a la fecha de
                            reprobación por segunda vez.
                        </span>
                    </li>
                    <li class="c10">
                        <span class="c2">Evaluación del examen práctico de conducción </span>
                        <span>
                            Aspectos previos. El aspirante a presentar el examen práctico de conducción debe haber aprobado el examen teórico en el término señalado en la Ley y agendar con el área de
                            programación la cita para dicha prueba.
                        </span>
                        <span class="c2">Procesos de evaluación práctica</span>
                        <span class="c4">
                            . El examen práctico de conducción evalúa, Destreza individual: destinado a comprobar que el aspirante puede maniobrar con pleno dominio el vehículo; Maniobras en vía pública:
                            destinado a comprobar que el aspirante, valora los riesgos y toma decisiones prudentes frente al comportamiento del tránsito y del resto de los actores viales. Una vez culminado el proceso de evaluación el
                            examinador informará el resultado a cada aspirante, entregando a quien repruebe, un reporte en el que señale los aspectos en que se presentaron fallas al conducir, la gravedad de las mismas y el puntaje
                            total obtenido. Una vez concluido el examen con resultado aprobatorio, se notificará al estudiante, en caso de no ser aprobado el examen práctico, el aspirante podrá presentarlo nuevamente en su
                            última clase práctica, teniendo en cuenta el numeral Once (11) de este alcance.
                        </span>
                    </li>
                    <li class="c10">
                        <span>Para brindarle la información que necesita de la manera más inmediata posible, atenderemos sus dudas, sugerencias, felicitaciones, quejas y reclamos por medio del correo </span>
                        <span class="c45"><a class="c34" href="mailto:servicioalcliente@edwcar.com">servicioalcliente@edwcar.com</a></span><span class="c18 c17">.</span><span class="c4">&nbsp;</span>
                    </li>
                    <li class="c10">
                        <span class="c4">
                            Cuando el estudiante ha culminado su proceso de formación teórico práctico y ha aprobado satisfactoriamente los mismos, la Coordinación Académica le remitirá un correo
                            electrónico informándole que debe acercarse al CEA donde fue enrolado para finalizar el proceso y proceder a su certificación.
                        </span>
                    </li>
                    <li class="c10">
                        <span class="c2 c92">EDWCAR SAS</span>
                        <span class="c51">
                            &nbsp;cuenta con una Póliza de responsabilidad Civil Extracontractual-RCE, en cuantía no inferior a sesenta (60) salarios mínimos legales mensuales vigentes, a nombre del Centro de Enseñanza
                            Automovilística, con el fin de amparar la muerte y/o lesiones a personas y el daño de bienes a terceros que se produzcan por causa o con ocasión de la enseñanza automovilística con los
                            vehículos automotores. Su renovación se efectúa anualmente.
                        </span>
                    </li>
                    <li class="c10">
                        <span class="c51">
                            Para la clases de conducción de AUTO los ESTUDIANTES deberán estar en zapato cómodo, NO tacon, &nbsp;en caso de llevar consigo maletines, bolsos u otros objetos deberán solicitar al instructor
                            sean guardados en el baul de el vehiculo, no podrán ir dentro de la cabina.
                        </span>
                    </li>
                    <li class="c10">
                        <span class="c51">
                            En los casos de los cursos de MOTOCICLETA todos los ESTUDIANTES deberán presentarse con GUANTES, BOTAS y ACCESORIOS DE SEGURIDAD, IMPERMEABLES. EDWCAR para las clases dispondrá de la MOTOCICLETA, CODERAS,
                            RODILLERAS, YOFA y CASCO. No se deberan presentar con maletas u otros objetos a las clases.
                        </span>
                    </li>
                </ol>
                <p class="c15"><span class="c46"></span></p>
                <p class="c56"><span class="c4">Puede llamarnos o escribirnos para consultar los horarios.</span></p>
                <p class="c79"><span class="c4">&nbsp;</span></p>
                <a id="t.af2386adafaddfc374326a104d95cf235ab5909a"></a><a id="t.0"></a>
                <table class="c60" style="display: none;">
                    <tbody>
                        <tr class="c47">
                            <td class="c23" colspan="1" rowspan="1">
                                <p class="c12"><span class="c2">Horario </span></p>
                            </td>
                            <td class="c30" colspan="1" rowspan="1">
                                <p class="c12"><span class="c2">Sede Calle 63 No. 24 – 28 </span></p>
                            </td>
                            <td class="c21" colspan="1" rowspan="1">
                                <p class="c35 c85"><span class="c2">Sede Autopista Norte No. 146 - 48 Local 203 </span></p>
                            </td>
                        </tr>
                        <tr class="c0">
                            <td class="c23" colspan="1" rowspan="1">
                                <p class="c12"><span class="c2">Horas Teóricas y Taller </span></p>
                            </td>
                            <td class="c19" colspan="2" rowspan="1">
                                <p class="c12"><span class="c4">Lunes a Viernes 3 PM A 5PM 6 PM A 8 PM &nbsp;Sábados7AM a 3 PM SUJETO A DISPONIBILIDAD</span></p>
                            </td>
                        </tr>
                        <tr class="c42">
                            <td class="c93" colspan="1" rowspan="1">
                                <p class="c12"><span class="c2">Horas Prácticas </span></p>
                            </td>
                            <td class="c19" colspan="2" rowspan="1">
                                <p class="c12"><span class="c4">Lunes a Viernes de 06:00 am a 06:00 pm - Sábados de 06:00 am a 02:00 pm - Domingos y festivos 6: 00 am a 12:00 pm SUJETO A DISPONIBILIDAD</span></p>
                            </td>
                        </tr>
                        <tr class="c65">
                            <td class="c43" colspan="1" rowspan="1">
                                <p class="c32 c35"><span class="c4"></span></p>
                            </td>
                            <td class="c68" colspan="2" rowspan="1">
                                <p class="c16"><span class="c2">Puntos de Encuentro Practica </span></p>
                            </td>
                        </tr>
                        <tr class="c27">
                            <td class="c23" colspan="1" rowspan="1">
                                <p class="c8"><span class="c2">Lunes a Domingo </span></p>
                                <p class="c12"><span class="c2">Inducción, Aprestamiento, Reverso y Parqueo: </span></p>
                            </td>
                            <td class="c30" colspan="1" rowspan="1">
                                <p class="c12 c50"><span>Sede o </span><span class="c2">Área segura</span><span class="c4">&nbsp;(Galerías Calle 53B No. 25 – 24 en el Centro Comercial Plaza 54, piso 5 </span></p>
                            </td>
                            <td class="c75" colspan="1" rowspan="1">
                                <p class="c70"><span>Sede o </span><span class="c2">Área segura</span><span class="c4">&nbsp;(Usaquén: Calle 119 B No. 5 – 00 City Parking) </span></p>
                            </td>
                        </tr>
                        <tr class="c90">
                            <td class="c93" colspan="1" rowspan="1">
                                <p class="c12"><span class="c2">Carretera </span></p>
                            </td>
                            <td class="c19" colspan="2" rowspan="1">
                                <p class="c8"><span class="c2">Edwcar Calle 63:</span><span class="c4">&nbsp;Calle 63 No. 24 – 28 ( DOS (2) HORAS)</span></p>
                                <p class="c12 c72">
                                    <span class="c2">Puente de Guadua:</span><span>&nbsp;Autopista Medellín, Bogotá, Cota, Cundinamarca </span><span class="c2">Makro (CUATRO (4) HORAS) Autopista Norte:</span>
                                    <span>&nbsp;Autopista Norte Calle 193</span><span class="c2">(CUATRO (4) HORAS)</span><span class="c4">&nbsp;</span>
                                </p>
                            </td>
                        </tr>
                        <tr class="c64">
                            <td class="c93" colspan="1" rowspan="1">
                                <p class="c12"><span class="c2">Examen Teórico </span></p>
                            </td>
                            <td class="c19" colspan="2" rowspan="1">
                                <p class="c8"><span class="c4">Lunes a Viernes: 09:00 am a 05:30 pm &nbsp; </span></p>
                                <p class="c12"><span class="c4">* Estos horarios podrán ser modificados sin previo aviso a discreción de EDWCAR y a disponibilidad &nbsp;</span></p>
                            </td>
                        </tr>
                        <tr class="c76">
                            <td class="c31" colspan="1" rowspan="1">
                                <p class="c35 c86"><span class="c2">Trámites administrativos </span></p>
                            </td>
                            <td class="c74" colspan="2" rowspan="1">
                                <p class="c35 c32"><span class="c4"></span></p>
                            </td>
                        </tr>
                        <tr class="c53">
                            <td class="c38" colspan="1" rowspan="1">
                                <p class="c12"><span class="c2">Programación de horas, pagos, coordinación académica, consultas, etc. </span></p>
                            </td>
                            <td class="c26" colspan="2" rowspan="1">
                                <p class="c12 c37"><span class="c4">Lunes a Viernes de 09:00 am a 06:00 pm</span></p>
                                <p class="c12 c37"><span class="c4">Sábados de 08:00 am a 02:00 pm </span></p>
                            </td>
                        </tr>
                        <tr class="c47">
                            <td class="c43" colspan="1" rowspan="1">
                                <p class="c35 c32"><span class="c4"></span></p>
                            </td>
                            <td class="c68" colspan="2" rowspan="1">
                                <p class="c35 c69"><span class="c2">Contactos </span></p>
                            </td>
                        </tr>
                        <tr class="c67">
                            <td class="c23" colspan="1" rowspan="1">
                                <p class="c12"><span class="c2">Programación de Horas </span></p>
                            </td>
                            <td class="c33" colspan="2" rowspan="1">
                                <p class="c12"><span class="c4">Sede calle 63. programacion@edwcar.com - 744 4499 EXT. 103-104-105 </span></p>
                                <p class="c12"><span class="c4">Sede Norte &nbsp;programacionsedenorte@edwcar.com</span></p>
                            </td>
                        </tr>
                        <tr class="c47">
                            <td class="c23" colspan="1" rowspan="1">
                                <p class="c12"><span class="c2">Coordinación Académica </span></p>
                            </td>
                            <td class="c81" colspan="1" rowspan="1">
                                <p class="c12"><span class="c4">coordinacioncalle63@edwcar.com </span></p>
                            </td>
                            <td class="c14" colspan="1" rowspan="1">
                                <p class="c12"><span class="c4">coordinacioncedritos@edwcar.com </span></p>
                            </td>
                        </tr>
                        <tr class="c91">
                            <td class="c23" colspan="1" rowspan="1">
                                <p class="c12"><span class="c2">Administración </span></p>
                            </td>
                            <td class="c33" colspan="2" rowspan="1">
                                <p class="c12"><span class="c4">administracion@edwcar.com - 744 4499 EXT. 107 </span></p>
                            </td>
                        </tr>
                        <tr class="c63">
                            <td class="c23" colspan="1" rowspan="1">
                                <p class="c12"><span class="c2">Servicio al Cliente </span></p>
                            </td>
                            <td class="c19" colspan="2" rowspan="1">
                                <p class="c12"><span class="c4">servicioalcliente@edwcar.com </span></p>
                            </td>
                        </tr>
                        <tr class="c63">
                            <td class="c23" colspan="1" rowspan="1">
                                <p class="c12"><span class="c2">Ventas</span></p>
                            </td>
                            <td class="c19" colspan="2" rowspan="1">
                                <p class="c12"><span class="c4">info@edwcar.com - 744 4499 &nbsp;Sede 63 - 44 4488 &nbsp;Sede Norte </span></p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <p class="c6 c49"><span class="c4">&nbsp;</span></p>
                <p class="c24">
                    <span class="c2">AUTORIZACIÓN PARA EL TRATAMIENTO DE DATOS PERSONALES. </span><span>Autorizo de manera libre, previa, expresa, voluntaria e informada a la sociedad </span><span class="c2">EDWCAR SAS</span>
                    <span>&nbsp;identificada con </span><span class="c2">NIT. 900.595.473–8</span>
                    <span class="c4">
                        , para cesión, transferencia y trasmitir datos e información, recolectar, almacenar, depurar, usar, analizar, circular, actualizar y cruzar con información propia o de terceros, mis datos personales que
                        recolecte, almacene, use y trate mis datos personales con el fin de contactarme, notificarme, y elaborar certificados en relación con el curso de conducción tomado para aspirante a conductor, recibir
                        información publicitaria a través de mi correo o número celular, contactarme para desarrollar las actividades propias de su objeto social.
                    </span>
                </p>
                <p class="c6"><span class="c4">&nbsp;</span></p>
                <p class="c24">
                    <span>El tratamiento de mis datos personales debe estar sujeto a la protección establecida en la </span><span class="c2">Ley 1581 de 2012</span><span>, y su </span>
                    <span class="c2">Decreto reglamentario 1377 de 2013</span><span>, así como a la </span><span class="c2">Política de Tratamiento de datos personales</span>
                    <span>&nbsp;publicada en la página web de la entidad </span><span class="c18 c17 c2">edwcar.com</span>
                    <span class="c48"></span><span class="c48">&nbsp;</span>
                </p>
                <p class="c6"><span class="c48">&nbsp;</span></p>
                <p class="c24">
                    <span>
                        En cualquier momento podré ejercer los derechos establecidos en estas normas y particularmente revocar la autorización prestada o solicitar la supresión de mis datos personales. Dicha solicitud la
                        podré realizar mediante el envío de una comunicación a la
                    </span>
                    <span class="c2">sede académica - administrativa Calle 63 No 24-28</span><span>, </span><span class="c2">sede académica norte Autopista norte 146-48 Local 253 C.C. Granada Hills</span>
                    <span>&nbsp;según corresponda, o por medio de llamada telefónica al teléfono 744 4499 (Bogotá-Chapinero), 744 4488 (Bogotá-Norte) o al correo electrónico </span>
                    <span class="c2">servicioalcliente@ewdcar.com. </span><span class="c4">&nbsp;</span>
                </p>
                <p class="c6"><span class="c4">&nbsp;</span></p>
                <p class="c24"><span class="c4">La información para el tratamiento de mis datos personales la he suministrado de manera voluntaria y es verídica. </span></p>
                <p class="c6"><span class="c4">&nbsp;</span></p>
                <p class="c6"><span class="c4">&nbsp;</span></p>
                <p class="c52"><span class="c2">Para constancia se firma en Bogotá a los ( &nbsp; ) días del ( &nbsp; ) del año ( &nbsp; &nbsp; &nbsp;). </span></p>
                <p class="c96"><span class="c2">&nbsp;</span></p>

                <div>
                    <p class="c83"><span class="c39 c88">&nbsp;</span></p>
                    <p class="c78">
                        <span style="overflow: hidden; display: inline-block; margin: 0px 0px; border: 0px solid #000000; transform: rotate(0rad) translateZ(0px); -webkit-transform: rotate(0rad) translateZ(0px); width: 752.16px; height: 0.64px;">
                            <img alt="" src="https://edwcar.com/assets/img/image1.png" style="width: 752.16px; height: 0.64px; margin-left: 0px; margin-top: 0px; transform: rotate(0rad) translateZ(0px); -webkit-transform: rotate(0rad) translateZ(0px);" title="">
                        </span>
                    </p>
                </div>
                <p style="text-align: center;">
                    <button class="btn" id="close_normas_educativas">Acepto</button>
                </p>
            </div>

        </div>
    </div>

    <?php
    include 'includes/footer.php';
    ?>
</body>

</html>