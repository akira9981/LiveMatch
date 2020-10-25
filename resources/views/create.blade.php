<x-app-layout>
<h1>投稿ページ</h1>
<div class="review-contents">
  <h1 class='pagetitle'>投稿ページ</h1>
  <form method='post' action="/create">
    {{ csrf_field() }}
    <div class="review-body">
      <div class="form-group">
        <label>title</label>
        <input type='text' class='form-control' name='title' placeholder='タイトルを入力'>
      </div>
      <div class="form-group">
        <label>募集人数</label>
        <input type='number' class='form-control' name='capacity' placeholder='人数を入力' min="1" max="100">
      </div>
      <div class="form-group">
        <label>詳細</label>
        <input type='text' class='form-control' name='detail' placeholder='詳細を入力'>
      </div>
      <div class="btn-wrapper">
        <input type='submit' class='btn-primary' value='募集する'>
      </div>
    </div>
  </form>
</div>
</x-app-layout>