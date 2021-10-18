@push('styles')
    <link href="{{asset('css/welcome.css')}}" rel="stylesheet">
@endpush
@include('layouts.mainHeader-layout')
<div class="container landing-container h-100">
    <div class="row justify-content-center h-100">
        <div class="col-6 my-auto">
            <h1 class="display-1 text-secondary">
                {{Lang::get('lang.home__title')}}
            </h1>
            <div class="row justify-content-center">
                <text class="additional-text">
                    {{Lang::get('lang.login')}}
                </text>
                <text class="additional-text">
                    {{Lang::get('lang.register')}}
                </text>
            </div>
        </div>
    </div>
</div>
@include('layouts.mainFooter-layout')