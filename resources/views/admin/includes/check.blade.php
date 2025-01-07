<td>
    @if($Category->showen == 1)
        <span class="badge badge-success">{{'Show'}}</span>
    @else
        <span class="badge badge-danger">{{trans('hide')}}</span>
    @endif
</td>
<td>
    @if($Category->offer == 1)
        <span class="badge badge-success">{{trans('offer')}}</span>
    @else
        <span class="badge badge-danger">{{trans('normal')}}</span>
    @endif
</td>