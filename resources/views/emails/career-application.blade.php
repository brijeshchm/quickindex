<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Career application</title>
</head>
<body>
    <h2>New career application</h2>

    <p><strong>Name:</strong> {{ $application->name }}</p>
    <p><strong>Email:</strong> {{ $application->email }}</p>
    <p><strong>Mobile:</strong> {{ $application->mobile }}</p>
    <p><strong>Subject:</strong> {{ $application->subject }}</p>

    <p><strong>Message:</strong></p>
    <div style="white-space: pre-wrap;">{{ $application->message }}</div>

    <p>The applicant's resume is attached.</p>
</body>
</html>