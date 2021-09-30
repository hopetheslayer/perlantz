
<h3>You received a message from Product Request Form</h3>

<div style="margin-top: 35px;">

    <strong>First Name: </strong>{{ $request->name }}<br>
    <strong>Last Name: </strong>{{ $request->surname }}<br>
    <strong>Phone: </strong>{{ $request->phone }}<br>
    <strong>Email: </strong>{{ $request->email }}<br>
    <strong>Company: </strong>{{ $request->company }}<br>
    <hr>
    <strong>Product Name:</strong>{{ $request->urun_adi }}<br>
    <strong>Product Option 1:</strong>{{ $request->oz1 }}<br>
    <strong>Product Option 2:</strong>{{ $request->oz2 }}<br>
    <strong>Product Option 3 :</strong>{{ $request->oz3 }}<br>
    <strong>Product Color:</strong>{{ $request->renk }}<br>
    <strong>Quantity: </strong>{{ $request->quantity }}<br>
    <strong>Another Question: </strong>{{ $request->another }}<br>

</div>


