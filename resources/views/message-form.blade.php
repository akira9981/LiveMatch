<h2>チャット画面</h2><br>
@if(empty($messages))
  <h1>メッセージがありません</h1>
@else
  @foreach($messages as $message)
  {{$message->user->name}}<br>
  {{$message->message}}<br>
  {{$message->created_at}}<br>
  @endforeach
@endif

<div class="review-contents">
  <h1 class='pagetitle'>フォーム</h1>
  <form method='post' action="/message/{id}">
    {{ csrf_field() }}
    <div class="review-body">
      <div class="form-group">
        <label>メッセージ</label>
        <input type='text' class='form-control' name='message' placeholder='メッセージを入力'>
      </div>
      <div class="btn-wrapper">
        <input type='submit' class='btn-primary' value='送信'>
      </div>
    </div>
  </form>
</div>