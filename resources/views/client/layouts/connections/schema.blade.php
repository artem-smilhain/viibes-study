@yield('schema')
{{-- Website --}}
<script type="application/ld+json">
    {
        "@context":"https://www.schema.org",
        "@type":"WebSite",
        "@id":"{{ env('APP_URL') }}#website",
        "headline":"Поступление в Словакию",
        "name":"{{ env('APP_NAME') }}",
        "description":"Обучение в Словакии: бесплатное обучение за рубежом для казахстанцев, украинцев, белорусов, молдаван. Помогаем поступить в Словакию. Бесплатное образование в Европе и за границей {{ env('ADMISSION_YEAR') }}",
        "url":"{{ env('APP_URL') }}"
    }
</script>
{{-- Organization --}}
<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "@id": "{{ env('APP_URL') }}#organization",
        "address": {
            "@type": "PostalAddress",
            "addressCountry": "Словакия",
            "addressLocality": "Кошице"
        },
        "name": "{{ env('APP_NAME') }}",
        "url": "{{ env('APP_URL') }}",
        "logo": "{{ URL::asset('/assets/client/images/opengraph/logo.jpg') }}",
        "sameAs" :[
            "{{ env('INSTAGRAM_LINK') }}",
            "{{ env('FACEBOOK_LINK') }}"
        ],
        "areaServed" : ["SK", "UA", "KZ", "BY", "MD", "RU", "UZ", "GE"],
        "description": "VIIBES Study помогает студентам из СНГ с поступлением в ВУЗы Словакии, чтобы учиться в ЕС абсолютно бесплатно.",
  	    "email": "{{ env('EMAIL') }}",
  	    "telephone": "{{ env('PHONE_NUMBER') }}",
  	    {{--"openingHours": "Пн,Вт,Ср,Чт,Пт 10:00-18:00",--}} {{-- такого нет для organization --}}
    "contactPoint" : [
       {
           "@type" : "ContactPoint",
           "telephone" : "{{ env('PHONE_NUMBER') }}",
                "description": "Номер телефона и мессенджеры",
                "contactType" : "Call center",
                "contactOption" : "TollFree",
                "areaServed" : ["SK", "UA", "KZ", "BY", "MD", "RU", "UZ", "GE"],
                "availableLanguage" : ["Russian", "Slovak"]
            }
        ],
        "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": "5",
            "reviewCount": "12"
        }
        {{--"priceRange": "{{ env('BASIC_PRICE') }} - {{ env('COMFORT_PRICE') }}"--}} {{-- такого нет для organization --}}
    }
</script>
{{-- Educational Organization --}}
<script type="application/ld+json">
    {
        "@context": "https://www.schema.org",
        "@type": "EducationalOrganization",
        "name": "{{ env('APP_NAME') }}",
        "url": "{{ env('APP_URL') }}",
        "logo": "{{ URL::asset('/assets/client/images/opengraph/logo.jpg') }}",
        "image": "{{ URL::asset('/assets/client/images/opengraph/og_img.jpg') }}",
        "description": "VIIBES Study помогает студентам из СНГ с поступлением в ВУЗы Словакии, чтобы учиться в ЕС абсолютно бесплатно.",
        "address": {
            "@type": "PostalAddress",
            "addressCountry": "Словакия",
            "addressLocality": "Кошице"
        },
        "openingHours": "Пн-Пт 10:00-18:00",
        "contactPoint" : [
            {
                "@type" : "ContactPoint",
                "telephone" : "{{ env('PHONE_NUMBER') }}",
                "description": "Номер телефона и мессенджеры",
                "contactType" : "Call center",
                "contactOption" : "TollFree",
                "areaServed" : ["SK", "UA", "KZ", "BY", "MD", "RU", "UZ", "GE"],
                "availableLanguage" : ["Russian", "Slovak"]
            }
        ]
    }
</script>
