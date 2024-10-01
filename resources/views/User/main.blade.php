<!DOCTYPE html>
<html lang="en">
  <head>
    @include('User.header')
    @include('User.stylepage')
    @include('User.styleglobal')
  </head>
  <body>
      @include('User.navbar')
      <div class="container-fluid page-body-wrapper">
        @include('User.sidebar')

        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            @yield('content')
          </div>

          @include('User.footer')
        </div>
      </div>
    </div>
    @include('User.jspage')
    @include('User.jsglobal')
  </body>
</html>
