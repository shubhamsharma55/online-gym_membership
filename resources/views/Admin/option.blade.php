<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SS-GYM Dashboard</title>
    <link href="{{url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{URL::asset('asset/./assets/css/tailwind.output.css')}}" />
    <script src="{{url('https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js')}}" defer></script>
    <script src="./assets/js/init-alpine.js"></script>
    <link rel="stylesheet" href="{{url('https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css')}}" />
    <script src="{{url('https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js')}}" defer></script>
    <script src="{{URL::asset('asset/./assets/js/charts-lines.js')}}" defer></script>
    <script src="{{URL::asset('asset/./assets/js/charts-pie.js')}}" defer></script>
    <!-- login  -->
    <script src="{{url('https://code.jquery.com/jquery-3.6.4.js')}}" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>

    <!-- Favicon -->
    <link href="{{URL::asset('asset/img/favicon.ico')}}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="{{url('https://fonts.googleapis.com')}}">
    <link rel="preconnect" href="{{url('https://fonts.gstatic.com')}}" crossorigin>
    <link href="{{url('https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap')}}" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="{{url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css')}}" rel="stylesheet">
    <link href="{{url('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css')}}" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{URL::asset('asset/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('asset/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{URL::asset('asset/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{URL::asset('asset/css/style.css')}}" rel="stylesheet">
    <!--  -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" /> -->
    <link rel="stylesheet" href="{{url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css')}}" />

</head>

<body>
    <div class="flex h-screen bg-gray-50 dark:bg-gray-900" :class="{ 'overflow-hidden': isSideMenuOpen }">
        <!-- Desktop sidebar -->
        <aside class="z-20 hidden w-64 overflow-y-auto bg-white dark:bg-gray-800 md:block flex-shrink-0">
            <div class="py-4 text-gray-500 dark:text-gray-400">
                <a class="ml-6 text-lg font-bold text-gray-800 dark:text-gray-200" href="{{('')}}">
                    SS-GYM ADMIN
                </a>
                <ul class="mt-6">
                    <li class="relative px-6 py-3">
                        <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>
                        <a class="inline-flex items-center w-full text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100" href="admin">
                            <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M4 6h16M4 10h16M4 14h16M4 18h16"></path>
                            </svg>
                            <span class="ml-4">Tables</span>
                        </a>
                    </li>
                </ul>
                <ul class="mt-6">
                    <li class="relative px-6 py-3">
                        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="planadmin">
                            <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M4 6h16M4 10h16M4 14h16M4 18h16"></path>
                            </svg>
                            <span class="ml-4">Plan</span>
                        </a>
                    </li>
                </ul>
                <ul class="mt-6">
                    <li class="relative px-6 py-3">
                        <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>
                        <a class="inline-flex items-center w-full text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100" href="planoption">
                            <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M4 6h16M4 10h16M4 14h16M4 18h16"></path>
                            </svg>
                            <span class="ml-4">Plan Details</span>
                        </a>
                    </li>
                </ul>
            </div>
        </aside>

        <div class="flex flex-col flex-1 w-full">
            <header class="z-10 py-4 bg-white shadow-md dark:bg-gray-800">
                <div class="container flex items-center justify-between h-full px-6 mx-auto text-purple-600 dark:text-purple-300">
                    <ul class="flex items-center flex-shrink-0 space-x-6">

                        <li class="flex">
                            <button class="rounded-md focus:outline-none focus:shadow-outline-purple" @click="toggleTheme" aria-label="Toggle color mode">
                                <template x-if="!dark">
                                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                                    </svg>
                                </template>
                                <template x-if="dark">
                                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" clip-rule="evenodd"></path>
                                    </svg>
                                </template>
                            </button>
                        </li>
                    </ul>
                </div>
            </header>


            <form action="{{url('/planoption/save')}}" method="post">
                <div class="row justify-content-center">
                    <div class="col-lg-8 mt-5">
                        <!-- Massage -->
                        @if (Session::has('Success'))
                        <span class="alert alert-success input-group-text col-md-10">{{ Session::get('Success') }}</span>
                        @endif

                        @if (Session::has('failed'))
                        <span class="alert alert-danger input-group-text col-md-10">{{ Session::get('failed') }}</span>
                        @endif

                        <!-- End Massage -->
                    </div>
                </div>
                @csrf
                <div class="row justify-content-center">
                    <div class="col-lg-8 pt-5">
                        <select class="form-select" aria-label="Default select example" name="plan_id">
                            <option selected>Select Plan</option>
                            @foreach($plan as $plans)
                            <option value="{{$plans->id}}">{{$plans->plan}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-8 mt-5">
                        <div class="form-floating shadow-textarea">
                            <textarea class="form-control" placeholder="Plan details" id="floatingTextarea" name="plan_desc"></textarea>
                            <!-- <label for="floatingTextarea">Comments</label> -->
                        </div>
                        <button type="submit" class="btn btn-primary mt-4">Submit</button>
                    </div>
                </div>
            </form>


        </div>
    </div>


</body>

</html>