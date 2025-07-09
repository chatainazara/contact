@extends('..layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@endsection

@livewireStyles
@livewireScripts

@section('content')
<h2>Admin</h2>

<form>
  <input />
  <select><option></option></select>
  <select><option></option></select>
  <input type="date" />
  <button>検索</button>
  <button>リセット</button>
</form>

<div>
{{ $contacts->links() }}
</div>

<div class="attendance__content">
  <div class="attendance__panel">
   
  </div>
  <div class="attendance-table">
    <table class="attendance-table__inner">
      <tr class="attendance-table__row">
        <th class="attendance-table__header">名前</th>
        <th class="attendance-table__header">性別</th>
        <th class="attendance-table__header">メールアドレス</th>
        <th class="attendance-table__header">お問い合わせの種類</th>
        <th class="attendance-table__header"></th>
      </tr>
      @foreach($contacts as $contact)
      <tr class="attendance-table__row">
        <td class="attendance-table__item">{{$contact['first_name']}}{{$contact['last_name']}}</td>
        <td class="attendance-table__item">{{$contact['gender']}}</td>
        <td class="attendance-table__item">{{$contact['email']}}</td>
        <td class="attendance-table__item">{{$contact['detail']}}</td>
        <td class="attendance-table__item">
        <form action="" name="detail" >
        <button>詳細</button>
        </form>
        </td>
      </tr>
      @endforeach
    </table>
  </div>
</div>
@endsection
