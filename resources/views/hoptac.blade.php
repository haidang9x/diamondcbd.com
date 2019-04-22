<!DOCTYPE html>
<html>
<head>
  <title>Thu hop tac</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <h2>GỬI THƯ HỢP TÁC</h2>
  @if(!empty($status))
		<div class="alert alert-{{ $error?"danger":"success" }}" role="alert">
		@if($error)
			@foreach($status as $v)
				{{ $v[0] }}
			@endforeach
		@else
		{{ implode('<br/>', $status) }}
		@endif
		</div>
  @endif
  <form action="" method="post">
  {{ csrf_field() }}
    <div class="form-group">
		<label for="email">to:</label>
		<input type="text" class="form-control" id="email" name="email">
      <label for="comment">Content:</label>
      <textarea class="form-control" rows="5" id="comment" name="text"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>
