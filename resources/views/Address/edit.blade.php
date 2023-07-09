<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Address</title>
</head>
<style>
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    .container {
        margin-top: 40px;
    }

    .container,
    form {


        width: 300px;
        height: auto;
        margin-inline: auto;

        display: flex;
        flex-direction: column;
        gap: 10px;
        text-align: center
    }

    input,
    button {
        width: 100%;
        padding: 10px;
    }

    span {
        text-align: start;
    }

    h1 {
        color: rgb(55, 202, 155)
    }
</style>

<body>
    <div class="container">
        <h1>Edit Address Entry</h1>
        <form action="{{ $url }}" method="POST">
            @csrf;



            <input type="text" name="Owner_Name" placeholder="Enter Your Owner Name"
                value="{{ $address->Owner_Name ?? ' ' }}">
            <span>
                @error('Owner_Name')
                    {{ $message }}
                @enderror
            </span>
            <input type="text" name="Mobile_Number" placeholder="Enter Your Mobile_Number"
                value="{{ $address->Mobile_Number ?? ' ' }}">
            <span>
                @error('Mobile_Number')
                    {{ $message }}
                @enderror
            </span> <input type="text" name="Area_Name" placeholder="Enter home Area_Name"
                value="{{ $address->Area_Name ?? ' ' }}">
            <span>
                @error('Area_Name')
                    {{ $message }}
                @enderror
            </span> <input type="text" name="Address" placeholder="Enter home Address"
                value="{{ $address->Address ?? ' ' }}">
            <span>
                @error('Address')
                    {{ $message }}
                @enderror
            </span> <input type="number" name="Pin_Code" placeholder="Enter home Pin_Code"
                value="{{ $address->Pin_Code ?? ' ' }}">
            <span>
                @error('Pin_Code')
                    {{ $message }}
                @enderror
            </span>
            <input type="number" name="Price" placeholder="Enter home Price" value="{{ $address->Price ?? ' ' }}">
            <span>
                @error('Price')
                    {{ $message }}
                @enderror
            </span>
            <input type="text" name="Status" placeholder="Enter home Status "
                value="{{ $address->Status ?? ' ' }}">
            <span>
                @error('Status')
                    {{ $message }}
                @enderror
            </span>

            <button type="subit">Submit</button>
        </form>
    </div>
</body>

</html>
