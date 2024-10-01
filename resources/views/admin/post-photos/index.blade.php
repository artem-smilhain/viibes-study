@extends('admin.layouts.app')
@section('content')
    <div class="d-inline-flex justify-content-between w-100 align-items-center mt-3 mb-3">
        <h4>Фотографии к публикациям 📸</h4>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-8 p-0">
                <div class="container">
                    <div class="row">
                        @foreach($images as $image)
                            <div class="col-4 p-1">
                                <div class="position-relative">
                                    <img class="w-100 rounded-2" style="height: 230px; object-fit: cover;" src="/storage/{{ $image->src }}" alt="">
                                    <p class="position-absolute" style="bottom: -14px; left: 7px; font-size: 10px; color: #fff; text-shadow: 0 0 9px #000;">
                                        {{ $image->created_at->format('d.m.Y') }}
                                    </p>
                                    <div class="d-inline-flex position-absolute" style="bottom: 0; right: 0; background: #dedede; padding: 8px; border-radius: var(--bs-border-radius) 0 var(--bs-border-radius) 0 !important;">
                                        <!-- onclick="copyURI(event)" -->
                                        <a target="_blank" href="/storage/{{ $image->src }}" class="btn btn-secondary btn-sm float-right mr-1">
                                            Ссылка на файл
                                        </a>
                                        <form method="post" action="{{ route('admin.post-photos.destroy', $image) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger btn-sm float-right" onclick="return confirm('{{ __('Шо, точно видалити хочеш?') }}')">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-4">
                <form method="post" action="{{ route('admin.post-photos.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="form-group col-12">
                            <h4 class="mb-3">Добавить фотографию: </h4>
                            <div class="btn btn-primary">
                                <input type="file" name="src" id="src">
                            </div>
                            <p class="m-0 text-secondary">(Допустимый формат: JPG, PNG)</p>
                            @error('src')
                                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                            @enderror
                            <button type="submit" class="btn btn-success mt-2"><span>Сохранить</span></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        function copyURI(event) {
            event.preventDefault();
            navigator.clipboard.writeText(event.target.getAttribute('href')).then(() => {
                /* clipboard successfully set */
            }, () => {
                alert('Помилка, трясця!')
            });
        }
    </script>
    {{--<table class="table table-bordered table-striped">
        <thead class="bg-gradient-primary">
            <th class="text-capitalize">Картинка</th>
            <th class="text-capitalize">Ссылка</th>
            <th class="text-capitalize">Действие</th>
        </thead>
        <tbody>
            <tr>
                <td><img src="http://viibes.study.local/storage/content/images/7h5MbsznKT330TwAB1RcCvGjJoQ5XDz2nTIfNdMO.jpg" alt=""></td>
                <td>http://viibes.study.local/storage/content/images/7h5MbsznKT330TwAB1RcCvGjJoQ5XDz2nTIfNdMO.jpg</td>
                <td class="td-actions d-inline-flex w-100 align-middle">

                </td>
            </tr>
        </tbody>
    </table>--}}
@endsection

{{-- http://viibes.study.local/storage/content/images/7h5MbsznKT330TwAB1RcCvGjJoQ5XDz2nTIfNdMO.jpg --}}
