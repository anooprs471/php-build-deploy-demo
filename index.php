<!DOCTYPE html>
<html>
<head>
<title>Event management in php</title>

<script type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.js"></script>
<script
    src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"
    type="text/javascript"></script>
<script
    src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script
    src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.js"></script>
<script
    src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/locale-all.js"></script>
<link
    href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.css"
    rel="stylesheet">
<link rel="stylesheet"
    href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="assets/css/form.css">
<script src="assets/js/event.js"></script>
<style>
.btn-event-delete {
    font-size: 0.85em;
    margin: 0px 10px 0px 5px;
    font-weight: bold;
    color: #959595;
}
</style>
</head>

<body>
    <div class="phppot-container">
        <h2>Event management in php</h2>
        <div class="response"></div>
        <div class="row">
            <input type="text" name="filter" id="filter"
                placeholder="Choose date" />
            <button type="button" id="button-filter"
                onClick="filterEvent();">Filter</button>
        </div>
        <div class="row">
            <div id='calendar'></div>
        </div>
    </div>
</body>
</html>