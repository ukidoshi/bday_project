<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Приглашение на юбилей</title>
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kaushan+Script&amp;display=swap">
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
</head>

<body id="page-top" data-bs-spy="scroll" data-bs-target="#mainNav" data-bs-offset="54">
<header class="masthead"
        style="background: linear-gradient(black 0%, transparent 57%, black 98%), url('/assets/img/af6096570b0c4f37547820aae70f7fd4.jpg') center / cover space;height: 600px;">
    <div class="container">
        <div class="intro-text" style="padding-top: 91px;">
            <div class="intro-heading text-uppercase animate__animated animate__fadeInUp animate__delay-1s"><span
                    style="text-align: center;font-size: 30px;line-height: 0px;">Приглашение на юбилей</span></div>
            <div class="intro-lead-in animate__animated animate__fadeInUp animate__slow animate__delay-2s"><span>Дорогие гости!<br><br>Приглашаю на свой юбилей</span></div>
            <div class="intro-lead-in animate__animated animate__fadeInUp animate__slow animate__delay-3s"><span>Буду рад провести этот вечер в близком кругу!</span></div>
        </div>
    </div>
</header>
<section class="bg-light" id="team">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-sm-4">
                <div class="team-member"><img class="rounded-circle mx-auto"
                                              src="{{asset('assets/img/team/1464717019_oorzhak-valeriy-okpan-oolovich.jpg')}}">
                    <h4>Ооржак Валерий Окпан-оолович</h4>
                    <p class="text-muted">Кандидат экономических наук, старший научный сотрудник лаборатории
                        региональной экономики, Тувинский институт комплексного освоения природных ресурсов, Сибирского
                        отделения РАН. </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="text-uppercase">Когда и где</h2>
                <h3 class="text-muted section-subheading">___________________________________</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <ul class="list-group timeline">
                    <li class="list-group-item">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="/assets/img/about/1.jpg">
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>23-го февраля</h4>
                                <h4 class="subheading">В ресторане "Ресторан"</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted" style="text-align: center;">Адрес: ул. Такая-то, д. 12<br><br>&nbsp;
                                    -&nbsp; в 19:00&nbsp; -</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="text-uppercase section-heading">жду вас!</h2>
                <h3 class="text-muted section-subheading">Ниже Вы сможете принять приглашение, заполнив данные о
                    себе.<br><br>Также, вы можете принять приглашение за других.</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12" id="contactFormDiv">
                <form id="contactForm" name="contactForm">
                    <div class="row">
                        <div class="col-md-6 col-xl-12 guests">

                        </div>
                        <div class="w-100"></div>
                        <div class="col-lg-12 text-end">
                            <div id="success"></div>
                            <a class="btn btn-primary btn-xl text-uppercase" id="addGuestButton"
                                    style="width: 106.078px;height: 71px;text-align: center;font-size: 12px;padding-left: 10px;padding-right: 10px;">
                                Добавить гостя
                            </a>
                        </div>
                        <div class="col-lg-12 text-center" style="padding-top: 20px;">
                            <div id="success-1"></div>
                            <button class="btn btn-primary btn-xl text-uppercase" id="sendGuestsButton"
                                    type="button">Принять
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4"><span class="copyright">Copyright&nbsp;© Nachyn Saryglar 2024</span></div>
        </div>
    </div>
</footer>
<script
        src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="/assets/js/script.min.js"></script>
<script type="text/javascript">

    var lastId = 1;

    function getGuestHtml(lastId) {
        return "<div class=\"form-group mb-3 guest\" id='guest_"+lastId+"'>\n" +
            "                                <small class=\"form-text flex-grow-1 lead\">Гость:</small>\n" +
            "                                <div style=\"\">\n" +
            "                                    <input class=\"form-control\" type=\"text\" name='name_"+lastId+"' id=\"name_"+lastId+"\"\n" +
            "                                                                   placeholder=\"Фамилия Имя\" required=\"\"\n" +
            "                                                                   style=\"margin-right: 10px;\">\n" +
            "                                    <div class=\"dropdown\" style=\"margin-top: 15px;\">\n" +
            "                                        <button class=\"btn btn-primary dropdown-toggle\" name='dropdown_button_"+lastId+"' aria-expanded=\"false\"\n" +
            "                                                data-bs-toggle=\"dropdown\" type=\"button\" id=\"dropdown_button_"+lastId+"\">Взрослый" +
            "                                        </button>\n" +
            "                                        <input type='text' value='adult' class='visually-hidden hidden_input_guest_type' name='guest_type_"+lastId+"'>\n" +
            "                                        <div class=\"dropdown-menu\"><a class=\"dropdown-item\" id=\"adult_dropdown_clicked_"+lastId+"\">Взрослый</a><a\n" +
            "                                                class=\"dropdown-item\" id=\"child_dropdown_clicked_"+lastId+"\">Ребенок</a></div>\n" +
            "                                    </div>\n" +
            "                       <a class=\"btn btn-primary delete-btn visually-hidden\" style='margin-left: 10px; height: 38px; margin-top: 15px;' id=\"delete_btn_clicked_"+lastId+"\">Убрать</a>\n" +
            "                                </div>\n" +
            "<hr style='color: white'>                            " +
            "</div>"
    }

    $("#addGuestButton").on("click", function () {
        lastId++;
        $(".guests").append(getGuestHtml(lastId));
        if (lastId === 7) {
            $("#addGuestButton").addClass("visually-hidden");
        }
        if (lastId >= 2) {
            $(".delete-btn").removeClass("visually-hidden");
        } else {
            $(".delete-btn").addClass("visually-hidden");
        }
    });

    $(".guests").append(getGuestHtml(lastId))
        .on("click", ".delete-btn", function () {
            let deleted_id = $(this).parent().parent().remove();
        })
        .on("click", ".dropdown-item", function () {
            let full_attrId = $(this).attr("id");
            let guest = full_attrId.slice(0,5);
            let id = full_attrId.slice(23,25);
            if (guest === "adult") {
                $(".hidden_input_guest_type").val("adult");
                $("#dropdown_button_"+id).text("Взрослый");
            } else {
                $(".hidden_input_guest_type").val("child");
                $("#dropdown_button_"+id).text("Ребенок");
            }
        });

    $(document).on("click", "#sendGuestsButton", function () {
        let sendData = $(this).parent().parent().parent().serializeArray();
        $.ajax({
            type: "POST",
            url: "{{ env('APP_URL') }}/api/addGuests",
            data: sendData,
            success: function (success) {
                console.log(success)
            }
        });
    })

</script>
</body>

</html>
