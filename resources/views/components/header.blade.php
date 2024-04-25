<div class="container-fluid">
    <div class="row">
        <img id='train_logo' src="{{ Vite::asset('resources/img/train-logo.png') }}" alt="train_logo">
        <h3 id="title">laravel-migration-seeder</h3>
    </div> 
</div>
<nav
    class="nav justify-content-start  "
>
    <a href="#"
    class="
    nav-link
    {{Route::currentRouteName() == 'home' ? 'd-none' : 'active'}}"
    >Home</a
    >
    <a 
    href="#"
    class="
    nav-link
    {{Route::currentRouteName() == 'trains' ? 'd-none' : 'active'}}"
    >Trains</a>
    <a href="#"
    class="
    nav-link
    {{Route::currentRouteName() == 'contacts' ? 'd-none' : 'active'}}"
    >Contacts</a>
</nav>