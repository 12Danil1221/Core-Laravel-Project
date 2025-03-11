<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Fitnes</title>
        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
        <style>
        @media (max-width: 1550px) {
            main .services_advantages_№1 {
                padding: 29px 44px;
            }

            main .services_advantages_№2 {
                padding: 29px 44px;
            }

            main .services_advantages_№3 {
                position: relative;
                padding: 29px 44px;
                height: 279px;
            }

            main .services_ruby {
                display: flex;
                justify-content: space-between;
            }
        }

        @media (max-width: 1309px) {
            main .services_advantages_№1 {
                height: auto;
            }

            main .services_advantages_№2 {
                height: auto;
            }

            main .services_advantages_№3 {
                height: auto;
            }

            main .services_ruby {
                display: flex;
                flex-wrap: wrap;
                justify-content: start;
            }
        }

        .header_center {
            display: flex;
            justify-content: center;
        }

        ul {
            display: flex;
            gap: 2rem;
            list-style-type: none;
            text-decoration: none;
        }

        a {
            text-decoration: none;
        }

        .nav_links {
            color: white;
        }

        .services_info {
            color: white;
        }

        * {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }

        .slider {
            position: relative;
            overflow: hidden;
        }

        .slide {
            display: none;
            object-fit: cover;
        }

        .active {
            display: block;
        }

        .slide-header {
            display: none;

        }


        .active-header {
            display: block;

            animation: fadeIn 0.9s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        input:checked+.active-header {
            transform: translateX(26px);
        }

        .button-feedback {
            position: relative;
            height: 1%;
        }

        .services_advantages_№1 {
            box-shadow: rgba(13, 3, 28, 0.15) 0px 6px 20px;
            background-color: rgb(21, 77, 66);
            padding: 49px 84px;
            height: 279px;
        }

        .services_advantages_№2 {
            background-color: rgb(21, 77, 66);
            padding: 49px 84px;
            height: 279px;
        }

        .services_advantages_№3 {
            background-color: rgb(21, 77, 66);
            padding: 18px 84px;
            height: 342px;
        }

        .services_ruby {
            display: flex;
            justify-content: space-around;
            width: auto;
            color: white;
        }

        .services_img {
            background-color: aliceblue;
        }

        .paginate {
            color: black;
        }
        </style>
    </head>

    <body>
        <header class="header" id="home">
            <div class="header_center" style="background-color: black;">
                <nav>
                    <ul class="nav_list">
                        <li><a class="nav_links" href='#home'>Главная</a></li>
                        <li><a class="nav_links" href='#about'>О нас</a></li>
                        <li><a class="nav_links" href="#services">Сервис</a></li>
                        <li><a class="nav_links" href="#reviews">Отзывы</a></li>
                        <li><a class="nav_links" href="#contacts">Наши контакты</a></li>
                        <li>
                            <form id="logout-btn">
                                @csrf
                                <!-- Кнопка в шаблоне -->
                                <button type="submit" class="btn btn-danger">
                                    🔥Выход
                                </button>
                            </form>

                            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
                                integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
                                crossorigin="anonymous">
                            </script>
                            <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
                            <!-- Или для параноиков: -->
                            <script>
                            $(document).ready(function() {
                                $('#logout-btn').click(function() {
                                    $.ajax({
                                        type: 'POST',
                                        url: '/api/logout',
                                        headers: {
                                            'Authorization': 'Bearer ' + localStorage.getItem(
                                                'token')
                                        },
                                        success: function(data) {
                                            console.log(data);
                                            localStorage.removeItem('token');
                                            window.location.href = '/api/login';
                                        },
                                        error: function(xhr, status, error) {
                                            console.log(xhr.responseText);
                                            window.location.href = '/api/login';
                                        }
                                    });
                                });
                            });
                            </script>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="hero_section">
                <div class="slide-header active-header" style="padding:8rem 2rem;  background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('https://images.unsplash.com/photo-1457305237443-44c3d5a30b89?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w1MTUzNXwwfDF8c2VhcmNofDF8fCUyMldlYiUyMERldmVsb3BtZW50JTIyfGVufDB8fHx8MTc0MDczNDg4Nnww&ixlib=rb-4.0.3&q=80&w=1080'); height: 460px;
    width: auto; overflow:hidden; color:white;">
                    <h1 style="font-size: 48px;">01/<small>02</small></h1>
                    <h1>Преобразите своё пространство</h1>
                    <p>Преобразуйте вашу жилую среду в шедевр с помощью наших экспертных услуг дизайна. Мы <br>
                        специализируемся на создании индивидуальных интерьеров, которые сочетают элегантность и <br>
                        функциональность, гарантируя, что каждая деталь отражает ваш личный стиль. Наша <br>
                        преданная команда тщательно разрабатывает каждый проект от концепции до завершения, чтобы
                        <br>
                        создать пространства, которые вдохновляют и соответствуют вашему образу жизни. Изучите <br>
                        возможности и превратите ваш дом в святилище утонченности и комфорта.
                    </p>
                    <a href="#services" type="submit"
                        style="display:inline-table; width:8rem; padding: 0.6rem 0px; text-align: center; background-image: linear-gradient(-180deg, rgb(142, 98, 255) 0%, rgb(60, 0, 150) 96%); border:1px ; border-radius:1rem; color: white;">Services</a>
                    <br>
                    <a onclick="nextSlideHeader()" style="font-size: 48px; cursor: pointer;">></a>
                </div>

                <div class="slide-header" style="padding:8rem 2rem; background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('https://imagedelivery.net/xaKlCos5cTg_1RWzIu_h-A/8d9284cb-632b-4066-d2fe-317d9e915e00/public');     height: 460px;
    width: auto; overflow:hidden; color:white;">
                    <h1 style="font-size: 48px;">02/<small>02</small></h1>
                    <h1>Test</h1>
                    <p>FGEJWIJJWJIGWMGW</p>
                    <a href="#about" type="submit"
                        style="display:inline-table; width:8rem; padding: 0.6rem 0px; text-align: center; background-image: linear-gradient(-180deg, rgb(142, 98, 255) 0%, rgb(60, 0, 150) 96%); border:1px ; border-radius:1rem; color: white;">About</a>
                    <br>
                    <a onclick="backSlideHeader()" style="font-size: 48px; cursor: pointer;">
                        < </a>
                </div>
            </div>
        </header>
        <main>
            <section class="about" id="about" style="text-align: center; padding: 49px 84px;
    height: 279px;">
                <h1>Узнайте больше о нас</h1>
                <p>В Нет мы специализируемся на помощи клиентам в создании веб-сайтов, которые <br>
                    соответствуют их потребностям. Будь то личный блог, портфолио или бизнес-сайт, наша <br>
                    команда поможет вам воплотить ваши цифровые мечты в реальность. Откройте для себя мир <br>
                    веб-разработки с легкостью и профессионализмом. Добро пожаловать в Нет.</p>
            </section>
            <section class="services" id="services">
                <div class="services_ruby">
                    <div class="services_advantages_№1">
                        <h1>Поиск ресурсов</h1>
                        <p>Используя наши обширные знания и ресурсы, <br>
                            мы проводим тщательные исследования, <br>
                            чтобы помочь вам найти идеальные <br>
                            инструменты и платформы для создания <br>
                            вашего веб-сайта.</p>
                        <a class="services_info" href="">Contact ></a>
                    </div>
                    <div class="services_advantages_№2">
                        <h1>
                            Поддержка</h1>
                        <p>Используя наши обширные знания и ресурсы, <br>
                            мы проводим тщательные исследования, <br>
                            чтобы помочь вам найти идеальные <br>
                            инструменты и платформы для создания <br>
                            вашего веб-сайта.</p>
                        <a class="services_info" href="">Contact ></a>
                    </div>
                    <div class="services_advantages_№3">
                        <h1>Оценка <br>
                            проектов</h1>
                        <p>Используя наши обширные знания и ресурсы, <br>
                            мы проводим тщательные исследования, <br>
                            чтобы помочь вам найти идеальные <br>
                            инструменты и платформы для создания <br>
                            вашего веб-сайта.</p>
                        <a class="services_info" href="">Contact ></a>
                    </div>
                </div>
                <div class="services_img">
                    <div>
                        @if($image = 0)
                        <h1>Создание Изображения:</h1>
                        <form action="{{ route('fitnes-livewire-store-image') }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            <input type="text" name="title_image">
                            <input type="file" name="file">
                            <textarea name="description_image"></textarea>
                            <button type="submit">Создать</button>
                        </form>
                        @endif
                        <h1 style="text-align: center;">Галлерея</h1>
                        <div style="display: flex; flex-wrap: wrap; gap: 1rem; justify-content: center;">
                            @foreach ($images as $image)
                            <div class="flex flex-col" style="display: block; padding: 1rem;">
                                <img style="width: 354px; height: 256px;"
                                    src="{{ asset('storage/'.$image->file_path) }}" alt="{{ $image->title_image }}">
                                <div>
                                    <div class="mt-4 font-semibold text-[var(--primary-color)]">
                                        {{ $image->title_image }}</div>
                                    <div class="mt-4 text-[var(--gray-text-color)]">{{ $image->description_image }}.
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="paginate" style="color:black; text-align:center;">
                            {{ $images->links() }}
                        </div>
                    </div>
                </div>
            </section>
            <section class="Reviews" id="reviews" style="display:grid; justify-content:center;">
                <h1 style="text-align:center;
    font-weight: 700;
    font-size: 42px;">Отзывы</h1>
                <div style="display: flex; align-items: center; gap: 1rem;">
                    <div class="slider"
                        style="display:flex; align-items: center; text-align: center; padding:80px 0px; width:20rem;">
                        <div class="slide active">
                            <div style="display: flex; align-items: center;">
                                <button type="submit" class="button-feedback" onclick="backSlide()"
                                    style="background-color: black; color: white;">
                                    &lt;</button>
                                <div
                                    style="display: grid; padding:0px 20px; border:0.2rem solid gainsboro; border-radius: 1rem;">

                                    <!-- image_reviews -->
                                    <div class="Testimonials6styled__ImageFrame-sc-e6g5o5-5 gDRQkx">
                                        <div class="Testimonials6styled__ImageWrapper-sc-e6g5o5-6 kGCzTL">
                                            <figure class="lazy-figure styled__Figure-sc-13kgj0f-0 kUeEHn"><img
                                                    style="width: 95px; height:95px; border-radius:0.5rem;"
                                                    alt="Slider image" sizes="[object Object]"
                                                    src="https://static.rfstat.com/renderforest/images/website_maker_images/components/component-images/testimonial6-2.0.0.jpg"
                                                    class="  img-loaded Testimonials6styled__Img-sc-e6g5o5-7 klXrSZ Testimonials6styled__Img-sc-e6g5o5-7 klXrSZ">
                                            </figure>
                                            <div
                                                class="image-state-overlay ImgStateOverlaystyled__StateOverlay-sc-1kuc7p9-4 dfXVKr">
                                                <div class="ImgStateOverlaystyled__Content-sc-1kuc7p9-0 ilVaPK">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end image_reviews -->
                                    <h2 class="feedback-email">Test Name</h2>
                                    <hr>
                                    <p class="feedback-description">Нет помогли мне осуществить мои мечты по созданию
                                        веб-сайта! Их
                                        команда была невероятно информированной и помогла мне разработать идеальный
                                        проект.
                                        Персонализированная поддержка и внимание к деталям сделали весь процесс
                                        легким и
                                        приятным.</p>
                                </div>
                                <button type="submit" class="button-feedback" onclick="nextSlide()"
                                    style="background-color: black; color: white;">
                                    &gt;</button>
                            </div>
                        </div>
                        <div class="slide">
                            <div style="display: flex;  align-items: center;">
                                <button type="submit" class="button-feedback" onclick="backSlide()"
                                    style="background-color: black; color: white;">
                                    &lt;</button>
                                <div
                                    style="display: grid; padding:0px 20px; border:0.2rem solid gainsboro; border-radius: 1rem;">
                                    <!-- image_reviews -->
                                    <div class="Testimonials6styled__ImageFrame-sc-e6g5o5-5 gDRQkx">
                                        <div class="Testimonials6styled__ImageWrapper-sc-e6g5o5-6 kGCzTL">
                                            <figure class="lazy-figure styled__Figure-sc-13kgj0f-0 kUeEHn"><img
                                                    style="width: 95px; height:95px; border-radius:0.5rem;"
                                                    alt="Slider image" sizes="[object Object]"
                                                    src="https://static.rfstat.com/renderforest/images/website_maker_images/components/component-images/testimonial6-2.0.0.jpg"
                                                    class="  img-loaded Testimonials6styled__Img-sc-e6g5o5-7 klXrSZ Testimonials6styled__Img-sc-e6g5o5-7 klXrSZ">
                                            </figure>
                                            <div
                                                class="image-state-overlay ImgStateOverlaystyled__StateOverlay-sc-1kuc7p9-4 dfXVKr">
                                                <div class="ImgStateOverlaystyled__Content-sc-1kuc7p9-0 ilVaPK">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end image_reviews -->
                                    <h2 class="feedback-email">Test Name2</h2>
                                    <hr>
                                    <p class="feedback-description">Нет помогли мне осуществить мои мечты по созданию
                                        веб-сайта! Их
                                        команда была невероятно информированной и помогла мне разработать идеальный
                                        проект.
                                        Персонализированная поддержка и внимание к деталям сделали весь процесс
                                        легким и
                                        приятным.</p>
                                </div>
                                <button type="submit" class="button-feedback" onclick="nextSlide()"
                                    style="background-color: black; color: white;">
                                    &gt;</button>
                            </div>
                        </div>
                    </div>

            </section>
            <section class="contacts" id="contacts"
                style="display:grid; text-align: center; background: rgb(22, 31, 30); color:white;">
                <h1 style="font-weight: 700;
    font-size: 42px;">Свяжитесь с нами</h1>
                <div class="contacts_info"
                    style="display: flex; justify-content: center; padding: 80px 0px; gap:2rem; text-align:center;">
                    <div class="contacts_card">
                        <div style="color: rgb(34, 150, 122);">
                            <svg style="background-color: rgb(34, 150, 122);" xmlns="http://www.w3.org/2000/svg"
                                width="80" height="80" viewBox="0 0 32 32">
                                <path
                                    d="M21.333 3.778H9.926a.815.815 0 00-.815.815v22.815c0 .45.365.815.815.815h11.407c.45 0 .815-.365.815-.815V4.593a.815.815 0 00-.815-.815zm0-2.445c1.8 0 3.259 1.459 3.259 3.259v22.815c0 1.8-1.459 3.259-3.259 3.259H9.926a3.259 3.259 0 01-3.259-3.259V4.592c0-1.8 1.459-3.259 3.259-3.259h11.407zM15.63 24.148a1.63 1.63 0 110 3.26 1.63 1.63 0 010-3.26zm2.037-19.555a.407.407 0 110 .814h-4.074a.407.407 0 110-.814h4.074z">
                                </path>
                            </svg>
                            <h2>Contacts</h2>
                        </div>
                        <p>info@youraddress.com <br> 646-675-5974</p>
                    </div>
                    <div class="contacts_card">
                        <div style="color: rgb(34, 150, 122);">
                            <svg style="background-color: rgb(34, 150, 122);" xmlns="http://www.w3.org/2000/svg"
                                width="80" height="80" viewBox="0 0 32 32">
                                <path
                                    d="M20.348 20.277a1.055 1.055 0 00-1.148.975v.01a1.055 1.055 0 00.975 1.148h.01c6.806.579 9.681 2.519 9.681 3.2 0 .955-4.714 3.2-13.867 3.2s-13.867-2.245-13.867-3.2c0-.681 2.875-2.621 9.681-3.2a1.07 1.07 0 00.985-1.148v-.01a1.07 1.07 0 00-1.148-.985h-.01C6.266 20.734-.002 22.41-.002 25.61c0 3.667 8.3 5.333 16 5.333s16-1.666 16-5.333c0-3.2-6.268-4.876-11.652-5.333z">
                                </path>
                                <path d="M14.933 13.775V25.6a1.067 1.067 0 102.134 0V13.775a6.398 6.398 0 10-2.133 0z">
                                </path>
                            </svg>
                            <h2>Location</h2>
                        </div>
                        <p>3961 Small Street, New York <br> United States</p>
                    </div>
                    <div class="contacts_card">
                        <div style="color: rgb(34, 150, 122);">
                            <svg style="background-color: rgb(34, 150, 122);" xmlns="http://www.w3.org/2000/svg"
                                width="80" height="80" viewBox="0 0 32 32">
                                <path opacity="0.9"
                                    d="M15.987 2.667C8.627 2.667 2.667 8.64 2.667 16s5.96 13.333 13.32 13.333c7.373 0 13.347-5.973 13.347-13.333S23.361 2.667 15.987 2.667zm.013 24c-5.893 0-10.667-4.773-10.667-10.667S10.106 5.333 16 5.333 26.667 10.106 26.667 16 21.894 26.667 16 26.667z">
                                </path>
                                <path opacity="0.9" d="M16.667 9.333h-2v8l7 4.2 1-1.64-6-3.56z"></path>
                            </svg>
                            <h2>Working hours</h2>
                        </div>
                        <p>Open: 12:00 pm <br> Closed: 22:00 pm</p>
                    </div>
                </div>
                <div class="contacts_form">
                    <h1 style="font-weight: 700; font-size: 42px;">Оставить отзыв</h1>
                    <form action="{{ route('fitnes-livewire-store') }}" style="padding: 1rem;" method="post">
                        @csrf
                        <input type="email" placeholder="Введите ваш email" name="email"
                            style="width:15rem; height:2rem; border-radius: 0.5rem;"> <button type="submit"
                            style="width:5rem; height:2rem; position:relative; left:-1rem; border:0px; border-radius:0.5rem; background: linear-gradient(-180deg, rgb(34, 150, 122) 0%, rgb(21, 77, 66) 96%) no-repeat; color:white;">Отправить</button>
                        <br>
                        <br><textarea name="description" placeholder="Введите ваш отзыв"
                            style="width: 318px; height: 71px;"></textarea>
                    </form>
                </div>
            </section>
        </main>
        <footer style="text-align: center; background: rgb(22, 31, 30); color:white;">
            <img src="" alt="facebook">
            <p>© Все права защищены.</p>
        </footer>
    </body>
    <script>
    let currentIndex = 0;
    const slides = document.querySelectorAll('.slide');

    function showSlide(index) {
        slides.forEach(slide => slide.classList.remove('active'));
        slides[index].classList.add('active');
    }

    function nextSlide() {
        currentIndex = (currentIndex + 1) % slides.length;
        showSlide(currentIndex);
    }

    function backSlide() {
        currentIndex = (currentIndex - 1 + slides.length) % slides.length;
        showSlide(currentIndex);
    }
    if (slides.length > 0) {
        setInterval(nextSlide, 3000)
        showSlide(currentIndex);
    }

    const slides2 = document.querySelectorAll('.slide-header');

    function showSlide2(index2) {
        slides2.forEach(slide2 => slide2.classList.remove('active-header'));
        slides2[index2].classList.add('active-header');
    }

    function nextSlideHeader() {
        currentIndex = (currentIndex + 1) % slides2.length;
        showSlide2(currentIndex);
    }

    function backSlideHeader() {
        currentIndex = (currentIndex - 1 + slides2.length) % slides2.length;
        showSlide2(currentIndex);
    }
    </script>

    </html>
</div>