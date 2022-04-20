@extends('layouts.default')

@section('content')
@if (count($errors) > 0)
<ul>
  @foreach ($errors->all() as $error)
  <li>
    {{$error}}
  </li>
  @endforeach
</ul>
@endif
<form action="/" method="post">
  <table>
    @csrf
    <tr>
      <th>
        氏名
      </th>
      <td>
        <input type="text" name="name">
      </td>
    </tr>
    <tr>
      <th>
        メールアドレス
      </th>
      <td>
        <input type="email" name="email">
      </td>
    </tr>
    <tr>
      <th></th>
      <td>
        <button>送信する</button>
      </td>
    </tr>
  </table>
</form>
@endsection