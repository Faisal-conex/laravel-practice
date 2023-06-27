<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Api</title>
</head>

<body>
    <div id="app">
        <table class='' border=3>
            <tr class=''>
                <td>ID </td>
                <td>Name</td>
                <td>Salary</td>
                <td>Age</td>
            </tr>

            @if (isset($collection))
                <tr>
                    @if (is_array($collection))
                        @foreach ($collection as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->employee_name }}</td>
                    <td>{{ $item->employee_salary }}</td>
                    <td>{{ $item->employee_age }}</td>
                </tr>
            @endforeach
        @else
            <td>nothing to display</td>
            @endif
            </tr>
        @else
            <tr>Nothing to display</tr>
            

            @endif


        </table>

    </div>


</body>

</html>
