<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>All podcasts</title>

        <!-- Fonts -->

    </head>

    <body>
<table border = "1">
<tr>
<td>Id</td>
<td>url</td>
<td>title</td>
<td>description</td>
<td>episode number</td>
</tr>
@foreach ($id as $updates)
<tr>
<td>{{ $updates->id }}</td>
<td>{{ $updates->url }}</td>
<td>{{ $updates->title }}</td>
<td>{{ $updates->description }}</td>
<td>{{ $updates->episode_number }}</td>
</tr>
@endforeach
</table>
</body>  