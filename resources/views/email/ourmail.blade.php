<!DOCTYPE html>
<html>
<head>
    {{-- <title>ItsolutionStuff.com</title> --}}
</head>
<body>

    {{-- $details = [
            'date' => $date,
            'time' => $time,
            'email' => $request->email,
            'gender' => $request->gender,
            'language' => $request->language,
            'location' => $request->location,
            'name' => $request->name,
            'phone' => $request->phone,
        ]; --}}
    <p>
        <strong>Name: </strong> <strong style="color:red">{{$details['name']}}</strong>
    </p>
    <p>
        <strong>Email: </strong> <strong style="color:red">{{$details['email']}}</strong>
    </p>
    <p>
        <strong>Phone: </strong> <strong style="color:red">{{$details['phone']}}</strong>
    </p>
    <p>
        <strong>Gender: </strong> <strong style="color:red">{{$details['gender']}}</strong>
    </p>
    <p>
        <strong>Vacancy: </strong> <strong style="color:red">{{$details['vacancy']}}</strong>
    </p>
    {{-- <p>
        <strong>location: </strong> <strong style="color:red">{{$details['location']}}</strong>
    </p> --}}
    {{-- <p>
        <strong>Date: </strong> <strong style="color:red">{{$details['date']}}</strong>
    </p>
    <p>
        <strong>Timing: </strong> <strong style="color:red">{{$details['time']}}</strong>
    </p> --}}
    {{-- <p>
        <strong>Ip Address: </strong> <strong style="color:red">{{$details['Ip']}}</strong>
    </p>
    <p>
        <strong>Ip Location: </strong> <strong style="color:red">{{$details['Country']}}</strong>
    </p> --}}

      {{-- Dear Applicant,
Thank you for applying for the position of Sales Executive | DIAL UP IT SERVICES | Karachi.
We are pleased to invite you for a brief interview. Please follow the instructions below:
* Date: Selected Date
* Timing: Selected Time
* Venue: OFFICE NO. 2, 2ND MEZZANINE FLOOR, MONO GARDEN, MAIN SHAHEED-E-MILLAT ROAD, KARACHI
Location Map: https://maps.app.goo.gl/GoThTT1dskB6US1k8
Documents: CV and NIC
We thank you for showing interest and we look forward to meeting you.Kind regards,
HR
DIAL UP IT SERVICES
+923144931818 (WhatsApp Link) --}}

    {{-- <p>Thank you</p> --}}
</body>
</html>
