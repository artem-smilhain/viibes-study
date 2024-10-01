@extends('admin.layouts.app')
@section('content')
    @include('admin.programs._nav')
    <div class="d-inline-flex justify-content-between w-100 align-items-center mt-3">
        <h4 class="">Специальности - <b>{{ $direction_title }}</b></h4>
        <a href="{{ route('admin.programs.create') }}" class="btn btn-primary mb-3">Добавить специальность +</a>
    </div>
    <div class="mt-2" style="font-size: 16px;">
        @foreach($directions as $direction)
            <span class="badge" style="background: {{ $direction->element_color }};">
                    <a href="{{ route('admin.programs.index-by-direction', $direction) }}" class="text-white text-decoration-none">{{ $direction->name }}</a>
            </span>
        @endforeach
    </div>
    @foreach($academic_degrees as $key => $academic_degree)
        <div class="mt-4">
            <h5>{{ $key }}</h5>
            <table class="table table-bordered table-striped">
                <thead class="bg-gradient-primary">
                <th class="text-capitalize text-center">ID:</th>
                <th class="text-capitalize">Название: </th>
                <th class="text-capitalize">Университет: </th>
                <th class="text-capitalize">Лет: </th>
                <th class="text-capitalize">Степень: </th>
                <th class="text-capitalize">Направление: </th>
                <th class="text-capitalize">Действие: </th>
                </thead>
                <tbody>
                @php $i = 1; @endphp
                @foreach($academic_degree as $program)
                    <tr>
                        <td class="align-middle text-center">@php echo sprintf("%04d", $program->id) @endphp</td>
                        <td class="align-middle text-primary">
                            <div class="d-flex flex-column">
                                <b>{{ $program->name }}</b>
                                <b class="text-success" style="font-size: 0.6rem;">{{ $program->name_sk }}</b>
                            </div>
                        </td>
                        <td class="align-middle text-danger"><b>{{ $program->faculty->university->abbreviation_sk }}</b></td>
                        <td class="align-middle">{{ $program->years_of_study }}</td>
                        <td class="align-middle">{{ $program->academicDegree->degree_abbreviation }}</td>
                        <td class="align-middle">
                            <span style="color: {{ $program->direction->element_color }};">
                                {{ $program->direction->name }}
                            </span>
                            @if(!empty($program->direction_2))
                                <span class="text-secondary">|</span>
                                <span style="color: {{ $program->direction_2->element_color }};">{{ $program->direction_2->name }}</span>
                            @endif
                        </td>
                        <td class="td-actions td-actions d-inline-flex w-100 align-middle">
                            <a href="{{ route('admin.programs.show', $program) }}" class="btn btn-primary btn-sm float-right mr-1" title="{{ __('app.edit') }}">
                                <i class="fa fa-eye"></i>
                            </a>
                            <a href="{{ route('admin.programs.edit', $program) }}" class="btn btn-success btn-sm float-right mr-1" title="{{ __('app.edit') }}">
                                <i class="fa fa-edit"></i>
                            </a>
                            <form method="post" action="{{ route('admin.programs.update', $program) }}" class="mr-1">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm float-right" onclick="return confirm('{{ __('Are you sure?') }}')">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    @endforeach
    <hr>
    <div>
        <form action="">
            <textarea name="content_text" id="content_text">
                <h3>Поступление в Словакию на {{ $direction_title }} - список университетов и специальностей. </h3>
                <p>{{ $direction_title }} в университетах Словакии: ниже представлен список специальностей по направлению "{{ $direction_title }}" в университетах Словакии.</p>
                <hr>
                @foreach($universities as $university => $academic_degrees)
                    <h4>
                        <a href="https://viibes.study/universitety-slovakii/{{ $academic_degrees[array_key_first($academic_degrees)][0]->faculty->university->city->slug }}/{{ $academic_degrees[array_key_first($academic_degrees)][0]->faculty->university->slug }}">
                            {{ $university }}
                        </a>
                    </h4>
                    @foreach($academic_degrees as $academic_degree => $programs)
                        <p>
                        <b>Специальности {{ $academic_degree }}:</b>
                        @foreach($programs as $program)
                            <span class="text-lowercase">{{ $program->name }}@if($loop->last).@else, @endif</span>
                        @endforeach
                        </p>
                    @endforeach
                    <hr>
                @endforeach
            </textarea>
            <script> CKEDITOR.replace('content_text'); </script>
        </form>
    </div>
    {{--<table class="table table-bordered table-striped">
        <thead class="bg-gradient-primary">
        <th class="text-capitalize text-center">#</th>
        <th class="text-capitalize">Название: </th>
        <th class="text-capitalize">Лет: </th>
        <th class="text-capitalize">Степень: </th>
        <th class="text-capitalize">Направление: </th>
        <th class="text-capitalize">Действие: </th>
        </thead>
        <tbody>
        @php $i = 1; @endphp
        @foreach($programs as $program)
            <tr>
                <td class="align-middle text-center"><b>{{ $i++ }}</b></td>
                <td class="align-middle text-primary"><b>{{ $program->name }}</b></td>
                <td class="align-middle">{{ $program->years_of_study }}</td>
                <td class="align-middle">{{ $program->academicDegree->degree_abbreviation }}</td>
                <td class="align-middle" style="color:{{ $program->direction->element_color }} ">{{ $program->direction->name }}</td>
                <td class="td-actions td-actions d-inline-flex w-100 align-middle">
                    <a href="{{ route('admin.programs.show', $program) }}" class="btn btn-primary btn-sm float-right mr-1" title="{{ __('app.edit') }}">
                        <i class="fa fa-eye"></i>
                    </a>
                    <a href="{{ route('admin.programs.edit', $program) }}" class="btn btn-success btn-sm float-right mr-1" title="{{ __('app.edit') }}">
                        <i class="fa fa-edit"></i>
                    </a>
                    <form method="post" action="{{ route('admin.programs.update', $program) }}" class="mr-1">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm float-right" onclick="return confirm('{{ __('Are you sure?') }}')">
                            <i class="fa fa-trash"></i>
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>--}}
@endsection
