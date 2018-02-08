@extends ('layout.master')

@section ('content')
  <div class="card">
    <div class="card-body">
      <h2 class="card-title">{{ $post->title }}</h2>
      <p class="card-text">{{ $post->body }}</p>
      <p class="card-text"><small class="text-muted">{{ $post->created_at->toFormattedDateString() }}</small></p>
    </div>
  </div>
@endsection
