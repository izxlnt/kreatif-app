<!DOCTYPE html>
<html lang="en">

<x-landing-head/>
<body class="{{ isset($bodyClass) ? $bodyClass . ' custom-cursor' : 'custom-cursor' }}">
    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>

    <div class="page-wrapper">


    @yield('content')
    

   <x-landing-scripts/>

</body>

</html>