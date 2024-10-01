<ul class="nav nav-tabs">
    <li class="nav-item">
        <a class="nav-link @if(request()->route()->getName() == 'admin.users.edit') active @endif" aria-current="page" href="{{ route('admin.users.edit', $user) }}">Данные клиента</a>
    </li>
    <li class="nav-item">
        <a class="nav-link @if(request()->route()->getName() == 'admin.users.specialities') active @endif" href="{{ route('admin.users.specialities', $user) }}">Специальности</a>
    </li>
    <li class="nav-item">
        <a class="nav-link @if(request()->route()->getName() == 'admin.users.payments') active @endif" href="{{ route('admin.users.payments', $user) }}">Услуги и оплата</a>
    </li>
    <li class="nav-item">
        <a class="nav-link @if(request()->route()->getName() == 'admin.users.documents') active @endif" href="{{ route('admin.users.documents', $user) }}">Документы</a>
    </li>
    <li class="nav-item">
        <a class="nav-link @if(request()->route()->getName() == 'admin.users.messages') active @endif" href="{{ route('admin.users.messages', $user) }}">Заметки</a>
    </li>
</ul>
