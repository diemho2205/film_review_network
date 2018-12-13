@if ($reviews)
    @foreach ($reviews as $review)
        <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
            <img
                src="https://www.w3schools.com/w3images/avatar2.png"
                alt="Avatar" class="w3-left w3-circle w3-margin-right"
                style="width:60px"
            >
            <span class="w3-right w3-opacity">1 min</span>
            <h4>Diem Ho</h4><br>
            <hr class="w3-clear">
            <div
                class="row row-film"
                style="margin: 10px; border: 1px solid #ddd; border-radius: 4px; background-color: #ddd"
            >
                    <div class="col-sm-6" style="padding: 0;">
                        <img style="width: 100%; height: 200px;" src="avatar/{{ $review->poster }}" />
                    </div>
                    <div class="col-sm-6">
                    <h3 style="margin: 5px 0; padding: 5px 0; font-style: italic">{{ $review->name }}</h3>
                        <hr class="w3-review">
                        <h5 style="margin: 0; font-style: italic">Actor/Actress</h5>
                        <p>{{ $review->character }}</p>
                        <hr class="w3-review">
                        <h5 style="margin: 0; font-style: italic">Main Content</h5>
                        <p>{{ $review->content }}</p>
                        <hr class="w3-review">
                        <h5 style="margin: 0; font-style: italic">My Rating</h5>
                        {{ showRate($review->rate) }}
                    </div>
            </div>
            <div class="row" style="margin: 10px;">
                <div>
                    <div class="comment more text-justify">
                        {{ $review->feeling }}
                    </div>
                </div>
                <br>
                <i class="fa fa-heart-o" style="font-size: 1.5em; padding: 0.25em;" aria-hidden="true"></i>
                <span id="like-count{{ $review->id }}">0</span>
                <i class="fa fa-comment-o" style="font-size: 1.5em; padding: 0.25em;" aria-hidden="true"></i>
                <span id="comment-count{{ $review->id }}">0</span>
                <hr class="w3-review">
                <div class="row">
                    <div class="col-sm-6 w3-center">
                        <button style="color: {{ ($review->liked_by_auth_user) ? 'red' : 'black'}}" type="button" class="w3-button like" data-id="{{ $review->id }}">
                            <i
                                style="font-size: 1.5em;"
                                class="fa fa-thumbs-up"
                            ></i> Like
                        </button> 
                    </div>
                    <div class="col-sm-6 w3-center">
                        <button
                            type="button" class="w3-button comment-btn" data-id="{{ $review->id }}"
                        >
                            <i style="font-size: 1.5em;" class="fa fa-comment"></i> Comment
                        </button>
                    </div>
                </div>
                <hr class="w3-review">
                <div id="comment" style="margin-top: 15px">
                    <div class="row">
                        <div class="col-sm-1">
                            <img
                                src="https://www.w3schools.com/w3images/avatar2.png"
                                alt="Avatar" class="w3-left w3-circle w3-margin-right"
                                style="width: 50px; padding-left: 5px"
                            >
                        </div>
                        <div class="col-sm-11">
                            <span style="font-weight: bolder; padding-right: 3px;">Hello</span>
                            Phim có buổi công chiếu đầu tiên trên toàn thế giới vào ngày 14 tháng 10 năm 2017
                        </div>
                    </div>
                </div>
                <br>
                @include('forms.comments')
            </div>
        </div>
    @endforeach
@else
    <div class="alert-info">
        <p>There are no reviews</p>
    </div>
@endif
