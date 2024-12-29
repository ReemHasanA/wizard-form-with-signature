<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission Screen</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="http://keith-wood.name/css/jquery.signature.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{url('css/main.css')}}">
</head>
<body>
    <nav class="navbar bg-info text-light">
        <a href="/" class="btn text-light"><i class="fa fa-taxi"></i> Admission Screen</a>
    </nav>
    <div class="tabs">
        <button class="tab-button"><i class="fa fa-bars" aria-hidden="true"></i> Main Details</button>
        <button class="tab-button step"><i class="fa fa-clock-o"></i> Timings</button>
        <button class="tab-button step"><i class="fa fa-heartbeat" aria-hidden="true"></i> Progress Notes</button>
        <button class="tab-button"><i class="fa fa-user"></i> Anesthesia</button>
        <button class="tab-button"><i class="fa fa-eyedropper" aria-hidden="true"></i> Medications</button>
        <button class="tab-button"><i class="fa fa-car" aria-hidden="true"></i> Discharge</button>
        <button class="tab-button"><i class="fa fa-newspaper-o" aria-hidden="true"></i> Admission Forms</button>
        <button class="tab-button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> OR Forms</button>
        <button class="tab-button"><i class="fa fa-clone" aria-hidden="true"></i> Shared Forms</button>
    </div>
    @yield('body')

    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

    <script type="text/javascript" src="http://keith-wood.name/js/jquery.signature.js"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script type="text/javascript" src="{{url('js/form.js')}}"></script>

</body>

</html>