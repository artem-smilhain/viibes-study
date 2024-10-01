@extends('admin.layouts.app')
@section('content')
    @include('admin.programs._nav')
    <div class="d-inline-flex justify-content-between w-100 align-items-center mt-3">
        <h4 class="">Специальности для клиентов по универам ⚡️</h4>
        <a href="{{ route('admin.program-info.create') }}" class="btn btn-primary mb-3">Создать документ +</a>
    </div>
    <div class="mb-3">
        <a href="{{ route('admin.program-info.index') }}">Выключить сортировку</a>
    </div>
    @foreach($programs_infos as $key => $program_info_elements)
        <h5 class="mt-4">{{ $key }}: </h5>
        <table class="table table-bordered table-striped">
            <thead class="bg-gradient-primary">
            <th class="text-capitalize text-center">#</th>
            <th class="text-capitalize">Специальность:</th>
            <th class="text-capitalize">Университет:</th>
            <th class="text-capitalize">Клиент:</th>
            <th class="text-capitalize">Дата:</th>
            <th class="text-capitalize">Действия:</th>
            </thead>
            <tbody>
            @php $i = 1; @endphp
            @foreach($program_info_elements as $program_info)
                <tr>
                    <td class="align-middle text-center"><b class="align-middle">{{ $i++ }}</b></td>
                    <td class="align-middle"><b class="text-primary align-middle">
                            <div class="d-flex flex-column">
                                <b>{{ $program_info->program }}</b>
                                <b class="text-success" style="font-size: 0.6rem;">{{ $program_info->program_sk }}</b>
                            </div>
                        </b>
                    </td>
                    <td class="align-middle @if($program_info->university == 'Выбрать университет') text-danger @endif">{{ $program_info->university }}</td>
                    <td class="align-middle">
                        <b class="text-danger">{{ $program_info->name }}</b>
                    </td>
                    <td class="align-middle">{{ $program_info->created_at->format('d.m.Y (H:i)') }}</td>
                    <td class="td-actions d-inline-flex w-100 align-middle">
                        @if(!empty($program_info->program) && $program_info->university != 'Выбрать университет')
                            <a href="{{ route('programs-infos.show', $program_info->slug) }}" class="btn btn-secondary btn-sm float-right mr-1" target="_blank"><i class="fa fa-link"></i></a>
                        @endif
                        @if(!empty($program_info->study_plan_file) || !empty($program_info->study_plan_link))
                            @if(!empty($program_info->study_plan_file))
                                <a href="{{ env('APP_URL') }}storage/{{ $program_info->study_plan_file }}" class="btn btn-primary btn-sm float-right mr-1" target="_blank"><i class="fa fa-file"></i></a>
                            @else
                                <a href="{{ $program_info->study_plan_link }}" class="btn btn-primary btn-sm float-right mr-1" target="_blank"><i class="fa fa-file"></i></a>
                            @endif
                        @endif
                        <a href="{{ route('admin.program-info.edit', $program_info) }}" class="btn btn-success btn-sm float-right mr-1"><i class="fa fa-edit"></i></a>
                        <form method="POST" action="{{ route('admin.program-info.destroy', $program_info) }}" class="mr-1">
                            @csrf @method('DELETE')
                            <button class="btn btn-danger btn-sm float-right" onclick="return confirm('{{ __('Видалити цей докумет?') }}')"><i class="fa fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endforeach
@endsection
