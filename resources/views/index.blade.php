@extends('layouts.app')

@section('title' , 'index')

@section('content')

<div id="index_container" class="container">
    <div class="accordion" id="accordionExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button
                    class="accordion-button"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseOne"
                    aria-expanded="true"
                    aria-controls="collapseOne"
                >
                    Trains
                </button>
            </h2>
            <div
                id="collapseOne"
                class="accordion-collapse collapse show"
                aria-labelledby="headingOne"
                data-bs-parent="#accordionExample"
            >
                    <div class="accordion-body col-12">
                        <p>Filter by country
                        <select 
                        class="form-select mt-1"
                        id="country_select">
                            {{-- <option></option> --}}
                            <option value=`null`></option>
                            <option value="austria">Austria</option>
                            <option value="belgium">Belgium</option>
                            <option value="france">France</option>
                            <option value="italy">Italy</option>
                            <option value="netherlands">Netherlands</option>
                            <option value="spain">Spain</option>
                        </select>
                        
                        </p>
                    </div>
                    <div class="accordion-body col-12">
                        <p>Filter by company
                        <select
                        class="form-select mt-1 overflow-y-scroll"
                        id="company_select"
                        >
                            {{-- <option></option> --}}
                            <option value=`null`></option>
                            <option value="elipsos">Elipsos</option>
                            <option value="renfe">Renfe</option>
                            <option value="ns international">NS International</option>
                            <option value="mediterranea">Mediterranea</option>
                            <option value="SNCB">SNCB</option>
                            <option value="SNCF">SNCF</option>
                            <option value="TGV">TGV</option>
                            <option value="trenord">Trenord</option>
                            <option value="wiener linen">Wiener Linen</option>
                        </select>
                        </p>
                    </div>
            </div>
        </div>
        
    </div>  
</div>

    <h1 class="mt-4 py-2 lugrasimo-regular text-center text-white" style="border-top: solid 1.5px white; border-bottom: solid .5px #000000; ">Our mission</h1>
<div class="container">


    <div id="carouselId" class="carousel slide border rounded-1 mt-4" data-bs-ride="carousel" style="heigth: 500px;">
        <ol class="carousel-indicators">
            <li
                data-bs-target="#carouselId"
                data-bs-slide-to="0"
                class="active"
                aria-current="true"
                aria-label="First slide"
            ></li>
            <li
                data-bs-target="#carouselId"
                data-bs-slide-to="1"
                aria-label="Second slide"
            ></li>
            <li
                data-bs-target="#carouselId"
                data-bs-slide-to="2"
                aria-label="Third slide"
            ></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div id="carousel_item" class="carousel-item active">
                <img
                    src="https://s.yimg.com/uu/api/res/1.2/aAc7HVnQWVH.xqllcygELg--~B/aD0yMzM4O3c9NDE1NjtzbT0xO2FwcGlkPXl0YWNoeW9u/https://media.zenfs.com/en/pa_viral_news_uk_120/fddc3d374c6eb71f6d9b03e2d0a64b12"
                    class="w-100 d-block"
                    alt="First slide"
                />
                <div class="carousel-caption d-none d-md-block">
                    <h3>The Company</h3>
                    <p>We look forward for a cleaner and sustainable future</p>
                </div>
            </div>
            <div id="carousel_item" class="carousel-item active">
                <img
                    src="https://i2-prod.leeds-live.co.uk/news/leeds-news/article15244115.ece/ALTERNATES/s1227b/0_New-train_JPG.jpg"
                    class="w-100 d-block"
                    alt="First slide"
                />
                <div class="carousel-caption d-none d-md-block">
                    <h3>Reliability</h3>
                    <p>Stay on track receiving updates about your trip</p>
                </div>
            </div>
              <div id="carousel_item" class="carousel-item active">
                <img
                    src="https://www.timeforkids.com/wp-content/uploads/2020/02/feature-cover_-train-k1.jpg"
                    class="w-100 d-block"
                    alt="First slide"
                />
                <div class="carousel-caption d-none d-md-block">
                    <h3>No stress</h3>
                    <p>Luggages free store, you can enjoy your trip relaxed</p>
                </div>
            </div>
        <button
            class="carousel-control-prev btn_carousel_bg"
            type="button"
            data-bs-target="#carouselId"
            data-bs-slide="prev"
        >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#carouselId"
            data-bs-slide="next"
        >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

@endsection