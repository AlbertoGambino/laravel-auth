@extends('layouts.main-layout')

@section('content')

    <div class="container">

        <h1>CARS:</h1>

        <ul>

            @foreach ($cars as $car)

                <li>

                    {{$car -> model}} {{$car -> name}} - <br>

                    {{$car -> brand -> name}} <br>

                    <a href="{{route('car-edit', $car -> id)}}">

                        &#9998;

                    </a>



                    Pilots:
                    <ul>

                        @foreach ($car -> pilots as $pilot)

                            <li>

                                {{$pilot -> firstname}} {{$pilot -> lastname}}

                            </li>




                        @endforeach

                    </ul>

                    @endauth

                </li>



            @endforeach

        </ul>


    </div>



@endsection
