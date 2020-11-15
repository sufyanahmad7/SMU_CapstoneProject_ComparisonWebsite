@extends('layouts.master')

@section('title', 'Homepage')

@section('content')

<br>

<div class="container">

    {{-- <div id="review_card" class="card mb-3" style="max-width: 540px;"> --}}
  <div id="review_card" class="card mb-3">
    <div class="row no-gutters">
      <div class="col-md-4">
        <img src="https://www.complaintsboard.com/thumb.php?src=cimb-bank.png&wmax=182&hmax=300&quality=100&nocrop=1&bname=119877" class="card-img" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">Ar Rihla Regular Savings Account</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
    </div>

    <button class="accordion">Product Details</button>
    <div class="panel">
      <br>
      <h5>Profit (Hibah) Rate:</h5><p> 0.7% (as of 2004)</p>
      <hr>
      <h5>Min Amount to Earn Hibah:</h5><p> Min balance of $50/month</p>
      <hr>
      <h5>Min Deposit Amount:</h5><p> Singaporean: $10, Non- Singaporean: $500</p>
      <hr>
      <h5>Min Avg Daily Balance (to avoid Fall Below Fee):</h5><p> $200</p>
      <hr>
      <h5>Fall Below Fee:</h5><p> $2</p>
    </div>
    
    <button class="accordion">Our Take</button>
    <div class="panel">
      <br>
      <h5>Pros</h5>
      <ul>
        <li>Best general savings account with high interest.</li>
        <li>Stellar customer service.</li>
      </ul>
      <br>
      <h5>Cons</h5>
      <ul>
        <li>Bank branches are located in CBD/Orchard.</li>
      </ul>
    </div>
  </div>

  <div>
    <br>
    <h2 class="header">Share Your Experience</h2>
    <br>
  </div>
  {{-- <input type="file" name="image" id="image"><br> --}}
  <form id="writereview" action="/create" method="POST" enctype="multipart/form-data" name="formName">
    <div class="form-group">
      <label for="exampleFormControlInput1">User ID</label>
      <input type="text" class="form-control" id="title" placeholder="User ID goes here" name="user_id">
    </div>
    
    <div class="form-group">
        <label for="exampleFormControlInput1">Bank Name</label>
        <input type="text" class="form-control" id="title" placeholder="Bank name goes here" name="bank_name">
    </div>

    <div class="form-group">
      <label for="exampleFormControlInput1">Product Name</label>
      <input type="text" class="form-control" id="title" placeholder="Product name goes here" name="product_name">
    </div>

    <div class="form-group">
      <label for="exampleFormControlInput1">Title</label>
      <input type="text" class="form-control" id="title" placeholder="Title goes here" name="title">
    </div>
    
    <div class="form-group">
      <label for="exampleFormControlTextarea1">Review</label>
      <textarea class="form-control" id="review" rows="3" placeholder="Review goes here" name="review"></textarea>
    <div class="form-group">

    <div class="form-group">
      <label for="exampleFormControlTextarea1">Rating</label>
      <textarea class="form-control" id="review" rows="3" placeholder="Rating goes here" name="rating"></textarea>
    <div class="form-group">
      @csrf
    </div>
  
  <button onclick="add_review()" type="submit" class="btn btn-primary">Submit</button>

</form>  

</div>          

@endsection