<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex justify-content-between">
            <a href="{{ route('admin.index') }}">
                <img src="{{ URL::asset('/assets/admin/dist/img/logo.svg') }}" alt="" style="width: 120px; margin-left: 16px;">
            </a>
        </div>
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-header">КЛИЕНТЫ</li>
                <li class="nav-item">
                    <a href="{{ route('admin.clients.index') }}" class="nav-link  @if(request()->segment(2) == 'clients') active @endif">
                        <i class="far fa-circle nav-icon"></i>
                        <p class="text-capitalize">Абитуриенты</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.leads.index') }}" class="nav-link  @if(request()->segment(2) == 'leads') active @endif">
                        <i class="far fa-circle nav-icon"></i>
                        <p class="text-capitalize">Заявки</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.program-info.index') }}" class="nav-link @if(request()->segment(2) == 'program-info') active @endif">
                        <i class="far fa-circle nav-icon"></i>
                        <p class="text-capitalize">Специальности</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.relatives.index') }}" class="nav-link  @if(request()->segment(2) == 'relatives') active @endif">
                        <i class="far fa-circle nav-icon"></i>
                        <p class="text-capitalize">Родители</p>
                    </a>
                </li>
                <li class="nav-header">УНИВЕРСИТЕТЫ</li>
                <li class="nav-item">
                    <a href="{{ route('admin.universities.index') }}" class="nav-link @if(request()->segment(2) == 'universities') active @endif">
                        <i class="far fa-circle nav-icon"></i>
                        <p class="text-capitalize">Университеты</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.faculties.index') }}" class="nav-link @if(request()->segment(2) == 'faculties') active @endif">
                        <i class="far fa-circle nav-icon"></i>
                        <p class="text-capitalize">Факультеты</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.groups.index') }}" class="nav-link @if(request()->segment(2) == 'groups') active @endif">
                        <i class="far fa-circle nav-icon"></i>
                        <p class="text-capitalize">Группы универов</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.cities.index') }}" class="nav-link @if(request()->segment(2) == 'cities') active @endif">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Города</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.academic-degrees.index') }}" class="nav-link @if(request()->segment(2) == 'academic-degrees') active @endif">
                        <i class="far fa-circle nav-icon"></i>
                        <p class="text-capitalize">Уровни обучения</p>
                    </a>
                </li>
                <li class="nav-header">СПЕЦИАЛЬНОСТИ</li>
                <li class="nav-item">
                    <a href="{{ route('admin.programs.index') }}" class="nav-link @if(request()->segment(2) == 'programs') active @endif">
                        <i class="far fa-circle nav-icon"></i>
                        <p class="text-capitalize">Специальности</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.directions.index') }}" class="nav-link @if(request()->segment(2) == 'directions') active @endif">
                        <i class="far fa-circle nav-icon"></i>
                        <p class="text-capitalize">Направления</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.statuses.index') }}" class="nav-link @if(request()->segment(2) == 'statuses') active @endif">
                        <i class="far fa-circle nav-icon"></i>
                        <p class="text-capitalize">Статусы</p>
                    </a>
                </li>
                <li class="nav-header">БЛОГ</li>
                <li class="nav-item">
                    <a href="{{ route('admin.posts.index') }}" class="nav-link @if(request()->segment(2) == 'posts') active @endif">
                        <i class="far fa-circle nav-icon"></i>
                        <p class="text-capitalize">Публикации</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.categories.index') }}" class="nav-link @if(request()->segment(2) == 'categories') active @endif">
                        <i class="far fa-circle nav-icon"></i>
                        <p class="text-capitalize">Категории</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.post-photos.index') }}" class="nav-link @if(request()->segment(2) == 'post-photos') active @endif">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Фотографии</p>
                    </a>
                </li>
                <li class="nav-header">ДРУГОЕ</li>
                <li class="nav-item">
                    <a href="{{ route('admin.pages.index') }}" class="nav-link @if(request()->segment(2) == 'pages') active @endif">
                        <i class="far fa-circle nav-icon"></i>
                        <p class="text-capitalize">Страницы</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.reviews.index') }}" class="nav-link @if(request()->segment(2) == 'reviews') active @endif">
                        <i class="far fa-circle nav-icon"></i>
                        <p class="text-capitalize">Отзывы</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.users.index') }}" class="nav-link @if(request()->segment(2) == 'users') active @endif">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Пользователи</p>
                    </a>
                </li>
                {{--<li class="nav-item">
                    <a href="{{ route('admin.settings.index') }}" class="nav-link @if(Route::currentRouteName() == 'admin.settings.index') active @endif">
                        <i class="far fa-circle nav-icon"></i>
                        <p class="text-capitalize">Настройки</p>
                    </a>
                </li>--}}
                {{--
                <li class="nav-item">
                    <a href="{{ route('admin.courses.index') }}" class="nav-link @if(Route::currentRouteName() == 'admin.courses.index') active @endif">
                        <i class="nav-icon fas fa-person-chalkboard"></i>
                        <p class="text-capitalize">{{ __('app.courses') }}</p>
                    </a>
                </li>
                --}}
                {{--<li class="nav-item">
                    <a href="{{ route('admin.services.index') }}" class="nav-link @if(Route::currentRouteName() == 'admin.services.index') active @endif">
                        <i class="nav-icon fas fa-list-check"></i>
                        <p class="text-capitalize">{{ __('app.services') }}</p>
                    </a>
                </li>--}}
                {{--
                <li class="nav-item">
                    <a href="{{ route('admin.lessons.index') }}" class="nav-link @if(Route::currentRouteName() == 'admin.lessons.index') active @endif">
                        <i class="nav-icon fas fa-chalkboard-user"></i>
                        <p class="text-capitalize">{{ __('app.lessons') }}</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.homeworks.index') }}" class="nav-link @if(Route::currentRouteName() == 'admin.homeworks.index') active @endif">
                        <i class="nav-icon fas fa-house-user"></i>
                        <p class="text-capitalize">{{ __('app.homeworks') }}</p>
                    </a>
                </li>
                --}}
            </ul>
        </nav>
    </div>
</aside>
