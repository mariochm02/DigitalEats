@extends('layouts.index')

@section('title', 'Index')

@section('contenido')
    <h1>DIGITAL.EATS</h1>
    <section class="flex flex-col flex-wrap items-center h-screen justify-evenly sm:flex-row">

        <article>
            <button class="neomorfo w-[80vw] h-[30vh] sm:w-[30vw]">
                <a href="{{ route('login') }}">
                    <h2 class="text-6xl">
                        Usuario
                    </h2>
                </a>
            </button>

        </article>
        <article>
            <button class="neomorfo w-[80vw] h-[30vh] sm:w-[30vw]">
                <a href="{{-- {{ route('loginMesa') }} --}}">
                    <h2 class="text-6xl ">
                        Mesa
                    </h2>
                </a>
            </button>

        </article>
    </section>
@endsection

<style>
    .neomorfo {
        background: linear-gradient(145deg, #F7FFFF, #ADB5C4);
        border-radius: 50px;
        box-shadow: 9.91px 9.91px 15px #BFC7D9, -9.91px -9.91px 15px #E5EFFF;
        margin: 0.1vw;
    }

    .neomorfo:hover {
        background: linear-gradient(145deg, #AFC2C4, #7B888A);
        border-radius: 15%;
        box-shadow: 9.91px 9.91px 15px #889698, -9.91px -9.91px 15px #A2B4B6;
    }

    h1 {

        background: linear-gradient(145deg, #cacaca, #f0f0f0);
        box-shadow: 35px 35px 70px #bebebe,
            -35px -35px 70px #ffffff;
    }
</style>
