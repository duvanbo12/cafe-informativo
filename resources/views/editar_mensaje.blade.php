Codeshare is upgrading over the coming days! Plan accordingly for critical sessions. Learn more
Dismiss
Codeshare logo
 ShareSign UpLog In
1
@extends('layouts.app')
2
​
3
@section('title','Editar Mensaje')
4
​
5
@section('content')
6
​
7
<h2 class="text-center mb-4">Editar mensaje</h2>
8
​
9
@if($errors->any())
10
<div class="alert alert-danger">
11
<ul>
12
@foreach($errors->all() as $error)
13
<li>{{ $error }}</li>
14
@endforeach
15
</ul>
16
</div>
17
@endif
18
​
19
<div class="card shadow p-4">
20
​
21
<form action="{{ route('mensajes.update',$mensaje->id) }}"
22
method="POST">
23
​
24
@csrf
25
@method('PUT')
26
​
27
<div class="row">
28
​
29
<div class="col-md-6 mb-3">
30
<label>Nombres</label>
31
<input type="text"
32
name="nombres"
33
class="form-control"
34
value="{{ $mensaje->nombres }}">
35
</div>
36
​
37
<div class="col-md-6 mb-3">
38
<label>Apellidos</label>
39
<input type="text"
40
name="apellidos"
41
class="form-control"
42
value="{{ $mensaje->apellidos }}">
43
</div>
44
​
45
</div>
46
​
47
<div class="mb-3">
48
<label>Correo</label>
49
<input type="email"
50
name="correo"
51
class="form-control"
52
value="{{ $mensaje->correo }}">
53
</div>
54
​
55
<div class="mb-3">
56
<label>Tipo</label>
57
​
58
<select name="tipo" class="form-select">



Hide Ads
