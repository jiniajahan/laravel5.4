<div class="sidebar-module">
    <h4>Archives</h4>
    <ol class="list-unstyled">
        {{--@foreach($archives as $stats)--}}
            {{--<li>--}}
                {{--<a href="#">{{ $stats['month'] . ' '. $stats['year'] }}</a>--}}

            {{--</li>--}}
            {{--@endforeach--}}
    </ol>
</div>

<div class="sidebar-module">
    <h4>Tags</h4>
    <ol class="list-unstyled">
        @foreach($tags as $tag)
            <li>
               <a href="/tasks/tags/{{$tag}}">
                   {{ $tag }}
               </a>

            </li>
            @endforeach
    </ol>
</div>