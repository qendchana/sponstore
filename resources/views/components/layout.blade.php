<!DOCTYPE html>
<html class="h-100" lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
  <meta name="description" content="A well made and handcrafted Bootstrap 5 template">
  <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/apple-touch-icon.png')  }}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/favicon-32x32.png') }}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/favicon-16x16.png') }}">
  <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('assets/img/favicon.png') }}">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
  <meta name="author" content="Holger Koenemann">
  <meta name="generator" content="Eleventy v2.0.0">
  <meta name="HandheldFriendly" content="true">
  <title>UKM WebProg Project</title>
  <link rel="stylesheet" href="{{ asset('assets/css/theme.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">
  <!-- Flatpickr CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
  <!-- Flatpickr JS -->
  <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
  

  <style>
    /* inter-300 - latin */
    @font-face {
      font-family: 'Inter';
      font-style: normal;
      font-weight: 300;
      font-display: swap;
      src: local(''),
        url('{{ asset('assets/fonts/inter-v12-latin-300.woff2') }}') format('woff2'),
        url('{{ asset('assets/fonts/inter-v12-latin-300.woff') }}') format('woff');
    }

    /* inter-400 - latin */
    @font-face {
      font-family: 'Inter';
      font-style: normal;
      font-weight: 400;
      font-display: swap;
      src: local(''),
        url('{{ asset('assets/fonts/inter-v12-latin-regular.woff2') }}') format('woff2'),
        url('{{ asset('assets/fonts/inter-v12-latin-regular.woff') }}') format('woff');
    }

    @font-face {
      font-family: 'Inter';
      font-style: normal;
      font-weight: 500;
      font-display: swap;
      src: local(''),
        url('{{ asset('assets/fonts/inter-v12-latin-500.woff2') }}') format('woff2'),
        url('{{ asset('assets/fonts/inter-v12-latin-500.woff') }}') format('woff');
    }

    @font-face {
      font-family: 'Inter';
      font-style: normal;
      font-weight: 700;
      font-display: swap;
      src: local(''),
        url('{{ asset('assets/fonts/inter-v12-latin-700.woff2') }}') format('woff2'),
        url('{{ asset('assets/fonts/inter-v12-latin-700.woff') }}') format('woff');
    }
  </style>
  


</head>
<body class="bg-black text-white mt-0" data-bs-spy="scroll" data-bs-target="#navScroll">
    {{ $slot }}

  <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/js/aos.js') }}"></script>
  <script>
    AOS.init({
      duration: 800, // values from 0 to 3000, with step 50ms
    });
  </script>
  <script>
    let scrollpos = window.scrollY;
    const header = document.querySelector(".navbar");
    const header_height = header.offsetHeight;

    const add_class_on_scroll = () => header.classList.add("scrolled", "shadow-sm");
    const remove_class_on_scroll = () => header.classList.remove("scrolled", "shadow-sm");

    window.addEventListener('scroll', function () {
      scrollpos = window.scrollY;

      if (scrollpos >= header_height) { add_class_on_scroll(); }
      else { remove_class_on_scroll(); }

      console.log(scrollpos);
    })
  </script>

</body>
</html>