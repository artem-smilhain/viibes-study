@extends('admin.layouts.app')
@section('content')
    <h4><a href="{{ route('admin.users.index') }}">{{ __('app.Users')}}</a> / <a href="{{ route('admin.users.show', $user) }}">{{ $user->email }}</a> / {{ __('app.edit') }} </h4>

    <h4>{{ __('app.specialities') }}</h4>
    <form method="post" action="{{ route('admin.users.specialities.store', $user) }}">
        @csrf
        <div class="row">
            @if($errors)
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger" role="alert">
                        {{ $error }}
                    </div>
                @endforeach
            @endif
        </div>
        <div class="row">
            <div class="col-12">
                <h4>Добавление программы</h4>
                <div class="form-group">
                    <table class="table table-bordered table-sm" id="program-table">
                        <thead>
                        <tr><th>{{ __('app.program') }}</th><td>{{ __('app.status') }}</td></tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <input type="text" name="program_name" id="program_name" placeholder="Программа" class="form-control" value="{{ old('program_name') }}"  onkeyup="onKeyUp()"/>
                                    <input type="hidden" name="program_id" id="program_id" value="{{ old('program_id') }}">
                                    <div id="programs-list"></div>
                                </td>
                                <td>
                                    <select name="program_status_id"
                                            class="custom-select @error('program_status_id') is-invalid @enderror" required>
                                        <option>{{ __('app.select_status') }}</option>
                                        @foreach($programStatuses as $programStatus)
                                            <option
                                                value="{{ $programStatus->id }}" {{ $programStatus->id == old('program_status_id') ? 'selected' : '' }}>{{ $programStatus->title }}</option>
                                        @endforeach
                                    </select>
                                    @error('program_status_id')
                                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                                    @enderror
                                </td>
                            </tr>
                        </tbody>

                        {{--            <tr>--}}
                        {{--                <td><input type="text" name="education[]" placeholder="Enter Education" class="form-control name_list" /></td>--}}
                        {{--                <td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>--}}
                        {{--            </tr>--}}
                    </table>
                </div>
            </div>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">{{ __('app.Save') }}</button>
        </div>
    </form>
@endsection
@section('js')
<script>
    function onKeyUp() {
        var program = document.getElementById("program_name");

        if (program.value.length >= 3) {
            document.getElementById("programs-list").innerHTML = "Поиск...";

            var ajax = new XMLHttpRequest();
            ajax.open("GET", "{{ route('admin.programs.autocomplete-by-name') }}?term=" + program.value, true);

            ajax.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    var data = JSON.parse(this.responseText);
                    var html = "";
                    for (var a = 0; a < data.length; a++) {
                        html += "<p onclick='selectProduct(this);' data-id='" + data[a].id + "'>" + data[a].name + "</p>";
                    }
                    document.getElementById("programs-list").innerHTML = html;
                }
            };

            ajax.send();
        }
    }
    function selectProduct(self) {
        var programId = self.getAttribute("data-id");
        document.getElementById("program_id").value = programId;
        document.getElementById("programs-list").innerHTML = "";
        document.getElementById("program_name").value = self.innerHTML;
    }
</script>
@append
