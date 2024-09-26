@extends('navbar')


@section('title', 'newpost')

@section('content')

<div class="container-lg" style="display: flex; justify-content: center; height: 100vh; margin-top:20px" >

    <form action="{{ route('newpost.submit') }}" method="POST" enctype="multipart/form-data" style="width: 400px ; padding: 30px; border-radius: 10px;" >
        @csrf
        <br>
        <label for="name" style="font-family: poppins">Item Name </label>
        <br>
        <input type="text" name="item_name" placeholder="name" style=" width: 300px; height: 10px; background: white; padding: 10px; margin: 10px;">
        <br>

        <label for="location" style="font-family: poppins">Location </label>
        <br>
        <input type="text" name="location" placeholder="location" style=" width: 300px; height: 10px; background: white; padding: 10px; margin: 10px;">
        <br>

        <label for="image" style="font-family: poppins">Attachment </label>
        <br>
        <input type="file" name="image" id="image" required>

        <br><br>
        <button type="submit" style="font-family: poppins; background-color: #174576; color: white; padding: 5px 10px; font-size: 15px; font-weight: bold; border-radius: 5px;">Submit</button>
    </form>

</div>

@endsection
