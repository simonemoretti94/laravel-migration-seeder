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
                <div class="accordion-body">
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
                <div class="accordion-body">
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

{{-- <h1 class="text-primary">sub container media lesser than 450px</h1> --}}

<div id="main_subcontainer_1" class="container col-12 col-md-12 col-xl-6 col-xxl-6 mt-2">
    <div class="accordion" id="accordionExample">
        <div class="accordion-item">
            <div
                id="collapseOne"
                class="accordion-collapse collapse show"
                aria-labelledby="headingOne"
                data-bs-parent="#accordionExample"
            >
                <div class="accordion-body">
                    <p>Filter by country
                    <select 
                    class="form-select mt-1"
                    id="country_select_2">
                        {{-- <option></option> --}}
                        <option value=`null`></option>
                        <option value="italy">Italy</option>
                        <option value="austria">Austria</option>
                        <option value="netherlands">Netherlands</option>
                        <option value="france">France</option>
                    </select>
                    
                    </p>
                </div>
            </div>
        </div>
        
    </div>  
</div>

<hr id="hr_devider">

<div id="main_subcontainer_2" class="container col-12 col-md-12 col-xl-6 col-xxl-6 mt-2">
    <div class="accordion" id="accordionExample">
        <div class="accordion-item">
            <div
                id="collapseOne"
                class="accordion-collapse collapse show"
                aria-labelledby="headingOne"
                data-bs-parent="#accordionExample"
            >
                <div class="accordion-body">
                    <p>Filter by company
                    <select
                    class="form-select mt-1"
                    id="company_select_2">
                        {{-- <option></option> --}}
                        <option value=`null`></option>
                        <option value="trenord">Trenord</option>
                        <option value="mediterranea">Mediterranea</option>
                        <option value="wiener linen">Wiener Linen</option>
                        <option value="NS international">NS International</option>
                        <option value="SNCF">SNCF</option>
                        <option value="TGV">TGV</option>
                    </select>
                    </p>
                </div>
            </div>
        </div>
        
    </div>  
</div>

@endsection