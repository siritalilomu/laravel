@extends ('layout.master')

@section ('content')
  <h1 style="text-align:center;">Create a post</h1>
  <div class="row">
    <div class="col-2"></div>
      <div class="col-8">
        <form method="POST" action="/posts">

          {{ csrf_field() }}

          <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" class="form-control" placeholder="Enter Post Title" id="title" name="title">
          </div>

          <div class="form-group">
            <label>Body</label>
            <textarea id="body" name="body" class="form-control"></textarea>
          </div>

          <button type="submit" class="btn btn-primary" style="margin-bottom:16px;">Publish</button>

          @include('layout.errors')

        </form>
      </div>
    <div class="col-2"></div>
  </div>



@endsection
