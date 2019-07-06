@extends('layouts.master')
@section('bredcrumb')
    <section class="page_title ds s-py-5">
        <div class="container">
            <div class="row">

                <div class="col-md-12 text-center">
                    <h1 class="bold">Rent a car</h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="./">Home</a>
                        </li>
                        <li class="breadcrumb-item active">
                            Rent a car
                        </li>
                    </ol>
                </div>

            </div>
        </div>
    </section>
@endsection
@section('content')
    <section class="ls s-py-80 s-py-md-120 s-py-xl-160 c-mb-60">
        <div class="container mt--10">
            <div class="row">
                <div class="col-md-12">
                    <h2>Rent a car</h2>
                    <hr>
                    <p>
                        - Renting a car for your Montenegro holiday is one of the the best ways to make your holiday
                        best possible, and to make sure that you will visit all small Montenegro destinations and best
                        places. As you know, Montenegro is small country, and your expenses for car rental can be very
                        affordable. Because of poor public transport, we recommend renting a car.
                    </p>

                    <p>
                        - While driving in Montenegro, you have some rules that must be followed. Drive safe is most
                        important. Traffic checks by Montenegro police are quite common, and nothing to worry about if
                        you drive safe and respect signalization and rules.
                    </p>

                    <p>- Drivers must carry a valid driver’s license (international is OK), have proof of ownership or
                        for rented cars, the rental contract, and have insurance. Passport of ID is also
                        recommended.
                    </p>

                    <p>
                        - Travelers crossing into Montenegro from a neighboring country, will pay cross border fee in
                        local agency at the time of pick up. Also, those wishing to cross the border into Montenegro
                        should keep in mind that, especially in the high season, the checkpoints at the crossings can be
                        extremely crowded, and lines of cars up to a Km are not uncommon. A good way to try to miss this
                        is to cross on a weekday early in the morning, or late at night. For online booking visit us on <span class="underline"><a href="https://www.proauto.me/">proauto.me</a>.</span>
                    </p>

                    <h3>Price Table</h3>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Model</th>
                                <th>Image</th>
                                <th>Transmission</th>
                                <th>1-3 Days</th>
                                <th>4-7 Days</th>
                                <th>8-14 Days</th>
                                <th>14+ Days</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>KIA PICANTO</td>
                                <td><img src="/images/cars/kia.jpg" alt="KIA PICANTO" style="height: 70px"></td>
                                <td>manuel</td>
                                <td>32</td>
                                <td>30</td>
                                <td>25</td>
                                <td>20</td>
                            </tr>
                            <tr>
                                <td>VOLKSVAGEN UP</td>
                                <td><img src="/images/cars/vwup.jpg" alt="VOLKSVAGEN UP" style="height: 70px"></td>
                                <td>manuel</td>
                                <td>32</td>
                                <td>30</td>
                                <td>25</td>
                                <td>20</td>
                            </tr>
                            <tr>
                                <td>HYUNDAI I10</td>
                                <td><img src="/images/cars/hyundai-i10.jpg" alt="HYUNDAI I10" style="height: 70px"></td>
                                <td>manuel</td>
                                <td>32</td>
                                <td>30</td>
                                <td>25</td>
                                <td>20</td>
                            </tr>
                            <tr>
                                <td>CHEVROLET SPARK</td>
                                <td><img src="/images/cars/spark.jpg" alt="CHEVROLET SPARK" style="height: 70px"></td>
                                <td>manuel</td>
                                <td>32</td>
                                <td>30</td>
                                <td>25</td>
                                <td>20</td>
                            </tr>
                            <tr>
                                <td>OPEL CORASA</td>
                                <td><img src="/images/cars/corsa.jpg" alt="OPEL CORASA" style="height: 70px"></td>
                                <td>automatic</td>
                                <td>35</td>
                                <td>30</td>
                                <td>28</td>
                                <td>25</td>
                            </tr>
                            <tr>
                                <td>OPEL MERIVA</td>
                                <td><img src="/images/cars/meriva.jpg" alt="OPEL MERIVA" style="height: 70px"></td>
                                <td>manual</td>
                                <td>40</td>
                                <td>38</td>
                                <td>25</td>
                                <td>30</td>
                            </tr>
                            <tr>
                                <td>HYUNDAI I30</td>
                                <td><img src="/images/cars/hyndai-i30.jpg" alt="HYUNDAI I30" style="height: 70px"></td>
                                <td>manual</td>
                                <td>40</td>
                                <td>38</td>
                                <td>25</td>
                                <td>30</td>
                            </tr>
                            <tr>
                                <td>SKODA OCTAVIA</td>
                                <td><img src="/images/cars/octavia.jpg" alt="SKODA OCTAVIA" style="height: 70px"></td>
                                <td>automatic</td>
                                <td>45</td>
                                <td>42</td>
                                <td>40</td>
                                <td>35</td>
                            </tr>
                            <tr>
                                <td>NISSAN JUKE</td>
                                <td><img src="/images/cars/juke.jpg" alt="NISSAN JUKE" style="height: 70px"></td>
                                <td>automatic</td>
                                <td>45</td>
                                <td>42</td>
                                <td>40</td>
                                <td>35</td>
                            </tr>
                            <tr>
                                <td>PEUGEOT 5008 5+2</td>
                                <td><img src="/images/cars/5008.jpg" alt="PEUGEOT 5008 5+2" style="height: 70px"></td>
                                <td>automatic</td>
                                <td>45</td>
                                <td>42</td>
                                <td>40</td>
                                <td>35</td>
                            </tr>

                            </tbody>
                        </table>
                    </div>

                    <ul class="list-styled">
                        <li><span class="underline">Prices are valid from 15.09 to 30.04</span></li>
                        <li>Prices are in € (euros)</li>
                        <li>VAT is included in price</li>
                        <li>Unlimited mileage</li>
                        <li>Basic insurance. Client can buy extra insurance for full casco protection</li>
                        <li>Green card for border cross is 20 euros additional for all period of rent</li>
                        <li>We can provide child seat, wi fi routers and gps device</li>
                        <li>We wait for client at airport arrivals or car delivery can be provided at apartment or hotel where client is situated.</li>
                        <li>Car type can be changed for another car of the same class or bigger class.</li>
                    </ul>


{{--                    <blockquote>--}}

{{--                        <p>--}}
{{--                            Pork belly shankle brisket pig swine sausage landjaeger tri-tip drumstick kielbasa--}}
{{--                            burgdoggen pork chop prosciutto rump ground round. Andouille ribeye chicken swine. Biltong--}}
{{--                            rump venison.--}}
{{--                        </p>--}}
{{--                        <h5>Clifford Carter</h5>--}}
{{--                        <p class="small-text color-main">--}}
{{--                            VISITORS / BUSINESSMAN--}}
{{--                        </p>--}}
{{--                    </blockquote>--}}



{{--                    <p>--}}
{{--                        <img class="alignleft" alt="img" src="images/side-image-small.jpg">--}}
{{--                    </p>--}}


{{--                    <p>--}}
{{--                        At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea--}}
{{--                        takimata--}}
{{--                        sanctusamet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod--}}
{{--                        tempor--}}
{{--                        invidunt ut labore et dolore magna aliquyam erat.--}}
{{--                    </p>--}}

{{--                    <p>--}}
{{--                        At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea--}}
{{--                        takimata--}}
{{--                        sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr,--}}
{{--                        At--}}
{{--                        accusam aliquyam diam diam dolore dolores duo eirmod eos erat, et nonumy sed tempor et et--}}
{{--                        invidunt--}}
{{--                        justo--}}
{{--                        labore Stet clita ea et gubergren, kasd magna no rebum. sanctus sesed takimata vero voluptua est--}}
{{--                        ipsum--}}
{{--                        dolor.--}}
{{--                    </p>--}}

{{--                    <p>--}}
{{--                        Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna--}}
{{--                        aliquyam--}}
{{--                        erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita--}}
{{--                        kasd--}}
{{--                        gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet,--}}
{{--                        consetetur sadipscing elitr.--}}
{{--                    </p>--}}


                </div>
            </div>
        </div>

        <div class="mb--75"></div>

    </section>
    {{--1.    Rent a car
    -    Renting a car for your Montenegro holiday is one of the the best ways to make your holiday best possible, and to make sure that you will visit all small Montenegro destinations and best places. As you know, Montenegro is small country, and your expenses for car rental can be very affordable. Because of poor public transport, we recommend renting a car.
    -    While driving in Montenegro, you have some rules that must be followed. Drive safe is most important. Traffic checks by Montenegro police are quite common, and nothing to worry about if you drive safe and respect signalization and rules.
    -    Drivers must carry a valid driver’s license (international is OK), have proof of ownership or for rented cars, the rental contract, and have insurance. Passport of ID is also recommended.
    -    Travelers crossing into Montenegro from a neighboring country, will pay cross borderfee in local agency at the time of pick up. Also, those wishing to cross the border into Montenegro should keep in mind that, especially in the high season, the checkpoints at the crossings can be extremely crowded, and lines of cars up to a Km are not uncommon. A good way to try to miss this is to cross on a weekday early in the morning, or late at night.
    -    - put link www.proauto.me for rent a car offer--}}

@endsection
