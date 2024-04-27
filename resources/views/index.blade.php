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
                            <option value="italy">Italy</option>
                            <option value="austria">Austria</option>
                            <option value="netherlands">Netherlands</option>
                            <option value="france">France</option>
                        </select>
                        
                        </p>
                    </div>
                    <div class="accordion-body col-12">
                        <p>Filter by company
                        <select
                        class="form-select mt-1"
                        id="company_select">
                            {{-- <option></option> --}}
                            <option value=`null`></option>
                            <option value="mediterranea">Mediterranea</option>
                            <option value="trenord">Trenord</option>
                            <option value="wiener linen">Wiener Linen</option>
                            <option value="ns international">NS International</option>
                            <option value="SNCF">SNCF</option>
                            <option value="TGV">TGV</option>
                        </select>
                        </p>
                    </div>
            </div>
        </div>
        
    </div>  
</div>

<div class="container-fluid">

    <h1 class="text-white border border-2 mt-4 text-center bg-dark py-2 rounded-2">Our mission</h1>

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
                    src="https://th.bing.com/th/id/R.8a42151d4721e2d1a1c31a90f08dfb03?rik=nC2U2dpqcyzHwA&pid=ImgRaw&r=0"
                    class="w-100 d-block"
                    alt="First slide"
                />
                <div class="carousel-caption d-none d-md-block">
                    <h3>Company</h3>
                    <p>We look forward for a cleaner and sustainable future</p>
                </div>
            </div>
            <div class="carousel-item">
                <img
                    src="https://i2-prod.leeds-live.co.uk/news/leeds-news/article15244115.ece/ALTERNATES/s1227b/0_New-train_JPG.jpg"
                />
                <div class="carousel-caption d-none d-md-block">
                    <h3>Company</h3>
                    <p>We look forward for a cleaner and sustainable future</p>
                </div>
            </div>
            <div class="carousel-item">
                <img
                    src="https://www.timeforkids.com/wp-content/uploads/2020/02/feature-cover_-train-k1.jpg"
                    alt="Third slide"
                />
                <div class="carousel-caption d-none d-md-block">
                <h3>Company</h3>
                    <p>We look forward for a cleaner and sustainable future</p>
                </div>
            </div>
            <div class="carousel-item">
                <img
                    src="https://tse4.mm.bing.net/th?id=OIF.k54073Es7VZ%2bTeqlGY23XQ&rs=1&pid=ImgDetMain"
                    class="w-100 d-block"
                    alt="Second slide"
                />
                <div class="carousel-caption d-none d-md-block">
                    <h3>Company</h3>
                    <p>We look forward for a cleaner and sustainable future</p>
                </div>
            </div>
        </div>
        <button
            class="carousel-control-prev"
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