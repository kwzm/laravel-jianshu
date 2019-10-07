@if($target_user->id != \Auth::id())
<div>
    @if(\Auth::user()->hasStar($target_user->id))
    <button _token="MESUY3topeHgvFqsy9EcM916UWQq6khiGHM91wHy" class="btn btn-default like-button" like-user="{{$target_user->id}}" like-value="1" type="button">
        取消关注
    </button>
    @else
    <button _token="MESUY3topeHgvFqsy9EcM916UWQq6khiGHM91wHy" class="btn btn-default like-button" like-user="{{$target_user->id}}" like-value="0" type="button">
        关注
    </button>
    @endif
</div>
@endif