<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ env('APP_NAME') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @vite('resources/css/app.css')
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        .widget-iframe {
            left: 0 !important;
        }
    </style>

</head>

<body class="bg-gray-200 max-w-full">
<div
    style="background-color: #F3F4F6; max-width: 42rem; padding-top: 1.25rem; padding-bottom: 1.25rem; margin: 5rem auto 2rem;">
    <div class="mt-8 my-10 px-8 rounded">

        <div style="margin-left: auto; margin-right: auto; margin-bottom: 1rem;background-color: white;" class="w-full">
            <img style="margin-left: auto; margin-right: auto; " src="{{ asset('images/logo.png') }}"
                 width="200" alt="">
        </div>

        <div class="mb-2">
            Beste beheerder,
        </div>

        <div class="mb-3">
            Iemand die ernaar vraagt
        </div>

        <div class="my-3">
            <table style="width: 100%; margin-left: auto; margin-right: auto;">
                <tr>
                    <td>
                        VOORNAAM
                    </td>
                    <td>
                        <div class="col-span-2">
                            {{ $attributes['first_name'] }}
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        ACHTERNAAM
                    </td>
                    <td>
                        <div class="col-span-2">
                            {{ $attributes['last_name'] }}
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <div>TELEFOONNUMMER</div>
                    </td>

                    <td>
                        <div class="col-span-2">
                            {{ $attributes['phone'] }}
                        </div>
                    </td>
                </tr>


                <tr>
                    <td>
                        <div>Email</div>
                    </td>

                    <td>
                        <div class="col-span-2">
                            {{ $attributes['email'] }}
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <div>INFORMATIE</div>
                    </td>

                    <td>
                        <div class="col-span-2">
                            {{ $attributes['type'] }}
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <div>JOUW VRAAG</div>
                    </td>

                    <td>
                        <div class="col-span-2">
                            {{ $attributes['message'] }}
                        </div>
                    </td>
                </tr>

            </table>
        </div>
    </div>
</div>
</body>

</html>
