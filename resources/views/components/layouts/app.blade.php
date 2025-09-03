<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
    <style>
        .editor-content h1,
        .editor-content h2 {
            font-size: 1.5rem;
            font-weight: bold;
            margin-top: 1.25rem;
            margin-bottom: 0.75rem;
        }

        .editor-content h3 {
            font-size: 1.25rem;
            font-weight: bold;
            margin-top: 1rem;
            margin-bottom: 0.5rem;
        }

        .editor-content p {
            margin-bottom: 0.75rem;
            line-height: 1.6;
        }

        .editor-content ul,
        .editor-content ol {
            margin-left: 1.5rem;
            margin-bottom: 1rem;
            padding-left: 1rem;
        }

        .editor-content ul {
            list-style-type: disc;
        }

        .editor-content ol {
            list-style-type: decimal;
        }

        .editor-content li {
            margin-bottom: 0.25rem;
        }

        .editor-content blockquote {
            margin: 1rem 0;
            padding-left: 1rem;
            border-left: 4px solid #ccc;
            color: #555;
            font-style: italic;
        }

        .editor-content pre,
        .editor-content code {
            background-color: #f5f5f5;
            padding: 0.25rem 0.5rem;
            border-radius: 4px;
            font-family: monospace;
            font-size: 0.875rem;
            display: block;
            overflow-x: auto;
        }

        .editor-content a {
            color: #2563eb;
            /* Tailwind blue-600 */
            text-decoration: underline;
        }

        .editor-content img {
            max-width: 100%;
            height: auto;
            margin: 1rem 0;
            border-radius: 8px;
        }
    </style>
</head>

<body class="font-[Poppins]">
    <x-layout.header />
    <main>
        {{ $slot }}
    </main>
    <x-layout.footer />
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>

</html>
