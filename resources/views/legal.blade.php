@extends('layouts.main')

@push('styles')
<style>
    body{
        background-color: #1E1E1E !important;
        color: #fff !important;
    }
</style>
@endpush

@section('content')
<section class="section-legal">
    <div class="container">
        <div class="row btm-mr">
            <div class="col-md-6">
                <div class="title-group">
                    <p class="wide">Textos Legales</p>
                    <h2 class="display-3">{{ $text }}</h2>
                </div>
                <p><small>última actualización: 2024-05-10</small></p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-7">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas eu ipsum at arcu aliquam dictum. Curabitur tincidunt mauris ac fringilla tempus. Curabitur eleifend, tellus ac condimentum suscipit, odio velit molestie neque, vitae rutrum nunc augue at ante. Donec vel tortor mauris. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed cursus pellentesque metus nec blandit. Fusce ultricies dignissim lobortis. Vestibulum aliquam maximus sem, eget euismod enim pulvinar ut. Phasellus facilisis orci dui, vel fermentum nibh vulputate nec. Phasellus mollis rutrum arcu. Curabitur pretium felis sem, a elementum tortor tempor nec. In ultrices eros quis diam sollicitudin ullamcorper. Nullam enim augue, pretium quis consequat sed, iaculis et metus. Nulla sed gravida lacus. Etiam posuere suscipit mauris.
                    Pellentesque mauris nisl, iaculis quis placerat id, pharetra ac odio. Fusce vitae nunc scelerisque, maximus risus et, laoreet risus. Sed vitae lorem ut felis faucibus eleifend. Fusce vel dictum arcu. Fusce gravida magna nec ex tempus, at suscipit nisi sagittis. Aliquam erat volutpat. Proin vehicula tellus quam, ac auctor velit efficitur ut. Cras aliquam facilisis tellus tempus hendrerit. Integer cursus pulvinar tristique. Maecenas et sodales libero. Vivamus non risus a lorem tincidunt mollis. Quisque sit amet risus mi.</p>
            
                <p>In vitae ante nunc. Nulla viverra malesuada egestas. Nam nec molestie dui. Quisque eget mauris in ante gravida finibus id eu tellus. Proin id egestas justo. Ut lobortis nibh lorem, ac aliquam nibh laoreet eget. Suspendisse pellentesque urna et risus malesuada fermentum. Quisque libero augue, pellentesque nec posuere a, fringilla ac nisi. Phasellus enim nunc, eleifend aliquam dapibus at, auctor sit amet lorem. Nunc malesuada lectus ultricies, pulvinar arcu nec, tempor ante. Phasellus vel lorem est. Etiam tristique at odio venenatis ultricies. Nulla id blandit mi, at facilisis dui. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque mi velit, eleifend vitae metus consequat, accumsan elementum lectus. Nullam rutrum risus eu tellus vestibulum, vitae aliquet elit mollis.
                        Nulla pharetra mattis justo, ac placerat tortor. Etiam blandit commodo orci nec commodo. Suspendisse ex neque, ornare et lobortis sit amet, pretium quis leo. Etiam vel rhoncus leo. Maecenas ullamcorper rutrum lorem, id fringilla nisl. Duis elementum egestas augue eu euismod. Nam eu mauris suscipit, feugiat lorem quis, accumsan dui. Nullam nec gravida augue, eu fringilla mauris. Fusce semper non odio at hendrerit. Duis sagittis mollis elit, a tristique felis pretium id. Fusce malesuada dignissim enim.</p>
                <p>Morbi molestie, mauris eget viverra semper, dolor ex iaculis sapien, in congue diam turpis ac ex. Nunc nec ultricies neque, gravida commodo turpis. Sed aliquet odio sit amet lacus suscipit posuere. Proin eleifend lectus enim, a sodales lorem lacinia at. Cras sit amet euismod libero. Praesent aliquet orci in purus euismod tempus. Fusce tincidunt arcu est, ut convallis justo dapibus id. In venenatis lectus tortor, vel porttitor purus semper at.</p>
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')
@endpush
