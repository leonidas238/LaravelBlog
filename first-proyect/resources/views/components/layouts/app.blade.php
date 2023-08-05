<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First Proyect - {{ $title ?? ''}}</title>
    <meta name="description" content="{{ $metaDescription ?? 'Default meta description' }}" />
</head>
<body>
 <x-layouts.navigation />

 @if (session('status'))
    
    <div>{{ session('status') }}</div>
     
 @endif
 
  {{ $slot }}

</body>
</html>