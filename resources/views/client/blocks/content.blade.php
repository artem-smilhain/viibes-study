@if(!empty($content_text['heading']) && !empty($content_text['text']) && !app('request')->input('page') && !app('request')->input('degree'))
    <div class="viibes__editor_block">
        <div class="viibes__wrap">
            <div class="viibes__editor_block_main">
                <h1 class="viibes__h2">{{ $content_text['heading'] }}</h1>
                <div class="viibes__editor_block_main_inner">
                    <div class="viibes__editor_block_main_inner_content">
                        @if($content_text['img_src'])
                            <img src="/storage/{{ $content_text['img_src'] }}"
                                 class="viibes__editor_block_main_inner_content_thumbnail">
                        @endif
                        <div id="viibes__editor_content">
                            {!! $content_text['text'] !!}
                        </div>
                    </div>
                    @include('client.layouts.sidebars.content')
                </div>
            </div>
        </div>
    </div>
@endif
