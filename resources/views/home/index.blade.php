<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <link rel="shortcut icon" href="{{ asset('asset/Group 10.svg') }}" type="image/x-icon">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    @vite('resources/css/app.css')

</head>

<body>

    @include('home.partials.header')

    <main class="w-full h-auto font-poppins bg"
        style="background: linear-gradient(91deg, #2660BB 0.32%, #409BF9 100%);">
        {{-- Hero --}}
        <div class="relative isolate h-screen flex flex-col justify-center px-6 lg:px-8">
            <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80"
                aria-hidden="true">
                <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]"
                    style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
                </div>
            </div>
            <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
                <div class="hidden sm:mb-8 sm:flex sm:justify-center">
                    <img src="../asset/Group 10.svg">
                </div>
                <div class="hidden sm:mb-8 sm:flex sm:justify-center">
                    <div class="relative rounded-full px-3 py-1 text-sm leading-6 text-white ring-1 ring-white hover:ring-gray-100/20"
                        data-aos="fade-up" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000"
                        data-aos-easing="ease-in-out">
                        Announcing our next round of funding. <a href="#"
                            class="font-semibold text-violet-600"><span class="absolute inset-0"
                                aria-hidden="true"></span>Read more <span aria-hidden="true">&rarr;</span></a>
                    </div>
                </div>
                <div class="text-center">
                    <h1 class="text-4xl font-bold tracking-tight text-white sm:text-6xl" data-aos="fade-up"
                        data-aos-offset="200" data-aos-delay="50" data-aos-duration="900" data-aos-easing="ease-in-out">
                        Easy School Payments</h1>
                    <p class="mt-6 text-lg text-white leading-8 text-light-600" data-aos="fade-up" data-aos-offset="200"
                        data-aos-delay="50" data-aos-duration="900" data-aos-easing="ease-in-out">Bayar spp sekolahmu
                        dengan Aplikasi SPP Online,
                        bayar kapanpun dan dimanapun anda
                        berada dengan cepat.</p>
                    <div class="mt-10 flex items-center justify-center gap-x-6" data-aos="fade-up" data-aos-offset="150"
                        data-aos-delay="50" data-aos-duration="900" data-aos-easing="ease-in-out">
                        <a href="/siswa/login"
                            class="rounded-md bg-violet-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Login
                            Siswa</a>
                        <a href="/petugas/login"
                            class="rounded-md bg-violet-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Login
                            Petugas</a>
                    </div>
                </div>
            </div>
            <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]"
                aria-hidden="true">
                <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]"
                    style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
                </div>
            </div>
        </div>
        </div>

        {{-- Feature --}}
        <div class="overflow-hidden bg-white py-24 sm:py-32">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div
                    class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-2">
                    <div class="lg:pr-8 lg:pt-4">
                        <div class="lg:max-w-lg">
                            <h2 class="text-base font-semibold leading-7 text-violet-900" data-aos="fade-up"
                                data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000"
                                data-aos-easing="ease-in-out">Easy Managing</h2>
                            <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl"
                                data-aos="fade-up" data-aos-offset="200" data-aos-delay="50" data-aos-duration="800"
                                data-aos-easing="ease-in-out">A better
                                Dashboard</p>
                            <p class="mt-6 text-lg leading-8 text-gray-600" data-aos="fade-up" data-aos-offset="200"
                                data-aos-delay="50" data-aos-duration="800" data-aos-easing="ease-in-out">Aplikasi
                                Pembayaran Spp Online, memudahkan
                                anda dalam membayar dan mengelola Sistem Pembayaran Sekolah. Terdapat fitur
                                Dashboard yang memudahkan anda dalam mengelola dan memantau data.</p>
                            <dl class="mt-10 max-w-xl space-y-8 text-base leading-7 text-gray-600 lg:max-w-none">
                                <div class="relative pl-9" data-aos="fade-up" data-aos-offset="200" data-aos-delay="50"
                                    data-aos-duration="800" data-aos-easing="ease-in-out">
                                    <dt class="inline font-semibold text-gray-900">
                                        <svg class="absolute left-1 top-1 h-5 w-5 text-indigo-600" viewBox="0 0 20 20"
                                            fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M5.5 17a4.5 4.5 0 01-1.44-8.765 4.5 4.5 0 018.302-3.046 3.5 3.5 0 014.504 4.272A4 4 0 0115 17H5.5zm3.75-2.75a.75.75 0 001.5 0V9.66l1.95 2.1a.75.75 0 101.1-1.02l-3.25-3.5a.75.75 0 00-1.1 0l-3.25 3.5a.75.75 0 101.1 1.02l1.95-2.1v4.59z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        Pengelola data pengguna.
                                    </dt>
                                    <dd class="inline">Kami menyediakan fitur pengelolaan pengguna yang dapat membantu
                                        anda dalam mengolah data.
                                    </dd>
                                </div>
                                <div class="relative pl-9" data-aos="fade-up" data-aos-offset="200"
                                    data-aos-delay="50" data-aos-duration="800" data-aos-easing="ease-in-out">
                                    <dt class="inline font-semibold text-gray-900">
                                        <svg class="absolute left-1 top-1 h-5 w-5 text-indigo-600" viewBox="0 0 20 20"
                                            fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M10 1a4.5 4.5 0 00-4.5 4.5V9H5a2 2 0 00-2 2v6a2 2 0 002 2h10a2 2 0 002-2v-6a2 2 0 00-2-2h-.5V5.5A4.5 4.5 0 0010 1zm3 8V5.5a3 3 0 10-6 0V9h6z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        Keamanan
                                    </dt>
                                    <dd class="inline">Masing masing pengguna memiliki dashboard sendiri berdasarkan
                                        level.</dd>
                                </div>
                                <div class="relative pl-9" data-aos="fade-up" data-aos-offset="150"
                                    data-aos-delay="50" data-aos-duration="900" data-aos-easing="ease-in-out">
                                    <dt class="inline font-semibold text-gray-900">
                                        <svg class="absolute left-1 top-1 h-5 w-5 text-indigo-600" viewBox="0 0 20 20"
                                            fill="currentColor" aria-hidden="true">
                                            <path
                                                d="M4.632 3.533A2 2 0 016.577 2h6.846a2 2 0 011.945 1.533l1.976 8.234A3.489 3.489 0 0016 11.5H4c-.476 0-.93.095-1.344.267l1.976-8.234z" />
                                            <path fill-rule="evenodd"
                                                d="M4 13a2 2 0 100 4h12a2 2 0 100-4H4zm11.24 2a.75.75 0 01.75-.75H16a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75h-.01a.75.75 0 01-.75-.75V15zm-2.25-.75a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75H13a.75.75 0 00.75-.75V15a.75.75 0 00-.75-.75h-.01z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        Database backups.
                                    </dt>
                                    <dd class="inline">Database yang bisa di backups dengan mudah</dd>
                                </div>
                            </dl>
                        </div>
                    </div>
                    <img src="../asset/sace.PNG" alt="Product screenshot"
                        class="w-[48rem] max-w-none rounded-xl shadow-xl ring-1 ring-gray-400/10 sm:w-[57rem] md:-ml-4 lg:-ml-0"
                        data-aos="fade-up" data-aos-offset="200" data-aos-delay="50" data-aos-duration="800"
                        data-aos-easing="ease-in-out" width="2432" height="1442">
                </div>
            </div>
        </div>
    </main>

    <script src="./js/home.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

</body>

</html>
