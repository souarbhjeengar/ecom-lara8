@extends('master')
@section('content')
    <div id="carouselExampleIndicators" class="carousel slide relative" data-bs-ride="carousel">
        <div class="carousel-inner relative w-full  overflow-hidden">
            @foreach ($products as $item)
                <div class=" carousel-item {{ $item['id'] == 1 ? 'active' : '' }}   float-left w-full">
                    <img src="{{ $item['gallary'] }}" class="block w-full h-96 " alt="" />
                    <div class="carousel-caption hidden md:block absolute text-center bg-slate-300">
                        <h5 class="text-xl">{{ $item['name'] }}</h5>
                        <p>{{ $item['description'] }}</p>
                    </div>
                </div>
            @endforeach
            <button
                class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0"
                type="button" data-bs-target="#carouselDarkVariant" data-bs-slide="prev">
                <span class="carousel-control-prev-icon inline-block bg-no-repeat" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button
                class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0"
                type="button" data-bs-target="#carouselDarkVariant" data-bs-slide="next">
                <span class="carousel-control-next-icon inline-block bg-no-repeat" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
@endsection('content')
