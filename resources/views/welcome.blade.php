<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>IMG</title>
    </head>
    <body>
        <table id="nguoi-choi-table" class="table dt-responsive nowrap">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Tên Món ăn</th>
                            <th>Email</th>
                            <th>Hình đại diện</th>
                            <th>Điểm cao nhất</th>
                            <th>Credit</th>
                            <th></th>
                        </tr>
                    </thead>
                
                    <tbody>
                        @foreach($listFood as $food)
                        <tr>
                            <td>{{$food->id}}</td>
                            <td>{{$food->food_name}}</td>
                            <td>{{$food->food_price}}</td>
                            <td>{{$food->food_img}}</td>
                            <td>{{$food->food_description}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
    </body>
</html>
