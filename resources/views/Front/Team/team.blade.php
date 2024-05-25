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
            color: burlywood;
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
                <h2 class="o-h-72">Directors</h2>
            </div>

            <main>
                <div class = "card">
                    <img src="{{ asset('assets/Team/sageer_yousuf.jpeg') }}"
                        alt="">
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
                    <img src="{{ asset('assets/Team/mohd_yousuf_pandith.jpeg') }}"
                        alt="">
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
                    <img src="{{ asset('assets/Team/Akhter_Mohtashim.jpeg') }}"
                        alt="">
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
                <h2 class="o-h-72">FOUNDING MEMBERS</h2>
            </div>

            <main>
                <div class = "card">
                    <img src="https://images.unsplash.com/photo-1656618020911-1c7a937175fd?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwzMjM4NDZ8MHwxfHJhbmRvbXx8fHx8fHx8fDE2NTc1MzQyNTE&ixlib=rb-1.2.1&q=80"
                        alt="">
                    <div class="card-content">
                        <h2>
                            Sageer Yousuf Pandith
                        </h2>
                        <p>
                            <i class="fa fa-facebook"></i>

                            <i class="fa fa-google"></i>

                            <i class="fa fa-twitter"></i>

                        </p>
                    </div>

                </div>
                <div class = "card">
                    <img src="https://images.unsplash.com/photo-1656618020911-1c7a937175fd?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwzMjM4NDZ8MHwxfHJhbmRvbXx8fHx8fHx8fDE2NTc1MzQyNTE&ixlib=rb-1.2.1&q=80"
                        alt="">
                    <div class="card-content">
                        <h2>
                            Sageer Yousuf Pandith
                        </h2>
                        <p>
                            <i class="fa fa-facebook"></i>

                            <i class="fa fa-google"></i>

                            <i class="fa fa-twitter"></i>

                        </p>
                    </div>

                </div>
                <div class = "card">
                    <img src="https://images.unsplash.com/photo-1656618020911-1c7a937175fd?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwzMjM4NDZ8MHwxfHJhbmRvbXx8fHx8fHx8fDE2NTc1MzQyNTE&ixlib=rb-1.2.1&q=80"
                        alt="">
                    <div class="card-content">
                        <h2>
                            Sageer Yousuf Pandith
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
                    <img src="https://images.unsplash.com/photo-1656618020911-1c7a937175fd?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwzMjM4NDZ8MHwxfHJhbmRvbXx8fHx8fHx8fDE2NTc1MzQyNTE&ixlib=rb-1.2.1&q=80"
                        alt="">
                    <div class="card-content">
                        <h2>
                            Sageer Yousuf Pandith
                        </h2>
                        <p>
                            <i class="fa fa-facebook"></i>

                            <i class="fa fa-google"></i>

                            <i class="fa fa-twitter"></i>

                        </p>
                    </div>

                </div>
                <div class = "card">
                    <img src="https://images.unsplash.com/photo-1656618020911-1c7a937175fd?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwzMjM4NDZ8MHwxfHJhbmRvbXx8fHx8fHx8fDE2NTc1MzQyNTE&ixlib=rb-1.2.1&q=80"
                        alt="">
                    <div class="card-content">
                        <h2>
                            Sageer Yousuf Pandith
                        </h2>
                        <p>
                            <i class="fa fa-facebook"></i>

                            <i class="fa fa-google"></i>

                            <i class="fa fa-twitter"></i>

                        </p>
                    </div>

                </div>
                <div class = "card">
                    <img src="https://images.unsplash.com/photo-1656618020911-1c7a937175fd?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwzMjM4NDZ8MHwxfHJhbmRvbXx8fHx8fHx8fDE2NTc1MzQyNTE&ixlib=rb-1.2.1&q=80"
                        alt="">
                    <div class="card-content">
                        <h2>
                            Sageer Yousuf Pandith
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
                    <img src="https://images.unsplash.com/photo-1656618020911-1c7a937175fd?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwzMjM4NDZ8MHwxfHJhbmRvbXx8fHx8fHx8fDE2NTc1MzQyNTE&ixlib=rb-1.2.1&q=80"
                        alt="">
                    <div class="card-content">
                        <h2>
                            Sageer Yousuf Pandith
                        </h2>
                        <p>
                            <i class="fa fa-facebook"></i>

                            <i class="fa fa-google"></i>

                            <i class="fa fa-twitter"></i>

                        </p>
                    </div>

                </div>
                <div class = "card">
                    <img src="https://images.unsplash.com/photo-1656618020911-1c7a937175fd?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwzMjM4NDZ8MHwxfHJhbmRvbXx8fHx8fHx8fDE2NTc1MzQyNTE&ixlib=rb-1.2.1&q=80"
                        alt="">
                    <div class="card-content">
                        <h2>
                            Sageer Yousuf Pandith
                        </h2>
                        <p>
                            <i class="fa fa-facebook"></i>

                            <i class="fa fa-google"></i>

                            <i class="fa fa-twitter"></i>

                        </p>
                    </div>

                </div>
                <div class = "card">
                    <img src="https://images.unsplash.com/photo-1656618020911-1c7a937175fd?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwzMjM4NDZ8MHwxfHJhbmRvbXx8fHx8fHx8fDE2NTc1MzQyNTE&ixlib=rb-1.2.1&q=80"
                        alt="">
                    <div class="card-content">
                        <h2>
                            Sageer Yousuf Pandith
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
                    <img src="https://images.unsplash.com/photo-1656618020911-1c7a937175fd?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwzMjM4NDZ8MHwxfHJhbmRvbXx8fHx8fHx8fDE2NTc1MzQyNTE&ixlib=rb-1.2.1&q=80"
                        alt="">
                    <div class="card-content">
                        <h2>
                            Sageer Yousuf Pandith
                        </h2>
                        <p>
                            <i class="fa fa-facebook"></i>

                            <i class="fa fa-google"></i>

                            <i class="fa fa-twitter"></i>

                        </p>
                    </div>

                </div>
                <div class = "card">
                    <img src="https://images.unsplash.com/photo-1656618020911-1c7a937175fd?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwzMjM4NDZ8MHwxfHJhbmRvbXx8fHx8fHx8fDE2NTc1MzQyNTE&ixlib=rb-1.2.1&q=80"
                        alt="">
                    <div class="card-content">
                        <h2>
                            Sageer Yousuf Pandith
                        </h2>
                        <p>
                            <i class="fa fa-facebook"></i>

                            <i class="fa fa-google"></i>

                            <i class="fa fa-twitter"></i>

                        </p>
                    </div>

                </div>
                <div class = "card">
                    <img src="https://images.unsplash.com/photo-1656618020911-1c7a937175fd?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwzMjM4NDZ8MHwxfHJhbmRvbXx8fHx8fHx8fDE2NTc1MzQyNTE&ixlib=rb-1.2.1&q=80"
                        alt="">
                    <div class="card-content">
                        <h2>
                            Sageer Yousuf Pandith
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
                <div class = "card">
                    <img src="https://images.unsplash.com/photo-1656618020911-1c7a937175fd?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwzMjM4NDZ8MHwxfHJhbmRvbXx8fHx8fHx8fDE2NTc1MzQyNTE&ixlib=rb-1.2.1&q=80"
                        alt="">
                    <div class="card-content">
                        <h2>
                            Sageer Yousuf Pandith
                        </h2>
                        <p>
                            <i class="fa fa-facebook"></i>

                            <i class="fa fa-google"></i>

                            <i class="fa fa-twitter"></i>

                        </p>
                    </div>

                </div>
                <div class = "card">
                    <img src="https://images.unsplash.com/photo-1656618020911-1c7a937175fd?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwzMjM4NDZ8MHwxfHJhbmRvbXx8fHx8fHx8fDE2NTc1MzQyNTE&ixlib=rb-1.2.1&q=80"
                        alt="">
                    <div class="card-content">
                        <h2>
                            Sageer Yousuf Pandith
                        </h2>
                        <p>
                            <i class="fa fa-facebook"></i>

                            <i class="fa fa-google"></i>

                            <i class="fa fa-twitter"></i>

                        </p>
                    </div>

                </div>
                <div class = "card">
                    <img src="https://images.unsplash.com/photo-1656618020911-1c7a937175fd?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwzMjM4NDZ8MHwxfHJhbmRvbXx8fHx8fHx8fDE2NTc1MzQyNTE&ixlib=rb-1.2.1&q=80"
                        alt="">
                    <div class="card-content">
                        <h2>
                            Sageer Yousuf Pandith
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
                    Social Media Specialists
                    </h2>
            </div>

            <main>
                <div class = "card">
                    <img src="https://images.unsplash.com/photo-1656618020911-1c7a937175fd?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwzMjM4NDZ8MHwxfHJhbmRvbXx8fHx8fHx8fDE2NTc1MzQyNTE&ixlib=rb-1.2.1&q=80"
                        alt="">
                    <div class="card-content">
                        <h2>
                            Sageer Yousuf Pandith
                        </h2>
                        <p>
                            <i class="fa fa-facebook"></i>

                            <i class="fa fa-google"></i>

                            <i class="fa fa-twitter"></i>

                        </p>
                    </div>

                </div>
                <div class = "card">
                    <img src="https://images.unsplash.com/photo-1656618020911-1c7a937175fd?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwzMjM4NDZ8MHwxfHJhbmRvbXx8fHx8fHx8fDE2NTc1MzQyNTE&ixlib=rb-1.2.1&q=80"
                        alt="">
                    <div class="card-content">
                        <h2>
                            Sageer Yousuf Pandith
                        </h2>
                        <p>
                            <i class="fa fa-facebook"></i>

                            <i class="fa fa-google"></i>

                            <i class="fa fa-twitter"></i>

                        </p>
                    </div>

                </div>
                <div class = "card">
                    <img src="https://images.unsplash.com/photo-1656618020911-1c7a937175fd?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwzMjM4NDZ8MHwxfHJhbmRvbXx8fHx8fHx8fDE2NTc1MzQyNTE&ixlib=rb-1.2.1&q=80"
                        alt="">
                    <div class="card-content">
                        <h2>
                            Sageer Yousuf Pandith
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
                    Outreach Specialists
                    </h2>
            </div>

            <main>
                <div class = "card">
                    <img src="https://images.unsplash.com/photo-1656618020911-1c7a937175fd?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwzMjM4NDZ8MHwxfHJhbmRvbXx8fHx8fHx8fDE2NTc1MzQyNTE&ixlib=rb-1.2.1&q=80"
                        alt="">
                    <div class="card-content">
                        <h2>
                            Sageer Yousuf Pandith
                        </h2>
                        <p>
                            <i class="fa fa-facebook"></i>

                            <i class="fa fa-google"></i>

                            <i class="fa fa-twitter"></i>

                        </p>
                    </div>

                </div>
                <div class = "card">
                    <img src="https://images.unsplash.com/photo-1656618020911-1c7a937175fd?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwzMjM4NDZ8MHwxfHJhbmRvbXx8fHx8fHx8fDE2NTc1MzQyNTE&ixlib=rb-1.2.1&q=80"
                        alt="">
                    <div class="card-content">
                        <h2>
                            Sageer Yousuf Pandith
                        </h2>
                        <p>
                            <i class="fa fa-facebook"></i>

                            <i class="fa fa-google"></i>

                            <i class="fa fa-twitter"></i>

                        </p>
                    </div>

                </div>
                <div class = "card">
                    <img src="https://images.unsplash.com/photo-1656618020911-1c7a937175fd?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwzMjM4NDZ8MHwxfHJhbmRvbXx8fHx8fHx8fDE2NTc1MzQyNTE&ixlib=rb-1.2.1&q=80"
                        alt="">
                    <div class="card-content">
                        <h2>
                            Sageer Yousuf Pandith
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


    <section class="o-section is--mt-318 m--mt-240 s--mt-180">
        @include('Front.ContactSection')
    </section>

    @include('Front.Footer')
    </div>
    @include('Front.Script')
</body>

</html>
