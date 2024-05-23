<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pay</title>
</head>
<body>
    <form action="/pay" method="POST">
        @csrf
        <label for="amount">Amount(USD)</label>
        <input type="text" id="amount" name="amount">
        <button type="submit">Pay</button>
    </form>
</body>
</html>
