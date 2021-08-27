@push('title_base')
    Citas
@endpush
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/dycalendar.css') }}">
    <style>

    </style>
@endpush
<div>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');

        .container .calen {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        section {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: #a8a8a8;
            overflow: hidden;
        }

        section::before {
            content: '';
            position: absolute;
            width: 400px;
            height: 400px;
            background: linear-gradient(#ffc107, #e91e63);
            border-radius: 50%;
            transform: translate(-250px, -120px);
        }

        section::after {
            content: '';
            position: absolute;
            width: 350px;
            height: 350px;
            background: linear-gradient(#2196f3, #31ff38);
            border-radius: 50%;
            transform: translate(250px, 150px);
        }

        .box {
            position: relative;
            z-index: 10;
        }

        .conten {
            position: relative;
            width: 400px;
            min-height: 400px;
            background: rgba(255, 255, 255, 0.1);
            box-shadow: 0 25px 45px rgba(0, 0, 0, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.5);
            border-right: 1px solid rgba(255, 255, 255, 0.2);
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(25px);
            border-radius: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        #dycalendar {
            width: 100%;
            padding: 20px;
        }

        #dycalendar table {
            width: 100%;
            margin-top: 40px;
            border-spacing: 5px !important;

        }

        #dycalendar table tr:nth-child(1) td {
            background: #fff;
            color: #111;
            border-radius: 1px;
            font-weight: 600;
        }

        #dycalendar table td {
            color: #fff;
            padding: 10px;
            cursor: pointer;
            border-radius: 4px;
        }



        }

        #dycalendar table td:hover {
            background: #fff;
            color: #111 !important;
        }

        .dycalendar-month-container .dycalendar-today-date,
        .dycalendar-month-container .dycalendar-target-date {
            background: #fff;
            color: #111 !important;
        }

        .dycalendar-month-container .dycalendar-header .dycalendar-prev-next-btn.prev-btn {
            background: #fff;
            color: #111;
            width: 44px;
            height: 38px;
            left: 4px;
            border-radius: 4px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 24px;
        }

        .dycalendar-month-container .dycalendar-header .dycalendar-prev-next-btn.next-btn {
            background: #fff;
            color: #111;
            width: 44px;
            height: 38px;
            right: 4px;
            border-radius: 4px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 24px;
        }

        .dycalendar-month-container .dycalendar-span-month-year {
            color: #fff;
            font-size: 1.5em;
            font-weight: 500;
        }

    </style>
    <div class="container">
        <div class="calen">
            <section>
                <div class="box">
                    <div class="conten">
                        <div id="dycalendar"></div>
                    </div>
                </div>
            </section>

        </div>
    </div>

    <div id="request" class="form-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                        <h2>Rellene el siguiente formulario para solicitar una reunión</h2>
                        <p>Aclararemos tus dudas y ajustaremos el presupuesto a la medida de tu negocio tenemos, paquete
                            que seguramente entrarán en tu presupuesto.</p>
                        <ul class="list-unstyled li-space-lg">
                            <li class="media">
                                <i class="fas fa-check"></i>
                                <div class="media-body"><strong class="blue">Automate your marketing</strong> activities
                                    and get results today</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-check"></i>
                                <div class="media-body"><strong class="blue">Interact with all your</strong> targeted
                                    customers at a personal level</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-check"></i>
                                <div class="media-body"><strong class="blue">Convince them to buy</strong> your
                                    company's awesome products</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-check"></i>
                                <div class="media-body"><strong class="blue">Save precious time</strong> and invest it
                                    where you need it the most</div>
                            </li>
                        </ul>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">

                    <!-- Request Form -->
                    <div class="form-container">
                        <form id="requestForm" data-toggle="validator" data-focus="false">
                            <div class="form-group">
                                <input type="text" class="form-control-input" id="rname" name="rname" required>
                                <label class="label-control" for="rname">Full name</label>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control-input" id="remail" name="remail" required>
                                <label class="label-control" for="remail">Email</label>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <input type="date" class="form-control-input" id="rphone" name="rphone" required>

                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <select class="form-control-select" id="rselect" required>
                                    <option class="select-option" value="" disabled selected>Interested in...</option>
                                    <option class="select-option" value="informacion">Reporte de falla</option>
                                    <option class="select-option" value="Cotisacion">Modificaciones</option>
                                    <option class="select-option" value="virtual">Contratación de servicios</option>
                                </select>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group checkbox">
                                <input type="checkbox" id="rterms" value="Agreed-to-Terms" name="rterms" required>I
                                agree with Evolo's stated <a href="privacy-policy.html">Privacy Policy</a> and <a
                                    href="terms-conditions.html">Terms & Conditions</a>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control-submit-button">REQUEST</button>
                            </div>
                            <div class="form-message">
                                <div id="rmsgSubmit" class="h3 text-center hidden"></div>
                            </div>
                        </form>
                    </div> <!-- end of form-container -->
                    <!-- end of request form -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of form-1 -->

    @push('scripts')
        <script src="{{ asset('assets/js/dycalendar.js') }}"></script>
        <script>
            dycalendar.draw({
                target: '#dycalendar',
                type: 'month',
                dayformat: 'full',
                monthformat: 'full',
                highlighttargetdate: true,
                prevnextbutton: 'show',
            })
        </script>
    @endpush
