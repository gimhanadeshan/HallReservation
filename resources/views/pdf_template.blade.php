<!DOCTYPE html>
<html>
<head>
    <title>Request Details</title>
</head>
<body>
    <h1>Request Details</h1>
    <p><strong>Request ID:</strong> {{ $requestDetails->id }}</p>
    <p><strong>Name:</strong> {{ $requestDetails->name }}</p>
    <p><strong>Position:</strong> {{ $requestDetails->position }}</p>
    <p><strong>Hall:</strong> {{ $requestDetails->hall }}</p>
    <p><strong>Purpose:</strong> {{ $requestDetails->purpose }}</p>
    <p><strong>Contact Number:</strong> {{ $requestDetails->contact_num }}</p>
    <p><strong>Event Date:</strong> {{ $requestDetails->event_date }}</p>
    <p><strong>Start Time:</strong> {{ $requestDetails->start_time }}</p>
    <p><strong>End Time:</strong> {{ $requestDetails->end_time }}</p>
    <p><strong>Request Status:</strong> {{ $requestDetails->status }}</p>

</body>
</html>
