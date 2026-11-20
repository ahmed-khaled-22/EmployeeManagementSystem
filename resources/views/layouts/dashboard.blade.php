<!DOCTYPE html>
<html>
@include('layouts.partials.head')
  <body>
@include('layouts.partials.navbar')

    <div class="d-flex align-items-stretch">
@include('layouts.partials.sidebar')
      
      @yield('content')
      
@include('layouts.partials.footer')
        
      </div>
    </div>
@include('layouts.partials.script')
    
  </body>
</html>