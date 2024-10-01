<?= '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url> {{-- Главная --}}
        <loc>{{ route('home') }}</loc>
        <lastmod>2023-01-07T11:30:51+04:30</lastmod>
        <changefreq>monthly</changefreq>
        <priority>1</priority>
    </url>
    <url> {{-- Услуги и стоимость --}}
        <loc>{{ route('services') }}</loc>
        <lastmod>2023-01-07T11:30:51+04:30</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.9</priority>
    </url>
    <url> {{-- Курсы словацкого --}}
        <loc>{{ route('courses') }}</loc>
        <lastmod>2023-01-07T11:30:51+04:30</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.9</priority>
    </url>
    <url> {{-- Отзывы --}}
        <loc>{{ route('reviews') }}</loc>
        <lastmod>2023-01-07T11:30:51+04:30</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.9</priority>
    </url>
    <url> {{-- Контакты --}}
        <loc>{{ route('contacts') }}</loc>
        <lastmod>2023-01-07T11:30:51+04:30</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.9</priority>
    </url>
    <url> {{-- Вебинар --}}
        <loc>{{ route('webinar') }}</loc>
        <lastmod>2023-01-07T11:30:51+04:30</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.9</priority>
    </url>
    <url> {{-- Все Университеты Словакии --}}
        <loc>{{ route('universities') }}</loc>
        <lastmod>2023-01-07T11:30:51+04:30</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.9</priority>
    </url>
    @foreach($cities as $city)
        <url> {{-- Города --}}
            <loc>{{ route('universities.index-by-city', $city->slug) }}</loc>
            <lastmod>{{ $city->created_at->tz('UTC')->toAtomString() }}</lastmod>
            <changefreq>monthly</changefreq>
            <priority>0.8</priority>
        </url>
        @foreach ($city->universities as $university)
            <url> {{-- Университеты города --}}
                <loc>{{ route('universities.show', [$city->slug, $university->slug]) }}</loc>
                <lastmod>{{ $university->created_at->tz('UTC')->toAtomString() }}</lastmod>
                <changefreq>monthly</changefreq>
                <priority>0.7</priority>
            </url>
            @foreach ($university->faculties as $faculty)
                <url> {{-- Факультеты университета --}}
                    <loc>{{ route('universities.faculty', ['city_slug' => $city->slug, 'slug' => $university->slug, 'faculty_slug' => $faculty->slug]) }}</loc>
                    <lastmod>{{ $faculty->created_at->tz('UTC')->toAtomString() }}</lastmod>
                    <changefreq>monthly</changefreq>
                    <priority>0.6</priority>
                </url>
                @foreach($academic_degrees[$university->id][$faculty->id] as $academic_degree)
                    <url> {{-- Степен факультета --}}
                        <loc>{{ route('universities.degree', ['city_slug' => $city->slug, 'slug' => $university->slug, 'faculty_slug' => $faculty->slug, 'degree_slug' => $academic_degree['academic_degree']->slug]) }}</loc>
                        <lastmod>{{ $academic_degree['academic_degree']->created_at->tz('UTC')->toAtomString() }}</lastmod>
                        <changefreq>monthly</changefreq>
                        <priority>0.5</priority>
                    </url>
                    @foreach ($academic_degree['programs'] as $program)
                        <url> {{-- Cпециальности факультета этой степени --}}
                            <loc>{{ route('universities.speciality', [$program->faculty->university->city->slug, $program->faculty->university->slug, $program->faculty->slug, $program->academicDegree->slug, $program->slug]) }}</loc>
                            <lastmod>{{ $program->created_at->tz('UTC')->toAtomString() }}</lastmod>
                            <changefreq>monthly</changefreq>
                            <priority>0.4</priority>
                        </url>
                    @endforeach
                @endforeach
            @endforeach
        @endforeach
    @endforeach
    <url> {{-- Категории университетов словакии --}}
        <loc>{{ route('university-categories') }}</loc>
        <lastmod>2023-01-07T11:30:51+04:30</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.9</priority>
    </url>
    @foreach ($groups as $group)
        <url> {{-- Направления специальностей --}}
            <loc>{{ route('universities.index-by-category', $group->slug) }}</loc>
            <lastmod>{{ $group->created_at->tz('UTC')->toAtomString() }}</lastmod>
            <changefreq>monthly</changefreq>
            <priority>0.8</priority>
        </url>
    @endforeach
    <url> {{-- Все специальности --}}
        <loc>{{ route('specialities') }}</loc>
        <lastmod>2023-01-07T11:30:51+04:30</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.9</priority>
    </url>
    @foreach ($directions as $direction)
        <url> {{-- Направления специальностей --}}
            <loc>{{ route('specialities.show', $direction->slug) }}</loc>
            <lastmod>{{ $direction->created_at->tz('UTC')->toAtomString() }}</lastmod>
            <changefreq>monthly</changefreq>
            <priority>0.8</priority>
        </url>
    @endforeach
    <url> {{-- FAQ --}}
        <loc>{{ route('faq') }}</loc>
        <lastmod>2023-01-07T11:30:51+04:30</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.5</priority>
    </url>
    @foreach ($program_infos as $program_info)
        <url> {{-- Информация о направлениях --}}
            <loc>{{ route('programs-infos.show', $program_info->slug) }}</loc>
            <lastmod>{{ $program_info->created_at->tz('UTC')->toAtomString() }}</lastmod>
            <changefreq>monthly</changefreq>
            <priority>0.8</priority>
        </url>
    @endforeach
</urlset>
