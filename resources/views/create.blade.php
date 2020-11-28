<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create') }}
        </h2>
</x-slot>
<div class="main-contents">
  <form method='post' action="/create">
    {{ csrf_field() }}
    <div class="post-body">
      <div class="form-group">
        <label>タイトル</label>
        <input type='text' class='form-control' name='title' placeholder='タイトルを入力'>
      </div>

      
      <div class="form-group">
        <label>募集人数</label>
        <input type='number' class='form-control' name='capacity' placeholder='人数を入力' min="1" max="100">
      </div>
      <div class="form-group">
        <label>詳細</label>
        <textarea type='text' class='form-control' name='detail' placeholder='詳細を入力'></textarea>
      </div>
      <div class="create-btn">
        <input type='submit' class='btn-primary' value='募集する'>
      </div>
    </div>
  </form>
</div>
</x-app-layout>