@extends('layouts.app')

@section('title', 'Minha Conta')
    
@section('content')


<main class="min-vh-100 d-flex flex-column justify-content-between">
    <section class="container w-100 flex-grow-1 border-bottom py-5 d-lg-flex">
  
    
  
      <!-- Option Cards -->
      <section class="row w-100 px-4 pb-5">
        <div class="col-lg-4 mb-3">
          <div class="border shadow-sm p-4">
            <div class="d-flex justify-content-between mb-3">
              <p class="fw-bold mb-0">Personal Profile</p>
              <a class="text-sm text-primary" href="{{ route('users.edit', $user->id)}}">Edit</a>
            </div>
            <div>
              <p>{{ $user->nome }}</p>
              <p>{{ $user->email }}</p>
              <p>20371</p>
              
            </div>
          </div>
        </div>
  
        <div class="col-lg-4 mb-3">
          <div class="border shadow-sm p-4">
            <div class="d-flex justify-content-between mb-3">
              <p class="fw-bold mb-0">Shipping Address</p>
              <a class="text-sm text-primary" href="manage-address.html">Edit</a>
            </div>
            <div>
              <p>{{ $user->nome }}</p>
              <p>Belgrade, Serbia</p>
              <p>20371</p>
              
            </div>
          </div>
        </div>
  
        <div class="col-lg-4 mb-3">
          <div class="border shadow-sm p-4">
            <div class="d-flex justify-content-between mb-3">
              <p class="fw-bold mb-0">Billing Address</p>
              <a class="text-sm text-primary" href="#">Edit</a>
            </div>
            <div>
              <p>{{ $user->nome }}</p>
              <p>Belgrade, Serbia</p>
              <p>20371</p>
              
            </div>
          </div>
        </div>
      </section>
      <!-- /Option Cards -->
  
    </section>
  </main>

@endsection