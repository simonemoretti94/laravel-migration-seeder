<div class="container-fluid">
    <div class="row">
        <img id='train_logo' src="{{ Vite::asset('resources/img/train-logo.png') }}" alt="train_logo">
        <h3 id="title">laravel-migration-seeder</h3>
    </div>
</div>
<nav class="nav justify-content-start  ">
    <a href="{{route('home')}}" class="
    nav-link
    {{Route::currentRouteName() == 'home' ? 'd-none' : ''}}">Home</a>
    <a href="{{route('all')}}" class="
    nav-link
    {{-- {{Route::currentRouteName() == 'all' ? 'd-none' : ''}} --}}
    {{Route::currentRouteName() == 'all' ? 'a_active' : ''}}
    ">Trains</a>
    <a href="{{route('contacts')}}" class="
    nav-link
    {{-- {{Route::currentRouteName() == 'contacts' ? 'd-none' : ''}} --}}
    {{Route::currentRouteName() == 'contacts' ? 'a_active' : ''}}
    ">Contacts</a>
</nav>

{{-- settings->file associations->edit in settings.json --}}