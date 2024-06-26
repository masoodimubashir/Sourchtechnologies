<!DOCTYPE html>
<!-- Last Published: Fri Feb 16 2024 19:06:42 GMT+0000 (Coordinated Universal Time) -->
<html data-wf-domain="www.hyticon.com" data-wf-page="60c72296ba3a283761bceb4e" data-wf-site="6092932467852e3af1741898">

<head>
    <meta charset="utf-8" />
    <title>Sourch Technologies— IT Solutions</title>

    @include('Front.Header')


    <style>
        main {
            display: flex;
            justify-content: space-evenly;
            align-items: center;
            padding: 50px;
        }

        main ul {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            width: 100%;
            color: whitesmoke;
        }



        main ul li:hover {
            transform: translateX(10px);
            cursor: pointer;
            transition-delay: .2s;
            transition-duration: .5s
        }

        .card {
            width: 24rem;
            height: 36rem;
            border-radius: 10px;
            overflow: hidden;
            position: relative;
            color: #f0f0f0;
            gap: 1rem;
            box-shadow: 0 0px 0px 2px rgba(255, 255, 255, .2);

        }

        .card img {
            position: absolute;
            object-fit: cover;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            opacity: 0.9;
            transition: opacity 0.2s ease-out;
        }

        .card h2 {
            position: absolute;
            inset: auto auto 20px 20px;
            margin: 0;
            font-size: 1.5rem;
            transition: inset 0.3s 0.3s ease-out;
            font-weight: bolder;
            color: brown;
        }

        .card p {
            display: flex;
            align-items: center;
            justify-content: space-evenly;
            gap: 1rem;
            position: absolute;
            opacity: 0;
            max-width: 80%;
            transition: opacity 0.3s ease-out;
            color: white;
            font: bolder;



        }

        .card p i {
            font-size: 3rem;
            cursor: pointer;
            color: burlywood;
        }




        .card p {
            inset: auto auto 80px 30px;
        }



        .card:hover h2 {
            inset: auto auto 200px 20px;
            transition: inset 0.3s ease-out;
        }

        .card:hover p {
            opacity: 1;
            transition: opacity 0.5s 0.1s ease-in;
        }

        .card:hover img {
            transition: opacity 0.3s ease-in;
            opacity: 1;
        }

        .material-symbols-outlined {
            vertical-align: middle;
        }
    </style>


</head>

<body>

    <div class="g-root w-embed">
        <style>
            @media (min-width: 992px) {
                :root {
                    font-size: .5208333333333333vw;
                }
            }

            @media (max-width: 991px) and (min-width: 480px) {
                :root {
                    font-size: 1.3020833333333335vw;
                }
            }

            @media (max-width: 479px) {
                :root {
                    font-size: 2.666666666666667vw;
                }
            }

            video {
                mix-blend-mode: screen;
            }

            .c-threat-img {
                mix-blend-mode: lighten;
            }
        </style>
    </div>




    <div style="opacity:0" class="o-page">
        @include('Front.Navbar')
        <header class="o-section s--mt-n56">
    </div>

    <div class="o-container is--z-3">
        <div class="o-layout is--pt-130--pl-362 m--pt-120--pl-57 s--pt-356--pl-0">
            <div class="o-l808 m--l418 s--100">
                <h1 class="o-h-112 m--60">
                    <Your data-w-id="4645020b-b08f-33c8-a40e-9267901c0b6c"
                        style="-webkit-transform:translate3d(0, 100%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 100%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 100%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 100%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0"
                        class="u-h112line-1 m--57 gradient">Meet the People Fueling Your Success</span>
                </h1>
            </div>
        </div>

    </div>
    </header>


    <section class="o-section is--mt-382 md--mt-120 sm--mt-0">
        <hr>

        <br>
        <br>

        <div class="o-container is--z-3">
            <div class="o-l610 is--ml-84 md--ml-57">
                <h2 class="o-h-72">Founding Members</h2>
            </div>

            <main>
                <div class = "card">
                    <img src="{{ asset('assets/Team/sageer_yousuf.jpeg') }}" alt="">
                    <div class="card-content">
                        <h2>
                            Sageer Yousuf Pandith <br>
                            Managing Director
                        </h2>
                        <p>
                            <i class="fa fa-facebook"></i>

                            <i class="fa fa-google"></i>

                            <i class="fa fa-twitter"></i>

                        </p>
                    </div>

                </div>
                <div class = "card">
                    <img src="{{ asset('assets/Team/mohd_yousuf_pandith.jpeg') }}" alt="">
                    <div class="card-content">
                        <h2>
                            Mohammad Yousf Pandith
                            <br>
                            Chief Financial Officer
                        </h2>
                        <p>
                            <i class="fa fa-facebook"></i>

                            <i class="fa fa-google"></i>

                            <i class="fa fa-twitter"></i>

                        </p>
                    </div>

                </div>
                <div class = "card">
                    <img src="{{ asset('assets/Team/Akhter_Mohtashim.jpeg') }}" alt="">
                    <div class="card-content">
                        <h2>
                            Akhter Mohtashim
                            <br>
                            Co-Founder
                        </h2>
                        <p>
                            <i class="fa fa-facebook"></i>

                            <i class="fa fa-google"></i>

                            <i class="fa fa-twitter"></i>

                        </p>
                    </div>

                </div>



            </main>
        </div>


    </section>


    <section class="o-section is--mt-382 md--mt-120 sm--mt-0">
        <hr>

        <br>
        <br>

        <div class="o-container is--z-3">
            <div class="o-l610 is--ml-84 md--ml-57">
                <h2 class="o-h-72">Directors</h2>
            </div>

            <main>

                <div class = "card">
                    <img src="{{ asset('assets/Team/sandeep.jpeg') }}" alt="">
                    <div class="card-content">
                        <h2>
                            Sandeep Kour
                            <br>

                            Director of HR
                        </h2>
                        <p>
                            <i class="fa fa-facebook"></i>

                            <i class="fa fa-google"></i>

                            <i class="fa fa-twitter"></i>

                        </p>
                    </div>

                </div>

                <div class = "card">
                    <img src="{{ asset('assets/Team/rafiq_ahmad_dar.jpeg') }}" alt="">
                    <div class="card-content">
                        <h2>
                            Rafique Ahmad Dar
                            <br>
                            Director of Project Management
                        </h2>
                        <p>
                            <i class="fa fa-facebook"></i>

                            <i class="fa fa-google"></i>

                            <i class="fa fa-twitter"></i>

                        </p>
                    </div>

                </div>
                <div class = "card">
                    <img src="{{ asset('assets/Team/nisar_Ahmad_khan.jpeg') }}" alt="">
                    <div class="card-content">
                        <h2>
                            Nisar Ahmad Khan
                            <br>
                            Director Of Business Operations
                        </h2>
                        <p>
                            <i class="fa fa-facebook"></i>

                            <i class="fa fa-google"></i>

                            <i class="fa fa-twitter"></i>

                        </p>
                    </div>

                </div>
                <div class = "card">
                    <img src="{{ asset('assets/Team/rameez_maqbool.jpeg') }}" alt="">
                    <div class="card-content">
                        <h2>
                            Rameez Maqbool
                            <br>


                        </h2>
                        <p>
                            <i class="fa fa-facebook"></i>

                            <i class="fa fa-google"></i>

                            <i class="fa fa-twitter"></i>

                        </p>
                    </div>

                </div>



            </main>
        </div>


    </section>



    <section class="o-section is--mt-382 md--mt-120 sm--mt-0">
        <hr>

        <br>
        <br>

        <div class="o-container is--z-3">
            <div class="o-l610 is--ml-84 md--ml-57">
                <h2 class="o-h-72">Business Development Managers</h2>
            </div>

            <main>
                <div class = "card">
                    <img src="{{ asset('assets/Team/akhtar_mustafa.jpeg') }}" alt="">
                    <div class="card-content">
                        <h2>
                            Akhter Mustafa
                        </h2>
                        <p>
                            <i class="fa fa-facebook"></i>

                            <i class="fa fa-google"></i>

                            <i class="fa fa-twitter"></i>

                        </p>
                    </div>

                </div>
                <div class = "card">
                    <img src="{{ asset('assets/Team/amir_ahmad.jpeg') }}" alt="">
                    <div class="card-content">
                        <h2>
                            Amir Ahamd
                        </h2>
                        <p>
                            <i class="fa fa-facebook"></i>

                            <i class="fa fa-google"></i>

                            <i class="fa fa-twitter"></i>

                        </p>
                    </div>

                </div>
                <div class = "card">
                    <img src="{{ asset('assets/Team/zubair_utl_islam.jpeg') }}" alt="">
                    <div class="card-content">
                        <h2>
                            Zubair Ul Islam
                        </h2>
                        <p>
                            <i class="fa fa-facebook"></i>

                            <i class="fa fa-google"></i>

                            <i class="fa fa-twitter"></i>

                        </p>
                    </div>

                </div>

            </main>
        </div>


    </section>

    <section class="o-section is--mt-382 md--mt-120 sm--mt-0">
        <hr>

        <br>
        <br>

        <div class="o-container is--z-3">
            <div class="o-l610 is--ml-84 md--ml-57">
                <h2 class="o-h-72">Developers</h2>
            </div>

            <main>
                <div class = "card">
                    <img src="{{ asset('assets/Team/azhar_rashid_teli.jpeg') }}" alt="">
                    <div class="card-content">
                        <h2>
                            Azhar Rashid Teli
                            <br>
                            Full Stack Developer
                        </h2>
                        <p>
                            <i class="fa fa-facebook"></i>

                            <i class="fa fa-google"></i>

                            <i class="fa fa-twitter"></i>

                        </p>
                    </div>

                </div>
                <div class = "card">
                    <img src="{{ asset('assets/Team/krishna_priha.jpeg') }}" alt="">
                    <div class="card-content">
                        <h2>
                            Krishna Priha
                            <br>
                            UI/UX Designer
                        </h2>
                        <p>
                            <i class="fa fa-facebook"></i>

                            <i class="fa fa-google"></i>

                            <i class="fa fa-twitter"></i>

                        </p>
                    </div>

                </div>
                <div class = "card">
                    <img src="{{ asset('assets/Team/mubashir.jpeg') }}" alt="">
                    <div class="card-content">
                        <h2>
                            Taha Mubashir Masoodi
                            <br>
                            Full Stack Developer
                        </h2>
                        <p>
                            <i class="fa fa-facebook"></i>

                            <i class="fa fa-google"></i>

                            <i class="fa fa-twitter"></i>

                        </p>
                    </div>

                </div>

            </main>
        </div>


    </section>

    <section class="o-section is--mt-382 md--mt-120 sm--mt-0">
        <hr>

        <br>
        <br>

        <div class="o-container is--z-3">
            <div class="o-l610 is--ml-84 md--ml-57">
                <h2 class="o-h-72">Project Managers</h2>
            </div>

            <main>
                <div class = "card">
                    <img src="{{ asset('assets/Team/javaid_ali.jpeg') }}" alt="">
                    <div class="card-content">
                        <h2>
                            Javiad Ali
                        </h2>
                        <p>
                            <i class="fa fa-facebook"></i>

                            <i class="fa fa-google"></i>

                            <i class="fa fa-twitter"></i>

                        </p>
                    </div>

                </div>
                <div class = "card">
                    <img src="{{ asset('assets/Team/frahan_fayaz_rathar.jpeg') }}" alt="">
                    <div class="card-content">
                        <h2>
                            Farhan Fayaz Rather
                        </h2>
                        <p>
                            <i class="fa fa-facebook"></i>

                            <i class="fa fa-google"></i>

                            <i class="fa fa-twitter"></i>

                        </p>
                    </div>

                </div>
                <div class = "card">
                    <img src="{{ asset('assets/Team/ubaid_azam.jpeg') }}" alt="">
                    <div class="card-content">
                        <h2>
                            Ubaid Azam
                        </h2>
                        <p>
                            <i class="fa fa-facebook"></i>

                            <i class="fa fa-google"></i>

                            <i class="fa fa-twitter"></i>

                        </p>
                    </div>

                </div>

            </main>
        </div>


    </section>

    <section class="o-section is--mt-382 md--mt-120 sm--mt-0">
        <hr>

        <br>
        <br>

        <div class="o-container is--z-3">
            <div class="o-l610 is--ml-84 md--ml-57">
                <h2 class="o-h-72">
                    Business Development Executives
                </h2>
            </div>

            <main>
                <ul>
                    <li>
                        Taskeena Yousf
                    </li>
                    <li>
                        Shahnaza Bano.
                    </li>
                    <li>
                        Khyruna Nissa
                    </li>
                    <li>
                        Nisha Bakshi

                    </li>
                    <li>
                        Allysa Rose
                    </li>
                    <li>
                        Mehruk Hayat
                    </li>
                </ul>
            </main>
        </div>


    </section>

    <section class="o-section is--mt-382 md--mt-120 sm--mt-0">
        <hr>

        <br>
        <br>

        <div class="o-container is--z-3">
            <div class="o-l610 is--ml-84 md--ml-57">
                <h2 class="o-h-72">
                    Social Media Specialists
                </h2>
            </div>

            <main>

                <ul>
                    <li>
                        Maryama Akhter
                    </li>
                    <li>
                        Nissara Bano

                    </li>
                    <li>
                        Asima Fatimah
                    </li>

                </ul>

            </main>
        </div>


    </section>

    <section class="o-section is--mt-382 md--mt-120 sm--mt-0">
        <hr>

        <br>
        <br>

        <div class="o-container is--z-3">
            <div class="o-l610 is--ml-84 md--ml-57">
                <h2 class="o-h-72">
                    Outreach Specialists
                </h2>
            </div>

            <main>


                <ul>
                    <li>
                        Fatimah Sughra
                    </li>
                    <li>
                        Abida

                    </li>
                    <li>
                        Toufeeqa
                    </li>
                    <li>
                        Syed Hussain
                    </li>
                      <li>
                        Sajad Ahmad
                    </li>
                    <li>
                        Saima Maqbool
                    </li>

                </ul>

            </main>
        </div>
    </section>


    <section class="o-section is--mt-318 m--mt-240 s--mt-180">
        @include('Front.ContactSection')
    </section>

    @include('Front.Footer')
    </div>
    @include('Front.Script')
</body>

</html>
