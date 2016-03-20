@extends('heard')

@section('content')
<div class="container">

  <!-- 巢狀清單整體 -->
  <div class="list-group list-group-root well">
    
    <!-- 第一層.第一個.標題 -->
    <a href="#item-1" class="list-group-item" data-toggle="collapse"><i class="glyphicon glyphicon-chevron-right"></i>Item 1</a>
    <!-- 第一層.第一個.內容 -->
    <div class="list-group collapse" id="item-1">

      <!-- 第二層.第一個.標題 -->
      <a href="#item-1-1" class="list-group-item" data-toggle="collapse"><i class="glyphicon glyphicon-chevron-right"></i>Item 1.1</a>
      <!-- 第二層.第一個.內容 -->
      <div class="list-group collapse" id="item-1-1">
        <a href="#" class="list-group-item">Item 1.1.1</a>
        <a href="#" class="list-group-item">Item 1.1.2</a>
        <a href="#" class="list-group-item">Item 1.1.3</a>
      </div>

      <!-- 第二層.第二個.標題 -->
      <a href="#item-1-2" class="list-group-item" data-toggle="collapse"><i class="glyphicon glyphicon-chevron-right"></i>Item 1.2</a>
      <!-- 第二層.第二個.內容 -->
      <div class="list-group collapse" id="item-1-2">
        <a href="#" class="list-group-item">Item 1.2.1</a>
        <a href="#" class="list-group-item">Item 1.2.2</a>
        <a href="#" class="list-group-item">Item 1.2.3</a>
      </div>

      <!-- 第二層.第三個.標題 -->
      <a href="#item-1-3" class="list-group-item" data-toggle="collapse"><i class="glyphicon glyphicon-chevron-right"></i>Item 1.3</a>
      <!-- 第二層.第三個.內容 -->
      <div class="list-group collapse" id="item-1-3">
        <a href="#" class="list-group-item">Item 1.3.1</a>
        <a href="#" class="list-group-item">Item 1.3.2</a>
        <a href="#" class="list-group-item">Item 1.3.3</a>
      </div>
    </div>
    
    <!-- 第一層.第二個.標題 -->
    <a href="#item-2" class="list-group-item" data-toggle="collapse"><i class="glyphicon glyphicon-chevron-right"></i>Item 2</a>
    <!-- 第一層.第二個.內容 -->
    <div class="list-group collapse" id="item-2">

      <a href="#item-2-1" class="list-group-item" data-toggle="collapse"><i class="glyphicon glyphicon-chevron-right"></i>Item 2.1</a>
      <div class="list-group collapse" id="item-2-1">
        <a href="#" class="list-group-item">Item 2.1.1</a>
        <a href="#" class="list-group-item">Item 2.1.2</a>
        <a href="#" class="list-group-item">Item 2.1.3</a>
      </div>
      
      <a href="#item-2-2" class="list-group-item" data-toggle="collapse"><i class="glyphicon glyphicon-chevron-right"></i>Item 2.2</a>
      <div class="list-group collapse" id="item-2-2">
        <a href="#" class="list-group-item">Item 2.2.1</a>
        <a href="#" class="list-group-item">Item 2.2.2</a>
        <a href="#" class="list-group-item">Item 2.2.3</a>
      </div>
      
      <a href="#item-2-3" class="list-group-item" data-toggle="collapse"><i class="glyphicon glyphicon-chevron-right"></i>Item 2.3</a>
      <div class="list-group collapse" id="item-2-3">
        <a href="#" class="list-group-item">Item 2.3.1</a>
        <a href="#" class="list-group-item">Item 2.3.2</a>
        <a href="#" class="list-group-item">Item 2.3.3</a>
      </div>
    </div>
    
    <!-- 第一層.第三個.標題 -->
    <a href="#item-3" class="list-group-item" data-toggle="collapse"><i class="glyphicon glyphicon-chevron-right"></i>Item 3</a>
    <!-- 第一層.第三個.內容 -->
    <div class="list-group collapse" id="item-3">
      
      <a href="#item-3-1" class="list-group-item" data-toggle="collapse"><i class="glyphicon glyphicon-chevron-right"></i>Item 3.1</a>
      <div class="list-group collapse" id="item-3-1">
        <a href="#" class="list-group-item">Item 3.1.1</a>
        <a href="#" class="list-group-item">Item 3.1.2</a>
        <a href="#" class="list-group-item">Item 3.1.3</a>
      </div>
      
      <a href="#item-3-2" class="list-group-item" data-toggle="collapse"><i class="glyphicon glyphicon-chevron-right"></i>Item 3.2</a>
      <div class="list-group collapse" id="item-3-2">
        <a href="#" class="list-group-item">Item 3.2.1</a>
        <a href="#" class="list-group-item">Item 3.2.2</a>
        <a href="#" class="list-group-item">Item 3.2.3</a>
      </div>
      
      <a href="#item-3-3" class="list-group-item" data-toggle="collapse"><i class="glyphicon glyphicon-chevron-right"></i>Item 3.3</a>
      <div class="list-group collapse" id="item-3-3">
        <a href="#" class="list-group-item">Item 3.3.1</a>
        <a href="#" class="list-group-item">Item 3.3.2</a>
        <a href="#" class="list-group-item">Item 3.3.3</a>
      </div>
    </div>
    
  </div>
</div>
@stop