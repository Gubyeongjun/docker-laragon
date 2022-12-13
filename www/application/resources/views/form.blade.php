<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>검색</h2>
  <form action="/search" method = "post">
    @csrf
    <label for="search"></label>
    <input type="text" class="form-control" id="search" placeholder="검색어 입력" name="search">
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>
