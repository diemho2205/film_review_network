@if ($review->comments)
	@foreach ($review->comments as $comment)
		<div class="row" style="margin: 7px 0 0 0;">
			<span style="font-weight: bolder; padding-right: 3px;">Diem Ho</span>
			{{ $comment->content }}
		</div>
	@endforeach
@endif