import './bootstrap';

const countrySelect = document.getElementById('country_select');

const companySelect = document.getElementById('company_select');

//event listeners

countrySelect.addEventListener('change', function (e) {
    console.log(e.target.value);
    open(`/country/${e.target.value}`);
});

companySelect.addEventListener('change', function (e) {
    console.log(e.target.value);
    open(`/company/${e.target.value}`);
});
