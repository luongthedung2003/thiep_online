<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preview</title>
    <link href="{{ asset('assets/css/theme.min.css') }}" rel="stylesheet" />
    <style>
        body { background-color: #f8f9fa; display: flex; justify-content: center; align-items: flex-start; min-height: 100vh; padding: 1rem 0; overflow-x: hidden; }
        ::-webkit-scrollbar { width: 6px; }
        ::-webkit-scrollbar-track { background: transparent; }
        ::-webkit-scrollbar-thumb { background-color: #cbd5e1; border-radius: 10px; }
    </style>
</head>
<body>
    @include($template->view_file, ['data' => $data, 'editable' => false])
</body>
</html>
