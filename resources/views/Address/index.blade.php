<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .container {
            width: 80vw;
            height: auto;
            margin-inline: auto;

            text-align: center;
        }

        table {
            width: 100%;
        }

        td {
            background-color: aliceblue;
            box-shadow: 4px 4px 4px silver;
            padding: 10px;
        }

        h1 {
            color: orange;
        }

        button {
            width: 100%;
            background-color: aquamarine;
            border: none;
            padding: 5px;
        }
    </style>
</head>

<body>

    <div class="container">

        <h1>Home Address For your New Home</h1>
        <table>
            <tr>
                <td>User_id</td>
                <td>Owner_Name</td>
                <td>Mobile_Number</td>
                <td>Area_Name</td>
                <td>Address</td>
                <td>Pin_Code</td>
                <td>₹ Price</td>
                <td>Status</td>
                <td>Edit</td>

            </tr>
            @foreach ($address as $single_address)
                <tr>
                    <td>{{ $single_address->User_id }}</td>
                    <td> {{ $single_address->Owner_Name }}</td>
                    <td> {{ $single_address->Mobile_Number }}</td>
                    <td> {{ $single_address->Area_Name }}</td>
                    <td> {{ $single_address->Address }}</td>
                    <td> {{ $single_address->Pin_Code }}</td>
                    <td> {{ $single_address->Price }}</td>
                    <td> {{ $single_address->Status }}</td>


                    <td>

                        <a href="/address/edit/{{ $single_address->User_id }}"><button>Edit</button></a>
                    </td>

                </tr>
            @endforeach
        </table>
    </div>
</body>

</html>
