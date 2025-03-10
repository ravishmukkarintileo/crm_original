<!DOCTYPE html>
<html  lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Policy Karo</title>
		<link rel="icon" type="image/png" href="{{ $company->small_light_logo_url }}">
		<meta name="msapplication-TileImage" href="{{ $company->small_light_logo_url }}">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700&display=swap">
        <link rel="stylesheet" href="{{ asset('css/pre-loader.css') }}">
    </head>
    <body>
        <div id="app">

        </div>

        <script>
            window.config = {
                'path': '{{ url('/') }}',
                'download_lang_csv_url': "{{ route('api.extra.langs.download') }}",
                'verify_purchase_background': "{{ asset('images/verify_purchase_background.svg') }}",
                'login_background': "{{ asset('images/login_background.svg') }}",
                'staff_member_sample_file': "{{ asset('images/sample_staff_members.csv') }}",
                'translatioins_sample_file': "{{ asset('images/sample_translations.csv') }}",
                'perPage': 10,
				'product_name': "{{ $appName }}",
				'product_version': "{{ $appVersion }}",
				'modules': @json($enabledModules),
				'installed_modules': @json($installedModules),
				'theme_mode': "{{ $themeMode }}",
				'appChecking': true,
				'app_version': "{{ $appVersion }}",
				'app_env': "{{ $appEnv }}",
				'app_type': "{{ $appType }}",
            };
        </script>

        @vite('resources/js/app.js')
    </body>
</html>
