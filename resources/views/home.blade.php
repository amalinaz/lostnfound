@extends('navbar')

@section('title', 'home')

@section('content')

<div class="container" style="display: flex; flex-wrap: wrap; justify-content: space-between; ">
    <div class="row" style="display: flex; flex-wrap: wrap; justify-content: space-between; gap: 2rem ">
        @foreach ($items as $item)
        <div class="col-md-4" style=" width: 250px; margin-bottom: 20px; padding: 20px; border: 1px solid #ccc; border-radius: 5px; background-color:  #eee7d3; box-shadow: 0 2px 3px rgba(0, 0, 0, 0.1);">
            @if($item->image)
                <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->item_name }}" style="  width: 200px; height: 200px; display: flex; justify-content:center">
            @endif
            <h3 style="font-family: poppins">{{ $item->item_name }}</h3>
            <p style="font-family: poppins">{{ $item->location }}</p>
            <p style="font-family: poppins">Created at: {{ $item->created_at->format('Y-m-d H:i') }}</p>

        </div>
        @endforeach
    </div>
</div>

@endsection
