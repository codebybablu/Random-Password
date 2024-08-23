<!DOCTYPE html>
<html>
<head>
    <title>Random Password Generator</title>
    <link  rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="parent">
    <div class="child">
    <h1>Generate a Random Password</h1>

    <form method="GET" action="{{ url('/generate-password') }}">
        <label for="length">Password Length:</label>
        <input type="number" name="length" id="length" value="12" min="6" max="32">
        <button type="submit">Generate</button>
    </form>

    @if(isset($password))
        <h2>Your Generated Password:</h2>
        <p>{{ $password }}</p>
    @endif
    </div>    
</div>
</body>
</html>
