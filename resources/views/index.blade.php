@extends('layouts.app')

@section('title' , 'index')

@section('content')
<div class="container">
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
                    <option value="italy">Italy</option>
                    <option value="austria">Austria</option>
                    <option value="netherlands">Netherlands</option>
                </select>
                
                </p>
            </div>
            <div class="accordion-body">
                <p>Filter by company
                <select
                class="form-select mt-1"
                id="company_select">
                    <option value="trenord">Trenord</option>
                    <option value="mediterranea">Mediterranea</option>
                    <option value="wiener_linen">Wiener Linen</option>
                    <option value="ns_international">NS International</option>
                </select>
                </p>
            </div>
        </div>
    </div>
    
</div>
</div>

@endsection