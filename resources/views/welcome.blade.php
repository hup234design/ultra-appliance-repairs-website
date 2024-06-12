<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }}</title>
    @vite('resources/css/app.css')
</head>
{{--    <body class="font-sans antialiased dark:bg-black dark:text-white/50">--}}
<body class="font-sans antialiased dark:bg-black dark:text-white/50">

<header>
    <section class="h-24"></section>
    <section class="bg-gray-800 h-24"></section>
</header>

<main class="h-96"></main>

<section class="bg-gray-200 h-48"></section>
<section class="bg-red-600 h-32"></section>
<footer class="bg-gray-700 text-white">
    <div class="py-12 space-y-12 max-w-7xl mx-auto">
        <div class="grid grid-cols-4 gap-12">
            <div>
                Ultra Appliance Repairs
                Ultra Appliance Repairs provide a competitive and reliable domestic appliance repair service.
                Address: Spring Cottage, Rectory Close, Bracknell, Berkshire RG12 7BD
                Tel: 07515 760303
                E-mail: sales@ultra-appliance-repairs.co.uk
            </div>
            <div>
                Why Choose Us?
                Same Day Service
                No Hidden Fees
                Instantaneous Appliance Repair
                Superior Customer Service
                Honest Business Practices
            </div>
            <div>
                Our Services
                Washing Machine Repair
                Dishwasher Repair
                Electric Oven Repair
                Tumble Dryer Repair
            </div>
            <div>
                Areas we cover
                Ascot Bracknell Crowthorne Camberley Farnborough Fleet Reading Sandhurst Maidenhead Windsor Wokingham
            </div>
        </div>
    </div>
        <div class="text-center py-8 bg-gray-900">
            <div class="max-w-7xl mx-auto">
            Copyright 2019 Ultra Appliance Repairs. Website by HUP234 Design.
            </div>
        </div>
    </div>
</footer>
</body>
</html>
