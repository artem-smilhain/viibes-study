@extends('applicant.layouts.app')
@section('body')
    <section id="programs">
        <div class="viibes__wrap">
            <h1 class="viibes__h1">Специальности 📚</h1>
            <div id="cabinet_breadcrumbs">
                <span><a href="{{ route('enrollee.index') }}">Главная</a></span>
                <div class="viibes__footer_middle_list_circle"></div>
                <span>Специальности</span>
            </div>
            <div class="programs">
                @foreach($programs as $program)
                <div class="program">
                    <h2>{{ $program->name }}</h2>
                    <p class="viibes__text_normal">{{ $program->faculty->university->name }}</p>
                    <div class="statuses">
                        @foreach($enrollee->programStatusesByProgram($program)->get() as $status)
                            <div class="status" style="background: {{ $status->element_color }}1A; color: {{ $status->element_color }}">
                                <div>
                                    <h3>{{ $status->title }}</h3>
                                    <h3>{{ date('d.m.Y', strtotime($status->pivot->created_at)) }}</h3>
                                </div>
                                <p>{{ $status->description }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection

