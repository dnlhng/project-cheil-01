<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.21/lodash.min.js"></script>
    <title>Sort Dealers</title>
</head>
<body>
    <h1>open console</h1>
    <script>
    var dealers = @json($dealers);
    var orderDealers = _.sortBy(JSON.parse(dealers), function(o) { return o.ISO_CODE_PAIS.ID_DEALER.ID_DEALERSHIP_OFFICE.name; });
    console.log(orderDealers.reverse());
    </script>
</body>
</html>