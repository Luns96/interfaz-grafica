@extends('app')

@section('content')
<h2>Products</h2>
<div class="row">
    <div class="col-4">
        <div class="list-group" id="list-tab" role="tablist">
            <a class="list-group-item list-group-item-action active" id="list-T-shit-list" data-toggle="list" href="#list-T-shit" role="tab" aria-controls="T-shit">T-shit</a>
            <a class="list-group-item list-group-item-action" id="list-Pant-list" data-toggle="list" href="#list-Pant" role="tab" aria-controls="Pant">Pant</a>
            <a class="list-group-item list-group-item-action" id="list-Tecnologic-list" data-toggle="list" href="#list-Tecnologic" role="tab" aria-controls="Tecnologic">Tecnologic</a>
        </div>
    </div>
    <div class="col-8">
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="list-T-shit" role="tabpanel" aria-labelledby="list-T-shit-list">
                @include('t-shirt')
            </div>
            <div class="tab-pane fade" id="list-Pant" role="tabpanel" aria-labelledby="list-Pant-list">
                @include('pant')
            </div>
            <div class="tab-pane fade" id="list-Tecnologic" role="tabpanel" aria-labelledby="list-Tecnologic-list">
                @include('tecnologic')
            </div>
      </div>
    </div>
</div>
@include('footer')
@endsection