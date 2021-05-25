@extends('BackOffice.bop-template')

@section('title','Package | Add Package')

@section('content')
<h2> Flight insert form</h2>
<div>
    @if($message=Session::get('success'))
    <div>
        {{$message}}
    </div>
    @endif
    <form action="" method="post" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="">Fly Ref</label>
            <input id="fly" name="flyref" type="text" placeholder="Fly Ref: ex:A1">

        </div>
        <div>
            <label for="fitinerary">Itinerary</label>
            <select name="itinerary" id="fitinerary">
                <option value="Earth">Earth</option>
                <option value="Moon">Moon</option>
                <option value="Mars">Mars</option>
            </select>

        </div>
        <div>
            <label for="dod">Date of Departure</label>
            <input id="dod" name="dateOfDepart" type="date">

        </div>
        <div>
            <label for="tod">Time of Departure</label>
            <input id="tod" name="timeOfDepart" type="time">

        </div>
        <div>
            <label for="doa">Date of Arrival</label>
            <input id="doa" name="dateOfArrival" type="date">

        </div>
        <div>
            <label for="toa">Time of Arrival</label>
            <input id="toa" name="timeOfArrival" type="time">
        </div>
        <div>
            <label for="flocation">Location</label>
            <select name="location" id="flocation">
                <option value="Baikonur Kosmodroma">Baikonur Kosmodroma</option>
                <option value="Cap Canaveral - Kennedy Space Center">Cap Canaveral - Kennedy Space Center</option>
                <option value="Kourou Guiana Space Center">Kourou Guiana Space Center</option>
            </select>
        </div>
        <div>
            <label for="disc">Description</label>
            <textarea name="fdisc" id="disc" placeholder="Flight Description"></textarea>
        </div>
        <div>
            <label for="ffile">Upload Flight Pictures</label>
            <input name="file" id="ffile" type="file">
        </div>
        <div>
            <label for="tprice">Price</label>
            <input id="tprice" name="price" type="text">
        </div>
        <div>
            <input type="submit" value="Add Fligth">
        </div>
    </form>

    <div>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </div>

</div>
@endsection