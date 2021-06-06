@extends('layouts.main-layout')

@section('content')

    <h1>New Car:</h1>

    <form action="{{ route('car-update', $car -> id) }}" method="POST">

        @csrf
        @method('POST')

        <label for="name">Name</label>
        <input id="name" type="text" name="name" value="{{$car -> name}}" required>

        <label for="model">Model</label>
        <input id="model" type="text" name="model" value="{{$car -> model}}" required>

        <label for="kW">KW</label>
        <input id="kW" type="number" name="kW" value="{{$car -> kW}}" required>

        <label for="brand_id">Brands</label>
        <select id="brand_id" name="brand_id" value="" required>


            @foreach ($brands as $brand)

                <option value="{{$brand -> id}}"


                        @if ($car -> brand -> id == $brand -> id)

                            selected

                        @endif


                    >{{$brand -> name}} ({{$brand -> nationality}})</option>

            @endforeach

        </select>


        <label for="pilots_id[]">Pilots</label>
        <select id="pilots_id[]" name="pilots_id[]" value="" required multiple>


            @foreach ($pilots as $pilot)

                <option value="{{$pilot -> id}}"

                    @foreach ($car -> pilots as $carPilot)

                        @if ($carPilot -> id == $pilot -> id)

                            selected

                        @endif

                    @endforeach


                    >{{$pilot -> firstname}} ({{$pilot -> lastname}})</option>

            @endforeach

        </select>




        <input id="model" type="submit" value="SUBMIT">

          @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
          @endif

    </form>

@endsection
