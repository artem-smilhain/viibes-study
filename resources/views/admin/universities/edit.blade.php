@extends('admin.layouts.app')
@section('content')
    <h4 class="mt-4">Редактировать {{ old('name_sk', $university->name) }}</h4>
    <h6 class="mb-4">
        <a href="{{ route('admin.universities.index') }}" class="text-capitalize">Университеты</a> /
        <a href="{{ route('admin.universities.show', $university) }}">
            {{ old('name', $university->name) }}
        </a> / <span class="text-success">Редактировать</span>
    </h6>
    @foreach ($errors->all() as $error)
        <div>{{ $error }}</div>
    @endforeach
    <form method="post" action="{{ route('admin.universities.update', $university) }}" id="university-edit-form" enctype="multipart/form-data">
        @csrf
        {{ method_field('patch') }}
        <div class="row">
            <div class="input-field col-4">
                <div class="form-group">
                    <label for="name" class="col-form-label">Название университета: </label>
                    <input id="name" name="name" class="form-control @error('name') is-invalid @enderror"
                           value="{{ old('name', $university->name) }}" required>
                    @error('name')
                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="input-field col-4">
                <div class="form-group">
                    <label for="name_sk" class="col-form-label">Название университета (SK): </label>
                    <input id="name_sk" name="name_sk" class="form-control @error('name_sk') is-invalid @enderror"
                           value="{{ old('name_sk', $university->name_sk) }}" required>
                    @error('name_sk')
                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="input-field col-2">
                <div class="form-group">
                    <label for="abbreviation" class="col-form-label">Аббревиатура: </label>
                    <input id="abbreviation" name="abbreviation" class="form-control @error('abbreviation') is-invalid @enderror"
                           value="{{ old('abbreviation', $university->abbreviation) }}" required>
                    @error('abbreviation')
                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="input-field col-2">
                <div class="form-group">
                    <label for="abbreviation_sk" class="col-form-label">Аббревиатура (SK): </label>
                    <input id="abbreviation_sk" name="abbreviation_sk" class="form-control @error('abbreviation_sk') is-invalid @enderror"
                           value="{{ old('abbreviation_sk', $university->abbreviation_sk) }}" required>
                    @error('abbreviation_sk')
                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="input-field col-12">
                <hr>
                <div class="form-group">
                    <label for="meta_title" class="col-form-label">Meta Title: </label>
                    <input id="meta_title" name="meta_title" class="form-control @error('meta_title') is-invalid @enderror"
                           value="{{ old('meta_title', $university->meta_title) }}" required>
                    @error('meta_title')
                        <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="input-field col-12">
                <div class="form-group mb-4">
                    <label for="meta_description" class="col-form-label">Meta Description: </label>
                    <input id="meta_description" name="meta_description" class="form-control @error('meta_description') is-invalid @enderror"
                           value="{{ old('meta_description', $university->meta_description) }}" required>
                    @error('meta_description')
                        <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
                <hr>
            </div>
            <div class="form-group col-5">
                <label for="description" class="form-label text-capitalize">{{ __('app.description') }}</label>
                <textarea style="min-height: 380px;" class="form-control ckeditor-field @error('description') is-invalid @enderror" id="description" rows="3" name="description">{{ old('description', $university->description) }}</textarea>
                @error('description')
                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                @enderror
            </div>
            <div class="form-group col-7">
                <div class="container">
                    <div class="row">
                        <div class="input-field col-6">
                            <div class="form-group">
                                <label for="founding_year" class="form-label text-capitalize">Год: </label>
                                <input id="founding_year" name="founding_year" type="number" class="form-control @error('founding_year') is-invalid @enderror"
                                       value="{{ old('founding_year', $university->founding_year) }}" required>
                                @error('founding_year')
                                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>
                        </div>
                        <div class="input-field col-6">
                            <div class="form-group">
                                <label for="site_url" class="form-label text-capitalize">Сайт: </label>
                                <input id="site_url" name="site_url" class="form-control @error('site_url') is-invalid @enderror"
                                       value="{{ old('site_url', $university->site_url) }}" required>
                                @error('site_url')
                                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>
                        </div>
                        <div class="input-field col-6">
                            <div class="form-group">
                                <label for="number_of_students" class="form-label text-capitalize">Студентов: </label>
                                <input id="number_of_students" name="number_of_students" type="number" class="form-control @error('number_of_students') is-invalid @enderror"
                                       value="{{ old('number_of_students', $university->number_of_students) }}" required>
                                @error('number_of_students')
                                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>
                        </div>
                        <div class="input-field col-6">
                            <div class="form-group">
                                <label for="education_cost_en" class="form-label text-capitalize">Стоимость обучения (EN): </label>
                                <input id="education_cost_en" name="education_cost_en" class="form-control @error('education_cost_en') is-invalid @enderror"
                                       value="{{ old('education_cost_en', $university->education_cost_en) }}" required>
                                @error('education_cost_en')
                                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>
                        </div>
                        <div class="input-field col-6">
                            <div class="form-group">
                                <label for="scholarships" class="form-label text-capitalize">Стипендии: </label>
                                <input id="scholarships" name="scholarships" class="form-control @error('scholarships') is-invalid @enderror"
                                       value="{{ old('scholarships', $university->scholarships) }}" required>
                                @error('scholarships')
                                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group col-6">
                            <label for="city_id" class="text-capitalize">Город: </label>
                            <select id="city_id" name="city_id"
                                    class="custom-select @error('city_id') is-invalid @enderror" required>
                                <option>{{ __('app.select_city') }}</option>
                                @foreach($cities as $city)
                                    <option
                                        value="{{ $city->id }}" {{ $city->id == old('city_id', $university->city_id) ? 'selected' : '' }}>{{ $city->name }}</option>
                                @endforeach
                            </select>
                            @error('city_id')
                            <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>
                        <div class="form-group col-6">
                            <label for="address" class="form-label text-capitalize">Адрес: </label>
                            <input id="address" name="address" class="form-control @error('address') is-invalid @enderror"
                                   value="{{ old('address', $university->address) }}" required>
                            @error('address')
                            <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>
                        <div class="form-group col-6">
                            <label for="address_sk" class="form-label text-capitalize">Адрес (SK): </label>
                            <input id="address_sk" name="address_sk" class="form-control @error('address_sk') is-invalid @enderror"
                                   value="{{ old('address_sk', $university->address_sk) }}" required>
                            @error('address_sk')
                            <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>
                        <div class="input-field col-6">
                            <div class="form-group">
                                <label for="google_map_src" class="form-label text-capitalize">Google Map: </label>
                                <input id="google_map_src" name="google_map_src" class="form-control @error('google_map_src') is-invalid @enderror"
                                       value="{{ old('google_maps_src', $university->google_map_src) }}">
                                @error('google_map_src')
                                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>
                        </div>
                        <div class="input-field col-6">
                            <div class="form-group">
                                <label for="row_weight" class="form-label text-capitalize">Row weight: </label>
                                <input id="row_weight" name="row_weight" type="number" class="form-control @error('row_weight') is-invalid @enderror"
                                       value="{{ old('row_weight', $university->row_weight) }}" required>
                                @error('row_weight')
                                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{--<div class="form-group col-12">
                <label for="faculties_description" class="form-label text-capitalize">Описание факультетов: </label>
                <textarea class="form-control ckeditor-field @error('faculties_description') is-invalid @enderror" id="faculties_description" rows="3" name="faculties_description">{{ old('faculties_description', $university->faculties_description) }}</textarea>
                @error('faculties_description')
                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                @enderror
            </div>--}}
            <div class="col-12 pb-3">
                <hr>
            </div>
            <div class="form-group col-5">
                <label>Группы универа: </label>
                <table class="table table-striped table-bordered table-sm">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>{{ __('app.group') }}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($groups as $group)
                        <tr><td><input type="checkbox" name="group[{{ $group->id }}]" value="1" @if (in_array($group->id, $university_groups) || old('group.' . $group->id )) checked @endif></td><td>{{ $group->name }}</td></tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="form-group col-4">
                <label>Лого университета: </label> <br>
                <div class="btn btn-primary">
                    <input type="file" name="logo_src" id="logo_src">
                </div> <br>
                @error('logo_src')
                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                @enderror
                <label class="mt-2">Главная картинка: </label> <br>
                <div class="btn btn-primary">
                    <input type="file" name="thumbnail_src" id="thumbnail_src">
                </div>
                @error('thumbnail_src')
                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                @enderror
            </div>
            <div class="form-group col-3">
                <div class="position-relative">
                    @if($university->thumbnail_src)
                        <img src="/storage/{{ $university->thumbnail_src }}" class="w-100 rounded-4">
                    @endif
                        <div class="position-absolute bottom-0 end-0">
                            @if($university->logo_src)
                                <img src="/storage/{{ $university->logo_src }}" style="width: 80px;">
                            @endif
                        </div>
                </div>
            </div>
            <div class="col-12 pb-3">
                <hr>
            </div>
            <!-- CONTENT --------------------------------------------- -->
            <div class="input-field col-7">
                <div class="form-group">
                    <label for="content_text" class="col-form-label">Текст к университету:</label>
                    <textarea name="content_text" id="content_text" class="form-control" cols="30" rows="15">
                                {{ old('content_text', $university->content_text) }}
                            </textarea>
                    @error('content_text')
                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
                <script> CKEDITOR.replace('content_text'); </script>
            </div>
            <div class="col-5">
                <div class="input-field">
                    <div class="form-group">
                        <label for="content_heading" class="col-form-label">Заголовок к тексту об университете: </label>
                        <input id="content_heading" name="content_heading" class="form-control @error('content_heading') is-invalid @enderror"
                               value="{{ old('content_heading', $university->content_heading) }}" required>
                        @error('content_heading')
                        <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="content_img_src" class="col-form-label">Выбрать картинку к тексту: </label>
                    <div class="btn btn-primary">
                        <input type="file" name="content_img_src" id="content_img_src">
                    </div>
                    @if(!empty($university->content_img_src))
                        <img src="{{ env('APP_URL') }}storage/{{ $university->content_img_src }}" class="w-100 mt-2 rounded-4" alt="">
                    @endif
                    @error('content_img_src')
                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <!-- // CONTENT --------------------------------------------- -->
            {{--<div class="col-md-12">
                <div class="card card-default" id="dropzone-card">
                    <div class="card-header">
                        <h3 class="card-title">Картинки</h3>
                    </div>
                    <div class="card-body">
                        <div id="actions" class="row">
                            <div class="col-lg-6">
                                <div class="btn-group w-100">
                                            <span class="btn btn-success col fileinput-button dz-clickable">
                                                <i class="fas fa-plus"></i>
                                                <span>Add files</span>
                                            </span>
                                    <button class="btn btn-primary col start" id="start-upload">
                                        <i class="fas fa-upload"></i>
                                        <span>Start upload</span>
                                    </button>
                                    <button type="reset" class="btn btn-warning col cancel">
                                        <i class="fas fa-times-circle"></i>
                                        <span>Cancel upload</span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-lg-6 d-flex align-items-center">
                                <div class="fileupload-process w-100">
                                    <div id="total-progress" class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
                                        <div class="progress-bar progress-bar-success" style="width:0%;" data-dz-uploadprogress=""></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="table table-striped files" id="previews">
                            <div id="template" class="row mt-2">
                                <div class="col-auto">
                                    <span class="preview"><img src="data:," alt="" data-dz-thumbnail /></span>
                                </div>
                                <div class="col d-flex align-items-center">
                                    <p class="mb-0">
                                        <span class="lead" data-dz-name></span>
                                        (<span data-dz-size></span>)
                                    </p>
                                    <strong class="error text-danger" data-dz-errormessage></strong>
                                </div>
                                <div class="col-4 d-flex align-items-center">
                                    <div class="progress progress-striped active w-100" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
                                        <div class="progress-bar progress-bar-success" style="width:0%;" data-dz-uploadprogress></div>
                                    </div>
                                </div>
                                <div class="col-auto d-flex align-items-center">
                                    <div class="btn-group">
                                                <span class="btn btn-primary start">
                                                    <i class="fas fa-upload"></i>
                                                    <span>Start</span>
                                                </span>
                                        <span data-dz-remove class="btn btn-warning cancel">
                                                    <i class="fas fa-times-circle"></i>
                                                    <span>Cancel</span>
                                                </span>
                                        <span data-dz-remove class="btn btn-danger delete">
                                                    <i class="fas fa-trash"></i>
                                                    <span>Delete</span>
                                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer">
                            Visit <a href="https://www.dropzonejs.com">dropzone.js documentation</a> for more examples and information about the plugin.
                        </div>
                    </div>
                </div>
            </div>--}}
        </div>
        <div id="hidden-vars"></div>
        <div class="col-12">
            <div class="form-group">
                <a href="{{ url()->previous() }}" class="btn btn-outline-secondary">Вернуться назад (без сохранения)</a>
                <button type="submit" class="btn btn-success"><span>Обновить университет</span></button>
            </div>
        </div>
    </form>
@endsection
@section('js')
    <script>
        let uploadedDocumentMap = {}
    // DropzoneJS Demo Code Start
    dropzone.autoDiscover = false

    // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
    let previewNode = document.querySelector("#template")
    previewNode.id = ""
    let previewTemplate = previewNode.parentNode.innerHTML
    previewNode.parentNode.removeChild(previewNode)

    let myDropzone = new dropzone.Dropzone("#dropzone-card", { // Make the whole body a dropzone
        url: "{{ route('admin.tmp-upload') }}", // Set the url
        headers: {
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        method: 'POST',
        paramName: "file",
        thumbnailWidth: 80,
        thumbnailHeight: 80,
        parallelUploads: 20,
        previewTemplate: previewTemplate,
        autoQueue: false, // Make sure the files aren't queued until manually added
        previewsContainer: "#previews", // Define the container to display the previews
        clickable: ".fileinput-button", // Define the element that should be used as click trigger to select files.
        init: function () {
                @if($university->pictures)
            //var myDropzone = new dropzone.Dropzone("#dropzone-card");
            let files = {!! json_encode($university->getPicturesForDropzone()) !!}
                for (let i in files) {
                    let file = files[i]
                this.options.addedfile.call(this, file)
                this.options.thumbnail.call(this, file, "/storage/" + file.name);
                file.previewElement.classList.add('dz-success')
                file.previewElement.classList.add('dz-complete')
            }
                for(let i in files) {
                    let file = files[i]
                    document.getElementById("hidden-vars").innerHTML += '<input type="hidden" name="image_src[]" value="' + file.name + '">';
                }
            @endif
        },
        success: function (file, response) {
            document.getElementById("hidden-vars").innerHTML += '<input type="hidden" name="image_src[]" value="' + response.name + '">';
            uploadedDocumentMap[file.name] = response.name
        },
        removedfile: function(file) {
            var fileName = file.name;
            fd = new FormData()
            fd.append('filename', fileName)
            httpRequest = new XMLHttpRequest()
            httpRequest.open('POST', '{{ route('admin.university.pictures.delete', $university) }}')
            //httpRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            //httpRequest.setRequestHeader("Content-type", "application/json");
            httpRequest.setRequestHeader('X-CSRF-TOKEN', '{{ csrf_token() }}');
            httpRequest.send(fd)

            let _ref;
            return (_ref = file.previewElement) != null ? _ref.parentNode.removeChild(file.previewElement) : void 0;
        }
    })

    myDropzone.on("addedfile", function(file) {
    // Hookup the start button
    file.previewElement.querySelector(".start").onclick = function() { myDropzone.enqueueFile(file) }
    })

    // Update the total progress bar
    myDropzone.on("totaluploadprogress", function(progress) {
    document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
    })

    myDropzone.on("sending", function(file) {
    // Show the total progress bar when upload starts
    document.querySelector("#total-progress").style.opacity = "1"
    // And disable the start button
    file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
    })

    // Hide the total progress bar when nothing's uploading anymore
    myDropzone.on("queuecomplete", function(progress) {
    document.querySelector("#total-progress").style.opacity = "0"
    })

    // Setup the buttons for all transfers
    // The "add files" button doesn't need to be setup because the config
    // `clickable` has already been specified.
    // document.querySelector("#previews .start").onclick = function(e) {
    //     e.preventDefault();
    //     e.stopPropagation();
    //     myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(dropzone.Dropzone.ADDED))
    // }
    // document.querySelector("#previews .cancel").onclick = function() {
    // myDropzone.removeAllFiles(true)
    // }
//    document.querySelector("#actions .delete").onclick = function() {
//        myDropzone.removeAllFiles(true)
//    }
//         document.querySelector("#previews .delete").onclick = function(e, file) {
//             //myDropzone.removeAllFiles(true)
//             e.preventDefault();
//             e.stopPropagation();
//             myDropzone.removeFile(file)
//         }

    let submitDropzone = document.getElementById("start-upload");
    submitDropzone.addEventListener("click", function(e) {
        // Make sure that the form isn't actually being sent.
       e.preventDefault();
        e.stopPropagation();

        if (myDropzone.files != "") {
            console.log(myDropzone.files);
            myDropzone.processQueue();
        } else {
            // if no file submit the form
            //document.getElementById("dropzone-form").submit();
            console.log('No Files');
        }

    });
        const previews = document.querySelector("#previews");
        const handleDomClick = (event, file) => {
            const clickedBtn = event.target;
            if (clickedBtn.classList.contains("start")) {
                event.preventDefault();
                event.stopPropagation();
                myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(dropzone.Dropzone.ADDED))
            } else if(clickedBtn.classList.contains("cancel")) {
                event.preventDefault();
                event.stopPropagation();
            } else if (clickedBtn.classList.contains("delete")) {
                event.preventDefault();
                event.stopPropagation();
                myDropzone.removeFile(file)
            }
        }
        previews.addEventListener('click', handleDomClick)
        // DropzoneJS Demo Code End
    </script>
@endsection
