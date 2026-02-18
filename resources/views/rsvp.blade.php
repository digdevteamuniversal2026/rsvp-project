<!DOCTYPE html>
<html>
<head>
    <title>RSVP Form</title>
</head>
<body>

<h2>RSVP Form</h2>

@if(session('success'))
    <p style="color:green">{{ session('success') }}</p>
@endif

<form method="POST" action="{{ route('rsvp.store') }}">
    @csrf

    <label>Name:</label><br>
    <input type="text" name="name" required><br><br>

    <label>Email:</label><br>
    <input type="email" name="email"><br><br>

    <label>Will you attend?</label><br>
    <select name="response" required>
        <option value="">Select</option>
        <option value="yes">Yes</option>
        <option value="no">No</option>
    </select><br><br>

    <button type="submit">Submit RSVP</button>
</form>

</body>
</html>
