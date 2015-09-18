@extends('layouts.master')
    @section('content')
    <div class="container content">
            <div class="slideshow-examples-header" style='text-align:center'>
                <a class='btn btn-lg btn-success'>Create Slideshow</a>
            </div>
            <br>
            <div class="slideshow-examples-gallery" style='text-align:center'>
                <p class='lead'>Checkout these gorgeous slideshows made by other real estate agents:</p>
<div class="row">
        <img class='slideshow-thumbnail'src='assets/img/slideshows/family_and_friends.jpg' width='20%'>
        <img class='slideshow-thumbnail'src='assets/img/slideshows/online_sales.jpg'width='20%'>
        <img class='slideshow-thumbnail'src='assets/img/slideshows/photography.jpg'width='20%'>
</div>
<div class="row">
        <img class='slideshow-thumbnail'src='assets/img/slideshows/real_estate.jpg'width='20%'>
        <img class='slideshow-thumbnail'src='assets/img/slideshows/travel.jpg'width='20%'>
        <img class='slideshow-thumbnail'src='assets/img/slideshows/online_sales.jpg'width='20%'>
</div>
            </div>
    </div>
    @stop
