@extends('user.layouts.app', ['title' => 'FaQ'])

@section('content')
    <link rel="stylesheet" href="{{ asset('style/css/faq.css') }} ">
    <div class="container-md  mt-5">
        <div class="row">

            <div class="col-md-6 text-center">
                <img src="{{ asset('image/faq.png') }}" class="img-fluid pt-5 pt-md-0" alt="...">
            </div>

            <div class="col-md-6 text-left">
                <h1><b>Frequently Asked Question</b></h1>
                <div class="accordion accordion-flush mt-5 p-md-0 p-2" id="accordionFlushExample">

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed text-success fw-bold" type="button"
                                data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false"
                                aria-controls="flush-collapseOne">
                                Apakah website Kalabirang merupakan situs resmi dari Pemerintah Kelurahan Kalabbirang?
                                {{-- <i class="ion ion-plus"></i> --}}
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officiis dolorum iure, numquam at
                                odit totam alias porro doloremque enim labore, optio laudantium, fugiat facere quas. Rem a
                                dolore ex voluptatibus.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree">
                            <button class="accordion-button collapsed text-success fw-bold" type="button"
                                data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false"
                                aria-controls="flush-collapseThree">
                                Lorem ipsum dolor sit amet.
                                {{-- <i class="ion ion-plus"></i> --}}
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officiis dolorum iure, numquam at
                                odit totam alias porro doloremque enim labore, optio laudantium, fugiat facere quas. Rem a
                                dolore ex voluptatibus.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed text-success fw-bold" type="button"
                                data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                aria-controls="flush-collapseTwo">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                {{-- <i class="ion ion-plus"></i> --}}
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officiis dolorum iure, numquam at
                                odit totam alias porro doloremque enim labore, optio laudantium, fugiat facere quas. Rem a
                                dolore ex voluptatibus.
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
@endsection
