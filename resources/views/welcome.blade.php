<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Pendaftaran Santri Baru</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('logo.png') }}" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('template/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">


    <!-- Template Main CSS File -->
    <link href="{{ asset('template/assets/css/style.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: NiceAdmin
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Apr 20 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
    <style>
        .form-control:focus,
        .form-check-input:focus,
        .form-select:focus {
            border-width: 1px !important;
            box-shadow: 0 0 5px rgba(1, 39, 80, 0.3) !important;
            /* Minimalist shadow with custom color */
        }

        .label {
            color: grey !important;
            font-weight: 600 !important;
        }
    </style>
</head>

<!-- ======= Main ======= -->
<main class="mt-5 mb-5">
    <div class="container">
        <section class="section register d-flex flex-column align-items-center justify-content-center py-4">
            @livewire('pendaftaran')
        </section>

    </div>
</main><!-- End #main -->



</html>
