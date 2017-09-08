<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="500 Internal Server Error">
    <meta name="author" content="customerservice@mimidots.com"/>
    <meta name="ROBOTS" content="NOSNIPPET"/>
    <title>MIMIDOTS|500 Internal Server Error</title>
    <!--    Core Bootrsap css-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Fonts -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <style>
        /* Error Page Inline Styles */
        body {
            padding-top: 40px;
        }
        /* Layout */
        .jumbotron {
            font-size: 21px;
            font-weight: 200;
            line-height: 2.1428571435;
            color: inherit;
            padding: 10px 0;
        }
        /* Everything but the jumbotron gets side spacing for mobile-first views */
        .masthead, .body-content, {
            padding-left: 15px;
            padding-right: 15px;
        }
        /* Main marketing message and sign up button */
        .jumbotron {
            text-align: center;
            background-color: transparent;
        }
        .jumbotron .btn {
            font-size: 21px;
            padding: 14px 24px;
        }
        /* Colors */
        .green {color:#5cb85c;}
        .orange {color:#f0ad4e;}
        .red {color:#d9534f;}
    </style>
    <script type="text/javascript">
        function loadDomain() {
            var display = document.getElementById("display-domain");
            display.innerHTML = document.domain;
        }
    </script>
</head>
<body onload="loadDomain();">


<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="/index.php">
                MIMIDOTS
            </a>
        </div>

    </div>
    <!-- /.container -->
</nav>


<!-- Error Page Content -->
<div class="container">
    <!-- Jumbotron -->
    <div class="jumbotron">
        <h1><span class="fa fa-fire red"></span> 500 Internal Server Error</h1>
        <p class="lead">The web server is returning an internal error for <em><span id="display-domain"></span></em>.</p>
        <a href="../index.php"  class="btn btn-default btn-lg text-center"><span class="green">Reload</span></a>
    </div>
</div>
<div class="container">
    <div class="body-content">
        <div class="row">
            <div class="col-md-6">
                <h2>What happened?</h2>
                <p class="lead">A 500 error status implies there is a problem with the web server's software causing it to malfunction.</p>
            </div>
            <div class="col-md-6">
                <h2>What can I do?</h2>
                <p> Nothing you can do at the moment. If you need immediate assistance, please send us an email instead. We apologize for any inconvenience.</p>
            </div>
        </div>
    </div>
</div>
<!-- End Error Page Content -->

</body>
</html>