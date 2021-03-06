@extends('layouts.app')

@section('title', 'DeviantArt')

@section('content')
  @include('partials.header')
    <link href="css/creative.min.css" rel="stylesheet">
      <title>DeviantArt</title>

        </div>

      <!-- Masthead -->
      <header class="masthead">
        <div class="container h-100">
          <div class="row h-100 align-items-center justify-content-center text-center">
            <div class="col-lg-10 align-self-end">
              <h1 class="text-uppercase text-white font-weight-bold">
                Start using DeviantArt! Share your creations with others
              </h1>
              <hr class="divider my-4">
            </div>
            <div class="col-lg-8 align-self-baseline">
              <p class="text-white-75 font-weight-light mb-5">
                DeviantArt is a social media platform where you can share your creations with others just by creating a account.
              </p>
              <a class="btn btn-light btn-xl js-scroll-trigger" href="/deviantart/public/register">
                Get Started!
              </a>
            </div>
          </div>
        </div>
      </header>

      <!-- Services Section -->
      <section class="page-section" id="services">
        <div class="container">
          <h2 class="text-center mt-0">
            New socialmediaplatform upcoming!
          </h2>
          <hr class="divider my-4">
          <div class="row">
            <div class="col-lg-4 col-md-6 text-center">
              <div class="mt-5">
                <i class="fas fa-4x fa-gem text-primary mb-4"></i>
                <h3 class="h4 mb-2">
                  Create account
                </h3>
                <p class="text-muted mb-0">
                  Create an account with only a username, e-mail address and password
                </p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 text-center">
              <div class="mt-5">
                <i class="fas fa-4x fa-laptop-code text-primary mb-4"></i>
                <h3 class="h4 mb-2">
                  Login
                </h3>
                <p class="text-muted mb-0">Login with your e-mail address and password</p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 text-center">
              <div class="mt-5">
                <i class="fas fa-4x fa-globe text-primary mb-4"></i>
                <h3 class="h4 mb-2">
                  Create your first post
                </h3>
                <p class="text-muted mb-0">
                  It can be a simple photo with a description, be creative!
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Call to Action Section -->
      <section class="page-section bg-dark text-white">
        <div class="container text-center">
          <h2 class="mb-4">
            Only $1 per month
          </h2>
          {{-- <a class="btn btn-light btn-xl" href="#">Download Now!</a> --}}
        </div>
      </section>

      <!-- Contact Section -->
      <section class="page-section" id="contact">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
              <h2 class="mt-0">
                Let's Get In Touch!
              </h2>
              <hr class="divider my-4">
            </div>
          </div>
          <div class="row">
            <div class="col-lg-4 ml-auto text-center">
              <i class="fas fa-phone fa-3x mb-3 text-muted"></i>
              <div>
                +12 3456 789
              </div>
            </div>
            <div class="col-lg-4 mr-auto text-center">
              <i class="fas fa-envelope fa-3x mb-3 text-muted"></i>
              <!-- Make sure to change the email address in anchor text AND the link below! -->
              <a class="d-block" href="mailto:contact@yourwebsite.com">
                contact@yourwebsite.com
              </a>
            </div>
          </div>
        </div>
      </section>
@stop
