<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400,700&display=swap" rel="stylesheet">


        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>Laracast assets</title>
    </head>
    <body class="antialiased font-open-sans">
        <div id="app">

            <header class="py-6 px-6 mb-8" style="background: url('/images/splash.svg') 0px 0px no-repeat;">
                <img src="{{ asset('images/logo.svg') }}" alt="Laracast logo" />
            </header>

            <div class="container px-8">
                <main class="flex">
                    <aside class="w-64 pt-8">
                        <section class="mb-8">
                            <h5 class="font-bold uppercase mb-5">The brand</h5>
                            <ul>
                                <li class="text-sm pb-3 text-black"><router-link :to="{ name: 'logo' }" exact>Logo</router-link></li>
                                <li class="text-sm pb-3 text-black"><router-link :to="{ name: 'logo-symbol' }">Logo Symbol</router-link></li>
                                <li class="text-sm pb-3 text-black"><router-link :to="{ name: 'colors' }">Colors</router-link></li>
                                <li class="text-sm pb-3 text-black"><router-link :to="{ name: 'typography' }">Typography</router-link></li>
                            </ul>
                        </section>

                        <section class="mb-8">
                            <h5 class="font-bold uppercase mb-5">Doodles</h5>
                            <ul>
                                <li class="text-sm pb-3 text-black"><router-link :to="{ name: 'mascot' }">Mascot</router-link></li>
                                <li class="text-sm pb-3 text-black"><router-link :to="{ name: 'illustrations' }">Illustrations</router-link></li>
                                <li class="text-sm pb-3 text-black"><router-link :to="{ name: 'loaders-and-animations' }">Loaders and animations</router-link></li>
                                <li class="text-sm pb-3 text-black"><router-link :to="{ name: 'wallpapers' }">Wallpapers</router-link></li>
                            </ul>
                        </section>

                        <section class="mb-8">
                            <h5 class="font-bold uppercase mb-5">Stats</h5>
                            <ul>
                                <li class="text-sm pb-3 text-black"><router-link to="/site-stats">Site Stats</router-link></li>
                                <li class="text-sm pb-3 text-black"><router-link to="/your-achievements">Your Achievements</router-link></li>

                            </ul>
                        </section>
                    </aside>
                    <div class="primary flex-1">
                        <router-view></router-view>
                    </div>
                </main>
            </div>
        </div>
        <script src="/js/app.js"></script>
    </body>
</html>
