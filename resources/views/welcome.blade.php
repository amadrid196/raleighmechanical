<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="/img/logo.png" />
        <title>Raleigh Mechanical</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    </head>
    <div class="container bg-light pl-5 pr-5 fila-center">
        <div class="row pt-2 pb-2">
            <div class="col-8">
                Working hours:Mon - Sat 8.00 - 18.00
                Call Us:(+1) 984 200-8362
            </div>
            <div class="col-4 text-right">
              <i class="fab fa-facebook"></i>
            </div>
        </div>
    </div>
    <body>
        <div id="app">
            <example-component></example-component>
            <router-view/>
        </div>
        <footer>
            <div class="jumbotron bg-dark text-white rounded-0 mb-0">
                <div class="row m-0">
                    <div class="col-12 col-md-4 pb-3">
                        <h3 class="">Contact</h3>
                        <p>
                            <a class="text-white" href="tel:19842008362">
                                <i class="text-warning fas fa-phone-volume"></i> Office<span> 1-984-200-8362</span></p>
                            </a>
                        <p>
                        <hr class="text-secondary">
                            <a class="text-white" href="tel:19848490171">
                                <i class="text-warning fas fa-fax"></i> Fax<span> 1-984-849-0171</span>
                            </a>
                        </p>
                        <hr class="text-secondary">
                        <p>
                            <a class="text-white" href="mailto:rmc@raleighmechanicalc.com">
                                <i class="text-warning far fa-envelope"></i> rmc@raleighmechanicalc.com
                            </a>
                        </p>
                        <hr class="text-secondary">
                        <p>
                            <a class="text-white" href="https://goo.gl/maps/jQyo1TS1eNnfY8mw8">
                                <i class="text-warning fas fa-map-marker-alt"></i> 6605 winterton dr, Raleigh North Carolina 27603
                            </a>
                        </p>
                        <hr class="text-secondary">

                    </div>
                    <div class="col-12 col-md-4 pb-3">
                        <h3 class="">Serivices</h3>
                        <p>Multifamily</p>
                        <hr class="bg-white">
                        <p>Residential</p>
                        <hr class="bg-white">
                        <p>Light Commercial</p>
                        <hr class="bg-white">
                        <p>On-call service</p>
                        <hr class="bg-white">

                    </div>
                    <div class="col-12 col-md-4 pb-3">
                        <h3>Emergency Service</h3>
                        <p class="h4"><i class="fas fa-phone-alt text-warning"></i> 1-984-200-8362</p>
                        <img class="w-50 pt-4" src="/img/raleighmechanical.png" alt="">
                    </div>
                </div>
            </div>
        </footer>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="/js/app.js"></script>
    </body>
</html>
