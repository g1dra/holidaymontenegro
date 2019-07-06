@extends('layouts.master')
@section('bredcrumb')
    <section class="page_title ds s-py-5">
        <div class="container">
            <div class="row">

                <div class="col-md-12 text-center">
                    <h1 class="bold">Transfers</h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="/home">Home</a>
                        </li>
                        <li class="breadcrumb-item active">
                            Transfers
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
                    <h2>Transfers</h2>
                    <hr>
                    <p>
                        - All of you adventurous nomads and discovery addicts who are into soaking up the beauties of
                        the surrounding scenery can book a taxi transfer throughout Montenegro. Buckle up and choose any
                        of the numerous outlooks. Another good thing is that there will always be someone around to take
                        a photo of you and immortalize the landscape and you in it.
                    </p>
                    <p>
                        - In order to book your transfer, first select the vehicle type. We offer the economy, family
                        and business vehicles, as well as the minivans for larger groups. Once you select the vehicle,
                        you must specify your pick-up and drop-off locations. The location can be an airport, or any
                        place in Montenegro. When all is set, you will see the price on screen with the option to book
                        the transfer. Booking process itself is very simple. You fill in the form with all the details
                        and we get back to you via email with further instructions.
                    </p>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <td>#</td>
                            <td>Economy <i class="color-darkgrey fa fa-car" aria-hidden="true"></i></td>
                            <td>Business <i class="color-darkgrey fa fa-car" aria-hidden="true"></i></td>
                            <td>Family <i class="color-darkgrey fa fa-taxi" aria-hidden="true"></i></td>
                            <td>Minivan <i class="color-darkgrey fa fa-bus" aria-hidden="true"></i></td>
                        </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                            Maximum number of passengers:
                        </td>
                        <td>
                            3 <i class="color-darkgrey fa fa-user" aria-hidden="true"
                               title="Maximum number of passengers"></i>

                        </td>
                        <td>
                            3 <i class="color-darkgrey fa fa-user" aria-hidden="true"
                               title="Maximum number of passengers"></i>
                        </td>
                        <td>
                            4 <i class="color-darkgrey fa fa-user" aria-hidden="true"
                               title="Maximum number of passengers"></i>
                        </td>
                        <td>
                            7 <i class="color-darkgrey fa fa-user" aria-hidden="true"
                               title="Maximum number of passengers"></i> 
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Maximum amount of luggage:
                        </td>
                        <td>
                            2 <i class="color-darkgrey fa fa-suitcase"
                               title="Maximum number of passengers"
                               aria-hidden="true"></i>
                        </td>
                        <td>
                            3 <i class="color-darkgrey fa fa-suitcase"
                                 title="Maximum number of passengers"
                                 aria-hidden="true"></i>
                        </td>
                        <td>
                            4 <i class="color-darkgrey fa fa-suitcase"
                                 title="Maximum number of passengers"
                                 aria-hidden="true"></i>
                        </td>
                        <td>
                            7 <i class="color-darkgrey fa fa-suitcase"
                                 title="Maximum number of passengers"
                                 aria-hidden="true"></i>
                        </td>

                    </tr>


                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
