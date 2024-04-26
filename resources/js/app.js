import './bootstrap';

/* viewport > 450px  */

const countrySelect = document.getElementById('country_select');

const companySelect = document.getElementById('company_select');

//event listeners

countrySelect.addEventListener('change', function (e) {
    console.log(e.target.value);
    //open(`/country/${e.target.value}`);
    if (e.target.value) {
        window.location.href = `/country/${e.target.value}`;
    }
});

companySelect.addEventListener('change', function (e) {
    console.log(e.target.value);
    //open(`/company/${e.target.value}`);
    if (e.target.value) {
        window.location.href = `/company/${e.target.value}`;
    }
});

/* viewport < 450px */

const countrySelect2 = document.getElementById('country_select_2');

const companySelect2 = document.getElementById('company_select_2');

countrySelect2.addEventListener('change', function (e) {
    console.log(e.target.value);
    //open(`/country/${e.target.value}`);
    if (e.target.value) {
        window.location.href = `/country/${e.target.value}`;
    }
});

companySelect2.addEventListener('change', function (e) {
    console.log(e.target.value);
    //open(`/company/${e.target.value}`);
    if (e.target.value) {
        window.location.href = `/company/${e.target.value}`;
    }
});