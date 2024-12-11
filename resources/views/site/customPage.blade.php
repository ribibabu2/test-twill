<!doctype html>
<html lang="en">
<head>
    <title>Demo page</title>
</head>
<body>
<div>
    Example preview. See <a href="https://twillcms.com/docs/modules/revisions-and-previewing.html">documentation.</a>
    <br />
    {{ $item->title }}
    <br />
    {{ $item->description }}

    <x-twill::medias
            name="cover"
            label="Cover image"
            note="Also used in listings"
            field-note="Minimum image width: 1500px"
    />
</div>
</body>
</html>
