<section class='SimplePost content'>
    <div class="{{gfx()['container']}}">
        <div class="p-2">
            <h1>
                {{$post->title}}
            </h1>
            <img src="{{$post->orgUrl()}}" alt="" class="img-fluid">
            <p class="text-muted my-3">
                {{$post->subtitle}}
            </p>
            <div class="row">
                <div class="col-md">
                    <i class="ri-calendar-line"></i>
                    {{$post->created_at->ldate('Y/m/d H:i')}}
                </div>
                <div class="col-md">
                    <i class="ri-message-line"></i>
                    {{number_format($post->approvedComments()->count())}}
                </div>
                <div class="col-md-6">
                    {{__("Tags")}}:
                    @foreach($post->tags as $tag)
                        <a href="{{route('client.tag',$tag->slug)}}" class="tag me-2">
                            <i class="ri-price-tag-line"></i>
                            {{$tag->name}}
                        </a>
                    @endforeach
                </div>
            </div>
            <hr>
            {!! $post->body !!}

        </div>
    </div>
</section>
