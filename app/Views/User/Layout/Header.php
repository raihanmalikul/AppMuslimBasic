<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title><?= $title; ?></title>
<link rel="shortcut icon" type="image/ico" href="/assets/tailwind/img/logo.jpg">
<link href="/assets/tailwind/css/output.css" rel="stylesheet" />
<link href="/assets/fontawesome/css/all.min.css" rel="stylesheet">
<link href="/assets/plugins/toastr/toastr.min.css" rel="stylesheet">

<script>
    if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        document.documentElement.classList.add('dark');
    } else {
        document.documentElement.classList.remove('dark');
    }
</script>