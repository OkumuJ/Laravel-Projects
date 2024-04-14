<!doctype html>
<html>
<head>
   @include('includes/fe.head')

</head>

<section>
    @include('includes/fe.navigation')
</section>

 <section>
    @include('includes/fe.header')
 </section>


 <section class="featured-posts">
           @yield('content')
 </section>

 <section>
   <footer class="row">
       @include('includes/fe.footer')
</section>
