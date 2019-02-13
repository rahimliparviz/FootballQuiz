<div id="sidebar" class="sidebar">
    <div id="label" class="label">
        <div class="pointer">
            <div class="sidebar-arrow"></div>
            <span @if(config('app.locale') == 'az') style="margin-right: 12px"  @endif>{{ __('custom.leaderboard') }}</span>
        </div>
    </div>

    <div class="sidebar-content">

        <div id="month-name">
            <div id="synch"class="title owl-carousel">

                <h4>{{__('custom.feb')}}</h4>
                <h4>{{__('custom.mar')}}</h4>
                <h4>{{__('custom.apr')}}</h4>
                <h4>{{__('custom.may')}}</h4>
            </div>

            <div class="table-list owl-carousel">

                <table>
                    <thead>
                    <tr>
                        <th style="font-weight: bold" scope="col"> {{   __('custom.rank') }}</th>
                        <th scope="col">{{   __('custom.name') }}</th>
                        <th scope="col">{{   __('custom.minute') }}</th>
                        <th scope="col">{{   __('custom.handle') }}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($feb as $k=>$q)
                        <tr>

                            @if($k != 0)
                                <th scope="row">{{$k+1}}</th>
                            @else
                                <th scope="row"  id="leader"><img src="{{ asset('app/assets/crowns.png') }}"> {{$k+1}}</th>
                            @endif

                            <td style="text-align: left">{{\App\User::find($q->user_id)->name}} <br><span>{{ date("d/m/Y", strtotime( $q->quiz_date))}}</span></td>
                                <td>
                                    @php

                                        $to_time = new \DateTime('2008-12-13 00:10:00');
                                        $from_time = new \DateTime("2008-12-13 00:".substr($q->duration,0,-3));
                                        $diff = $from_time->diff($to_time);

                                        $minute = $diff->format('%i');
                                        $second = $diff->format('%s');

                                        if (strlen($diff->format('%i')) == 1){
                                            $minute = '0'.$diff->format('%i');
                                        }

                                         if (strlen($diff->format('%s')) == 1){
                                            $second = '0'.$diff->format('%s');
                                        }

                                    @endphp

                                    {{$minute .':'. $second}}

                                </td>
                            <td>{{$q->result}}/{{$q->total}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>


                <table>
                    <thead>
                    <tr>
                        <th style="font-weight: bold" scope="col"> {{   __('custom.rank') }}</th>
                        <th scope="col">{{   __('custom.name') }}</th>
                        <th scope="col">{{   __('custom.minute') }}</th>
                        <th scope="col">{{   __('custom.handle') }}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($mar as $k=>$q)
                        <tr>
                            @if($k != 0)
                                <th scope="row">{{$k+1}}</th>
                            @else
                                <th scope="row"  id="leader"><img src="{{ asset('app/assets/crowns.png') }}"> {{$k+1}}</th>
                            @endif
                            <td style="text-align: left">{{\App\User::find($q->user_id)->name}} <br><span>{{ date("d/m/Y", strtotime( $q->quiz_date))}}</span></td>
                            <td>{{ substr($q->duration,0,-3)  }}</td>
                            <td>{{$q->result}}/{{$q->total}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>




                <table>
                    <thead>
                    <tr>
                        <th style="font-weight: bold" scope="col"> {{   __('custom.rank') }}</th>
                        <th scope="col">{{   __('custom.name') }}</th>
                        <th scope="col">{{   __('custom.minute') }}</th>
                        <th scope="col">{{   __('custom.handle') }}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($apr as $k=>$q)
                        <tr>
                            @if($k != 0)
                                <th scope="row">{{$k+1}}</th>
                            @else
                                <th scope="row"  id="leader"><img src="{{ asset('app/assets/crowns.png') }}"> {{$k+1}}</th>
                            @endif
                            <td style="text-align: left">{{\App\User::find($q->user_id)->name}} <br><span>{{ date("d/m/Y", strtotime( $q->quiz_date))}}</span></td>
                                <td>
                                    @php

                                        $to_time = new \DateTime('2008-12-13 00:10:00');
                                        $from_time = new \DateTime("2008-12-13 00:".substr($q->duration,0,-3));
                                        $diff = $from_time->diff($to_time);

                                        $minute = $diff->format('%i');
                                        $second = $diff->format('%s');

                                        if (strlen($diff->format('%i')) == 1){
                                            $minute = '0'.$diff->format('%i');
                                        }

                                         if (strlen($diff->format('%s')) == 1){
                                            $second = '0'.$diff->format('%s');
                                        }

                                    @endphp

                                    {{$minute .':'. $second}}

                                </td>
                            <td>{{$q->result}}/{{$q->total}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>



                <table>
                    <thead>
                    <tr>
                        <th style="font-weight: bold" scope="col"> {{   __('custom.rank') }}</th>
                        <th scope="col">{{   __('custom.name') }}</th>
                        <th scope="col">{{   __('custom.minute') }}</th>
                        <th scope="col">{{   __('custom.handle') }}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($may as $k=>$q)
                        <tr>
                            @if($k != 0)
                                <th scope="row">{{$k+1}}</th>
                            @else
                                <th scope="row"  id="leader"><img src="{{ asset('app/assets/crowns.png') }}"> {{$k+1}}</th>
                            @endif
                            <td style="text-align: left">{{\App\User::find($q->user_id)->name}} <br><span>{{ date("d/m/Y", strtotime( $q->quiz_date))}}</span></td>
                                <td>
                                    @php

                                        $to_time = new \DateTime('2008-12-13 00:10:00');
                                        $from_time = new \DateTime("2008-12-13 00:".substr($q->duration,0,-3));
                                        $diff = $from_time->diff($to_time);

                                        $minute = $diff->format('%i');
                                        $second = $diff->format('%s');

                                        if (strlen($diff->format('%i')) == 1){
                                            $minute = '0'.$diff->format('%i');
                                        }

                                         if (strlen($diff->format('%s')) == 1){
                                            $second = '0'.$diff->format('%s');
                                        }

                                    @endphp

                                    {{$minute .':'. $second}}

                                </td>
                            <td>{{$q->result}}/{{$q->total}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
