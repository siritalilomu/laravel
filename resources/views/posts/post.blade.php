<div class="card">
  <div class="card-body">
    <h3 class="card-title">
      <a href="/posts/{{ $post->id }}" style="color:#01b1b3; font-weight:bold;">
        {{ $post->title }}
      </a>
    </h3>
    <p class="card-text"><small class="text-muted">{{ $post->created_at->toFormattedDateString() }}</small></p>
    <p class="card-text">{{ $post->body }}</p>
  </div>
</div>
